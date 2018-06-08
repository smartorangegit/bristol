<!DOCTYPE html>
<html lang="uk">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <link rel="icon" href="img/cimvol.png" type="image/png" />
    <title>ЖК Bristol Comfort House - житловий комплекс в Києві</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/jquery.fancybox3.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/menu.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="js/lib/greensock/TweenMax.min.js"></script>
    <script type="text/javascript" src="js/lib/scrollmagic/ScrollMagic.min.js"></script>
    <script type="text/javascript" src="js/lib/scrollmagic/plugins/animation.gsap.js"></script>
    <script type="text/javascript" src="js/lib/wow.min.js"></script>
    <meta name="description" content="ЖК Bristol Comfort House житловий комплекс в Києві Відділ продажу: ☎ (044) 22 77 144, Адреса м.Київ, впр-т В. Лобановського,146Б">
	<link rel="canonical" href="<?php echo 'https://'.$_SERVER['SERVER_NAME'];?>"/>
	<link rel="alternate" hreflang="ru" href="https://bristol.house/ru/" />
	<link rel="alternate" hreflang="uk" href="https://bristol.house/" />
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
<style>
.one_text h1 {
    font-size: 71px;
    line-height: 0.9;
    font-family: "Solomon Sans Thin";
}
</style>
<!--end timer -->
          <div class="one_text_left wow bounceInRight">
            <h1>BRISTOL comfort house &minus; </h1>
            <div class="one_text_box">
              <div class="one_text_box1">
                <div class="one_text_box2">
                  це оптимальний вибір для тих, хто бажає отримати якомога більше переваг за розумну ціну.</div>
                </div>
              </div>
          </div>

          <div class="one_text_right wow bounceInLeft">
		   <a class="button" href="#callback" style="background-color:white; color:#e3222c; margin:10px auto; display: block;">Замовити дзвінок</a>
           <a class="button"  href="/flats/"  style="background-color:white; color:#e3222c; margin:10px auto; display: block;">Обрати квартиру</a>
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
	<div id="callback" class="section_eight" style="background:none;">
      
      
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

      </div>
    </div>

    <div class="section_two">
      <div class="wrapper">
        <div class="two_left">
          <h3 class="wow bounceInLeft">Ключова інформація</h3>


          <a class="button" data-fancybox="group" href="/img/gal/1.jpg" data-caption="Фото проекту. 24.05.17" style="background-color:white; color:#e3222c;">Переглянути фото</a>
          <a data-fancybox="group" href="/img/gal/2.jpg" data-caption="Фото проекту. 24.05.17"></a>
          <a data-fancybox="group" href="/img/gal/3.jpg" data-caption="Фото проекту. 24.05.17"></a>
          <a data-fancybox="group" href="/img/gal/4.jpg" data-caption="Фото проекту. 24.05.17"></a>

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
            <div class="two_info_item two_item1 wow fadeInDown"><a href="/build/" style="text-decoration:none; color:#0E0E0E;">Монолітно-каркасна технологія будівництва</a></div>
            <div class="two_info_item two_item2 wow fadeInDown"><a href="#" style="text-decoration:none; color:#0E0E0E;">Комерційні приміщення на першому поверсі</a></div>
            <div class="two_info_item two_item3 wow fadeInLeft"><a href="#" style="text-decoration:none; color:#0E0E0E;">Благоустрій прибудинкової території: дитячий та спортивний майданчики, місця для відпочинку</a></div>
            <div class="two_info_item two_item4 wow fadeInRight"><a href="/parking/" style="text-decoration:none; color:#0E0E0E;">Паркінг</a></div>
            <div class="two_info_item two_item5 wow fadeInLeft"><a href="#" style="text-decoration:none; color:#0E0E0E;">Світлі та просторі парадні</a></div>
            <div class="two_info_item two_item6 wow fadeInRight"><a href="#" style="text-decoration:none; color:#0E0E0E;">Закрита прибудинкова територія</a></div>
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
              <h3><a href="/map/" style="text-decoration:none; color:#0E0E0E;">розташування</a></h3>
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

      <div class="four_name wow bounceInLeft">Обрати квартиру</div>
      <div class="line_white"></div>
      <a class="button" href="/flats/">План поверху</a>
    </div>

    <div id="cause" class="section_five">
      <div class="wrapper">
        <div class="trigger-5"></div>
        <div class="five_name wow bounceInLeft"><a href="/cause/" style="text-decoration:none; color:#0E0E0E;">5 ВАЖЛИВИХ ПРИЧИН </br> ОБРАТИ Bristol</a></div>
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
      <div class="six_name wow bounceInLeft"><h2>суспільний простір</h2></div>
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
      <div class="seven_name wow bounceInLeft"><a href="/builder/" style="text-decoration:none; color:#0E0E0E;">забудовники</a></div>
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
    <div id="builder" class="section_seven">
      <div class="seven_name wow bounceInLeft"><a href="/builder/" style="text-decoration:none; color:#0E0E0E;">Проекти цього забудовника</a></div>
      <div class="line_black"></div>
      <div class="seven_box">
        <div class="seven_box_item  wow pulse" style="width: 280px">
          <div class="seven_builder">
            <a href="http://rybalsky.com.ua/" target="_blank">
                  <img src="img/icons/rybalsky-logo-.svg" alt="logoKDD" width="160px">
            </a>
          </div>
        <div class="seven_text">Rybalsky</div>
        </div>
        <div class="seven_box_item  wow pulse" style="width: 280px">
          <div class="seven_builder">
            <a href="http://einstein.house/" target="_blank">
                <img src="img/icons/EINSTEIN-logo-blue.svg" alt="logoKDD" width="140px">
            </a>
          </div>
        <div class="seven_text">Einstein concept house</div>
        </div>
  <div class="seven_box_item  wow pulse"  style="width: 280px">
          <div class="seven_builder">
            <a href="http://chicago.kiev.ua/" target="_blank">
              <img src="img/icons/Chikago.svg" alt="river" width="320px"/>
            </a>
          </div>
        <div class="seven_text">Chicago central house</div>
        </div>
        <div class="seven_box_item  wow pulse" style="width: 280px">
                <div class="seven_builder">
                  <a href="http://new-york.com.ua/">
    									<img src="img/icons/Logo SVG-ny2.svg" alt="river" width="320px"/>
    							</a>
                </div>
              <div class="seven_text">New York central house</div>
              </div>
      </div>
    </div>
<?php
$webAd = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];

?>
    <div id="callback" class="section_eight">
      <div class="eight_name wow bounceInLeft"><h2>зв&prime;яжіться з нами</h2></div>
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
            <h4>Ведуться монолітні роботи з перекриття 11 поверху.</h4>
            <p>Ми регулярно повідомляємо про етапи виконання робіт, публікуючи фото-звіти.</p>
          </div>
          <a class="button but_bud" href="/build/">Дивитися хід будівництва</a>
          <a class="button but_web" href="/webcam/"><img src="img/icons/web.png" alt="web">Веб-камерa</a>
        </div>
      </div>

      <div class="nine_house">
        <div class="wrapper clearfix">

        <div class="house_box">
         <div class="works_progres wow flip"><span>10</span><br>поверхів<br>побудовано</div>

        </div>

        <div class="house_radial">
          <div id="rad1" class="radial"></div>

          <div id="rad2" class="radial"></div>

          <div id="rad3" class="radial"></div>

          <div id="rad4" class="radial"></div>
        </div>

        <div class="nine_finish">Введення в експлуатацію: перший квартал 2018 року. </div>
        <a class="button but_det" href="/build/">Докладніше</a>
      </div>

      </div>

    </div>

    <div id="contacts" class="section_ten">
      <div class="ten_name bounceInLeft">контакти</div>
      <div class="line_black"></div>
      <span>Щоб отримати додаткову інформацію, будь ласка, зв'яжіться із нами:</span>

      <div class="ten_box">
        <div class="ten_box_item wow flip">
          <div class="ten_round"><a href="/map/"><img src="img/icons/big_pin.png" alt="pin"></a></div>
          <h4>Відділ продажу:</h4>
          <span>проспект В. Лобановського, 146Б</span>
        </div>

        <div class="ten_box_item wow flip">
          <div class="ten_round"><a href="/" id="phone_mob1"><img src="img/icons/big_tel.png" alt="pin"></a></div>
          <h4>(044) 29 03 444</h4>
          <span>з 10:00 до 20:00 </span>
        </div>

        <div class="ten_box_item wow flip">
          <div class="ten_round"><a href="/#callback"><img src="img/icons/big_letter.png" alt="pin" style="margin-top:50px;"></a></div>
          <h4>E-mail:</h4>
          <span>info@bristol.house</span>
        </div>
      </div>
    </div>
<?php include 'include/futer.php';?>

    <!-- ===========modal window============ -->

    <style media="screen">
     .main_overlay {
       position: fixed;
       top: 0;
       left: 0;
       z-index: 8888888;
       width: 100%;
       height: 100%;
       background-color: rgba(0, 0, 0, 0.4);
     }
     .main_modal{
       position: fixed;
       font-family: inherit;
       z-index: 998;
       top:0;bottom: 0;left: 0;right: 0;
       margin: auto;
       color: #2C2C2C;
       width: 740px;
       height: 265px;
       background: url('img/spirit.png') no-repeat #e6e6e6;
       /*background-color: #ff000b;*/
       box-sizing: border-box;
       padding: 40px 20px;
       box-shadow: 1px 1px 10px rgba(0,0,0,0.8);
       /*border-radius: 6px;*/
     }
     .main_modal .modal_content{
       width: 100%;
       height: 100%;
       box-sizing: border-box;
       padding: 10px 20px;
       position: relative;

     }
     .main_modal .modal_close{
       position: absolute;
       z-index: 999;
       top:-40px;
       right: -20px;
       cursor: pointer;
     }
     .main_modal h3{
       font-size: 40px;
       padding: 0 0 20px;
       text-align: center;
       text-transform: uppercase;
     }
     .main_modal .modal_text{
       font-size: 30px;
       text-align: center;
       letter-spacing: 2px;
       line-height: 1.3;
     }
     .main_modal a {
       display: block;
       margin: 22px auto 0;
       width: 540px;
       padding: 14px;
       font-size: 20px;
       color: #2C2C2C;
       text-decoration: none;
       border: 1px solid #2C2C2C;
       text-transform: uppercase;
     }
     .main_modal a:hover {
       box-shadow: 1px 1px 1px rgba(255, 255, 255, 0.3);
     }
     @media only screen and (max-width:768px) {
       .main_modal{
         width: 300px;
         height: 300px;
         padding: 20px 10px;
       }
       .main_modal .modal_content{
         padding: 10px 20px;
       }
       .main_modal .modal_close{
         top:-20px;
         right: -10px;
       }
       .main_modal .modal_close img{
         width: 20px!important;
       }
       .main_modal h3{
         font-size: 28px;
         padding: 0 0 10px;
       }
       .main_modal .modal_text{
         font-size: 20px;
       }
       .main_modal a {
         margin:24px auto 0;
         width: 200px;
         padding: 14px;
         font-size: 14px;
       }
     }
     </style>
     <div class="main_overlay">
       <div class="main_modal">
         <div class="modal_content">
           <div class="modal_close"><img src="/img/close_w.svg" alt="" width="40"></div>
           <!-- <h3>ЛИШЕ У ЧЕРВНІ!</h3> -->
           <div class="modal_text">
           ПОДАРУНОК КОЖНОМУ ПОКУПЦЕВІ У ЧЕРВНІ - 5-ЗІРКОВИЙ ВІДПОЧИНОК У ГРЕЦІЇ!
             <a href="/contact/">Дізнайтеся більше у відділі продажу!</a>
           </div>
         </div>
       </div>
     </div>


     <script type="text/javascript">
     $('.modal_close, .main_overlay').click(function(){
       console.log("7777"),
       $('main_modal').hide(),
       $('.main_overlay').fadeOut();
     });

     </script>


     <!-- ===========end modal window============ -->


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
    <script src="js/header.js"></script>
    <script>
      if(window.screen.width > 768) {
      	document.write('<script src="js/header.js"><\/script>');
      }
    </script>

    <script type="text/javascript" src="js/lib/wow.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-1.7.1.min.js"></script> -->

    <script type="text/javascript" src="js/CircularLoader-v1.3.js"></script>
    <script type="text/javascript">

        $("#rad1").circularloader({
        backgroundColor: "#ffffff",//background colour of inner circle
        fontColor: "#000000",//font color of progress text
        fontSize: "20px",//font size of progress text
        radius: 40,//radius of circle
        progressBarBackground: "#f6f6f6",//background colour of circular progress Bar
        progressBarColor: "#e4202b",//colour of circular progress bar
        progressBarWidth: 80,//progress bar width
        progressPercent: 25.94,//progress percentage out of 100
        progressValue: "25.94%",//diplay this value instead of percentage
        showText: true,//show progress text or not
        title: "Загально будівельні <br>роботи",//show header title for the progress bar
        });
    </script>
    <script type="text/javascript">
        $("#rad2").circularloader({
        backgroundColor: "#ffffff",//background colour of inner circle
        fontColor: "#000000",//font color of progress text
        fontSize: "20px",//font size of progress text
        radius: 40,//radius of circle
        progressBarBackground: "#f6f6f6",//background colour of circular progress Bar
        progressBarColor: "#e4202b",//colour of circular progress bar
        progressBarWidth: 80,//progress bar width
        progressPercent: 4.38,//progress percentage out of 100
        progressValue: true,//diplay this value instead of percentage
        showText: true,//show progress text or not
        title: "Мережі",//show header title for the progress bar
        });
    </script>
    <script type="text/javascript">
        $("#rad3").circularloader({
        backgroundColor: "#ffffff",//background colour of inner circle
        fontColor: "#000000",//font color of progress text
        fontSize: "20px",//font size of progress text
        radius: 40,//radius of circle
        progressBarBackground: "#f6f6f6",//background colour of circular progress Bar
        progressBarColor: "#e4202b",//colour of circular progress bar
        progressBarWidth: 80,//progress bar width
        progressPercent: 0,//progress percentage out of 100
        progressValue:0,//diplay this value instead of percentage
        showText: true,//show progress text or not
        title: "Фасад",//show header title for the progress bar
        });
    </script>

    <script type="text/javascript">
        $("#rad4").circularloader({
        backgroundColor: "#ffffff",//background colour of inner circle
        fontColor: "#000000",//font color of progress text
        fontSize: "20px",//font size of progress text
        radius: 40,//radius of circle
        progressBarBackground: "#f6f6f6",//background colour of circular progress Bar
        progressBarColor: "#e4202b",//colour of circular progress bar
        progressBarWidth: 80,//progress bar width
        progressPercent: 0,//progress percentage out of 100
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
<script type="text/javascript" src="js/jquery.fancybox3.js"></script>

<script type="text/javascript">
function mob_phone_replace(){
	var winWidth = $( window ).width();

	if( winWidth < 768 ){
		var a = $('#phone_ring').html();

		a = a.replace(/\D/g, '');
		a = "tel:" + a;
		$('#phone_mob').attr('href', a);
		$('#phone_mob1').attr('href', a);
	}

}
 mob_phone_replace();
 $(window).on('resize', mob_phone_replace);
 </script>
  </body>

</html>
