<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>In Motion Rental - Motorcycles, ATV's, Snowmobiles and more -</title>
<!--
Adopted from the Next Level CSS Template
https://templatemo.com/tm-532-next-level
-->
    <link rel="stylesheet"  href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" />
    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/templatemo-style.css" />
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-VEMNNFKGEK"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-VEMNNFKGEK');
    </script>    
  </head>
  <body>
    <div class="container-fluid">

      <div class="row tm-brand-row"><!-- start of nav area -->
        <div class="col-lg-4 col-10">
          <div>
            <div>
              <h1><img src="img/motion-logo-sm.gif"></h1>
            </div>
          </div>
        </div>

        <div class="col-lg-8 col-2 tm-nav-col">
          <div class="tm-nav">
            <nav class="navbar navbar-expand-lg navbar-light tm-navbar">
              <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarNav"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto mr-0">
                  <li class="nav-item <?php if($setpage == "home") echo("active"); ?>">
                    <div class="tm-nav-link-highlight"></div>
                    <a class="nav-link" href="index.php">Home</a>
                  </li>
                  <li class="nav-item <?php if($setpage == "about") echo("active"); ?>">
                    <div class="tm-nav-link-highlight"></div>
                    <a class="nav-link" href="about.php">About</a>
                  </li>
                  <li class="nav-item <?php if($setpage == "rentals") echo("active"); ?>">
                    <div class="tm-nav-link-highlight"></div>
                    <a class="nav-link" href="rentals.php">Rentals</a>
                  </li>
                  <li class="nav-item <?php if($setpage == "contact") echo("active"); ?>">
                    <div class="tm-nav-link-highlight"></div>
                    <a class="nav-link" href="contact.php">Contact</a>
                  </li>
                </ul>
              </div>
            </nav>
          </div>
        </div><!-- end of tm-nav-col -->

      </div>
