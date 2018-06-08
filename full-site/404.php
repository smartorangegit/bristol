<?php
$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$pieces = explode("/", $actual_link);
//print_r($pieces);
if($pieces[3] == 'ru')
{
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <link rel="icon" href="/img/cimvol.png" type="image/png" />
    <title>Страница 404</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/jquery.fancybox3.css">
    <link rel="stylesheet" href="/css/animate.css">
    <link rel="stylesheet" href="/css/menu.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="/js/lib/greensock/TweenMax.min.js"></script>
    <script type="text/javascript" src="/js/lib/scrollmagic/ScrollMagic.min.js"></script>
    <script type="text/javascript" src="/js/lib/scrollmagic/plugins/animation.gsap.js"></script>
    <script type="text/javascript" src="/js/lib/wow.min.js"></script>
    <meta name="description" content="ЖК Bristol Comfort House житловий комплекс в Києві Відділ продажу: ☎ (044) 22 77 144, Адреса м.Київ, впр-т В. Лобановського,146Б">
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
    <script src="/js/lib/plugins/debug.addIndicators.min.js"></script>
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
<?php include 'include/main_menu_ru.php';?> 
<div style="height:150px;"></div> 
<div class="Rez" style="display:none;">
<div id="Lenny">
<div id="homer">

</div>
<div id="carl" =""="">
<p id="fiv_tx"><br><strong>BRISTOL smart house</strong> - это оптимальный выбор для тех,<br>   кто желает получать как можно больше преимуществ<br>за разумную цену.
<br><br>
Дом расположен в Голосеевском районе,<br>
по адресу:<strong> проспект В.Лобановского, 146Б.</strong></p>
</div>
</div>

<p id="fiv_tx2">

</p>

</div>
<div>
<p id="fiv_tx2">
404
</p>
<br>
<p class="fr_1"><strong>К СОЖАЛЕНИЮ, СТРАНИЦА НЕ НАЙДЕНА!</strong></p><br>
<p class="fr_2">Страница, которую вы ищете, возможно, была удалена, ее название было изменено, или временно недоступна.</p><br>
<a href="http://bristol.house/ru/" class="fr_3">На главную</a><br>
<a href="http://bristol.house/ru/flats/" class="fr_3" style="padding: 0 0 0 38%;">Варианты планировок</a><br>
</div>
<style>
.Rez{
     padding: 55px 0px 0px 0;    height: 270px;
    width: 44%;
    /* border: solid 1px red; */
    background: #e4202b;
}
#fiv{
        color: white;
    font-size: 100px;
    padding: 0 0 0 40px;
    font-family: 'PT Sans', sans-serif;
}
#fiv_tx{
       color: white;
    font-size: 20px;
    /* text-align: center; */
    padding: 0 0 0 5px;
    font-family: 'PT Sans', sans-serif;
}
#fiv_tx2{
    color: #e4202b;
    font-size: 400px;
    /* text-align: center; */
    padding: 0 0 0 28%;
    font-family: 'PT Sans', sans-serif;
}
#Lenny{
display: inline-flex;
padding: 0 0 0 3%;
}
#carl
{
padding: 4px 0px 0px 30px;
}
.fr_1{
    font-size: 40px;
    /* text-align: center; */
    padding: 0 0 0 24%;
}
.fr_2{
font-size: 25px;
    padding: 0 0 0 10%;
}
.fr_3{
    font-size: 30px;
    padding: 0 0 0 43%;
    color: #e4202b;
	text-decoration: none;
	text-align:center;

}


</style>
<div style="height:200px;"></div>
    <div class="footer clearfix">
      <div class="wrapper">
        <div class="copy">© 2016 BRISTOL comfort house все права защищены.</div>
        <div class="develop">Разработка сайта <img src="/img/logo/logo_smart.png" alt="smart"></div>
      </div>
    </div>
	    <div id="toTop"><img src="/img/icons/up.png" alt="up"></div>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TS4HDBT"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<script type="text/javascript" src="/js/jquery.fancybox3.js"></script>

<script type="text/javascript">
function mob_phone_replace(){
	var winWidth = $( window ).width();
 
	if( winWidth < 768 ){
		var a = $('#phone_ring').html();
		
		a = a.replace(/\D/g, '');
		a = "tel:" + a;
		$('#phone_mob').attr('href', a);
	} 

}
 mob_phone_replace();
 $(window).on('resize', mob_phone_replace);
 </script>
</body>
</html>
<?php
}
else{
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <link rel="icon" href="/img/cimvol.png" type="image/png" />
    <title>Сторінка 404</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/jquery.fancybox3.css">
    <link rel="stylesheet" href="/css/animate.css">
    <link rel="stylesheet" href="/css/menu.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="/js/lib/greensock/TweenMax.min.js"></script>
    <script type="text/javascript" src="/js/lib/scrollmagic/ScrollMagic.min.js"></script>
    <script type="text/javascript" src="/js/lib/scrollmagic/plugins/animation.gsap.js"></script>
    <script type="text/javascript" src="/js/lib/wow.min.js"></script>
    <meta name="description" content="ЖК Bristol Comfort House житловий комплекс в Києві Відділ продажу: ☎ (044) 22 77 144, Адреса м.Київ, впр-т В. Лобановського,146Б">
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
    <script src="/js/lib/plugins/debug.addIndicators.min.js"></script>
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
<?php include 'include/main_menu.php';?> 
<div style="height:150px;"></div> 
<div class="Rez" style="display:none;">
<div id="Lenny">
<div id="homer">

</div>
<div id="carl" =""="">
<p id="fiv_tx"><br><strong>BRISTOL smart house</strong> - це оптимальний вибір для тих,<br>   хто бажае отримувати якомога більше переваг<br>за розумну ціну.
<br><br>
Будинок розташований у Голосіївському районі,<br>
за адресою:<strong> проспект В.Лобановского, 146Б.</strong></p>
</div>
</div>

<p id="fiv_tx2">

</p>

</div>
<div>
<p id="fiv_tx2">
404
</p>
<br>
<p class="fr_1"><strong>ШКОДА, СТОРІНКА НЕ ЗНАЙДЕНА!</strong></p><br>
<p class="fr_2">Сторінка, яку ви шукаєте, можливо, була видалена, її назва була змінена, або тимчасово недоступна.</p><br>
<a href="http://bristol.house/" class="fr_3">На головну</a><br>
<a href="http://bristol.house/flats/" class="fr_3" style="padding: 0 0 0 39%;">Варіанти планувань</a><br>
</div>
<style>
.Rez{
     padding: 55px 0px 0px 0;    height: 270px;
    width: 44%;
    /* border: solid 1px red; */
    background: #e4202b;
}
#fiv{
        color: white;
    font-size: 100px;
    padding: 0 0 0 40px;
    font-family: 'PT Sans', sans-serif;
}
#fiv_tx{
       color: white;
    font-size: 20px;
    /* text-align: center; */
    padding: 0 0 0 5px;
    font-family: 'PT Sans', sans-serif;
}
#fiv_tx2{
    color: #e4202b;
    font-size: 400px;
    /* text-align: center; */
    padding: 0 0 0 28%;
    font-family: 'PT Sans', sans-serif;
}
#Lenny{
display: inline-flex;
padding: 0 0 0 3%;
}
#carl
{
padding: 4px 0px 0px 30px;
}
.fr_1{
    font-size: 40px;
    /* text-align: center; */
    padding: 0 0 0 29%;
}
.fr_2{
font-size: 25px;
    padding: 0 0 0 10%;
}
.fr_3{
    font-size: 30px;
    padding: 0 0 0 43%;
    color: #e4202b;
	text-decoration: none;
	text-align:center;

}


</style>
<div style="height:200px;"></div>
    <div class="footer clearfix">
      <div class="wrapper">
        <div class="copy">© 2016 BRISTOL comfort house усі права захищено.</div>
        <div class="develop">Розробка сайту <img src="/img/logo/logo_smart.png" alt="smart"></div>
      </div>
    </div>
	    <div id="toTop"><img src="/img/icons/up.png" alt="up"></div>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TS4HDBT"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<script type="text/javascript" src="/js/jquery.fancybox3.js"></script>

<script type="text/javascript">
function mob_phone_replace(){
	var winWidth = $( window ).width();
 
	if( winWidth < 768 ){
		var a = $('#phone_ring').html();
		
		a = a.replace(/\D/g, '');
		a = "tel:" + a;
		$('#phone_mob').attr('href', a);
	} 

}
 mob_phone_replace();
 $(window).on('resize', mob_phone_replace);
 </script>
</body>
</html>
<?php } ?>