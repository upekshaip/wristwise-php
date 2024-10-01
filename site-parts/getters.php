<?php
function get_jambo($url, $topic, $description)
{
    ?>
<section class="defalt-container-style"
    style="position:relative; background: url('<?php echo $url; ?>'); background-position: center; background-repeat: no-repeat; background-size: cover; padding: 0;">
    <div style="width:100%; height:100%; background-color: rgba(0, 0, 0, 0.4);">
        <div class="text-white rounded" style="padding: 100px 50px">
            <h1 style="color:white;">
                <?php echo $topic; ?>
            </h1>
            <p>
                <?php echo $description; ?>
            </p>
        </div>
    </div>
</section>
<?php
}
?>


<?php
function get_latest_products()
{
    require_once './includes/db.inc.php';
    require_once './includes/store.inc.php';
    $results = getProducts($conn);

    if ($results) { ?>
<section class="defalt-container-style text-white">

    <div class="card-hoder row">
        <?php

                $rows = array();
                while ($row = mysqli_fetch_assoc($results)) {
                    $rows[] = $row;
                }

                $reversed = array_reverse($rows);
                $count = 0;

                foreach ($reversed as $row) {
                    if ($count >= 8) {
                        break;
                    }
                    $count++;
                    $price = $row['price'];
                    if ($row['discount'] == 0) {
                        $discount_off_label = '';
                        $price = $row['price'];
                        $dis_label = '<p style="font-size: 15px;" class="mt-0"><s></s></p>';
                        $oldPriceLabel = "";
                    }
                    if ($row['discount'] > 0) {
                        $price = $row['price'] * (100 - $row['discount']) / 100;
                        $discount_off_label = '<span class="ml-2 badge badge-warning">' . $row['discount'] . '% Off</span>';
                        $dis_label = '<p style="font-size: 15px;" class="mt-0"><s> Rs: ' . $row['price'] . ' </s></p>';
                        $oldPriceLabel = $row['price'];
                    }

                    if ($row['availableCount'] > 0) {
                        $availibility_label = '<span class="badge badge-success">Available</span>';
                        $availibility_message = '<span class="badge badge-primary">' . $row['availableCount'] . ' items in stock</span>';
                        $button_cart = "";
                    }
                    if ($row['availableCount'] == 0) {
                        $availibility_label = '<span class="badge badge-warning">Out of stock</span>';
                        $availibility_message = '<span class="badge badge-warning">Out of stock. Contact us to get this product.</span>';
                        $button_cart = "disabled";
                    }

                    ?>
        <form method="POST" action="./cart.php">

            <input type="hidden" name="productId" value="<?php echo $row['productId']; ?>">
            <input type="hidden" name="productName" value="<?php echo $row["name"]; ?>">
            <input type="hidden" name="productDescription" value="<?php echo $row['description'] ?>">
            <input type="hidden" name="productPrice" value="<?php echo $price; ?>">
            <input type="hidden" name="productOldPrice" value="<?php echo $oldPriceLabel; ?>">
            <input type="hidden" name="productDiscount" value="<?php echo $row['discount']; ?>">
            <input type="hidden" name="productPhoto" value="<?php echo $row['photo']; ?>">
            <input type="hidden" name="productAvailable" value="<?php echo $row['availableCount']; ?>">
            <input type="hidden" name="productShortDescription" value="<?php echo $row['shortDescription']; ?>">

            <div class="card card-gap text-white glow" style="width: 18rem; border-radius: 0px;">
                <img style="" class="card-img-top" src="<?php echo $row["photo"]; ?>" alt="Card image">
                <div style="padding: 5px;">
                    <div style="width: 100%; padding: 0;"
                        class="col-md-12 d-flex justify-content-start align-items-center">
                        <?php echo $availibility_label . $discount_off_label; ?>

                    </div>
                    <p class="card-title mt-2">
                        <?php echo $row["name"]; ?>
                    </p>
                    <h4 class="mb-0">Rs:
                        <?php echo $price; ?>
                    </h4>
                    <?php echo $dis_label; ?>
                    <p class="card-text mt-2">
                        <?php echo $row["shortDescription"]
                                    ; ?>
                    </p>
                    <div class="row" style="bottom: 0; position: absolute; bottom: 10px;">

                        <button name="add_to_cart" type="submit"
                            class="btn btn-primary ml-3 ml-sm-3 mr-3 mr-sm-3 btn-sm" <?php echo $button_cart; ?>>Add to
                            cart</button>
                        <a href="#" class="btn btn-secondary btn-sm" data-toggle="modal"
                            data-target="#exampleModal-<?php echo $row["productId"]; ?>">View
                            more</a>

                    </div>
                </div>
            </div>

            <!-- popup -->

            <div class="modal fade" id="exampleModal-<?php echo $row["productId"]; ?>" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content text-white">
                        <div class="modal-header light-container-theme"
                            style="border: 2px solid var(--color-border-default);">
                            <h5 class="modal-title" id="exampleModalLabel">
                                <?php echo $row['name']; ?>
                            </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body text-white light-container-theme">
                            <div class="container-fluid">
                                <div class="row">
                                    <img style="max-height: 250px; max-width: auto; margin-bottom: 10px;"
                                        class="col-md-6" src="<?php echo $row["photo"]; ?>" alt="">
                                    <div class="col-md-6">
                                        <div style="width: 100%; padding: 0;"
                                            class="col-md-12 d-flex justify-content-between align-items-center">

                                            <?php echo $availibility_label . $discount_off_label; ?>

                                        </div>
                                        <div style="width: 100%; padding: 0;"
                                            class="col-md-12 d-flex justify-content-between align-items-center">
                                            <h5 class="mb-0 mt-2">Rs:
                                                <?php echo $price; ?>
                                            </h5>
                                        </div>
                                        <div style="width: 100%; padding: 0;"
                                            class="col-md-12 d-flex justify-content-between align-items-center">
                                            <?php echo $dis_label; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 d-flex justify-content-between align-items-center">
                                        <p style="font-size: 15px;">
                                            <?php echo $row['description']; ?>
                                        </p>
                                    </div>
                                    <div class="col-md-6 ml-auto">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 d-flex justify-content-between align-items-center">
                                        <p style=" font-size: 15px;">
                                            <?php echo $row['shortDescription']; ?>
                                        </p>
                                    </div>
                                    <div class="col-md-6 ml-auto">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <?php echo $availibility_message; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer light-container-theme"
                            style="border: 2px solid var(--color-border-default);">

                            <button name="add_to_cart" type="submit" class="btn btn-primary btn-sm"
                                <?php echo " " . $button_cart; ?>>Add to cart</button>
                            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>

                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- popup -->
        <?php


                } ?>
    </div>
</section>
<?php
    }
}
?>