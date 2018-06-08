<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <title>BRISTOL NEWS</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/news.css">
    <link rel="stylesheet" href="/css/menu.css">
    <link rel="stylesheet" href="/css/animate.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" scr="/js/scrollissimo.min.js"></script>
    <script type="text/javascript" src="/js/lib/greensock/TweenMax.min.js"></script>
    <script type="text/javascript" src="/js/lib/scrollmagic/ScrollMagic.min.js"></script>
    <script type="text/javascript" src="/js/lib/scrollmagic/plugins/animation.gsap.js"></script>
    <script type="text/javascript" src="/js/lib/wow.min.js"></script>
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
            <h3>НОВОСТИ</h3>
	<h4>В данный момент новостей нет</h4>
          </div>

            <div class="news_wrapper" style="visibility:hidden;">

              <div class="news_block" >
                <div class="news_body">
                  <div class="news_head">
                      <div class="date">
                        <span><p>18</p>
                        </br>февраля</span>
                      </div>
                      <p>Бристоль — наша строительная площадка теперь на экранах ваших мониторов.</p>
                  </div>
                  <div class="news_text">
                    <p>Наш родной город — это всегда мириады ярких, незабываемых минут! Места для активного отдыха, встреч с друзьями и близкими, работы и обучения, прогулок и бесед...</p>
                    <a href="news_detailed.php"><p>Детальнее</p><span></span></a>
                  </div>
                </div>

                <div class="news_picture">
                  <!-- <img src="img/news/im_1.jpg" alt="news"> -->
                  <img src="/img/news/pic-1.jpg" alt="news">
                </div>
              </div>

              <div class="news_block">
                <div class="news_body">
                  <div class="news_head">
                      <div class="date">
                        <span><p>17</p>
                        </br>февраля</span>
                      </div>
                      <p>Бристоль. Все показатели проб грунта в норме и даже лучше.</p>
                  </div>
                  <div class="news_text">
                    <p>Вопрос экологии для нас на первом месте. Мы понимаем, что на всех бывших промышленных территориях существуют риски загрязнения грунтов и это крайне важный фактор для каждого...</p>
                    <a href="news_detailed.php"><p>Детальнее</p><span></span></a>
                  </div>
                </div>

                <div class="news_picture">
                  <!-- <img src="img/news/im_2.jpg" alt="news"> -->
                  <img src="/img/news/pic-2.jpg" alt="news">
                </div>
              </div>

              <div class="news_block">
                <div class="news_body">
                  <div class="news_head">
                      <div class="date">
                        <span><p>15</p>
                        </br>февраля</span>
                      </div>
                      <p>Бристоль — концепция обустройства придомовой территории. </p>
                  </div>
                  <div class="news_text">
                    <p>Наш родной город — это всегда мириады ярких, незабываемых минут! Места для активного отдыха, встреч с друзьями и близкими, работы и обучения, прогулок и бесед...</p>
                    <a href="news_detailed.php"><p>Детальнее</p><span></span></a>
                  </div>
                </div>

                <div class="news_picture">
                  <!-- <img src="img/news/im_3.jpg" alt="news"> -->
                  <img src="/img/news/pic-3.jpg" alt="news">
                </div>
              </div>

            </div>

      </div>
    </div>


    <div class="footer clearfix">
      <div class="wrapper">
        <div class="copy">© 2016 BRISTOL comfort house все права защищены.</div>
        <div class="develop">Разработка сайта <img src="/img/logo/logo_smart.png" alt="smart"></div>
      </div>
    </div>


    <script src="/js/script.js"></script>
    <script type="text/javascript" src="/js/lib/wow.min.js"></script>

  </body>

</html>
