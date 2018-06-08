<?php 
session_start();
$get_fool = $_SESSION['floor'];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <link rel="icon" href="/img/cimvol.png" type="image/png" />
    <title>Планування і технічні характеристики квартири <?= '2А-' . str_replace('/', '', $get_fool); ?> - ЖК BRISTOL Comfort House</title>
    <meta name="description" content="ЖК BRISTOL Comfort House - план і характеристики квартири <?= '2А-' . str_replace('/', '', $get_fool); ?>. Оберіть свою квартиру в центрі Києва на пр-т В. Лобановського, 146Б">
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

  </head>
  <body>
    <script>
        var controller = new ScrollMagic.Controller();
        new WOW().init();
    </script>
    <?php include '../include/main_menu.php';?>
<?php include '../include/gtm.php';?>
<?php
$webAd = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];

?>
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
<input  name="metka" class="metka" type="hidden" value="Bristol callback"/>
<input  name="inn" class="userInn" type="hidden" value="Bristol callback"/>

          <input type="submit" name="" value="Надіслати">
          <div class="not" id="reCaptcha2" ></div>
          </form>
        </div>

          <div class="one_text_left wow bounceInRight">
            <p>2-кімнатна квартира. Тип 2А.</p>
          </div>
            <div class="flat_datailed plan2a_data_datailed">
            <div>
              <div style="height:100%">


              <aside>
                <aside calss="collum">
                  <p>Площа:<span>м</span></p>
                  <p>Кухня:<span>17,56</span></p>
                  <p>Передпокій:<span>16,39</span></p>
                  <p>Вітальня:<span>19,26</span></p>
                  <p>Спальня:<span>16,68</span></p>
                  <p>Санвузол:<span>4,87</span></p>
                  <p>Туалет:<span>2,17</span></p>
                  <p>Лоджія:<span>4.48*0,5</span></p>
                </aside>
                <aside calss="collum">
                  <p>Площа:<span>м</span></p>
                  <p>Житлова:<span>35,94</span></p>
                  <p>Загальна:<span>81,04</span></p>
                  <p>Поверх:<span>2&minus;25</span></p>
                  <a id="phone" class="phone" href="#"><img src="/img/news/phone.png" alt="">Дізнатись ціну</a></aside>
              </aside>


              </div>
            </div>
          </div>
          <a href="/selection_flats.php?id=<?php if(empty($get_fool)){echo '1';}else{echo $get_fool;}?>" class="reserve long plan2a_all_apartments"><span>‹‹ </span> Дивитися всі квартири</a>
          <a href="/flats/" class="reserve plan2a_choose_floor"><span>‹‹ </span> Обрати поверх</a>
          <img src="/map/2a.png" alt="">

      </div>
    </div>


    <?php include '../include/futer.php';?>
    

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
