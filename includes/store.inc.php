<?php

function getProducts($conn)
{

    $sql = 'SELECT * FROM `products`';
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        return $result;
    } else {
        return false;
    }
}

function update_product_details_admin(
    $conn,
    $productId,
    $productName,
    $description,
    $brand,
    $price,
    $discount,
    $availableCount,
    $photo
) {
    $sql = "UPDATE products SET name = '$productName', description = '$description', shortDescription = '$brand', price = '$price', discount = '$discount', availableCount = '$availableCount', photo = '$photo' WHERE productId = '$productId';";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        return $result;
    } else {
        return false;
    }
}

function add_product(
    $conn,
    $productName,
    $description,
    $brand,
    $price,
    $discount,
    $availableCount,
    $photo
) {
    $sql = "INSERT INTO products (name, description, shortDescription, price, discount, availableCount, photo)
    VALUES ('$productName', '$description','$brand','$price','$discount','$availableCount' , '$photo');";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        return $result;
    } else {
        return false;
    }
}