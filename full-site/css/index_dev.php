<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <link rel="icon" href="img/cimvol.png" type="image/png" />
    <title>BRISTOL</title>
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link rel="stylesheet" href="css/style_dev.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/menu.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="js/lib/greensock/TweenMax.min.js"></script>
    <script type="text/javascript" src="js/lib/scrollmagic/ScrollMagic.min.js"></script>
    <script type="text/javascript" src="js/lib/scrollmagic/plugins/animation.gsap.js"></script>
    <script type="text/javascript" src="js/lib/wow.min.js"></script>

	<script src="https://www.google.com/recaptcha/api.js?onload=myCallBack&render=explicit"></script>
    <script>
        //var reCaptcha1;
         var reCaptcha2;
        var myCallBack = function() {
        reCaptcha2 = grecaptcha.render('reCaptcha2', {
        'sitekey' : '6Lc4XxkUAAAAAMYMf0eKqcluGfnpYR_xAjSytqAb', //Replace this with your Site key
        'theme' : 'light'
        });
        //var element=document.getElementById('reCaptcha2');
        /*if(!element){} else {
                reCaptcha2 = grecaptcha.render('reCaptcha2', {
                  'sitekey' : '6LfRxRcUAAAAAPpNF5UZDuJCPhKSQNy9r2vScQcH', //Replace this with your Site key
                  'theme' : 'light'
                });
        }*/
              };
                </script>
            <!-- Google Tag Manager -->
            <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-TS4HDBT');</script>
            <!-- End Google Tag Manager -->
        <!-- </head> -->
    <script src="js/lib/plugins/debug.addIndicators.min.js"></script>
      <script>
      var script = '<script src="infobubble';
      if (document.location.search.indexOf('compiled') !== -1) {
        script += '-compiled';
      }
      script += '.js"><' + '/script>';
      document.write(script);
    </script>
  </head>
  <body>
<link rel="stylesheet" href="flipclock.css">
	<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> -->

	<script src="flipclock.js"></script>
  </head>
  <body>
<!--
<div class="underprice" style="font-family: 'RobotoCondensed-Regular'!important;">ПІДВИЩЕННЯ ЦІН</div>
				<div class="mesage"><p style="font-family: 'RobotoCondensed-Regular';">до чергового підвищення цін залишилось  <span id="clock-close"><img src=img/icons/close.svg alt="close" width="30px"></span></p>

					<div class="clock2">
					</div>
				</div>
-->
<script src="clock.js"></script>
<script type="text/javascript">

$(".underprice").click(function(){
	$(".mesage").css("display","block");
	$(".mesage").css("left","0");
});

</script>
    <script>
        var controller = new ScrollMagic.Controller();
        new WOW().init();
    </script>
    <?php include 'include/main_menu.php';?>


    <div class="main_page section_one">
      <div class="wrapper">
        <div class="one_text">
<!--timer-->
<div style=" height:250px; text-align: center;">
 <?php// include 'timer.php';?>
</div>

<!--end timer -->
          <div class="one_text_left wow bounceInRight">
            <h2>BRISTOL comfort house &minus; </h2>
            <div class="one_text_box">
              <div class="one_text_box1">
                <div class="one_text_box2">
                  це оптимальний вибір для тих, хто бажає отримати якомога більше переваг за розумну ціну.</div>
                </div>
              </div>
          </div>

          <div class="one_text_right wow bounceInLeft">
            <div class="one_text_box">
              <div class="one_text_box1">
                <div class="one_text_box2">
                  Будинок розташований у Голосіївському районі, за адресою проспект В. Лобановського, 146Б.</div>
              </div>
            </div>
          </div>
        </div>
        <div class="trigger-0"></div>
        <div class="trigger-1"></div>
        <div class="trigger-11"></div>
        <div class="one_search">
          <div class="one_search_box">
            <div class="one_search_box1">
              <h2>що саме ви шукаєте?</h2>
              <div class="one_search_content">
                <div class="one_search_item">
                  <div class="search_icon"><img src="img/icons/shpat.png" alt="shpat"></div>
                  <div class="search_name">Якість будівництва</div>
                  <div class="search_text">Надійний забудовник гарантує</div>
                </div>
                <div class="one_search_item">
                  <div class="search_icon"><img src="img/icons/paint.png" alt="paint"></div>
                  <div class="search_name">Зручне планування</div>
                  <div class="search_text">7 видів квартир на будь-який смак</div>
                </div>
                <div class="one_search_item">
                  <div class="search_icon"><img src="img/icons/metro.png" alt="metro"></div>
                  <div class="search_name">Біля <br>метро</div>
                  <div class="search_text">5 хвилин пішки до станції "Деміївська"</div>
                </div>
                <div class="one_search_item">
                  <div class="search_icon"><img src="img/icons/auto.png" alt="auto"></div>
                  <div class="search_name">Поряд із центром</div>
                  <div class="search_text">15 хвилин на метро до центру Києва</div>
                </div>
                <div class="one_search_item">
                  <div class="search_icon"><img src="img/icons/pin.png" alt="pin"></div>
                  <div class="search_name">У зручному районі</div>
                  <div class="search_text">Магазини, кафе, школа та дитячий садочок &minus; все поряд</div>
                </div>
                <div class="one_search_item">
                  <div class="search_icon"><img src="img/icons/porc.png" alt="porc"></div>
                  <div class="search_name">За розумною ціною</div>
                  <div class="search_text"><a class="button" href="#callback">поцікавитися</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

    <div class="section_two">
      <div class="wrapper">
        <div class="two_left">
          <h3 class="wow bounceInLeft">Ключова інформація</h3>

        </div>

        <div class="two_line nomobile"></div>

        <div class="two_right">
          <div class="two_right_number">
            <div class="number_grid">
              <div class="number_item wow bounceIn">25</div>
              <div class="number_text">поверхів</div>
            </div>
            <div class="number_grid">
              <div class="number_item wow bounceIn">2,8<span>метрів</span></div>
              <div class="number_text">висота стель</div>
            </div>
            <div class="number_grid">
              <div class="number_item wow bounceIn">3</div>
              <div class="number_text">ліфти</div>
            </div>
            <div class="number_grid">
              <div class="number_item wow bounceIn">7</div>
              <div class="number_text">видів квартир</div>
            </div>
          </div>
          <div class="two_right_info">
            <div class="two_info_item two_item1 wow fadeInDown">Монолітно-каркасна технологія будівництва</div>
            <div class="two_info_item two_item2 wow fadeInDown">Комерційні приміщення на першому поверсі</div>
            <div class="two_info_item two_item3 wow fadeInLeft">Благоустрій прибудинкової території: дитячий та спортивний майданчики, місця для відпочинку</div>
            <div class="two_info_item two_item4 wow fadeInRight">Паркінг</div>
            <div class="two_info_item two_item5 wow fadeInLeft">Світлі та просторі парадні</div>
            <div class="two_info_item two_item6 wow fadeInRight">Закрита прибудинкова територія</div>
          </div>

        </div>
      </div>
    </div>

    <div class="section_three">

 <div id="map">
   <script src="js/map.js" ype="text/javascript"></script>
 </div>
        <div class="block_three wow bounceIn">
          <div class="one_search_box">
            <div class="one_search_box1">
              <h3>розташування</h3>
              <div class="line_black">

              </div>
              <span>BRISTOL comfort house розташований поряд із центром, на проспекті В. Лобановського, який служить одним з найважливіших транспортних шляхів столиці. </span>
              <div class="three_content clearfix">
                <div class="three_grid three_item_line">
                  <div class="three_icons wow bounceIn"><img src="img/icons/metro1.png" alt=""></div>
                  <span>5 хвилин</span>
                  <p>станція метро "Деміївська"</p>
                </div>
                <div class="three_grid three_item_line">
                  <div class="three_icons wow bounceIn"><img src="img/icons/baby.png" alt=""></div>
                  <span>5 хвилин</span>
                  <p>школа та дитячий садок</p>
                </div>
                <div class="three_grid three_item_line">
                  <div class="three_icons wow bounceIn"><img src="img/icons/auto1.png" alt=""></div>
                  <span>5 хвилин</span>
                  <p>на авто до центру міста</p>
                </div>
                <div class="three_grid three_item_block">
                  <div class="three_icons wow bounceIn"><img src="img/icons/bag.png" alt=""></div>
                  <span>10 хвилин</span>
                  <p>на авто до ТРЦ OCEAN PLAZA</p>
                </div>
                <div class="three_grid three_item_block">
                  <div class="three_icons wow bounceIn"><img src="img/icons/market.png" alt=""></div>
                  <span>2 хвилини</span>
                  <p>до супермаркету</p>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>

    <div class="section_four">

      <div class="four_name wow bounceInLeft">План поверху</div>
      <div class="line_white"></div>
      <a class="button" href="flats.php">Вибрати планування</a>
    </div>

    <div id="cause" class="section_five">
      <div class="wrapper">
        <div class="trigger-5"></div>
        <div class="five_name wow bounceInLeft">5 ВАЖЛИВИХ ПРИЧИН </br> ОБРАТИ Bristol</div>
        <div class="five_cause">
          <div class="five_cause_item one_search_item">
            <div class="search_icon wow bounceIn">1</div>
            <div class="search_name">Вдале розташування</div>
            <div class="search_text">Біля метро, поряд із центром, неподалік від торгівельних центрів.</div>
          </div>
          <div class="five_cause_item one_search_item">
            <div class="search_icon wow bounceIn">2</div>
            <div class="search_name">Якісне житло</div>
            <div class="search_text">Перевірена якість будівництва, багато типів квартир, зручне планування.</div>
          </div>
          <div class="five_cause_item one_search_item">
            <div class="search_icon wow bounceIn">3</div>
            <div class="search_name">Розумна ціна</div>
            <div class="search_text">Поспілкуйтеся із нашим відділом продаж – будете задоволені!</div>
          </div>
          <div class="five_cause_item one_search_item">
            <div class="search_icon wow bounceIn">4</div>
            <div class="search_name">Зручна інфраструктура</div>
            <div class="search_text">Комфортна прибудинкова територія, все що потрібно для життя – поряд із будинком.</div>
          </div>
          <div class="five_cause_item one_search_item">
            <div class="search_icon wow bounceIn">5</div>
            <div class="search_name">Надійна інвестиція</div>
            <div class="search_text">Прогнозоване зростання цін на нерухомість у цьому районі, гарантії надійного забудовника.</div>
          </div>
        </div>
      </div>
    </div>

    <div class="section_six">
      <div class="trigger-6"></div>
      <div class="six_name wow bounceInLeft">суспільний простір</div>
      <div class="line_black"></div>
      <div class="six_text">Ми подбали, щоб ви комфортно почували себе не лише у власній квартирі, а й у суспільному просторі BRISTOL comfort house, а також на прибудинковій території.</div>
      <div class="wrapper">
        <div class="six_one">3 ліфти, один з яких - вантажний</div>
          <div class="six_line six_line_one nomobile"></div>
            <div class="six_round six_round_one wow bounceIn"></div>
        <div class="six_two">Закрита прибудинкова територія</div>
          <div class="six_line six_line_two nomobile"></div>
            <div class="six_round six_round_two wow bounceIn"></div>
        <div class="six_three">Світлі та просторі парадні</div>
          <div class="six_line six_line_three nomobile"></div>
            <div class="six_round six_round_three wow bounceIn"></div>
        <div class="six_four">Система охорони</div>
          <div class="six_line six_line_four nomobile"></div>
            <div class="six_round six_round_four wow bounceIn"></div>
        <div class="six_five">Благоустрій прибудинкової території: дитячий та спортивний майданчики, місця для відпочинку </div>
          <div class="six_line six_line_five nomobile"></div>
            <div class="six_round six_round_five wow bounceIn"></div>
      </div>
    </div>

    <div id="builder" class="section_seven">
      <div class="seven_name wow bounceInLeft">забудовники</div>
      <div class="line_black"></div>
      <div class="seven_box">
        <div class="seven_box_item  wow pulse">
          <div class="seven_builder">
            <a href="http://riverside.net.ua"><img src="img/logo/logo_riv_b.svg" alt="riv"></a>
          </div>
        <div class="seven_text">Девелопер</div>
        </div>
        <div class="seven_box_item  wow pulse">
          <div class="seven_builder">
            <a href="http://kdd.ua"><img class="kdd" src="img/logo/logoKDD.svg" alt="kdd"></a>
          </div>
        <div class="seven_text">Генеральний підрядник</div>
        </div>
	<div class="seven_box_item  wow pulse">
          <div class="seven_builder">
            <a href="https://kmb.ua/ua"><img src="img/logo/kmb.png" alt="kmb"></a>
          </div>
        <div class="seven_text">Партнер проекту</div>
        </div>
      </div>
    </div>
<?php
$webAd = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];

?>
    <div id="callback" class="section_eight">
      <div class="eight_name wow bounceInLeft">зв&prime;яжіться з нами</div>
      <div class="line_white"></div>
      <div class="one_callback">
        <h3>замовити зворотній дзвінок</h3>
        <p>Oтримати консультацію фахівця</p>
        <form class="one mainone"  action="application.php" method=post enctype="multipart/form-data" class="form">
          <input type="text" name="name" placeholder="І&prime;мя *" required>
          <input type="email" name="email" placeholder="e-mail *" required>
          <input type="tel" name="tel" placeholder="Телефон *" pattern="[0-9]{10}" required>
          <textarea name="textarea" rows="8" cols="80"></textarea>

<input  name="webad" class="webad" type="hidden" value="<?=$webAd;?>"/>
<input  name="metka" class="metka" type="hidden" value="Bristol with text"/>
<input  name="inn" class="userInn" type="hidden" value="Bristol"/>
<div class="not" id="reCaptcha2" ></div>
          <input type="submit" name="" value="Надіслати">
        </form>
      </div>
    </div>

    <div class="section_nine">
      <div class="nine_name wow bounceInLeft">статус робіт</div>
      <div class="line_black"></div>
      <div class="nine_line">
        <div class="wrapper clearfix">

          <div class="line_message">
            <h4>Виконуються монолітні роботи по влаштуванню вертикальних елементів 4-го поверху та плити перекриття 5-го поверху. Починаються роботи по влаштуванню цегляної кладки в підвалі. </h4>
            <p>Ми регулярно повідомляємо про етапи виконання робіт, публікуючи фото-звіти.</p>
          </div>
          <a class="button but_bud" href="build.php">Дивитися хід будівництва</a>
          <a class="button but_web" href="webcam.php"><img src="img/icons/web.png" alt="web">Веб-камерa</a>
        </div>
      </div>

      <div class="nine_house">
        <div class="wrapper">

        <div class="house_box">
         <div class="works_progres wow flip"><span>15</span><br>поверхів<br>побудовано</div>
          <!-- <div class="works_box works-box--1 wow slideInLeft" style="font-family:Solomon Sans Book;">зовнішні інженерні мережі</div>
          <div class="works_box works-box--2 wow slideInLeft" style="font-family:Solomon Sans Book;">фасадні роботи</div>
          <div class="works_box works-box--3 wow slideInLeft" style="font-family:Solomon Sans Book;">заповнення порожнин/перегородок/стін</div>
          <div class="works_box_full works-box--4 wow slideInLeft" style="font-family:Solomon Sans Book;">облаштування фундаментної основи</div>
          <div class="works_box_full works-box--5 wow slideInLeft" style="font-family:Solomon Sans Book;">підготовчі роботи</div>

          <div class="works_box works-box--6 wow slideInRight" style="font-family:Solomon Sans Book;">благоустрій</div>
          <div class="works_box works-box--7 wow slideInRight" style="font-family:Solomon Sans Book;">покрівельні роботи</div>
          <div class="works_box works-box--8 wow slideInRight" style="font-family:Solomon Sans Book;">монтаж віконних конструкцій</div>
          <div class="works_box works-box--9 wow slideInRight" style="font-family:Solomon Sans Book;">каркас моноліт/цеглова кладка</div>
          <div class="works_box_full works-box--10 wow slideInRight" style="font-family:Solomon Sans Book;">котлован/земляні роботи</div> -->
        </div>

        <div class="house_radial">
          <div id="rad1" class="radial"></div>

          <div id="rad2" class="radial"></div>

          <div id="rad3" class="radial"></div>

          <div id="rad4" class="radial"></div>
        </div>

      </div>

      </div>
      <div class="nine_finish">Завершення будівництва &minus; перший квартал 2018 року. </div>

    </div>

    <div id="contacts" class="section_ten">
      <div class="ten_name bounceInLeft">контакти</div>
      <div class="line_black"></div>
      <span>Щоб отримати додаткову інформацію, будь ласка, зв'яжіться із нами:</span>

      <div class="ten_box">
        <div class="ten_box_item wow flip">
          <div class="ten_round"><a href="index.php#contacts"><img src="img/icons/big_pin.png" alt="pin"></a></div>
          <h4>Відділ продажу:</h4>
          <span>проспект В. Лобановського, 146Б</span>
        </div>

        <div class="ten_box_item wow flip">
          <div class="ten_round"><a href="index.php#contacts"><img src="img/icons/big_tel.png" alt="pin"></a></div>
          <h4>(044) 29 03 444</h4>
          <span>з 10:00 до 20:00 </span>
        </div>

        <div class="ten_box_item wow flip">
          <div class="ten_round"><a href="index.php#contacts"><img src="img/icons/big_letter.png" alt="pin" style="margin-top:50px;"></a></div>
          <h4>E-mail:</h4>
          <span>info@bristol.house​​​​​​​​</span>
        </div>
      </div>
    </div>
    <div class="footer clearfix">
      <div class="wrapper">
        <div class="copy">© 2016 BRISTOL comfort house усі права захищено.</div>
        <div class="develop">Розробка сайту <img src="img/logo/logo_smart.png" alt="smart"></div>
      </div>
    </div>
    <script type="text/javascript">
       $(function() {
        $(window).scroll(function() {
          if($(this).scrollTop() != 0) {
          $('#toTop').fadeIn();
             } else {
          $('#toTop').fadeOut();
             }
             });

      $('#toTop').click(function() {
      $('body,html').animate({scrollTop:0},800);
      });
        });
            </script>

    <script src="js/script.js"></script>
    <script type="text/javascript" src="js/lib/wow.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-1.7.1.min.js"></script> -->

    <script type="text/javascript" src="js/CircularLoader-v1.3.js"></script>
    <script type="text/javascript">

        $("#rad1").circularloader({
        backgroundColor: "#ffffff",//background colour of inner circle
        fontColor: "#000000",//font color of progress text
        fontSize: "20px",//font size of progress text
        radius: 0,//radius of circle
        progressBarBackground: "#f6f6f6",//background colour of circular progress Bar
        progressBarColor: "#e4202b",//colour of circular progress bar
        progressBarWidth: 60,//progress bar width
        progressPercent: 13,//progress percentage out of 100
        progressValue:0,//diplay this value instead of percentage
        showText: true,//show progress text or not
        title: "Будівництво <br>каркасу будівлі",//show header title for the progress bar
        });
    </script>
    <script type="text/javascript">
        $("#rad2").circularloader({
        backgroundColor: "#ffffff",//background colour of inner circle
        fontColor: "#000000",//font color of progress text
        fontSize: "20px",//font size of progress text
        radius: 50,//radius of circle
        progressBarBackground: "#f6f6f6",//background colour of circular progress Bar
        progressBarColor: "#e4202b",//colour of circular progress bar
        progressBarWidth: 100,//progress bar width
        progressPercent: 2,//progress percentage out of 100
        progressValue:0,//diplay this value instead of percentage
        showText: true,//show progress text or not
        title: "Цегляна кладка",//show header title for the progress bar
        });
    </script>
    <script type="text/javascript">
        $("#rad3").circularloader({
        backgroundColor: "#ffffff",//background colour of inner circle
        fontColor: "#000000",//font color of progress text
        fontSize: "20px",//font size of progress text
        radius: 50,//radius of circle
        progressBarBackground: "#f6f6f6",//background colour of circular progress Bar
        progressBarColor: "#e4202b",//colour of circular progress bar
        progressBarWidth: 100,//progress bar width
        progressPercent: 0,//progress percentage out of 100
        progressValue:0,//diplay this value instead of percentage
        showText: true,//show progress text or not
        title: "Зовнішня інженерія",//show header title for the progress bar
        });
    </script>

    <script type="text/javascript">
        $("#rad4").circularloader({
        backgroundColor: "#ffffff",//background colour of inner circle
        fontColor: "#000000",//font color of progress text
        fontSize: "20px",//font size of progress text
        radius: 50,//radius of circle
        progressBarBackground: "#f6f6f6",//background colour of circular progress Bar
        progressBarColor: "#e4202b",//colour of circular progress bar
        progressBarWidth: 100,//progress bar width
        progressPercent: 5,//progress percentage out of 100
        progressValue:0,//diplay this value instead of percentage
        showText: true,//show progress text or not
        title: "Благоустрій",//show header title for the progress bar
        });
    </script>

<script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC_XaLtOX8vgeRAIeqgdfHh9q1lNTIS3Y0&callback=initMap">
    </script>

    <div id="toTop"><img src="img/icons/up.png" alt="up"></div>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TS4HDBT"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
  </body>

</html>
