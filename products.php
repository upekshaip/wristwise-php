<?php
$title = "Products";
include_once './site-parts/header.php';
?>
<?php
require_once './site-parts/getters.php';
if (isset($_SESSION['username'])) {
    include_once "./site-parts/cart-label.php";
}
get_jambo("./resources/img/14.jpg", "You can buy high quality watches", "This is the shop you are looking for...");
?>
<?php
include_once './site-parts/store.php';
include_once './site-parts/footer.php';
?>