<section class="defalt-container-style text-white mt-5" style="text-align:center;">
    <h1>Products</h1>
</section>

<?php
require_once './includes/db.inc.php';
require_once './includes/store.inc.php';
$results = getProducts($conn);
$casio = array();
$rolex = array();
$seiko = array();
$citizen = array();
$fossil = array();
$swatch = array();
$omega = array();
while ($row = mysqli_fetch_assoc($results)) {
    if ($row["shortDescription"] == "Casio")
        $casio[] = $row;
    if ($row["shortDescription"] == "Rolex")
        $rolex[] = $row;
    if ($row["shortDescription"] == "Seiko")
        $seiko[] = $row;
    if ($row["shortDescription"] == "Citizen")
        $citizen[] = $row;
    if ($row["shortDescription"] == "Fossil")
        $fossil[] = $row;
    if ($row["shortDescription"] == "Swatch")
        $swatch[] = $row;
    if ($row["shortDescription"] == "Omega")
        $omega[] = $row;
}

// foreach ($reversedRows as $row) {
// }
?>

<?php
function get_product($results, $watch, $name)
{
    if ($results && (count($watch) > 0)) { ?>
        <section class="defalt-container-style text-white"
            style="padding:0; position:relative; background: url('./resources/img/6.jpg'); background-position: center; background-repeat: no-repeat; background-size: cover;">
            <div
                style="width:100%; height:80px; background-color: rgba(0, 0, 0, 0.8); display: flex; justify-content:center; align-items:center; text-align: center;">
                <h2 class="" style="margin:0; margin-left: 20px; text-align: center; text-transform:uppercase;">
                    - <?= $name ?> -
                </h2>
            </div>
        </section>
        <section class="defalt-container-style container-xl text-white row row-cols-1 row-cols-md-2 row-cols-lg-3 px-2 py-0 pb-4" style="gap: 10px; justify-content: center">
          
                <?php
                $reversed = array_reverse($watch);
                foreach ($reversed as $row) {
                    $price = $row['price'];

                    if ($row['discount'] == 0) {
                        $discount_off_label = '';
                        $price = $row['price'];
                        $dis_label = '<p style="font-size: 15px;" class="mt-0"><s></s></p>';
                        $oldPriceLabel = "";
                    }
                    if ($row['discount'] > 0) {
                        $price = $row['price'] * (100 - $row['discount']) / 100;
                        $discount_off_label = '<span style="color: var(--color-scale-green-2);">' . $row['discount'] . '% Off</span>';
                        $dis_label = '<p style="font-size: 15px;" class="mt-0"><s>' . $row['price'] . ' LKR' . ' </s></p>';
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

                        <input type="hidden" name="productId" value="<?= $row['productId']; ?>">
                        <input type="hidden" name="productName" value="<?= $row["name"]; ?>">
                        <input type="hidden" name="productDescription" value="<?= $row['description'] ?>">
                        <input type="hidden" name="productPrice" value="<?= $price; ?>">
                        <input type="hidden" name="productOldPrice" value="<?= $oldPriceLabel; ?>">
                        <input type="hidden" name="productDiscount" value="<?= $row['discount']; ?>">
                        <input type="hidden" name="productPhoto" value="<?= $row['photo']; ?>">
                        <input type="hidden" name="productAvailable" value="<?= $row['availableCount']; ?>">
                        <input type="hidden" name="productShortDescription" value="<?= $row['shortDescription']; ?>">

                        <div class="card card-gap text-white col" style="width: 26rem; position: relative; padding:0; margin: 12px; overflow: hidden;">
                                <img style="" class="card-img-top" src="<?= $row["photo"]; ?>" alt="Card image">
                                <div class="" style="position: absolute; width: 100%; bottom: 0; padding: 5px 8px; background-image: linear-gradient(rgba(0,0,0,0),var(--color-scale-gray-8) ,var(--color-scale-gray-8), var(--color-scale-gray-8));">
                                    <div class="" style="padding: 5px;">
                                        <h5 class="card-title mt-2">
                                            <?= $row["name"]; ?>
                                        </h5>
                                        <h4 class="mb-0"><?= $price; ?> LKR</h4>
                                        <?= $dis_label; ?>
                                        <?= $discount_off_label ?>
                                        <p>
                                            Availability: <?= $availibility_label ?>
                                        </p>
                                    </div>
                                    
                                    
                                    <div class="!row mt-2" style="display: flex; flex-direction: column;">
                                        
                                        <button name="add_to_cart" type=""
                                        class="btn btn-warning btn" <?= $button_cart; ?>>Add to
                                        cart</button>
                                        <a href="#" class="btn btn-outline-light btn my-2" data-toggle="modal"
                                        data-target="#exampleModal-<?= $row["productId"]; ?>">View
                                        more</a>
                                        
                                    </div>
                                </div>
                        </div>
                       

                        <!-- popup -->

                        <div class="modal fade" id="exampleModal-<?= $row["productId"]; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg d-flex align-items-center justify-content-center" style="max-width: none;" role="document">
                                <div class="modal-content text-white modle-size-q" style="background-color: var(--color-scale-gray-8); width: 80%;">
                                    <div class="text-white card-content-q">
                                        <div class="image-holder">
                                            <img style="height: 68vh;" src="<?= $row["photo"]; ?>" alt="">
                                        </div>    
                                        <div class="model-contents">
                                            <h5 class="m-0"><?= $row['name']; ?></h5>
                                            <p><?= $row['description']; ?></p>
                                            <div>

                                                <span class="badge badge-primary" style="text-transform: uppercase;"> <?= $row['shortDescription'] ?></span>
                                                <h4 class="m-0"><?= $price ?> LKR</h4>
                                                <?=$dis_label ?>
                                                <?=$discount_off_label ?>
                                                <p>Availability: <?=$availibility_label?> <?= $availibility_message ?></p>
                                            </div>

                                            <div class="" style="display: flex; justify-content: flex-end; width: 100%">
                                                <button name="add_to_cart" type="submit" class="btn btn-warning mx-2" <?= " " . $button_cart; ?>>Add to cart</button>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>
                    <!-- popup -->
                    <?php


                } ?>
           
        </section>
        <?php
    }
}
?>


<?php
get_product($results, $citizen, "Citizen");
get_product($results, $rolex, "Rolex");
get_product($results, $seiko, "Seiko");
get_product($results, $casio, "Casio");
get_product($results, $fossil, "Fossil");
get_product($results, $swatch, "Swatch");
get_product($results, $omega, "Omega");
?>