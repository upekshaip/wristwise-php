<?php
session_start();
if (isset($_SESSION["username"]) && isset($_POST["edit_user"])) {
    require_once './functions.inc.php';
    require_once './db.inc.php';
    $result = edit_user($conn, $_POST["firstname"], $_POST["lastname"], $_POST["email"], $_POST["gender"], $_SESSION["username"]);
    if ($result) {
        header("Location: ../profile.php?msg=userUpdated");
        $_SESSION["firstName"] = $_POST["firstname"];
        $_SESSION["lastName"] = $_POST["lastname"];
        $_SESSION["userEmail"] = $_POST["email"];
        $_SESSION["userGender"] = $_POST["gender"];
        exit();
    } else {
        header("Location: ../profile.php?msg=serverError");
        exit();
    }
} else {
    header("Location: ../index.php");
    exit();
}