<?php
$title = "Admin Panel";
include_once "./site-parts/header.php";
if ($_SESSION["username"] != "admin") {
    ?>
    <section class="defalt-container-style mt-5 text-white" style="text-align: center;">
        <h2>Sorry! You are not allowed to view this page!</h2>
        <br>
        <a class="btn btn-sm btn-warning" href="./index.php">Go to Home</a>
    </section>
    <?php
    exit();
} else {
    if (isset($_GET["msg"])) {
?>
              <div style="text-align:center; background-color: rgba(0,0,255,.2); border: 1px solid blue;" class="alert alert-info alert-dismissible fade show text-white" role="alert">
              <strong>Info!</strong> <?=$_GET["msg"] ?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
  <?php   }
  include_once "./site-parts/admin-title.php";
  if (isset($_GET["page"])) {
    if ($_GET["page"] == "orders") {
      include_once "./site-parts/admin-orders.php";
    } 
    else if ($_GET["page"] == "products") {
      include_once "./site-parts/admin-products.php";
    } 
    else if ($_GET["page"] == "users") {
      include_once "./site-parts/admin-users.php";
    } 
    else {
      include_once "./site-parts/admin-orders.php";
    }

  } else {
    include_once "./site-parts/admin-orders.php";
  }

}
?>

<?php
include_once "./site-parts/footer.php";
?>