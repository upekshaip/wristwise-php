<?php
function contact_us($conn, $contactName, $contactEmail, $subject, $message)
{
    $date = date('Y-m-d');

    $sql = "INSERT INTO contacts (contactName, contactEmail, subject, message, date) VALUES ('$contactName','$contactEmail','$subject','$message','$date');";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        return $result;
    } else {
        return false;
    }
}

if (isset($_POST["contact_us"])) {
    require_once './db.inc.php';
    contact_us($conn, $_POST["name"], $_POST["email"], $_POST["subject"], $_POST["message"]);
    header("Location:../index.php?msg=messageSent");
}