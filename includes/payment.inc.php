<?php
session_start();
if (isset($_POST["cancel_pay"])) {
    unset($_SESSION["cart"]);
    header("Location: ../cart.php");
    exit();
}
function create_order($conn, $productId, $quantity, $itemPrice, $productName)
{
    $status = "pending";
    $userId = $_SESSION["userId"];
    $username = $_SESSION["username"];
    $date = date('Y-m-d');

    $sql = "INSERT INTO orders (date, username, userId, productId, quantity, itemPrice, status, productName)
    VALUES ('$date', '$username','$userId','$productId','$quantity','$itemPrice' , '$status', '$productName');";
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        header("Location: ../index.php?err=Server error. Contact the developers");
    }
}
function update_products($conn, $productId, $newCount)
{
    $sql = "UPDATE products
        SET availableCount = ?
        WHERE productId = ?";

    $statement = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($statement, $sql)) {
        header("Location: ../index.php?msg=Server error. Contact the developers");
        exit();
    }

    mysqli_stmt_bind_param($statement, "ii", $newCount, $productId);
    mysqli_stmt_execute($statement);
    mysqli_stmt_close($statement);
}


if (isset($_POST["pay"]) && isset($_SESSION["username"]) && $_SESSION["cart"]) {

    include_once "./db.inc.php";
    foreach ($_SESSION["cart"] as $key => $value) {
        if ($value["productAvailable"] > 0) {

            $productId = $value["productId"];
            $quantity = $value["productQuantity"];
            $itemPrice = $value["productPrice"];
            $productName = $value["productName"];
            $newCount = $value["productAvailable"] - $quantity;

            create_order($conn, $productId, $quantity, $itemPrice, $productName);
            update_products($conn, $productId, $newCount);
        }

    }
    header("Location: ../index.php?msg=order-successful");
    unset($_SESSION["cart"]);
    exit();



} else {
    header("Location: ../index.php");
}