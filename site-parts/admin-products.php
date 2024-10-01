



<section class="defalt-container-style text-white"
    style="padding:0; position:relative; background: url('./resources/img/6.jpg'); background-position: center; background-repeat: no-repeat; background-size: cover;">
    <div
        style="width:100%; height:80px; background-color: rgba(0, 0, 0, 0.8); display: flex; justify-content: space-between; align-items:center;">
        <h4 style="margin:0; margin-left: 20px;">
            Add new product
        </h4>
    </div>
</section>
<section class="defalt-container-style text-white" style="padding: 0;">
    <table style="width: 100%;" class="table table-hover table-dark">
        <form method="post" action="./includes/admin-panel.inc.php">
            <tbody>
                <tr>
                    <td>Product name</td>
                    <td>
                        <input required name="productName" class="defalt-input-style form-control text-white mb-1"
                            type="text">
                    </td>

                </tr>
                <tr>
                    <td>Description</td>
                    <td>
                        <input required name="description" class="defalt-input-style form-control text-white mb-1"
                            type="text">
                    </td>

                </tr>
                <tr>
                    <td>Brand</td>
                    <td style="display: flex; justify-content:center; align-items: center;">
                        <select required class="custom-select defalt-input-style text-white" name="brand">
                            <!-- <option hidden selected>Please Select item</option> -->
                            <option value="Citizen">Citizen</option>
                            <option value="Rolex">Rolex</option>
                            <option value="Seiko">Seiko</option>
                            <option value="Casio">Casio</option>
                            <option value="Fossil">Fossil</option>
                            <option value="Swatch">Swatch</option>
                            <option value="Omega">Omega</option>
                        </select>
                    </td>

                </tr>
                <tr>
                    <td>Product price</td>
                    <td>
                        <input required name="price" class="defalt-input-style form-control text-white mb-1"
                            type="text">
                    </td>

                </tr>
                <tr>
                    <td>Discount</td>
                    <td>
                        <input required name="discount" class="defalt-input-style form-control text-white mb-1"
                            type="text">
                    </td>

                </tr>
                <tr>
                    <td>Available items</td>
                    <td>
                        <input required name="availableCount" class="defalt-input-style form-control text-white mb-1"
                            type="text">
                    </td>

                </tr>
                <tr colspan="2">
                    <td>Photo</td>
                    <td>
                        <input required name="photo" class="defalt-input-style form-control text-white mb-1"
                            type="text">
                    </td>

                </tr>
                <tr>
                    <td colspan="2">
                        <button type="submit" name="add-product" class="btn btn-sm bg-warning col-md-12 mt-2">
                            Add Product
                        </button>

                    </td>
                </tr>
            </tbody>
        </form>
    </table>
</section>











<!-- Products Section -->
<section class="defalt-container-style text-white mt-5"
    style="padding:0; position:relative; background: url('./resources/img/6.jpg'); background-position: center; background-repeat: no-repeat; background-size: cover;">
    <div
        style="width:100%; height:80px; background-color: rgba(0, 0, 0, 0.8); display: flex; justify-content: space-between; align-items:center;">
        <h4 style="margin:0; margin-left: 20px;">
            All Products
        </h4>
    </div>
</section>

<section class="defalt-container-style text-white" style="overflow: auto; padding: 0;">
    <table class="table table-hover table-dark">
        <thead>
            <tr style="font-size: 10px">
                <th scope="col">Product ID</th>
                <th scope="col">Product name</th>
                <th scope="col">Brand</th>
            </tr>
        </thead>
        <tbody>
            <?php
            require_once "./includes/store.inc.php";
            require_once "./includes/db.inc.php";

            $results = getProducts($conn);
            if ($results) {
                while ($row = mysqli_fetch_assoc($results)) {
                    ?>

                    <tr>

                        <th>
                            <span class="badge badge-light">
                                <?php echo $row["productId"] ?>
                            </span>

                        </th>
                        <td>
                            <span class="badge badge-light">
                                <?php echo $row["name"] ?>
                            </span>

                        </td>
                        <td>
                            <span class="badge badge-warning">
                                <?php echo $row["shortDescription"] ?>
                            </span>
                        </td>
                        <td>
                            <p>
                                <button class="btn btn-primary btn-sm" type="button" data-toggle="collapse"
                                    data-target="#dis<?php echo $row["productId"] ?>" aria-expanded="false"
                                    aria-controls="dis<?php echo $row["productId"] ?>">
                                    Details
                                </button>
                            </p>

                        </td>

                    </tr>
                    <tr class="collapse" id="dis<?php echo $row["productId"] ?>">
                        <td colspan="5">
                            <div class="defalt-container-style"
                                style="margin: 0; width: 100%; display:flex; justify-content:center; align-items:center;">
                                <table style="width: 100%;">
                                    <form method="post" action="./includes/admin-panel.inc.php">
                                        <tbody>

                                            <tr>
                                                <td>Product Id</td>
                                                <td>
                                                    <input type="text" hidden name="productId"
                                                        value="<?php echo $row["productId"] ?>">
                                                    <span class="badge badge-light">
                                                        <?php echo $row["productId"] ?>
                                                    </span>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>Product name</td>
                                                <td>
                                                    <input required name="productName"
                                                        class="defalt-input-style form-control text-white mb-1" type="text"
                                                        value="<?php echo $row["name"] ?>">
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>Description</td>
                                                <td>
                                                    <input required name="description"
                                                        class="defalt-input-style form-control text-white mb-1" type="text"
                                                        value="<?php echo $row["description"] ?>">
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>Brand</td>
                                                <td style="display: flex; justify-content:center; align-items: center;">
                                                    <span class="badge badge-warning">
                                                        <?php echo $row["shortDescription"] ?>
                                                    </span>
                                                    <select required class="custom-select defalt-input-style text-white ml-2"
                                                        name="brand">
                                                        <option hidden selected value="<?php echo $row['shortDescription'] ?>">
                                                            <?php echo $row['shortDescription'] ?></option>
                                                        <option value="Citizen">Citizen</option>
                                                        <option value="Rolex">Rolex</option>
                                                        <option value="Seiko">Seiko</option>
                                                        <option value="Casio">Casio</option>
                                                        <option value="Fossil">Fossil</option>
                                                        <option value="Swatch">Swatch</option>
                                                        <option value="Omega">Omega</option>
                                                    </select>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>Product price</td>
                                                <td>
                                                    <input required name="price"
                                                        class="defalt-input-style form-control text-white mb-1" type="text"
                                                        value="<?php echo $row["price"] ?>">
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>Discount</td>
                                                <td>
                                                    <input required name="discount"
                                                        class="defalt-input-style form-control text-white mb-1" type="text"
                                                        value="<?php echo $row["discount"] ?>">
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>Available items</td>
                                                <td>
                                                    <input required name="availableCount"
                                                        class="defalt-input-style form-control text-white mb-1" type="text"
                                                        value="<?php echo $row["availableCount"] ?>">
                                                </td>

                                            </tr>
                                            <tr colspan="2">
                                                <td>Photo</td>
                                                <td>
                                                    <input required name="photo"
                                                        class="defalt-input-style form-control text-white mb-1" type="text"
                                                        value="<?php echo $row["photo"] ?>">
                                                </td>

                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <button type="submit" name="submit-product-edit"
                                                        class="btn btn-sm bg-warning col-md-12 mt-2">
                                                        Update
                                                    </button>

                                                </td>
                                            </tr>

                                        </tbody>
                                    </form>
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

