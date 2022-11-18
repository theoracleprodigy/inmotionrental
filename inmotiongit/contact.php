<?php
$message = "";
if(isset($_POST["submit"])){

    $from = "From: $_POST[contact_email]" . "\r\n" .
    "Reply-To: $_POST[contact_email]" . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
    $msg = $_POST["contact_message"];
    // use wordwrap() if lines are longer than 70 characters
    $msg = wordwrap($msg,70);

    // send email
    mail("rent@inmotionrental.com","Connect with us!",$msg, $from);
    $message = "<div class='tm-message'>Message sent, someone will contact you shortly <br /></div>";
}

$setpage = "contact";
include 'header.php'; ?>

      <div class="row tm-welcome-row">
        <div class="col-12 tm-page-cols-container">

          <div class="tm-page-col-right">
            <div
              class="tm-welcome-parallax"
              data-parallax="scroll"
              data-image-src="img/contact-us-banner.jpg"
            ></div>
          </div>
        </div>
      </div>

      <section class="row tm-pt-4 tm-mb-3">
        <div class="col-12 tm-page-cols-container">
          <div class="tm-page-col-left">
            <div class="tm-contact-container tm-mb-6">
              <div class="tm-address-container">
                <h2 class="tm-text-secondary tm-mb-1">Address</h2>
                <address>
                  <p>
                    6435 Medicine Lake Rd<br />
                    Golden Valley, MN 55427
                  </p>
                </address>
              </div>

              <div class="tm-location-container">
                <h2 class="tm-text-secondary tm-mb-2">Location</h2>
                <a href="https://goo.gl/maps/9hBStnsAnumQPYcA6" target="_blank"><img src="img/map-inmotion.jpg" alt="Map image" class="img-fluid" /></a>
              </div>
            </div>
          </div>
          <div class="tm-page-col-right tm-form-container">
            <h2 class="tm-text-secondary mb-1"><?php echo("$message"); ?>Contact Us</h2>
            <form
              action="contact.php"
              method="POST"
              id="tm_contact_form"
              enctype="multipart/form-data">
              <div class="form-group">
                <input
                  type="text"
                  id="contact_name"
                  name="contact_name"
                  class="form-control rounded-0 border-top-0 border-right-0 border-left-0"
                  placeholder="Your Name"
                  required="" />
              </div>
              <div class="form-group-2">
                <input
                  type="email"
                  id="contact_email"
                  name="contact_email"
                  class="form-control rounded-0 border-top-0 border-right-0 border-left-0"
                  placeholder="Your Email"
                  required="" />
              </div>

              <div class="tm-mb-5">
                <textarea
                  rows="10"
                  id="contact_message"
                  name="contact_message"
                  class="form-control rounded-0"
                  placeholder="Your Message"
                  required=""></textarea>
              </div>

              <div class="">
                <button
                  type="submit"
                  name="submit"
                  class="btn btn-secondary tm-btn-submit rounded-0">
                  Submit
                </button>
              </div>
            </form>
          </div>
        </div>
      </section>

      <script  src="https://www.google.com/recaptcha/enterprise.js?render=6Lf8b6sbAAAAAKzw-NJWoaEBvCLXEgrJQxAMyVa9"></script>
      <script>
            function onSubmit(token) {
              document.getElementById("tm_contact_form").submit();
            }
      </script>

      <!-- Page footer -->
      <footer class="row tm-page-footer">
        <p class="col-12 tm-copyright-text mb-0">
            Copyright &copy; <?php echo date("Y"); ?> In Motion Rental
        </p>
      </footer>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/parallax.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

  </body>
</html>
