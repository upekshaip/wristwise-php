
<?php
$admin_title = "Orders";
if (isset($_GET["page"])) {
    
    if ($_GET["page"] == "orders") {
        $admin_title = "Orders";
    }
    if ($_GET["page"] == "products") {
        $admin_title = "Products";
    }
    if ($_GET["page"] == "users") {
        $admin_title = "Users";
    }
}
?>

<section class="defalt-container-style text-white mt-5 d-flex" style="justify-content: space-between; align-items: center;">
<div><h6 class="m-0">All <?=$admin_title?></h6></div>
<div>
    <a class="btn btn-sm btn-warning" href="./admin.php?page=orders">All Orders</a>
    <a class="btn btn-sm btn-warning mx-2" href="./admin.php?page=products">All Products</a>
    <a class="btn btn-sm btn-warning" href="./admin.php?page=users">All Users</a>
</div>    
</section>