<?php
session_start();
$_SESSION['floor'] = $_GET['id'];
/*print_r($_SESSION);*/
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/img/cimvol.png" type="image/png" />
    <title>Планування квартир на <?=  str_replace('/', '', $_SESSION['floor']); ?> поверсі - ЖК BRISTOL Comfort House</title>
    <meta name="description" content="ЖК BRISTOL Comfort House - план <?=  str_replace('/', '', $_SESSION['floor']); ?> поверху. Оберіть свою квартиру в центрі Києва на пр-т В. Лобановського, 146Б.">
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

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TS4HDBT');</script>
<!-- End Google Tag Manager -->


<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TS4HDBT"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
  </head>
  <body>
    <script>
        var controller = new ScrollMagic.Controller();
        new WOW().init();
    </script>
    <?php include 'include/menu.php';?>

    <div class="section_one rooms flat">


      <div class="wrapper clearfix" style="height:100%;">

        <div class="appart_left">
              <div class="one_text_left wow bounceInLeft">
              <p>ОБЕРІТЬ</br><span>КВАРТИРУ</span></p>
              </div>
              <div class="floor_info">
                <div><?php echo str_replace('/', '', $_GET['id']); if(empty($_GET['id'])){echo '1';}?><br><p>Поверх</p></div>
              </div>
              <a href="/flats/" class="button"><span>‹‹ </span> Обрати поверх</a>
        </div>


      <div class="appart_right">
        <div class="appart_right_img">
          <svg  xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:svg="http://www.w3.org/2000/svg"
             id="svg3336" version="1.1" inkscape:version="0.91 r13725" width="1500" height="1243.75" viewBox="0 0 1500 1243.75" sodipodi:docname="plan.svg">
            <defs id="defs3340" />
            <image width="1500" height="1243.75" preserveAspectRatio="none" xlink:href="img/plan.png" id="image3344" x="0" y="-2.346698" style="fill:#008080" />

          <a  class="flat1" xlink:href="/type2a/">
            <path class="p100" d="m 405.97877,11.733491 668.80893,7.040094 -2.3467,131.415095 -302.72402,4.6934 -2.3467,133.76179 -361.39151,-2.3467 z" id="path3348" inkscape:connector-curvature="0" />
          </a>
          <a  class="flat2" xlink:href="/type2g/">
            <path class="p100" d="m 765.02358,152.53538 314.45752,-2.3467 -4.6934,131.41509 72.7477,4.6934 -2.3467,274.56368 -302.72408,2.3467 0,-265.17689 -72.74764,-7.04009 z" id="path3350" inkscape:connector-curvature="0" />
          </a>
          <a  class="flat3" xlink:href="/type1a/">
            <path class="p100" d="m 337.92453,283.95047 366.0849,2.3467 0,140.80189 -77.44103,-2.3467 4.69339,138.45519 -298.03066,-2.3467 z" id="path3352" inkscape:connector-curvature="0" />
          </a>
          <a  class="flat4" xlink:href="/type1b/">
            <path class="p100" d="m 335.57783,837.77123 366.08491,-2.3467 0,-82.13444 -77.44104,0 2.3467,-190.08254 -290.99057,2.3467 z" id="path3354" inkscape:connector-curvature="0" />
          </a>
          <a  class="flat5" xlink:href="/type2b/">
            <path class="p100" d="m 335.57783,1227.3231 302.72406,0 4.69339,-302.72404 63.36085,-2.3467 0,-86.82783 -368.4316,0 z" id="path3356" inkscape:connector-curvature="0" />
          </a>
          <a  class="flat6" xlink:href="/type1v/">
            <path class="p100" d="m 842.46462,566.24764 -2.3467,260.48349 309.76418,0 2.3467,-265.17688 z" id="path3358" inkscape:connector-curvature="0" />
          </a>
          <a  class="flat7" xlink:href="/type2v/">
            <path class="p100" d="m 840.11792,835.42453 0,389.55187 307.41748,4.6934 2.3467,-389.55188 z" id="path3360" inkscape:connector-curvature="0" />
          </a>
        </svg>

              <div class="flat_datailed datailed_1">
                  <div>
                    <div>
                      <p>Кількість кімнат: 2</p>
                      <p>Загальна площа: 81,04 м.</p>
                      <p>Житлова площа: 35,94 м.</p>
                      <p>Поверх: 2-25</p>
                      <a href="type2a/" class="reserve">Переглянути</a>
                    </div>
                  </div>
                </div>
                <div class="flat_datailed datailed_2">
                  <div>
                    <div>
                      <p>Кількість кімнат: 2</p>
                      <p>Загальна площа: 72,17 м.</p>
                      <p>Житлова площа: 35,17 м.</p>
                      <p>Поверх: 2-25</p>
                      <a href="type2g/" class="reserve">Переглянути</a>
                    </div>
                  </div>
                </div>

                <div class="flat_datailed datailed_3">
                  <div>
                    <div>
                      <p>Кількість кімнат: 1</p>
                      <p>Загальна площа: 52,31 м.</p>
                      <p>Житлова площа: 18,83 м.</p>
                      <p>Поверх: 2-25</p>
                      <a href="type1a/" class="reserve">Переглянути</a>
                    </div>
                  </div>
                </div>

                <div class="flat_datailed datailed_4">
                  <div>
                    <div>
                      <p>Кількість кімнат: 1</p>
                      <p>Загальна площа: 49,59 м.</p>
                      <p>Житлова площа: 18,83 м.</p>
                      <p>Поверх: 2-25</p>
                      <a href="type1b/" class="reserve">Переглянути</a>
                    </div>
                  </div>
                </div>
                <div class="flat_datailed datailed_5">
                  <div>
                    <div>
			  <p>Кількість кімнат: 2</p>
                      <p>Загальна площа: 71,67 м.</p>
                      <p>Житлова площа: 34,72 м.</p>
                      
                      <p>Поверх: 2-25</p>
                      <a href="type2b/" class="reserve">Переглянути</a>
                    </div>
                  </div>
                </div>
                <div class="flat_datailed datailed_6">
                  <div>
                    <div>
                      <p>Кількість кімнат: 1</p>
                      <p>Загальна площа: 47,44 м.</p>
                      <p>Житлова площа: 18,16 м.</p>
                      <p>Поверх: 2-25</p>
                      <a href="type1v/" class="reserve">Переглянути</a>
                    </div>
                  </div>
                </div>
                <div class="flat_datailed datailed_7">
                  <div>
                    <div>
                      <p>Кількість кімнат: 2</p>
                      <p>Загальна площа: 70,17 м.</p>
                      <p>Житлова площа: 32,48 м.</p>
                      <p>Поверх: 2-25</p>
                      <a href="type2v/" class="reserve">Переглянути</a>
                    </div>
                  </div>
                </div>
                <span class="info_small"><div class="flat_1"></div></span>
                <span class="info_small"><div class="flat_2"></div></span>
                <span class="info_small"><div class="flat_3"></div></span>
                <span class="info_small"><div class="flat_4"></div></span>
                <span class="info_small"><div class="flat_5"></div></span>
                <span class="info_small"><div class="flat_6"></div></span>
                <span class="info_small"><div class="flat_7"></div></span>
            </div>
        </div>


      </div>
    </div>


<?php include 'include/futer.php';?>

<script type="text/javascript">
    $(".flat1, .datailed_1").mouseover (function(){
    $(".datailed_1").css('display', 'block');
    $(".flat1 .p100").css('opacity', '0.6');
});
    $(".flat1, datailed_1").mouseout (function(){
      $(".flat1 .p100").css('opacity', '0');
      if( $(window).width() > 767) {
        $(".datailed_1").css('display','none');
    }
});

$(".flat2, .datailed_2").mouseover (function(){
$(".datailed_2").css('display', 'block');
$(".flat2 .p100").css('opacity', '0.6');
});
$(".flat2, .datailed_2").mouseout (function(){
  $(".flat2 .p100").css('opacity', '0');
  if( $(window).width() > 767) {
    $(".datailed_2").css('display','none');
}
});

$(".flat3, .datailed_3").mouseover (function(){
$(".datailed_3").css('display', 'block');
$(".flat3 .p100").css('opacity', '0.6');
});
$(".flat3, .datailed_3").mouseout (function(){
    $(".flat3 .p100").css('opacity', '0');
  if( $(window).width() > 767) {
    $(".datailed_3").css('display','none');
}
});

$(".flat4, .datailed_4").mouseover (function(){
$(".datailed_4").css('display', 'block');
$(".flat4 .p100").css('opacity', '0.6');
});
$(".flat4,.datailed_4").mouseout (function(){
    $(".flat4 .p100").css('opacity', '0');
  if( $(window).width() > 767) {
    $(".datailed_4").css('display','none');
}
});

$(".flat5, .datailed_5").mouseover (function(){
$(".datailed_5").css('display', 'block');
$(".flat5 .p100").css('opacity', '0.6');
});
$(".flat5, .datailed_5").mouseout (function(){
    $(".flat5 .p100").css('opacity', '0');
  if( $(window).width() > 767) {
    $(".datailed_5").css('display','none');
}
});

$(".flat6, .datailed_6").mouseover (function(){
$(".datailed_6").css('display', 'block');
$(".flat6 .p100").css('opacity', '0.6');
});
$(".flat6, .datailed_6").mouseout (function(){
    $(".flat6 .p100").css('opacity', '0');
  if( $(window).width() > 767) {
    $(".datailed_6").css('display','none');
}
});

$(".flat7, .datailed_7").mouseover (function(){
$(".datailed_7").css('display', 'block');
$(".flat7 .p100").css('opacity', '0.6');
});
$(".flat7, .datailed_7").mouseout (function(){
    $(".flat7 .p100").css('opacity', '0');
  if( $(window).width() > 767) {
    $(".datailed_7").css('display','none');
}
});


    </script>

    <style media="screen">
    body {
      position: relative;
      height: auto;
      min-height: 100%;
    }

      .flat{
        height: auto;
      }
      .wrapper {
        height: auto;
      }
      .section_one.rooms.flat {
        min-height: auto;

      }
      .footer {
        position: absolute;
        bottom: 0;
      }
    </style>

    <script src="js/script.js"></script>
    <script type="text/javascript" src="js/lib/wow.min.js"></script>

  </body>

</html>
