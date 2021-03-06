<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <link rel="icon" href="/img/cimvol.png" type="image/png" />
    <title>ЖК BRISTOL Comfort House - контакты отдела продаж</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/contact.css">
    <link rel="stylesheet" href="/css/animate.css">
    <link rel="stylesheet" href="/css/menu.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" scr="/js/scrollissimo.min.js"></script>
    <script type="text/javascript" src="/js/lib/greensock/TweenMax.min.js"></script>
    <script type="text/javascript" src="/js/lib/scrollmagic/ScrollMagic.min.js"></script>
    <script type="text/javascript" src="/js/lib/scrollmagic/plugins/animation.gsap.js"></script>
    <script type="text/javascript" src="/js/lib/wow.min.js"></script>
	<meta name="description" content="ЖК BRISTOL Comfort House контакты отдела продаж Отдел продаж: ☎ (044) 22 77 144, г.Киев, пр-т В. Лобановского,146Б">
	<link rel="canonical" href="<?php echo 'https://'.$_SERVER['SERVER_NAME'], $_SERVER['REQUEST_URI'];?>"/>
	<link rel="alternate" hreflang="ru" href="https://bristol.house/ru/contact/" />
	<link rel="alternate" hreflang="uk" href="https://bristol.house/contact/" />
  </head>
  <body>
    <script>
        var controller = new ScrollMagic.Controller();
        new WOW().init();
    </script>
    <?php include '../../include/menu_ru.php';?>
<?php include '../../include/gtm.php';?>
    <div class="page_contact section_ten">
      <div class="ten_name bounceInLeft"><h1>контакты</h1></div>
      <span>Чтобы получить дополнительную информацию , пожалуйста, свяжитесь с нами:</span>

      <div class="ten_box">
        <div class="ten_box_item wow flip">
          <div class="ten_round"><a href="/ru/map/"><img src="/img/icons/big_pin.png" alt="pin"></a></div>
          <h4>Отдел продаж:</h4>
          <span>пр-т В. Лобановского, 146Б</span>
        </div>

        <div class="ten_box_item wow flip">
          <div class="ten_round"><a href="#" id="phone_mob1"><img src="/img/icons/big_tel.png" alt="pin"></a></div>
          <h4 class="phone_ring">(044) 22-77-144</h4>
            <div>Пн-пт: 10.00 - 20.00</div>
            <div>Сб: 10.00 - 19.00</div>
            <div>Вск: 10.00 - 18.00</div>
        </div>

        <div class="ten_box_item wow flip">
          <div class="ten_round"><a href="https://www.facebook.com/BristolComfortHouse/?fref=ts"><img class="fb" src="/img/icons/fb.png" alt="pin"></a></div>
          <h4>Facebook</h4>
          <span>​​​​​​​​</span>
        </div>

        <div class="ten_box_item wow flip">
          <div class="ten_round"><a href="/ru/#callback"><img src="/img/icons/big_letter.png" alt="pin" style="margin-top:50px;"></a></div>
          <h4>E-mail:</h4>
          <span>info@bristol.house​​​​​​​​</span>
        </div>
      </div>
    </div>


<?php include '../../include/futer_ru.php';?>

    <script src="/js/script.js"></script>
    <script type="text/javascript" src="/js/lib/wow.min.js"></script>

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
