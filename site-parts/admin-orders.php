<!-- Orders Section -->
<section class="defalt-container-style text-white" style="overflow: auto; padding: 0;">
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

            $results = get_all_orders_admin($conn);
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
                                            <td>User</td>
                                            <td>
                                                <span class="badge badge-warning mr-1">
                                                    <?php echo $row["userId"] ?>
                                                </span>
                                                <span class="badge badge-light">
                                                    <?php echo $row["username"] ?>
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
                                        <tr>
                                            <td colspan="2">
                                                <form action="./includes/admin-panel.inc.php" method="post">
                                                    <select required class="custom-select defalt-input-style text-white mb-1"
                                                        name="status" id="status_<?php echo $row['orderId'] ?>"
                                                        onchange="handleStatusChange_<?php echo $row['orderId'] ?>()">
                                                        <option value="1">Complete</option>
                                                        <option value="pending">Pending</option>
                                                        <option value="custom">Custom</option>
                                                    </select>
                                                    <input type="text" name="orderId" value="<?php echo $row['orderId'] ?>"
                                                        hidden>
                                                    <input class="defalt-input-style form-control text-white mb-1"
                                                        name="message" type="text"
                                                        id="status-input_<?php echo $row['orderId'] ?>" disabled>
                                                    <button type="submit" name="submit-status"
                                                        class="btn btn-sm bg-warning col-md-12 mt-2">
                                                        Update
                                                    </button>
                                                </form>
                                                <script>
                                                    function handleStatusChange_<?php echo $row['orderId'] ?>() {
                                                        const statusSelect = document.getElementById('status_<?php echo $row['orderId'] ?>');
                                                        const inputField = document.getElementById('status-input_<?php echo $row['orderId'] ?>');

                                                        if (statusSelect.value === 'custom') {
                                                            inputField.removeAttribute('disabled');
                                                            submitButton.removeAttribute('disabled');
                                                        } else {
                                                            inputField.setAttribute('disabled', '');
                                                            submitButton.setAttribute('disabled', '');
                                                        }
                                                    }
                                                </script>
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
