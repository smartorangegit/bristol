<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <link rel="icon" href="../img/cimvol.png" type="image/png" />
    <title>Success</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/news.css">
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/animate.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" scr="../js/scrollissimo.min.js"></script>
    <script type="text/javascript" src="../js/lib/greensock/TweenMax.min.js"></script>
    <script type="text/javascript" src="../js/lib/scrollmagic/ScrollMagic.min.js"></script>
    <script type="text/javascript" src="../js/lib/scrollmagic/plugins/animation.gsap.js"></script>
    <script type="text/javascript" src="../js/lib/wow.min.js"></script>
  </head>
  <body>
    <script>
        var controller = new ScrollMagic.Controller();
        new WOW().init();
    </script>
    <?php include '../include/menu_ru.php';?>
<?php include '../include/gtm.php';?>

    <div class="section_one">
      <div class="wrapper">
          <div class="one_text_left wow bounceInRight">
<?php
$urli  =  "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$pieces = explode("/", $urli);
//print_r($pieces);
?>          
<h4>Ваша заявка успешно отправлена!</h4>
<h5>Наш менеджер свяжется с вами в ближайшее время</h5>
          </div>

            <div class="news_wrapper" style="visibility:hidden;">

              <div class="news_block">
                <div class="news_body">
                  <div class="news_head">
                      <div class="date">
                        <span><p>18</p>
                        </br>Лютого</span>
                      </div>
                      <p>Брістоль — наш будівельний майданчик відтепер на екранах ваших моніторів.</p>
                  </div>
                  <div class="news_text">
                    <p>Наше рідне місто — це завжди міріади яскравих, незабутніх хвилин! Місця для активного відпочинку, зустрічей з друзями та близькими, роботи та навчання, прогулянок та розмов...</p>
                    <a href="news_detailed.php"><p>Детальніше</p><span></span></a>
                  </div>
                </div>

                <div class="news_picture">
                  <!-- <img src="img/news/im_1.jpg" alt="news"> -->
                  <img src="../img/news/pic-1.jpg" alt="news">
                </div>
              </div>

              <div class="news_block">
                <div class="news_body">
                  <div class="news_head">
                      <div class="date">
                        <span><p>17</p>
                        </br>Лютого</span>
                      </div>
                      <p>Брістоль. Всі показники проб грунту в нормі та навіть краще.</p>
                  </div>
                  <div class="news_text">
                    <p>Питання екології для нас на першому місці. Ми розуміємо, що на всіх колишніх промислових територіях існують ризики забруднення грунтів і це вкрай важливий фактор для кожного...</p>
                    <a href="news_detailed.php"><p>Детальніше</p><span></span></a>
                  </div>
                </div>

                <div class="news_picture">
                  <!-- <img src="img/news/im_2.jpg" alt="news"> -->
                  <img src="../img/news/pic-2.jpg" alt="news">
                </div>
              </div>

              <div class="news_block">
                <div class="news_body">
                  <div class="news_head">
                      <div class="date">
                        <span><p>15</p>
                        </br>Лютого</span>
                      </div>
                      <p>Брістоль — концепція влаштування каналу та бульвару. </p>
                  </div>
                  <div class="news_text">
                    <p>Наше рідне місто — це завжди міріади яскравих, незабутніх хвилин! Місця для активного відпочинку, зустрічей з друзями та близькими, роботи та навчання, прогулянок та розмов...</p>
                    <a href="news_detailed.php"><p>Детальніше</p><span></span></a>
                  </div>
                </div>

                <div class="news_picture">
                  <!-- <img src="img/news/im_3.jpg" alt="news"> -->
                  <img src="../img/news/pic-3.jpg" alt="news">
                </div>
              </div>

            </div>

      </div>
    </div>


    <div class="footer clearfix">
      <div class="wrapper">
        <div class="copy">© 2016 BRISTOL comfort house все права защищены.</div>
        <div class="develop">Разработка сайта <img src="../img/logo/logo_smart.png" alt="smart"></div>
      </div>
    </div>


    <script src="../js/script.js"></script>
    <script type="text/javascript" src="../js/lib/wow.min.js"></script>

  </body>

</html>
