<?php
$title = "Login page";
include_once './site-parts/header.php';
?>
<section class="login-style text-white">
    <h2 style="text-align: center;">Log In</h2>
</section>

<section class="login-section">
    <form style="background-color: var(--color-scale-gray-8);" class="needs-validation text-white login-style"
        method="post" action="./includes/login.inc.php">
        <!-- Alert -->
        <?php
        if (isset($_GET["error"])) {
            $err;
            if ($_GET["error"] == "wrongAuth") {
                $err = "Incorrect username or password. ";
                echo '
                <div style="background-color: rgba(255,0,0,.2); border: 1px solid red;"
                class="alert alert-dismissible fade show alert-color" role="alert">
                <strong>Warning! </strong>' . $err . '
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>';
            }

        }

        ?>
        <!-- Alert -->

        <div class="form-row">
            <div class="col-md-12 mb-3">
                <label for="validationTooltip01">Username / Email</label>
                <input required type="text" name="username" class="defalt-input-style form-control text-white"
                    id="validationTooltip01" placeholder="Username / Email">
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-12 mb-5">
                <label for="validationTooltip03">Password</label>
                <input required type="password" name="password" class="defalt-input-style form-control text-white"
                    id="validationTooltip03" placeholder="Password">
            </div>
        </div>
        <button name="login" class="btn btn-warning col-md-12 btn-sm" type="submit">Log in</button>
    </form>
    <div class="text-white login-style">
        <p style="text-align: center; margin: 0;">Don't have an account? <a href="./signup.php">Sign Up</a>
        </p>
    </div>
</section>

<?php
include_once './site-parts/footer-main.php';
?>