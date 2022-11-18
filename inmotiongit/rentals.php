<?php
$setpage = "rentals";
include 'header.php';
include 'dbconnection.php'
?>

      <div class="row tm-welcome-row">
        <div class="col-12">
          <div
            class="tm-welcome-parallax tm-center-child"
            data-parallax="scroll"
            data-image-src="img/speciale.jpg"
          >
          </div>
        </div>
      </div>

      <section class="row tm-pt-4">
        <div class="col-12 tm-page-cols-container">
          <div class="tm-page-col-left">
            <ul class="tabs clearfix filters-button-group">
              <li>
                <a href="#" class="active" data-filter="*">
                  All Types
                </a>
              </li>
              <li>
                <a href="#" class="" data-filter=".motorcycles">
                  Motorcycles
                </a>
              </li>
              <li>
                <a href="#" class="" data-filter=".atvs">
                  ATV's
                </a>
              </li>
              <li>
                <a href="#" class="" data-filter=".snowmobiles">
                  Snowmobiles
                </a>
              </li>
              <li>
                <a href="#" class="" data-filter=".mtn">
                  Mountain Bikes
                </a>
              </li>
            </ul>
          </div>
          <div class="tm-page-col-right">
            <div class="tm-gallery" id="tmGallery">

            <?php global $ConnectingDB;

                  $sql = "SELECT rentals.rental_id, rentals.brand, rentals.model, rentals.year, rental_category.machine_name, rentals.gallary_img, rentals.rental_link
                          FROM rentals
                          INNER JOIN rental_category on rentals.category_id = rental_category.category_id
                          ORDER BY RAND()";
                  $stmt = $ConnectingDB->prepare($sql);
                  $stmt->execute();

                  while ($DataRows = $stmt->fetch()){
                    // loop through the query
                    $rentalID = $DataRows['rental_id'];
                    $brand = $DataRows['brand'];
                    $model = $DataRows['model'];
                    $year = $DataRows['year'];
                    $categoryName = $DataRows['machine_name'];
                    $image = $DataRows['gallary_img'];
                    $rentalLink = $DataRows['rental_link'];

                  ?>


              <div class="tm-gallery-item <?php echo($categoryName); ?>">
                <figure class="effect-bubba">
                  <img
                    src="img/gallery/<?php echo($image); ?>"
                    alt="<?php echo('$brand $model');?>"
                    class="img-fluid"
                  />
                  <figcaption>
                    <h2><?php echo($brand); ?></h2>
                    <p><?php echo($year);?><br /><?php echo($model); ?></p>
                    <a href="<?php echo($rentalLink); ?>">View more</a>
                  </figcaption>
                </figure>
              </div>

            <?php } ?>


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
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
      $(function() {
        /* Isotope Gallery */

        // init isotope
        var $gallery = $(".tm-gallery").isotope({
          itemSelector: ".tm-gallery-item",
          layoutMode: "fitRows"
        });
        // layout Isotope after each image loads
        $gallery.imagesLoaded().progress(function() {
          $gallery.isotope("layout");
        });

        $(".filters-button-group").on("click", "a", function() {
          var filterValue = $(this).attr("data-filter");
          $gallery.isotope({ filter: filterValue });
          console.log("Filter value: " + filterValue);
        });

        /* Tabs */
        $(".tabgroup > div").hide();
        $(".tabgroup > div:first-of-type").show();
        $(".tabs a").click(function(e) {
          e.preventDefault();
          var $this = $(this),
            tabgroup = "#" + $this.parents(".tabs").data("tabgroup"),
            others = $this
              .closest("li")
              .siblings()
              .children("a"),
            target = $this.attr("href");
          others.removeClass("active");
          $this.addClass("active");

          // Scroll to tab content (for mobile)
          if ($(window).width() < 992) {
            $("html, body").animate(
              {
                scrollTop: $("#tmGallery").offset().top
              },
              200
            );
          }
        });
      });
    </script>
  </body>
</html>
