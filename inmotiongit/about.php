<?php
  $setpage = "about";
  include 'header.php'; ?>

      <div class="row tm-welcome-row">
        <div class="col-12 tm-page-cols-container">

          <div class="tm-page-col-right">
            <div
              class="tm-welcome-parallax"
              data-parallax="scroll"
              data-image-src="img/about-image.jpg"
            ></div>
          </div>
        </div>
      </div>

      <section class="row tm-pt-4 tm-pb-6">
        <div class="col-12 tm-tabs-container tm-page-cols-container">

          <div class="tm-page-col-right tm-tab-contents">
            <div id="first-tab-group" class="tabgroup">
              <div id="tab1">
                <div class="text-content">
                  <h3 class="tm-text-secondary tm-mb-3">
                    About Us
                  </h3>
                  <p class="tm-mb-5">
                    In Motion Rental started as a service to rent out bikes that
                    couldn't be found local.   Our mission is to provide some of
                    the best bikes in the market at very competitive prices.  All
                    of our rentals go through a select purchase option before choosing.
                    Then they are maticuliously serviced and run through everything
                    before anyone has the option of renting the bike.  All
                    service records are public if interested.
                  </p>
                  <p class="tm-mb-5">
                    We aim to keep prices as low as possible for rent and insurance.
                    With that stated some of are rentals are rather rare so insurance
                    can cost some money.  We try to keep those prices as low as possible
                    however and have shopped around for what we feel is the best price.
                  </p>
                </div>
                <div class="row tm-pt-5">
                  <div class="col-md-4 text-center">
                    <div class="tm-about-person mx-auto">
                      <img
                        src="img/awhileago.jpg"
                        alt="Image"
                        class="img-fluid tm-mb-1"
                      />


                    </div>
                  </div>

                  <div class="col-md-8 text-center">
                    <h4 class="tm-text-secondary tm-mb-1">
                      Sandy Powell
                    </h4>
                    <p class="tm-mb-2">Founder and CEO</p>

                      <p>
                        Learned to ride at the age of 15 then didn't touch a motorcycle
                        for almost 28 years. Once I got back on a bike I was hooked.
                        Started riding track the same year and have kept riding ever
                        since.  Since that time I've been lucky to own many different
                        motorcycles and branch out into riding everything. Started mountian
                        biking as well durring covid.
                      </p>
                      <div class="tm-mb-3">
                        <a
                          href="https://facebook.com"
                          class="tm-about-social-link"
                        >
                          <i class="fab fa-facebook-f tm-about-social-icon"></i>
                        </a>
                        <a
                          href="https://twitter.com"
                          class="tm-about-social-link"
                        >
                          <i class="fab fa-twitter tm-about-social-icon"></i>
                        </a>
                        <a
                          href="https://linkedin.com"
                          class="tm-about-social-link"
                        >
                          <i
                            class="fab fa-linkedin-in tm-about-social-icon"
                          ></i>
                        </a>
                      </div>
                    </div>
                  </div>


                </div>
              </div>

              </div>

            </div>
          </div>
        </div>
      </section>


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
