<?php
$title = "Cart page";
include_once "./site-parts/header.php";
if (!isset($_SESSION["username"])) {
    include_once "./site-parts/login-message.php";
    include_once "./site-parts/footer-main.php";

    exit();
}

if (isset($_POST["add_to_cart"])) {

    // If user already added a product to the cart
    if (isset($_SESSION["cart"])) {

        $products_array_ids = array_column($_SESSION["cart"], "productId");
        if (!in_array($_POST["productId"], $products_array_ids)) {
            $product_array = array(

                "productId" => $_POST["productId"],
                "productName" => $_POST["productName"],
                "productDescription" => $_POST["productDescription"],
                "productPrice" => $_POST["productPrice"],
                "productDiscount" => $_POST["productDiscount"],
                "productPhoto" => $_POST["productPhoto"],
                "productAvailable" => $_POST["productAvailable"],
                "productShortDescription" => $_POST["productShortDescription"],
                "productOldPrice" => $_POST["productOldPrice"],
                "productQuantity" => 1
            );
            $_SESSION["cart"][$_POST["productId"]] = $product_array;
            // echo '<script>alert("Product added !")</script>';

        } else {
            echo '<script>alert("Product is already added !")</script>';

        }
        // If this is the 1st time
    } else {

        $product_array = array(

            "productId" => $_POST["productId"],
            "productName" => $_POST["productName"],
            "productDescription" => $_POST["productDescription"],
            "productPrice" => $_POST["productPrice"],
            "productDiscount" => $_POST["productDiscount"],
            "productPhoto" => $_POST["productPhoto"],
            "productAvailable" => $_POST["productAvailable"],
            "productShortDescription" => $_POST["productShortDescription"],
            "productOldPrice" => $_POST["productOldPrice"],
            "productQuantity" => 1
        );
        $_SESSION["cart"][$_POST["productId"]] = $product_array;


    }
    // header("Location: ./products.php");


} else if (isset($_POST["remove_product"])) {

    $product_id = $_POST["productId"];
    unset($_SESSION["cart"][$product_id]);


} else if (isset($_POST["set_product"])) {
    $product_id = $_POST["productId"];
    $product_quantity = $_POST["productQuantity"];

    $product_array = $_SESSION["cart"][$product_id];
    $product_array["productQuantity"] = $product_quantity;

    $_SESSION["cart"][$product_id] = $product_array;








} else if (isset($_POST["show_cart"])) {
}

// header("Location: ./index.php");
// else {
//     header("Location: ./login.php");
// }
?>

<?php

include_once "./site-parts/cart-label.php";
include_once "./site-parts/mycart.php";

?>
<?php
include_once './site-parts/footer-main.php';
?>