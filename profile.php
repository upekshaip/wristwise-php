<?php
$title = "Profile page";
include_once "./site-parts/header.php";
if (isset($_SESSION["username"])) {
} else {
    include_once "./site-parts/login-message.php";
    include_once "./site-parts/footer-main.php";
    exit();
}
?>
<!-- Alerts -->
<?php
if (isset($_GET["msg"])) {
    $msg;
    $link;
    if ($_GET["msg"] == "userUpdated") {
        $msg = "User Updated successfully ";
        $link = "./social.php";
    } ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert" style="text-align: center;">
        <strong>
            <?php echo $_SESSION["username"]; ?> User Updated!
        </strong> Your details has been updated.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <?php
}
?>
<!-- Alerts -->
<?php
include_once "./site-parts/cart-label.php";
?>


<?php
require_once './site-parts/getters.php';
get_jambo("./resources/img/7.jpg", "Change your details", "You can change your user details in here.");
?>

<section class="defalt-container-style mt-5">
    <h3 style="text-align:center;" class="text-white mb-0">Your Details</h3>
</section>
<section>
    <form method="post" action="./includes/edit-user.inc.php" class="needs-validation text-white light-container-style">
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="validationTooltip01">First name</label>

                <input value="<?php echo $_SESSION["firstName"]; ?>" name="firstname" type="text"
                    class="defalt-input-style form-control text-white disabled" id="validationTooltip01"
                    placeholder="First name">

            </div>
            <div class="col-md-6 mb-3">
                <label for="validationTooltip02">Last name</label>
                <input value="<?php echo $_SESSION["lastName"]; ?>" name="lastname" type="text"
                    class="defalt-input-style form-control text-white" id="validationTooltip02" placeholder="Last name">
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


                    <input disabled value="<?php echo $_SESSION["username"]; ?>" name="username" type="text"
                        class="defalt-input-style form-control text-white" id="validationTooltipUsername"
                        placeholder="Username" aria-describedby="validationTooltipUsernamePrepend" required style=" border: 2px solid var(--color-border-default);
        background-color: var(--color-background-defalt);">


                </div>
            </div>
        </div>
        <div class=" form-row">
            <div class="col-md-6 mb-3">
                <label for="validationTooltip03">Email</label>

                <input value="<?php echo $_SESSION["userEmail"]; ?>" name="email" type="text"
                    class="defalt-input-style form-control text-white" id="validationTooltip03" placeholder="Email"
                    required>

            </div>
            <div class="col-md-6 mb-3">
                <label for="validationTooltip04">Gender</label>
                <select name="gender" class="custom-select defalt-input-style text-white" required>
                    <?php echo
                        $value;
                    $text;
                    if ($_SESSION["userGender"] === "m") {
                        echo '
                    <option selected value="m">Male</option>
                    <option value="f">Female</option>
                    <option value="o">Other</option>
                        ';
                    }
                    if ($_SESSION["userGender"] === "f") {
                        echo '
                    <option value="m">Male</option>
                <option selected value="f">Female</option>
                <option value="o">Other</option>
                    ';
                    }
                    if ($_SESSION["userGender"] === "o") {
                        echo '
                    <option value="m">Male</option>
                <option value="f">Female</option>
                <option selected value="o">Other</option>
                    ';
                    }
                    ?>
                </select>
            </div>

        </div>
        <button name="edit_user" class="btn btn-warning col-md-12 btn-sm" type="submit">Save</button>
    </form>
</section>

<?php
include_once "./site-parts/footer-main.php";
?>