<?php
$title = "Contact Us";
include_once "./site-parts/header.php";
?>
<?php
require_once './site-parts/getters.php';
get_jambo("./resources/img/ro.jpg", "Always contact us", "If you have any kind of problems feel free to ask anything...");
?>

<head>
  <link rel="stylesheet" href="./styles/contact-us.css">
</head>


<section class="defalt-container-style mt-3">

  <div class="row">
    <div class="col-sm side1">
      <div class="input">
        <form action="./includes/contactus.inc.php" method="post">
          <h2 class="topic">Write us</h2>
          <br />
          <input name="name" class="mb-2" style="border-bottom: 2px solid var(--color-border-default);" type="text"
            placeholder="Name" required />

          <input name="email" class="mb-2" style="border-bottom: 2px solid var(--color-border-default);" type="email"
            placeholder="Email" required />

          <input name="subject" class="mb-2" style="border-bottom: 2px solid var(--color-border-default);" type="text"
            placeholder="Subject" required />

          <textarea name="message" style="border-bottom: 2px solid var(--color-border-default);" placeholder="Massage"
            id="" cols="6" rows="7" class="container" required></textarea>

          <input name="contact_us" type="submit" class="btn btn-sm btn-warning" />
        </form>
      </div>
    </div>
    <div class="col-sm side2">
      <div class="info">
        <h3 class="topic">Contact Information</h3>
        <p class="mb-5">We are open for any suggestions or just to have a chat.</p>

        <div class="infomation">
          <p class="mb-1 text-justify"><b>Address: </b> 198 West 21 Street.</p>
          <p class="mb-1 text-justify"><b>Phone: </b>+123456789</p>
          <p class="mb-1 text-justify"><b>Email: </b>info@gmail.com</p>
          <p class="mb-1 text-justify"><b>Website: </b>yourwebsite.com</p>
        </div>
      </div>
    </div>
  </div>

</section>

<?php
include_once "./site-parts/footer-main.php";
?>