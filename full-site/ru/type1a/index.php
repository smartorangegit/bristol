<?php 
session_start();
$get_fool = $_SESSION['floor'];
/*echo $get_fool;*/
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <link rel="icon" href="/img/cimvol.png" type="image/png" />
    <title>Планировка и технические характеристики квартиры <?= '1А-' . str_replace('/', '', $get_fool); ?> - ЖК BRISTOL Comfort House</title>
    <meta name="description" content="ЖК BRISTOL Comfort House - план и характеристики квартиры <?= '1А-' . str_replace('/', '', $get_fool); ?>. Выберите свою квартиру в центре Киева на пр-т В. Лобановського, 146Б">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/news.css">
    <link rel="stylesheet" href="/css/menu.css">
    <link rel="stylesheet" href="/css/animate.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="/js/scrollissimo.min.js"></script>
    <script type="text/javascript" src="/js/lib/greensock/TweenMax.min.js"></script>
    <script type="text/javascript" src="/js/lib/scrollmagic/ScrollMagic.min.js"></script>
    <script type="text/javascript" src="/js/lib/scrollmagic/plugins/animation.gsap.js"></script>
    <script type="text/javascript" src="/js/lib/wow.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js?onload=myCallBack&render=explicit"></script>
          <script>
      var reCaptcha2;
       //var reCaptcha2;
      var myCallBack = function() {
      reCaptcha2 = grecaptcha.render('reCaptcha2', {
      'sitekey' : '6Lc4XxkUAAAAAMYMf0eKqcluGfnpYR_xAjSytqAb', //Replace this with your Site key
      'theme' : 'light'
      });
      /*var element=document.getElementById('reCaptcha2');
      if(!element){} else {
              reCaptcha2 = grecaptcha.render('reCaptcha2', {
                'sitekey' : '6LfRxRcUAAAAAPpNF5UZDuJCPhKSQNy9r2vScQcH', //Replace this with your Site key
                'theme' : 'light'
              });
      }*/
            };
      </script>
  </head>
  <body>
    <script>
        var controller = new ScrollMagic.Controller();
        new WOW().init();
    </script>
    <?php include '../../include/main_menu_ru.php';?>
<?php include '../../include/gtm.php';?>
    <div class="section_one rooms type">

      <div class="wrapper">
        <!-- модальное окно -->
        <div id="one_callback" class="one_callback">
          <h3>замовити зворотній дзвінок</h3>
          <p>Oтримати консультацію фахівця</p>
          <span class="close_popup"><img src="/img/icons/close_pop.svg" alt=""></span>
          <form class="one" action="../application.php" method=post enctype="multipart/form-data">
          <input type="text" name="name" placeholder="І&prime;мя *" required>
          <input type="email" name="email" placeholder="e-mail *" required>
          <input type="tel" name="tel" placeholder="Телефон *" required>
<input  name="webad" class="webad" type="hidden" value="<?=$webAd;?>"/>
<input  name="metka" class="metka" type="hidden" value="Bristol from type"/>
<input  name="inn" class="userInn" type="hidden" value="Bristol"/>

          <input type="submit" name="" value="Надіслати">
          <div class="not" id="reCaptcha2" ></div>
          </form>
        </div>

          <div class="one_text_left wow bounceInRight">
            <p>1-комнатная квартира. Тип 1А.</p>
          </div>
            <div class="flat_datailed plan1a">
            <div>
              <div>


              <aside>
                <aside calss="collum">
                  <p>Площадь:<span>м</span></p>
                  <p>Кухня:<span>13,59</span></p>
                  <p>Прихожая:<span>12,20</span></p>
                  <p>Гостинная:<span>18,83</span></p>
                  <p>Санузел:<span>3,40</span></p>
                  <p>Гардеробная:<span>2,42</span></p>
                  <p>Лоджия:<span>3.73*0,5</span></p>
                </aside>
                <aside calss="collum">
                  <p>Площадь:<span>м</span></p>
                  <p>Жилая:<span>18,83</span></p>
                  <p>Общая:<span>52,31</span></p>
                  <p>Этаж:<span>2&minus;25</span></p>
                  <a id="phone" class="phone" href="#"><img src="/img/news/phone.png" alt="">Узнать цену</a></aside>
              </aside>


              </div>
            </div>
          </div>
          <a href="/ru/selection_flats.php?id=<?php if(empty($get_fool)){echo '1';}else{echo $get_fool;}?>" class="reserve long"><span>‹‹ </span> Сметреть все квартиры</a>
          <a href="/ru/flats/" class="reserve plan1a_reserve"><span>‹‹ </span> выбрать этаж</a>
          <img src="/map/1a.png" alt="">

      </div>
    </div>


    <div class="footer clearfix">
      <div class="wrapper">
        <div class="copy">© 2016 BRISTOL Comfort House все права защищены.</div>
        <div class="develop">Разработка сайта <img src="/img/logo/logo_smart.png" alt="smart"></div>
      </div>
    </div>

      <script type="text/javascript">
          $('a#phone').click(function () {
          $('#one_callback').animate({opacity: 1, top: '170px'}, 500);
          $('#one_callback').css('display', 'block');
          $('#overlay').animate({opacity: 1}, 200);
          $('#overlay').css('display', 'block');
          $('.header_wrapper').css('z-index', '99');
        })
          $('#overlay, .close_popup').click(function () {
          $('#one_callback').animate({opacity: 0, top: '-100px'}, 200);
          $('#one_callback').css('display', 'none');
          $('#overlay').animate({opacity: 0}, 200);
          $('#overlay').css('display', 'none');
          $('.header_wrapper').css('z-index', '999999');
        })
          $(this).keydown(function(eventObject){
            if (eventObject.which == 27){
              $('#one_callback').animate({opacity: 0, top: '-100px'}, 200);
              $('#one_callback').css('display', 'none');
              $('#overlay').animate({opacity: 0}, 200);
              $('#overlay').css('display', 'none');
            }
        });
      </script>
    <script src="/js/script.js"></script>
    <style media="screen">
      .type .reserve{
        margin-bottom: 60px;
      }
    </style>
    <script type="text/javascript" src="/js/lib/wow.min.js"></script>

  </body>

</html>
