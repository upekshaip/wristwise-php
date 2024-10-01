<?php
$title = "Home page";
// require("header.php");
include_once './site-parts/header.php';
?>

<?php
// <!-- Alert -->
if (isset($_GET["msg"])) {
  $err;
  if ($_GET["msg"] == "order-successful") {
    $err = "Your order is completed.";
    echo '
        <div style="text-align:center;" class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Thank you!</strong> Your order is completed. <a href="./orders.php">See the orders</a>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        ';
  }
  if ($_GET["msg"] == "messageSent") {
    echo '
        <div style="text-align:center;" class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Thank you!</strong> Your message has been sent to us.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        ';
  }
}
// <!-- Alert -->

if (isset($_SESSION['username'])) {
  include_once "./site-parts/cart-label.php";
}
?>
<section class="defalt-container-style"
  style="position:relative;background: url('./resources/img/1.jpg'); background-position: center; background-repeat: no-repeat; background-size: cover; padding: 0;">
  <div style="width:100%; height:100%; background-color: rgba(0, 0, 0, 0.4);">
    <div class="text-white rounded" style="padding: 100px 50px">
      <h1 style="color:white;">Hello,
        <?php
        if (isset($_SESSION["username"])) {
          echo ($_SESSION["firstName"] . " " . $_SESSION["lastName"]);
        } else {
          echo "Welcome...";
        }
        ?>
      </h1>
      <p>This is the best place to buy hand watches!</p>
      <a href="./products.php" class="btn btn-warning mt-5" style="width: 120px"><b>Products</b></a>
    </div>
  </div>
</section>

<!-- <section class="defalt-container-style text-white mt-5">
  <h1 style="text-align:center;">Recent Products</h1>
</section> -->

<?php
require_once './site-parts/getters.php';
// get_latest_products();
include_once "./site-parts/index-body.php";
?>




<?php
include_once './site-parts/footer-main.php';
?>