<?php
if (isset($_POST['signup'])) {
    $firstName = $_POST["firstname"];
    $lastName = $_POST["lastname"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];
    $password = $_POST["password"];
    $passwordRepeat = $_POST["passwordRepeat"];


    require_once "./db.inc.php";
    require_once "./functions.inc.php";

    $is_all_filled = checkEmptyFields(
        $firstName,
        $lastName,
        $username,
        $email,
        $gender,
        $password,
        $passwordRepeat
    );
    $is_valid_username = checkUsername($username);
    $is_valid_email = checkEmail($email);
    $is_password_match = checkPasswords($password, $passwordRepeat);
    $is_user_exists = checkUserExists($conn, $username, $email);

    $url = "../signup.php?error=";
    if (!$is_all_filled) {
        header("Location: $url" . "emptyInputs");
        exit();
    }
    if (!$is_password_match) {
        header("Location: $url" . "passwordsNotMatch");
        exit();
    }
    if (!$is_valid_username) {
        header("Location: $url" . "invalidUsername");
        exit();
    }
    if (!$is_valid_email) {
        header("Location: $url" . "invalidEmail");
        exit();
    }
    if ($is_user_exists) {
        header("Location: $url" . "userExists");
        exit();
    }


    createUser(
        $conn,
        $firstName,
        $lastName,
        $username,
        $email,
        $gender,
        $password
    );

} else {
    header('Location: ../signup.php');
    exit();
}