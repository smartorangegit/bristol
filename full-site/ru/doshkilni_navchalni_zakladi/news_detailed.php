<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <title>BRISTOL NEWS DETAIL</title>
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
    <?include '../include/menu_ru.php';?>
<?php include '../include/gtm.php';?>
    <div class="news_det section_one">
      <div class="wrapper">
          <div class="one_text_left wow bounceInRight">
            <h3>НОВJCNB</h3>
          </div>

            <div class="news_wrapper datail_wrapper">

              <div class="news_block">
                <div class="news_body">
                  <div class="news_head">
                      <div class="date">
                        <span><p>17</p>
                        </br>февраля</span>
                      </div>
                      <p>Бристоль. Все показатели проб грунта в норме та даже лучше.</p>
                  </div>
                  <div class="news_text">
                    <p>Вопрос экологии для нас на первом месте. Мы понимаем, что на всех бывших промышленных территориях существуют риски загрязнения грунтов и это крайне важный фактор для каждого будущего жителя. </p>
                    <p>Рады сообщить, что заключения «Киевского городского лабораторного центра Министерства охрани здоровья Украини» подтвердили исследования грунтов наших экспертов и все показатели намного ниже указанных в «Государственных санитартных правилах планирования и застройки населенных пунктов».</p>
                    <a href="http://138.201.178.152/news.html"><span>‹‹</span> Вернуться к новостям</a>
                  </div>
                </div>

                <div class="news_picture">
                  <img src="/img/news/pic-2.jpg" name="example_img" alt="news">
                </div>
              </div>
              <div class="news_picture-list">
                <a href="javascript:l_image ('/img/news/list-1.jpg')"><img src="/img/news/list-1.jpg" alt="list_picture"></a>
                <a href="javascript:l_image ('/img/news/list-2.jpg')"><img src="/img/news/list-2.jpg" alt="list_picture"></a>
                <a href="javascript:l_image ('/img/news/list-3.jpg')"><img src="/img/news/list-3.jpg" alt="list_picture"></a>
                <a href="javascript:l_image ('/img/news/list-4.jpg')"><img src="/img/news/list-4.jpg" alt="list_picture"></a>
                <a href="javascript:l_image ('/img/news/list-5.jpg')"><img src="/img/news/list-5.jpg" alt="list_picture"></a>
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

    <script type="text/javascript">
      function l_image (a) {
      document.example_img.src=a;
      }
    </script>
    <script src="/js/script.js"></script>
    <script type="text/javascript" src="/js/lib/wow.min.js"></script>

  </body>

</html>
