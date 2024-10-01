<?php
$title = "Signup page";
// $error_message = "no error"
include_once './site-parts/header.php';
?>
<section class="signup-style text-white">
    <h2 style="text-align: center;">Sign Up</h2>
</section>
<section class="signup-section">
    <form class="needs-validation text-white signup-style" method="post" action="./includes/signup.inc.php">
        <!-- Alert -->
        <?php
        if (isset($_GET["error"])) {
            $err;
            if ($_GET["error"] == "emptyInputs") {
                $err = "Please fill all the fields.";
                echo '
                <div style="background-color: rgba(255,0,0,.2); border: 1px solid red;"
                class="alert alert-dismissible fade show alert-color" role="alert">
                <strong>Warning! </strong>' . $err . '
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>';
            } else if ($_GET["error"] == "passwordsNotMatch") {
                $err = "passwords did not match. Try again.";
                echo '
                <div style="background-color: rgba(255,0,0,.2); border: 1px solid red;"
                class="alert alert-dismissible fade show alert-color" role="alert">
                <strong>Warning! </strong>' . $err . '
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>';
            } else if ($_GET["error"] == "invalidUsername") {
                $err = "Invalid username. change it.";
                echo '
                <div style="background-color: rgba(255,0,0,.2); border: 1px solid red;"
                class="alert alert-dismissible fade show alert-color" role="alert">
                <strong>Warning! </strong>' . $err . '
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>';
            } else if ($_GET["error"] == "invalidEmail") {
                $err = "Invalid email. Change your email.";
                echo '
                <div style="background-color: rgba(255,0,0,.2); border: 1px solid red;"
                class="alert alert-dismissible fade show alert-color" role="alert">
                <strong>Warning! </strong>' . $err . '
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>';
            } else if ($_GET["error"] == "userExists") {
                $err = "User already exists. Change username or email.";
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
            <div class="col-md-6 mb-3">
                <label for="validationTooltip01">First name</label>
                <input name="firstname" type="text" class="defalt-input-style form-control text-white"
                    id="validationTooltip01" placeholder="First name" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="validationTooltip02">Last name</label>
                <input name="lastname" type="text" class="defalt-input-style form-control text-white"
                    id="validationTooltip02" placeholder="Last name" required>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md mb-3">
                <label for="validationTooltipUsername">Username</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text defalt-input-style text-white"
                            id="validationTooltipUsernamePrepend">@</span>
                    </div>
                    <input name="username" type="text" class="defalt-input-style form-control text-white"
                        id="validationTooltipUsername" placeholder="Username"
                        aria-describedby="validationTooltipUsernamePrepend" required>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="validationTooltip03">Email</label>
                <input name="email" type="text" class="defalt-input-style form-control text-white"
                    id="validationTooltip03" placeholder="Email" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="validationTooltip04">Gender</label>
                <select name="gender" class="custom-select defalt-input-style text-white" required>
                    <option value="0" disabled>Select gender</option>
                    <option value="m">Male</option>
                    <option value="f">Female</option>
                    <option value="o">Other</option>
                </select>
            </div>

        </div>
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="validationTooltip01">Password</label>
                <input name="password" type="password" class="defalt-input-style form-control text-white"
                    id="validationTooltip01" placeholder="Password" required>
                <div class="valid-tooltip">
                    Looks good!
                </div>
            </div>
            <div class="col-md-6 mb-5">
                <label for="validationTooltip01">Repeat Password</label>
                <input name="passwordRepeat" type="password" class="defalt-input-style form-control text-white"
                    id="validationTooltip01" placeholder="Password" required>
                <div class="valid-tooltip">
                    Looks good!
                </div>
            </div>
        </div>
        <button name="signup" class="btn btn-warning col-md-12 btn-sm" type="submit">Sign up</button>
    </form>
    <div class="text-white signup-style">
        <p style="text-align: center; margin: 0;">Already have an account? <a href="./login.php">Log in</a></p>
    </div>
</section>

<?php
include_once './site-parts/footer-main.php';
?>