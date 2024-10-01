<?php
session_start();
if (isset($_SESSION["username"]) && $_SESSION["username"] == "admin") {
    require_once "./db.inc.php";

    if (isset($_POST["submit-status"])) {
        $orderId = $_POST["orderId"];
        if ($_POST["status"] == "custom") {
            $message = $_POST["message"];
        } else {
            $message = $_POST["status"];
        }
        require_once "./orders.inc.php";
        update_order($conn, $message, $orderId);
        header('Location: ../admin.php?page=orders&msg=orderUpdated');
        exit();

    }

    if (isset($_POST["submit-product-edit"])) {
        require_once "./store.inc.php";
        update_product_details_admin(
            $conn, $_POST["productId"],
            $_POST["productName"],
            $_POST["description"],
            $_POST["brand"],
            $_POST["price"], $_POST["discount"],
            $_POST["availableCount"],
            $_POST["photo"]
        );
        header('Location: ../admin.php?page=products&msg=productUpdated');
        exit();
    }

    if (isset($_POST["add-product"])) {
        require_once "./store.inc.php";
        add_product(
            $conn, $_POST["productName"],
            $_POST["description"],
            $_POST["brand"],
            $_POST["price"], $_POST["discount"],
            $_POST["availableCount"],
            $_POST["photo"]
        );
        header('Location: ../admin.php?page=products&msg=productAdded');
        exit();
    }

} else {
    header('Location: ../index.php');
    exit();
}
?>