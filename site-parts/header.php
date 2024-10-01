<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo $title; ?>
    </title>
    <link rel="icon" href="./resources/img/WristWise.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/colors.css">
    <link rel="stylesheet" href="./styles/singup.css">
    <link rel="stylesheet" href="./styles/main.css">
    <link rel="stylesheet" href="./styles/footer.css">
    <link rel="stylesheet" href="./styles/index-parts.css">
</head>

<body>
    <section>
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: var(--color-navbar);">
            <a class="navbar-brand" href="./index.php"
                style="display:flex; justify-content:center; align-items: center;">
                <img src="./resources/img/WristWise.png" width="50" height="50" class="d-inline-block align-top" alt="">
                WristWise
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="./index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./products.php">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./orders.php">Orders</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./contact-us.php">Contact</a>
                    </li>
                </ul>

                <div class="form-inline my-2 my-lg-0">
                    <?php
                    if (isset($_SESSION['username'])) {
                        // echo "Hello, " . $_SESSION['username'] . " - " . $_SESSION['userId'] . " - " . $_SESSION["userEmail"];
                        echo '
                        <a class="btn form-control btn-warning mr-sm-2" href="./profile.php">' . 'My Profile' . '</a>
                        <button type="button" class="btn form-control btn-outline-danger my-2 my-sm-0"
                        onclick="window.location.href=`./includes/logout.inc.php`;">Log Out</button>';

                    } else {
                        echo '<button type="button" class="btn form-control btn-warning mr-sm-2"
                        onclick="window.location.href=`./signup.php`;">Signup</button>
                        <button type="button" class="btn form-control btn-outline-light my-2 my-sm-0"
                        onclick="window.location.href=`./login.php`;">Log In</button>';
                    }

                    ?>
                </div>
            </div>
        </nav>
    </section>