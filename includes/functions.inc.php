<?php

// Signup Section
function checkEmptyFields(
    $firstName,
    $lastName,
    $username,
    $email,
    $gender,
    $password,
    $passwordRepeat
) {
    return !(empty($firstName) || empty($lastName) || empty($username) || empty($email) || empty($gender) || empty($password) || empty($passwordRepeat));
}
function checkUsername($username)
{
    if (preg_match("/^[a-zA-Z0-9_]*$/", $username)) {
        return true;
    } else {
        return false;
    }
}
function checkEmail($email)
{
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}
function checkPasswords($password, $passwordRepeat)
{
    if ($password === $passwordRepeat) {
        return true;
    } else {
        return false;
    }

}
function checkUserExists($conn, $username, $email)
{
    $sql = "SELECT * FROM users WHERE username = ? OR userEmail = ?;";
    $statement = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($statement, $sql)) {
        header("Location: ../signup.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($statement, "ss", $username, $email);
    mysqli_stmt_execute($statement);
    $resultData = mysqli_stmt_get_result($statement);

    if ($row = mysqli_fetch_assoc($resultData)) {
        mysqli_stmt_close($statement);
        return $row;
    } else {
        mysqli_stmt_close($statement);
        return false;
    }

}
function createUser(
    $conn,
    $firstName,
    $lastName,
    $username,
    $email,
    $gender,
    $password
) {
    $sql = "INSERT INTO users (firstName, lastName, userEmail, username, userPassword, userGender) VALUES (?,?,?,?,?,?);";
    $statement = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($statement, $sql)) {
        header("Location: ../signup.php?error=stmtfailed");
        exit();
    }
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($statement, "ssssss", $firstName, $lastName, $email, $username, $hashedPassword, $gender);
    mysqli_stmt_execute($statement);
    mysqli_stmt_close($statement);
    header("Location: ../login.php");
    exit();
}

// Login section
function checkFieldsLogin($username, $password)
{
    return !(empty($username) || empty($password));
}

function loginUser($conn, $username, $password)
{
    $userExists = checkUserExists($conn, $username, $username);
    if ($userExists === false) {
        header("Location: ../login.php?error=wrongAuth");
        exit();
    }
    $passwordHashed = $userExists["userPassword"];
    $checkPassword = password_verify($password, $passwordHashed);
    if ($checkPassword === false) {
        header("Location: ../login.php?error=wrongAuth");
        exit();
    } else if ($checkPassword === true) {
        session_start();
        $_SESSION["userId"] = $userExists["userId"];
        $_SESSION["username"] = $userExists["username"];
        $_SESSION["userEmail"] = $userExists["userEmail"];
        $_SESSION["lastName"] = $userExists["lastName"];
        $_SESSION["firstName"] = $userExists["firstName"];
        $_SESSION["userGender"] = $userExists["userGender"];
        header("Location: ../index.php");
        exit();
    }
}

function edit_user($conn, $firstName, $lastName, $userEmail, $userGender, $username)
{
    $sql = "UPDATE users SET firstName = '$firstName', lastName = '$lastName', userEmail = '$userEmail', userGender = '$userGender' WHERE username = '$username';";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        return $result;
    } else {
        return false;
    }

}