<?php
$count = 0;
if (isset($_SESSION["cart"])) {
    foreach ($_SESSION["cart"] as $key => $value) {
        $count = $count + 1;
    }
}
?>

<section class="defalt-container-style text-white d-flex justify-content-end align-items-center">
    <div class="" style="position:absolute; left: calc(5% + 20px)">
        <h6 style="margin:0; text-transform: uppercase;">
            Welcome
        </h6>
    </div>
    <?php
    if ($_SESSION["username"] == "admin") {
        ?>
        <a href="./admin.php" class="btn btn-success">Admin Panel</a>
        <?php
    }
    ?>
    <a href="./orders.php" class="btn btn-warning ml-3">My Orders</a>

    <a href="./cart.php" class="btn btn-primary ml-3">My Cart <span class="badge badge-light">
            <?php echo $count; ?>
        </span>
        <span class="sr-only"></span>
    </a>

</section>