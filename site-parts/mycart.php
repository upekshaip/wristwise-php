<?php
if (isset($_SESSION["cart"]) && isset($_SESSION['username'])) {
    ?>


    <section class="defalt-container-style"
        style="flex-direction:column; display:flex; justify-content:center; aligin-items:center;">
        <?php
        foreach ($_SESSION["cart"] as $key => $value) {
            ?>
            <div
                class="col-md-12 mb-2 card-default text-white pl-2 pb-2 pt-2 pr-2 d-flex justify-content-between align-items-center">
                <img style=" width: 100px; padding:2px; border-radius:6px;" class="card-img-top"
                    src=" <?php echo $value["productPhoto"] ?>" alt="Card image cap">

                <div class="right-content">
                    <h5 class="card-title">
                        <?php echo $value["productName"] ?>
                    </h5>
                    <h5 class="card-text mb-0">
                        Rs:
                        <?php echo $value["productPrice"] ?>
                    </h5>
                    <p style="font-size: 15px;" class="mt-0"><s>
                            <?php echo $value["productOldPrice"] ?>
                        </s></p>
                    <div class="d-flex justify-content-end" style=" bottom: 0; position:absolute; width: 100%;">
                        <div class="button-box-cart d-flex justify-content-end align-items-center">

                            <button id="decrement- <?php echo $value["productId"] ?>"
                                onclick="decrement_<?php echo $value['productId'] ?>();"
                                class="btn btn-primary ml-0 mr-1 btn-sm btn-block">-</button>
                            <span id="result-<?php echo $value["productId"] ?>"
                                class="badge badge-primary pl-2 pr-2 pt-2 pb-2"><?php
                                if (!isset($value["productQuantity"]))
                                    echo 1;
                                else
                                    echo $value["productQuantity"]; ?>
                            </span>
                            <button id="increment- <?php echo $value["productId"] ?>"
                                onclick="increment_<?php echo $value['productId'] ?>();"
                                class="btn btn-primary ml-1 mr-3 btn-sm btn-block">+</button>


                            <form class="d-flex justify-content-between" method="POST" action="./cart.php">
                                <input type="hidden" name="productId" value="<?php echo $value["productId"] ?>">
                                <input id="quantity-<?php echo $value["productId"] ?>" type="hidden" name="productQuantity"
                                    value="1">
                                <input id="productCount-<?php echo $value["productId"] ?>" type="hidden" name="productCount"
                                    value="<?php echo ($value["productAvailable"] - 1) ?>">
                                <!-- SET BUTTON -->
                                <button name="set_product" type="submit" value="<?php echo $value["productId"] ?>"
                                    class="btn btn-success mb-1 mt-1 ml-1 ml-sm-1 btn-sm btn-block"><?php
                                    if (!isset($value["productQuantity"]) || $value["productQuantity"] == 1)
                                        echo "set";
                                    else
                                        echo "reset"; ?></button>
                                <!-- REMOVE BUTTON -->
                                <button name="remove_product" type="submit" value="remove"
                                    class="btn btn-danger mb-1 mt-1 ml-1 ml-sm-1 btn-sm btn-block">Remove</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <script>
                function increment_<?php echo $value["productId"] ?>() {
                    const quantity = document.getElementById('quantity-<?php echo $value["productId"] ?>');
                    const productCount = document.getElementById('productCount-<?php echo $value["productId"] ?>');
                    const result = document.getElementById('result-<?php echo $value["productId"] ?>');

                    if (0 < parseInt(productCount.value)) {
                        productCount.value = parseInt(productCount.value) - 1;
                        quantity.value = parseInt(quantity.value) + 1;
                        result.innerHTML = quantity.value;

                    }
                    else {
                        alert(`No more items in the shop ! max number is: ${quantity.value}`);
                    }

                }
                function decrement_<?php echo $value["productId"] ?>() {
                    const quantity = document.getElementById('quantity-<?php echo $value["productId"] ?>');
                    const productCount = document.getElementById('productCount-<?php echo $value["productId"] ?>');
                    const result = document.getElementById('result-<?php echo $value["productId"] ?>');

                    if (parseInt(quantity.value) > 1) {

                        productCount.value = parseInt(productCount.value) + 1;
                        quantity.value = parseInt(quantity.value) - 1;
                        result.innerHTML = quantity.value;
                    }


                }

            </script>
        <?php } ?>
    </section>
    <section class="mt-3 defalt-container-style p-0" style="overflow: auto;">
        <table class="table table-hover table-dark" style="border-radius: 6px;">
            <thead>
                <tr class="bg-warning">
                    <th scope="col">
                        <p style="margin:0; color:black;">#</p>
                    </th>
                    <th scope="col">
                        <p style="margin:0; color:black;">Product</p>
                    </th>
                    <th scope="col">
                        <p style="margin:0; color:black;">Price</p>
                    </th>
                    <th scope="col">
                        <p style="margin:0; color:black;">Quantity</p>
                    </th>
                    <th scope="col">
                        <p style="margin:0; color:black;">Total</p>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php
                $count = 1;
                $total_price = 0;
                foreach ($_SESSION["cart"] as $key => $value) {
                    ?>

                    <tr>
                        <th scope="row">
                            <p>
                                <?php echo $count; ?>
                            </p>
                        </th>
                        <td>
                            <p>
                                <?php echo $value["productName"]; ?>
                            </p>
                        </td>
                        <td class="d-flex justify-content-end">
                            <p>
                                <?php echo $value["productPrice"]; ?>
                            </p>
                        </td>
                        <td>
                            <p>
                                <?php echo $value["productQuantity"]; ?>
                            </p>
                        </td>
                        <td class="d-flex justify-content-end">
                            <?php echo ($value["productPrice"] * $value["productQuantity"]); ?>
                        </td>
                    </tr>
                    <?php
                    $count++;
                    $total_price += ($value["productPrice"] * $value["productQuantity"]);
                } ?>
                <tr>
                    <th scope="row">
                        Total
                    </th>
                    <td>

                    </td>
                    <td>

                    </td>
                    <td>

                    </td>
                    <td class="d-flex justify-content-end">
                        <?php echo $total_price; ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row">

                    </th>
                    <td>

                    </td>
                    <td>

                    </td>
                    <td>

                    </td>
                    <td style="100%" class="d-flex justify-content-end">
                        <form action="./includes/payment.inc.php" method="POST">
                            <button name="cancel_pay" type="button"
                                class="btn btn-danger float-right mb-1 mt-1 ml-2 ml-sm-1 btn-sm">Cancel</button>
                            <button type="submit" name="pay"
                                class="btn btn-primary float-right mb-1 mt-1 ml-1 ml-sm-1 btn-sm">Pay</button>
                        </form>
                    </td>
                </tr>


            </tbody>
        </table>
    </section>
    
<?php } ?>