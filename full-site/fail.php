<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <link rel="icon" href="/img/cimvol.png" type="image/png" />
    <title>Fail</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/news.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/animate.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" scr="js/scrollissimo.min.js"></script>
    <script type="text/javascript" src="js/lib/greensock/TweenMax.min.js"></script>
    <script type="text/javascript" src="js/lib/scrollmagic/ScrollMagic.min.js"></script>
    <script type="text/javascript" src="js/lib/scrollmagic/plugins/animation.gsap.js"></script>
    <script type="text/javascript" src="js/lib/wow.min.js"></script>
  </head>
  <body>
    <script>
        var controller = new ScrollMagic.Controller();
        new WOW().init();
    </script>
    <?php include 'include/menu.php';?>
<?php include 'include/gtm.php';?>

    <div class="section_one">
      <div class="wrapper">
          <div class="one_text_left wow bounceInRight">
<?php
$urli  =  "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$pieces = explode("/", $urli);
//print_r($pieces);
?>
<h2>Ваш запит не відправлено</h2>
<h3>Капча не підтверджена</h3>
          </div>

          <style media="screen">

          .section_one {
            width: 100%;
            height: calc(100% - 290px);
          }
          h2 {
            font-size: 50px;

          }
          h3 {
            font-size: 40px;
          }

          </style>


      </div>
    </div>


    <div class="footer clearfix">
      <div class="wrapper">
        <div class="copy">© 2016 BRISTOL comfort house усі права захищено.</div>
        <div class="develop">Розробка сайту <img src="img/logo/logo_smart.png" alt="smart"></div>
      </div>
    </div>


    <script src="js/script.js"></script>
    <script type="text/javascript" src="js/lib/wow.min.js"></script>

  </body>

</html>
