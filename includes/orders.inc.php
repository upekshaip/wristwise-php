<?php
function get_orders($conn)
{
    $username = $_SESSION["username"];
    $userId = $_SESSION["userId"];

    $sql = "SELECT * FROM `orders` WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        return $result;
    } else {
        return false;
    }
}

function get_all_orders_admin($conn)
{
    $sql = "SELECT * FROM `orders`;";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        return $result;
    } else {
        return false;
    }
}

function update_order($conn, $message, $orderId)
{
    $sql = "UPDATE orders SET status = '$message' WHERE orderId = $orderId;";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        return $result;
    } else {
        return false;
    }
}