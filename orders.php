<?php
$title = "My Orders";
include_once "./site-parts/header.php";

if (!isset($_SESSION["username"])) {
    include_once "./site-parts/login-message.php";
    include_once "./site-parts/footer-main.php";
    exit();
}


include_once "./site-parts/cart-label.php";
?>

<?php
require_once './site-parts/getters.php';
get_jambo("./resources/img/12.jpg", "See your orders", "You can see all the products that you ordered.");
?>

<section class="defalt-container-style" style="overflow: auto;">
    <table class="table table-hover table-dark">
        <thead>
            <tr style="font-size: 10px">
                <th scope="col">Order ID</th>
                <th scope="col">Product name</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            <?php
            require_once "./includes/orders.inc.php";
            require_once "./includes/db.inc.php";

            $results = get_orders($conn);
            if ($results) {
                while ($row = mysqli_fetch_assoc($results)) {
                    ?>

                    <tr>

                        <th>
                            <span class="badge badge-light">
                                <?php echo $row["orderId"] ?>
                            </span>

                        </th>
                        <td>
                            <span class="badge badge-light">
                                <?php echo $row["productName"] ?>
                            </span>

                        </td>
                        <td>
                            <?php
                            if ($row["status"] == "pending") {

                                echo
                                    '<span class="badge badge-warning">
                                    ' . $row["status"] . '
                                    </span>';
                            } else if ($row["status"] == 1) {
                                echo
                                    '<span class="badge badge-success">
                                         Complete
                                        </span>';

                            } else {
                                echo
                                    '<span class="badge badge-info">
                                        ' . $row["status"] . '
                                        </span>';

                            }
                            ?>

                        </td>
                        <td>
                            <p>
                                <button class="btn btn-primary btn-sm" type="button" data-toggle="collapse"
                                    data-target="#dis<?php echo $row["orderId"] ?>" aria-expanded="false"
                                    aria-controls="dis<?php echo $row["orderId"] ?>">
                                    Details
                                </button>
                            </p>

                        </td>

                    </tr>
                    <tr class="collapse" id="dis<?php echo $row["orderId"] ?>">
                        <td colspan="5">
                            <div class="defalt-container-style"
                                style="margin: 0; width: 100%; display:flex; justify-content:center; align-items:center;">
                                <table style="width: 100%;">
                                    <tbody>

                                        <tr>
                                            <td>Order Id</td>
                                            <td>
                                                <span class="badge badge-light">
                                                    <?php echo $row["orderId"] ?>
                                                </span>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>Order date</td>
                                            <td>
                                                <span class="badge badge-light">
                                                    <?php echo $row["date"] ?>
                                                </span>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>Product Id</td>
                                            <td>
                                                <span class="badge badge-light">
                                                    <?php echo $row["productId"] ?>
                                                </span>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>Product name</td>
                                            <td>
                                                <span class="badge badge-light">
                                                    <?php echo $row["productName"] ?>
                                                </span>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>Quantity</td>
                                            <td>
                                                <span class="badge badge-dark">
                                                    <?php echo $row["quantity"] ?>
                                                </span>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>Item price</td>
                                            <td>
                                                <span class="badge badge-dark">
                                                    <?php echo $row["itemPrice"] ?>
                                                </span>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>Total price</td>
                                            <td>
                                                <span class="badge badge-dark">
                                                    <?php echo ($row["itemPrice"] * $row["quantity"]) ?>
                                                </span>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>Status</td>
                                            <td>
                                                <?php
                                                if ($row["status"] == "pending") {

                                                    echo
                                                        '<span class="badge badge-warning">
                                    ' . $row["status"] . '
                                    </span>';
                                                } else if ($row["status"] == 1) {
                                                    echo
                                                        '<span class="badge badge-success">
                                         Complete
                                        </span>';

                                                } else {
                                                    echo
                                                        '<span class="badge badge-info">
                                        ' . $row["status"] . '
                                        </span>';

                                                }
                                                ?>
                                            </td>

                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </td>
                    </tr>
                    <?php
                }
            }
            ?>
        </tbody>
    </table>
</section>


<?php
include_once "./site-parts/footer-main.php";
?>