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
    <title>Планування і технічні характеристики квартири <?= 'A1-' . str_replace('/', '', $get_fool); ?> - ЖК BRISTOL Comfort House</title>
    <meta name="description" content="ЖК BRISTOL Comfort House - план і характеристики квартири <?= 'A1-' . str_replace('/', '', $get_fool); ?>. Оберіть свою квартиру в центрі Києва на пр-т В. Лобановського, 146Б">
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
            <p>1-кімнатна квартира. Тип 1А.</p>
          </div>
            <div class="flat_datailed plan1a">
            <div>
              <div>


              <aside>
                <aside calss="collum">
                  <p>Площа:<span>м</span></p>
                  <p>Кухня:<span>13,59</span></p>
                  <p>Передпокій:<span>12,20</span></p>
                  <p>Вітальня:<span>18,83</span></p>
                  <p>Санвузол:<span>3,40</span></p>
                  <p>Гардеробна:<span>2,42</span></p>
                  <p>Лоджія:<span>3.73*0,5</span></p>
                </aside>
                <aside calss="collum">
                  <p>Площа:<span>м</span></p>
                  <p>Житлова:<span>18,83</span></p>
                  <p>Загальна:<span>52,31</span></p>
                  <p>Поверх:<span>2&minus;25</span></p>
                  <a id="phone" class="phone" href="#"><img src="/img/news/phone.png" alt="">Дізнатись ціну</a></aside>
              </aside>


              </div>
            </div>
          </div>
          <a href="/selection_flats.php?id=<?php if(empty($get_fool)){echo '1';}else{echo $get_fool;}?>" class="reserve long"><span>‹‹ </span> Дивитися всі квартири</a>
          <a href="/flats/" class="reserve plan1a_reserve"><span>‹‹ </span> Обрати поверх</a>
          <img src="/map/1a.png" alt="">

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
