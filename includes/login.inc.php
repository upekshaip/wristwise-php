<?php
if (isset($_POST['login'])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    require_once "./db.inc.php";
    require_once "./functions.inc.php";

    $is_all_filled_login = checkFieldsLogin($username, $password);

    $url = "../login.php?error=";

    if (!$is_all_filled_login) {
        header("Location: $url" . "emptyInputs");
        exit();
    }
    loginUser($conn, $username, $password);


} else {
    header('Location: ../login.php');
}
?>