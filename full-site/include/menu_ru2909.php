<script src="https://www.google.com/recaptcha/api.js?onload=myCallBack&render=explicit"></script>
    <script>
         var reCaptcha1;
         var reCaptcha2;
        var myCallBack = function() {
        reCaptcha1 = grecaptcha.render('reCaptcha1', {
        'sitekey' : '6Lc4XxkUAAAAAMYMf0eKqcluGfnpYR_xAjSytqAb', //Replace this with your Site key
        'theme' : 'light'
        });
        var element=document.getElementById('reCaptcha2');
        if(!element){} else {
                reCaptcha2 = grecaptcha.render('reCaptcha2', {
                  'sitekey' : '6Lc4XxkUAAAAAMYMf0eKqcluGfnpYR_xAjSytqAb', //Replace this with your Site key
                  'theme' : 'light'
                });
        }
              };
                </script>
<div id="overlay"></div>
<div id="one_callback" class="one_callback">
  <h3>заказать обратный звонок</h3>
  <p>получить консультацию специалиста</p>
  <span class="close_popup"><img src="/img/icons/close_pop.svg" alt=""></span>
  <form class="one" action="/application.php" method=post enctype="multipart/form-data">
    <input type="text" name="name" placeholder="Имя *" required>
    <!-- <input type="email" name="email" placeholder="e-mail *" required> -->
    <input type="tel" name="tel" placeholder="Телефон *" pattern="[0-9]{10}" required>
    <input  name="webad" class="webad" type="hidden" value="<?=$webAd;?>"/>
    <input  name="metka" class="metka" type="hidden" value="Bristol callback"/>
    <input  name="inn" class="userInn" type="hidden" value="Bristol callback"/>

    <input type="submit" name="" value="Отправить">
    <div class="not" id="reCaptcha1" ></div>
  </form>
</div>


<style media="screen">
  input {
    width: 350px;
  }
  input[type='submit'] {
    float: right;
    margin-right: 56px;
    width: 350px;
    height: 60px;
  }
  @media only screen and (max-width: 768px;) {
    input {
      width: 270px;
    }
    input[type='submit'] {
      float: none;
      margin 0 auto;
      width: 270px;
      height: 50px;
    }
  }
</style>

<div class="webcamera nomobile"><a href="/ru/webcam/">Веб-камера</a></div>
<?php
$actual_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$pieces = explode("/", $actual_link);
//print_r($pieces);
//echo $pieces[0]."//".$pieces[2]."/".$pieces[4]."/";
if($pieces[3] == "ru" || $pieces[3] == "en"){
$urllang = str_replace('/ru', "",$actual_link);
$urllang_n = str_replace('/ru', "/en",$actual_link);

$url_r = "https://$_SERVER[HTTP_HOST]"."$_SERVER[REQUEST_URI]";
$url_a = $urllang;
$url_n = $urllang_n;
}
else{
$uRa = "https://$_SERVER[HTTP_HOST]"."$_SERVER[REQUEST_URI]";
$uRr = "https://$_SERVER[HTTP_HOST]".'/ru'."$_SERVER[REQUEST_URI]";
$uRn = "https://$_SERVER[HTTP_HOST]".'/en'."$_SERVER[REQUEST_URI]";
}
//echo $uRa ;
?>
<div class="header_wrapper" style="z-index:999;">
  <div class="round-block nomobile"><a href="/ru/"></a></div>
    <div class="header">
	<div class="wowoo yesmobile"><a class="wowoo-link" href="#" id="phone_mob"><?php/*<img src="/img/icons/big_tel.png">*/?><span id="tel_tel">(044) 22-77-144</span></a></div>
      <div class="header-top">
        <div class="header-content">
          <div class="lang">
            <a href="<?if(!empty($url_a)){ echo $url_a;}else{ echo $uRa;}?>">Укр</a>
            <a href="<?if(!empty($url_r)){ echo $url_r;}else{ echo $uRr;}?>">Рус</a>
            <!-- <a href="#">Eng</a> -->
          </div>
          <div class="nav-logo yesmobile"><a href="/ru/"><img src="/img/logo/bristol.svg" alt=""></a></div>
          <div class="sale nomobile" id="phone_ring">Отдел продаж: (044) 22-77-144</div>
          <div class="webcam yesmobile"><a href="/ru/webcam/">Веб-камера</a></div>
          <div class="adress nomobile">пр-т В. Лобановского, 146Б</div>
          <div class="mail nomobile"><a id="phone" href="#">обратная связь​​​​​​​​</a></div>
      </div>
      </div>
	 <style>
		.wowoo {
			padding-top: 0 !important;
			display: inline-block;
			font-size: 16px;
			border-radius: 100%;
			height: 40px;
			line-height: 40px;
			text-align: center;
			vertical-align: top;
			border: 0px solid transparent;
			position: absolute;
			-webkit-transition: all 0.5s ease-in-out;
			-moz-transition: all 0.5s ease-in-out;
			-ms-transition: all 0.5s ease-in-out;
			-o-transition: all 0.5s ease-in-out;
			transition: all 0.5s ease-in-out;
			margin: 20px 10px;
			z-index: 50;
			/*right: 0;*/
      left: 50%;
      margin-left: -60px;
      top: 98px;
		}
		.wowoo img{
			width: 5px;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			margin: auto;
			position: absolute;
		}

		.wowoo-link {
			display: block;
			width: 100%;
			height: 100%;
			text-decoration: none;
			color: black;
		}

	  </style>
<script type="text/javascript">
function mob_phone_replace(){
	var winWidth = $( window ).width();
 
	//if( winWidth768 ){
		setTimeout(function(){
			var a = $('#phone_ring').html();
			$('#tel_tel').html(a.replace(/[^0-9-\(\)]/g, ''));
			a = a.replace(/\D/g, '');
			
			a = "tel:" + a;
			$('#phone_mob').attr('href', a);
		},1000);
		
		
	//} 

}
 mob_phone_replace();
 $(window).on('onload resize', mob_phone_replace);
 </script>

      <div class="nav">
        <svg version="1.1" id="Layer_1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" x="0px" y="0px"
           viewBox="1312 288.6 3219.9 265.3" style="enable-background:new 1312 288.6 3219.9 265.3;" xml:space="preserve">
        <polygon id="XMLID_3_" class="st10" points="1707,391.1 1593.3,340.1 1314.8,340.1 "/>
        <polygon id="XMLID_1_" class="st1" points="1861.5,404.1 1809.8,440.1 1707,391.1 1593.3,340.1 "/>
        <polygon id="XMLID_5_" class="st2" points="1956.1,340.1 1861.5,404.1 1593.3,340.1 "/>
        <polygon id="XMLID_4_" class="st3" points="1809.8,440.1 2161.8,362.6 1956.1,340.1 1861.5,404.1 "/>
        <polygon id="XMLID_7_" class="st111" points="2101.8,502.1 2161.8,362.6 1809.8,440.1 "/>
        <polygon id="XMLID_8_" class="st222" points="2390.1,423.1 2101.8,502.1 2161.8,362.6 "/>
        <polygon id="XMLID_9_" class="st1" points="2478.1,509.4 2390.1,423.1 2281.5,452.9 "/>
        <polygon id="XMLID_10_" class="st2" points="2606.3,480.9 2478.1,509.4 2390.1,423.1 "/>
        <polygon id="XMLID_6_" class="st1000" points="2396.1,371.1 2606.3,480.9 2390.1,423.1 2161.8,362.6 "/>
        <polygon id="XMLID_12_" class="st111" points="2690.3,388.1 2606.3,480.9 2396.1,371.1 "/>
        <polygon id="XMLID_13_" class="st222" points="2998.8,415.1 2606.3,480.9 2690.3,388.1 "/>
        <polygon id="XMLID_14_" class="st1" points="1956.1,340.1 2112.1,340.1 2161.8,362.6 "/>
        <polygon id="XMLID_11_" class="st2" points="2690.3,388.1 2112.1,340.1 2161.8,362.6 2396.1,371.1 "/>
        <polygon id="XMLID_15_" class="st3" points="3073.1,340.1 2781.6,396.1 2690.3,388.1 2112.1,340.1 "/>
        <polygon id="XMLID_17_" class="st10" points="3223.6,388.1 3073.1,340.1 2781.6,396.1 "/>
        <polygon id="XMLID_16_" class="st111" points="2998.8,415.1 3344.5,453.7 3223.6,388.1 2781.6,396.1 "/>
        <polygon id="XMLID_19_" class="st1000" points="3204.6,500.1 2998.8,415.1 2855.1,439.2 "/>
        <polygon id="XMLID_20_" class="st222" points="3344.5,453.7 3204.6,500.1 2998.8,415.1 "/>
        <polygon id="XMLID_21_" class="st10" points="3818.1,426.1 3344.5,453.7 3743.8,513.9 "/>
        <polygon id="XMLID_22_" class="st2" points="3937.1,396.6 3743.8,513.9 3818.1,426.1 "/>
        <polygon id="XMLID_23_" class="st1" points="4011.6,475.6 3937.1,396.6 3743.8,513.9 "/>
        <polygon id="XMLID_24_" class="st222" points="4202.1,355.6 4011.6,475.6 3937.1,396.6 "/>
        <polygon id="XMLID_25_" class="st2" points="3073.1,340.1 3351.6,340.1 3223.6,388.1 "/>
        <polygon id="XMLID_26_" class="st222" points="3552.5,441.6 3223.6,388.1 3344.5,453.7 "/>
        <polygon id="XMLID_27_" class="st1000" points="3351.6,340.1 3552.5,441.6 3223.6,388.1 "/>
        <polygon id="XMLID_28_" class="st111" points="3818.1,426.1 3351.6,340.1 3552.5,441.6 "/>
        <polygon id="XMLID_29_" class="st2" points="3856.6,340.1 3818.1,426.1 3351.6,340.1 "/>
        <polygon id="XMLID_18_" class="st10" points="4146.1,340.1 3856.6,340.1 3818.1,426.1 3937.1,396.6 "/>
        <polygon id="XMLID_30_" class="st1" points="4202.1,355.6 3937.1,396.6 4146.1,340.1 4301.6,340.1 "/>
        <polygon id="XMLID_31_" class="st1000" points="4085.2,429.2 4529.1,340.1 4301.6,340.1 4202.1,355.6 "/>
        <polygon class="st4" points="3743.8,513.6 3344.5,453.7 3204.6,500.1 2855.1,439.2 2606.3,480.9 2478.1,509.4 2281.5,452.9
          2101.8,502.1 1809.8,440.1 1707,391.1 1314.8,340.1 1707,399.9 1809.8,452.9 2101.8,522.9 2281.5,460 2478.1,527.9 2855.1,447.9
          3204.6,519.9 3351.6,464.9 3743.8,527.9 4011.6,485.9 4085.2,436.9 4529.1,340.1 4085.2,429.2 4011.6,475.6 "/>
        <g id="XMLID_34_">
          <rect x="2789.2" y="288.6" class="st5" width="265.5" height="265.5"/>
          <rect x="2802.8" y="302.2" class="st6" width="238.3" height="238.3"/>
          <g id="XMLID_38_">
            <g id="XMLID_126_">
              <g id="XMLID_152_">
                <path id="XMLID_153_" class="st7" d="M2937.4,346.3v6.3h-7.4v-6.3h-6.8v6.3h-6.8v-6.3h-6.7v6.3h-6.7v-6.3h-11.9
                  c0,0,0,58.9,0,58.6c25.1,8.7,34.9-9.3,58.5,0c0-0.9,0-58.6,0-58.6H2937.4z"/>
              </g>
              <g id="XMLID_151_">
                <path id="path816_45_" class="st7" d="M3030.5,440.1l-4.3-2l-1.6,4.5l-1.6-4.5l-4.3,2l2-4.3l-4.5-1.6l4.5-1.6l-2-4.3l4.3,2
                  l1.6-4.5l1.6,4.5l4.3-2l-2,4.3l4.5,1.6l-4.5,1.6L3030.5,440.1z"/>
                <path id="path816_44_" class="st7" d="M2825.1,440.1l-4.3-2l-1.6,4.5l-1.6-4.5l-4.3,2l2-4.3l-4.5-1.6l4.5-1.6l-2-4.3l4.3,2
                  l1.6-4.5l1.6,4.5l4.3-2l-2,4.3l4.5,1.6l-4.5,1.6L2825.1,440.1z"/>
              </g>
              <g id="XMLID_142_">
                <path id="XMLID_147_" class="st8" d="M2925.4,393.5c0.6,0.6,1.5,0.6,2,0c0.3-0.3,0.5-0.7,0.5-1.1c0.1,0.1,0.2,0.2,0.3,0.3
                  c2.4-0.7,4.8-1.1,6.8-0.6c0.1-0.1,0.1-0.1,0.2-0.2c-0.3,0.6-0.2,1.3,0.4,1.8c0.6,0.6,1.7,0.6,2.3,0c0.6-0.6,0.6-1.7,0-2.3
                  c-0.5-0.5-1.2-0.6-1.8-0.4c0.1-0.1,0.2-0.1,0.3-0.2c-0.5-1.9-0.2-4.3,0.6-6.7c-0.1-0.1-0.2-0.2-0.3-0.3c0.4,0,0.7-0.1,1-0.5
                  c0.6-0.6,0.6-1.5,0-2c-0.6-0.6-1.5-0.6-2,0c-0.3,0.3-0.5,0.6-0.5,1c-0.1-0.1-0.2-0.2-0.3-0.3c-2.4,0.7-4.6,0.8-6.6,0.4l0,0l0,0
                  l0,0l0,0l0,0l0,0c-0.1,0-0.1,0-0.2,0c0.2,0,0.3-0.1,0.4-0.2c0.3-0.3,0.3-0.7,0-0.9s-0.7-0.3-0.9,0c-0.1,0.1-0.2,0.3-0.2,0.5
                  l-14.2-14.1l0.2-0.6l2.5-0.6l0.9-0.9l-1.8-1.8l-1,1l-0.7-0.7l1-1l-1.3-1.3l-1,1l-0.6-0.6l1-1l-1.6-1.6l-0.6,0.6l-0.6,2.9l-1,0.2
                  l-0.6-0.6l-1.4,1.4l19.4,19.3c-0.2,0-0.3,0.1-0.5,0.2c-0.3,0.3-0.3,0.7,0,0.9c0.3,0.3,0.7,0.3,0.9,0c0.1-0.1,0.2-0.3,0.2-0.5
                  l0.1,0.2c0.5,1.9,0.4,4.2-0.4,6.6c0.1,0.1,0.2,0.2,0.4,0.3c-0.4,0-0.8,0.1-1.1,0.5C2925,392,2925,393,2925.4,393.5z M2910,364.5
                  l1.4-0.1l0.3,1.8L2910,364.5z M2928.6,390.6c0.1-0.3,0.2-0.5,0.3-0.6s0.1-0.2,0.1-0.3c0.6-1.6,0.6-2.7,0.3-4.3
                  c1.7,0.2,2.7,0.3,4.3-0.4c0.1,0,0.2-0.1,0.3-0.1l0,0l0,0l0,0c0.1-0.1,0.3-0.2,0.6-0.3c-1,2.1-1,3.2-0.7,5.1
                  C2931.9,389.5,2930.8,389.5,2928.6,390.6z"/>
                <path id="XMLID_143_" class="st8" d="M2914.8,391.5c-0.3-0.3-0.7-0.5-1.1-0.5c0.1-0.1,0.2-0.2,0.4-0.3c-0.7-2.4-0.8-4.6-0.4-6.6
                  l0.1-0.2c0,0.2,0.1,0.4,0.2,0.5c0.3,0.3,0.7,0.3,0.9,0c0.3-0.3,0.3-0.7,0-0.9c-0.1-0.1-0.3-0.2-0.5-0.2l19.4-19.3l-1.4-1.4
                  l-0.6,0.6l-1-0.2l-0.6-2.9l-0.6-0.6l-1.6,1.6l1,1l-0.6,0.6l-1-1l-1.3,1.3l1,1l-0.7,0.7l-1-1l-1.8,1.8l0.9,0.9l2.5,0.6l0.2,0.6
                  l-14.2,14c0-0.2-0.1-0.3-0.2-0.5c-0.3-0.3-0.7-0.3-0.9,0c-0.3,0.3-0.3,0.7,0,0.9c0.1,0.1,0.3,0.2,0.4,0.2c0,0-0.1,0-0.2,0l0,0
                  l0,0l0,0l0,0l0,0l0,0c-1.9,0.5-4.2,0.4-6.6-0.4c-0.1,0.1-0.2,0.2-0.3,0.3c0-0.4-0.1-0.7-0.5-1c-0.6-0.6-1.5-0.6-2,0
                  c-0.6,0.6-0.6,1.5,0,2c0.3,0.3,0.6,0.5,1,0.5c-0.1,0.1-0.2,0.2-0.3,0.3c0.7,2.4,1,4.7,0.6,6.7c0.1,0.1,0.2,0.2,0.3,0.2
                  c-0.6-0.3-1.3-0.1-1.8,0.4c-0.6,0.6-0.6,1.7,0,2.3c0.6,0.6,1.7,0.6,2.3,0c0.5-0.5,0.6-1.2,0.4-1.8c0.1,0.1,0.1,0.1,0.2,0.2
                  c1.9-0.5,4.4-0.1,6.8,0.6c0.1-0.1,0.2-0.2,0.3-0.3c0,0.4,0.1,0.8,0.5,1.1c0.6,0.6,1.5,0.6,2,0
                  C2915.4,393,2915.4,392,2914.8,391.5z M2928.6,366.2l0.3-1.8l1.4,0.1L2928.6,366.2z M2906.5,389.8c0.3-1.9,0.3-3.1-0.7-5.1
                  c0.3,0.1,0.5,0.2,0.6,0.3l0,0l0,0l0,0c0.1,0.1,0.2,0.1,0.3,0.1c1.6,0.6,2.7,0.6,4.3,0.4c-0.3,1.6-0.3,2.7,0.3,4.3
                  c0,0.1,0.1,0.2,0.1,0.3c0.1,0.1,0.2,0.3,0.3,0.6C2909.5,389.5,2908.5,389.5,2906.5,389.8z"/>
              </g>
              <g id="XMLID_127_">
                <path id="XMLID_138_" class="st7" d="M2846.2,449.5H2833v-30.3h11.8c2,0,3.8,0.3,5.3,0.7c1.5,0.5,2.6,1.2,3.3,2
                  c1.4,1.6,2.1,3.3,2.1,5.3c0,2.4-0.7,4.2-2.2,5.3c-0.6,0.4-0.9,0.6-1.1,0.7s-0.6,0.3-1.1,0.5c1.8,0.4,3.4,1.3,4.5,2.5
                  c1.1,1.3,1.7,2.9,1.7,4.8c0,2.1-0.7,4-2.1,5.6C2853.1,448.6,2850.4,449.5,2846.2,449.5z M2838.1,431.8h6.5
                  c3.7,0,5.5-1.3,5.5-3.8c0-1.5-0.5-2.5-1.4-3.1c-0.9-0.6-2.3-0.9-4.2-0.9h-6.6L2838.1,431.8L2838.1,431.8z M2838.1,444.8h8
                  c1.8,0,3.3-0.3,4.3-0.9c1-0.6,1.5-1.8,1.5-3.3c0-2.7-2.1-4.1-6.5-4.1h-7.4V444.8L2838.1,444.8z"/>
                <path id="XMLID_135_" class="st7" d="M2885.9,429.1c0,5-2.2,8.1-6.6,9.4l7.9,11h-6.5l-7.2-10.2h-6.7v10.2h-5.1v-30.3h11.3
                  c4.6,0,7.9,0.7,9.9,2.3C2885,423.1,2885.9,425.6,2885.9,429.1z M2879.2,433.3c1-0.9,1.6-2.3,1.6-4.3c0-1.9-0.6-3.3-1.6-4.1
                  c-1.1-0.7-3-1.1-5.7-1.1h-6.5v10.8h6.3C2876.2,434.7,2878.1,434.3,2879.2,433.3z"/>
                <path id="XMLID_134_" class="st7" d="M2892.4,419.2h5.1v30.3h-5.1V419.2z"/>
                <path id="XMLID_133_" class="st7" d="M2914.3,423.2c-1.5,0-2.7,0.3-3.7,0.9c-0.9,0.6-1.4,1.6-1.4,2.8s0.5,2.1,1.4,2.9
                  c0.9,0.6,3,1.4,6.1,2.1c3.1,0.7,5.5,1.8,7,3.1c1.6,1.4,2.4,3.3,2.4,6c0,2.7-1,4.8-3,6.5c-2,1.7-4.6,2.5-7.9,2.5
                  c-4.7,0-9-1.7-12.7-4.9l3.2-3.9c3.1,2.7,6.3,4,9.5,4c1.7,0,3-0.4,3.9-1c0.9-0.7,1.5-1.7,1.5-2.9c0-1.2-0.5-2.1-1.4-2.8
                  c-0.9-0.6-2.5-1.2-4.7-1.8c-2.2-0.6-3.9-1-5.1-1.5s-2.2-1-3.1-1.8c-1.8-1.4-2.7-3.4-2.7-6.3c0-2.8,1-5,3.1-6.5
                  c2-1.5,4.5-2.3,7.6-2.3c1.9,0,3.9,0.3,5.7,0.9c1.9,0.6,3.5,1.6,4.9,2.7l-2.8,3.9c-0.9-0.8-2.1-1.5-3.6-2
                  C2917.4,423.5,2915.9,423.2,2914.3,423.2z"/>
                <path id="XMLID_132_" class="st7" d="M2943.9,423.9v25.6h-5.1v-25.6h-9.2v-4.7h23.5v4.7H2943.9z"/>
                <path id="XMLID_129_" class="st7" d="M2982.3,445.4c-3.1,3-6.8,4.5-11.4,4.5c-4.5,0-8.3-1.5-11.4-4.5c-3.1-3.1-4.6-6.7-4.6-11.2
                  s1.6-8.2,4.6-11.2c3.1-3,6.8-4.5,11.4-4.5s8.3,1.5,11.4,4.5c3.1,3,4.6,6.7,4.6,11.2C2986.9,438.6,2985.3,442.4,2982.3,445.4z
                   M2978.6,426.4c-2-2.1-4.6-3.2-7.6-3.2c-3.1,0-5.5,1.1-7.6,3.2s-3.1,4.7-3.1,7.8c0,3.1,1,5.6,3.1,7.8c2,2.1,4.6,3.2,7.6,3.2
                  c3.1,0,5.5-1.1,7.6-3.2c2-2.1,3.1-4.7,3.1-7.8C2981.6,431.1,2980.7,428.5,2978.6,426.4z"/>
                <path id="XMLID_128_" class="st7" d="M2991.7,449.5v-30.3h5.1v25.4h13.9v4.9H2991.7z"/>
              </g>
            </g>
            <g id="XMLID_98_">
              <path id="XMLID_125_" class="st7" d="M2847.6,477.7c-3.7,0-6.7-3.1-6.7-6.7c0-3.7,3.1-6.7,6.7-6.7c0,0,2-0.1,3.9,1.3v1.8
                c0,0-1.4-1.8-3.9-1.8c-3,0-5.3,2.5-5.3,5.5c0,3,2.3,5.5,5.3,5.5c2.4,0,3.7-1.6,3.9-1.8v1.8
                C2849.4,477.8,2847.6,477.7,2847.6,477.7z"/>
              <path id="XMLID_122_" class="st7" d="M2854,471.1c0-3.7,3.1-6.7,6.7-6.7s6.7,3.1,6.7,6.7c0,3.7-3.1,6.7-6.7,6.7
                C2857,477.7,2854,474.8,2854,471.1z M2866,471.1c0-3-2.3-5.5-5.3-5.5s-5.3,2.5-5.3,5.5s2.3,5.5,5.3,5.5S2866,474,2866,471.1z"/>
              <path id="XMLID_121_" class="st7" d="M2882.2,464.4l2.6,13h-1.4l-1.7-9.2l-4.4,8.8l-4.3-8.8l-1.8,9.2h-1.4l2.6-13l4.9,9.5
                L2882.2,464.4z"/>
              <path id="XMLID_120_" class="st7" d="M2894.4,470.5l-0.5,1.3h-4.9v5.7h-1.4v-12.8h7.9l-0.5,1.3h-6v4.6L2894.4,470.5L2894.4,470.5
                z"/>
              <path id="XMLID_117_" class="st7" d="M2897.4,471.1c0-3.7,3.1-6.7,6.7-6.7c3.7,0,6.7,3.1,6.7,6.7c0,3.7-3.1,6.7-6.7,6.7
                C2900.5,477.7,2897.4,474.8,2897.4,471.1z M2909.4,471.1c0-3-2.3-5.5-5.3-5.5s-5.3,2.5-5.3,5.5s2.3,5.5,5.3,5.5
                S2909.4,474,2909.4,471.1z"/>
              <path id="XMLID_114_" class="st7" d="M2922.2,468.2c0,2.2-1.2,3.1-2.8,3.4l3.5,5.2l-1.1,0.9l-3.9-5.8c-0.1,0-0.2,0-0.3,0h-2.4
                v5.6h-1.4v-12.9h3.8C2920.1,464.6,2922.2,465.3,2922.2,468.2z M2915.2,470.5h2.4c1.8,0,3.1-0.6,3.1-2.3c0-1.8-1.4-2.3-3.1-2.3
                h-2.4V470.5z"/>
              <path id="XMLID_113_" class="st7" d="M2930.3,465.9v11.6h-1.4v-11.6h-4.4l0.5-1.3h9.8l-0.5,1.3H2930.3z"/>
              <path id="XMLID_112_" class="st7" d="M2951,464.9l1.4-0.5v13h-1.4v-5.7h-7.6v5.7h-1.4v-12.6l1.4-0.5v6h7.6V464.9z"/>
              <path id="XMLID_105_" class="st7" d="M2955.5,471.1c0-3.7,3.1-6.7,6.7-6.7s6.7,3.1,6.7,6.7c0,3.7-3.1,6.7-6.7,6.7
                C2958.4,477.7,2955.5,474.8,2955.5,471.1z M2967.3,471.1c0-3-2.3-5.5-5.3-5.5s-5.3,2.5-5.3,5.5s2.3,5.5,5.3,5.5
                S2967.3,474,2967.3,471.1z"/>
              <path id="XMLID_103_" class="st7" d="M2971.9,464.9l1.4-0.5v7.8c0,1.8,0.5,4.3,3.6,4.3c3.1,0,3.5-2.5,3.5-4.3v-7.3l1.4-0.5v7.8
                c0,3-0.8,5.6-4.9,5.6s-5.1-2.7-5-5.6V464.9z"/>
              <path id="XMLID_101_" class="st7" d="M2989.2,470.1c1.7,0.6,4.2,1.4,4.2,3.8c0,2.5-1.6,3.8-4.7,3.8c-1.8,0-3.3-0.7-4.1-1.4v-1.6
                c0.8,0.7,2.8,1.7,4.1,1.7c2.3,0,3.2-1,3.2-2.4s-1.8-1.9-3.4-2.5c-1.5-0.5-3.9-1.4-3.9-3.6c0-2.6,2.1-3.5,4.1-3.5
                c1.8,0,3.1,0.6,3.7,1.2v1.6c-0.6-0.6-1.9-1.4-3.7-1.4c-1.7,0-2.6,0.6-2.6,2.1C2986.2,469,2987.8,469.6,2989.2,470.1z"/>
              <path id="XMLID_100_" class="st7" d="M3004.3,476.2l-0.5,1.3h-7.4v-12.9h7.9l-0.5,1.3h-6v4.6h5.4l-0.5,1.3h-4.9v4.5L3004.3,476.2
                L3004.3,476.2z"/>
            </g>
          </g>
        </g>
        <line id="XMLID_35_" class="st9" x1="1885.3" y1="455.8" x2="1885.3" y2="340.1"/>
        <line id="XMLID_110_" class="st9" x1="2330.5" y1="340.1" x2="2330.5" y2="466.9"/>
        <line id="XMLID_159_" class="st9" x1="2519.8" y1="340.1" x2="2519.8" y2="499.8"/>
        <line id="XMLID_164_" class="st9" x1="2729.1" y1="340.1" x2="2729.1" y2="460"/>
        <line id="XMLID_167_" class="st9" x1="3113.8" y1="340.1" x2="3113.8" y2="484"/>
        <line id="XMLID_170_" class="st9" x1="3344.5" y1="340.1" x2="3344.5" y2="453.4"/>
        <line id="XMLID_173_" class="st9" x1="3579.8" y1="340.1" x2="3579.8" y2="489.8"/>
        <line id="XMLID_179_" class="st9" x1="3907.1" y1="340.1" x2="3907.1" y2="490.2"/>
        <line id="XMLID_2_" class="st9" x1="3743.8" y1="340.1" x2="3743.8" y2="513.9"/>
        <line id="XMLID_37_" class="st9" x1="2064.1" y1="340.1" x2="2064.1" y2="493.8"/>
        <polygon id="XMLID_180_" class="st10" points="3248.1,628.7 3426.9,628.7 3426.9,782.7 3248.1,744.7 "/>
        <polygon id="XMLID_181_" class="st10" points="3693.3,628.7 3693.3,755.5 3644.3,741.5 3464.7,790.7 3426.9,782.7 3426.9,628.7 "/>
        <polygon id="XMLID_190_" class="st10" points="3882.6,788.7 3882.6,628.7 3693.3,628.7 3693.3,755.5 3840.9,797.9 "/>
        <polygon id="XMLID_186_" class="st10" points="4091.9,628.7 4091.9,748.9 3882.6,788.7 3882.6,628.7 "/>
        <polygon id="XMLID_192_" class="st10" points="4476.6,628.7 4476.6,772.9 4567.4,788.7 4707.3,742.2 4707.3,628.7 "/>
        <polygon id="XMLID_191_" class="st10" points="4942.6,777.7 4942.6,628.7 4707.3,628.7 4707.3,742.2 "/>
        <polygon id="XMLID_193_" class="st10" points="5106.6,802.4 5106.6,628.7 4942.6,628.7 4942.6,777.7 "/>
        <polygon id="XMLID_194_" class="st10" points="5269.9,779.1 5269.9,628.7 5106.6,628.7 5106.6,802.4 "/>
        </svg>

        <div class="nav-mini yesmobile">
          <a class="menu_link" href="#"><img src="/img/icons/menu.svg" width="50px" alt="menu"></a>
          <div class="mini-menu">
            <ul>
              <li class="clearfix"><span>МЕНЮ</span><a id="close" href="#"><img src="/img/icons/close.svg" width="26px" alt="close"></a></li>
              <li><a href="/ru/#search">дом</a></li>
              <li><a href="/ru/#map">расположение</a></li>
              <li><a href="/ru/#cause">преимущества</a></li>
              <li><a href="/ru/flats/">квартиры</a></li>
              <li><a href="/ru/#builder">застройщик</a></li>
              <li><a href="/ru/build/">строительство</a></li>
              <li><a href="/ru/contact/">контакты</a></li>
              <li><a href="/ru/news/">новости</a></li>
              <li>
                <div class="sale">отдел продаж: (044) 29-03-443 с 10:00 до 20:00</div>
                <div class="adress">пр-кт В. Лобановського, 146Б</div>
                <div class="mail">info@bristol.house​​​​​​​​</div>
              </li>
            </ul>
          </div>
        </div>

        <div class="nav_wrapper">
          <div class="nav-left nomobile">
            <ul>
              <li><a href="#">дом</a></li>
              <li><a href="#">расположение</a></li>
              <li><a href="#">застройщик</a></li>
              <li><a href="#">квартиры</a></li>
            </ul>
          </div>
          <div class="nav-right nomobile">
            <ul>
              <li><a href="#">преимущества</a></li>
              <li><a href="#">строительство</a></li>
              <li><a href="#">контакты</a></li>
              <li><a href="#">новости</a></li>
            </ul>
          </div>
        <!-- <div class="nav-logo"></div> -->
        </div>

      </div>
    </div>
    <div class="nav-mask">
      <svg  xmlns:dc="https://purl.org/dc/elements/1.1/"  xmlns:cc="https://creativecommons.org/ns#"  xmlns:rdf="https://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="https://www.w3.org/2000/svg"  xmlns="https://www.w3.org/2000/svg" xmlns:sodipodi="https://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
         xmlns:inkscape="https://www.inkscape.org/namespaces/inkscape"
         version="1.1" id="Layer_1" x="0px" y="0px" viewBox="1360 149.8 2021.8 173.7" xml:space="preserve" inkscape:version="0.91 r13725" sodipodi:docname="header2.svg" width="2021.8" height="173.7">
        <defs id="defs3381" />
        <a xlink:href="/ru/#search"><polygon id="XMLID_180_" class="st0"  points="1990,317.3 1990,201.3 2168.8,201.3 2168.8,355.3 "transform="translate(-630,-51.499997)" /></a>
        <a xlink:href="/ru/#map"><polygon id="XMLID_181_" class="st0" points="2206.6,363.3 2168.8,355.3 2168.8,201.3 2435.2,201.3 2435.2,328.1 2386.2,314.1 " transform="translate(-630,-51.499997)" /></a>
        <a xlink:href="/ru/#builder"><polygon id="XMLID_190_" class="st0" points="2435.2,328.1 2582.8,370.5 2624.5,361.3 2624.5,201.3 2435.2,201.3 " transform="translate(-630,-51.499997)" /></a>
        <a xlink:href="/ru/flats/"><polygon id="XMLID_186_" class="st0" points="2624.5,201.3 2833.8,201.3 2833.8,321.5 2624.5,361.3 " transform="translate(-630,-51.499997)" /></a>
        <a xlink:href="/ru/#cause"><polygon id="XMLID_192_" class="st0" points="3449.2,314.8 3449.2,201.3 3218.5,201.3 3218.5,345.5 3309.3,361.3 " transform="translate(-630,-51.499997)" /></a>
        <a xlink:href="/ru/build/"><polygon id="XMLID_191_" class="st0" points="3449.2,314.8 3684.5,350.3 3684.5,201.3 3449.2,201.3 " transform="translate(-630,-51.499997)" /></a>
        <a xlink:href="/ru/contact/"><polygon id="XMLID_193_" class="st0" points="3684.5,350.3 3848.5,375 3848.5,201.3 3684.5,201.3 " transform="translate(-630,-51.499997)" /></a>
        <a xlink:href="/ru/news/"><polygon id="XMLID_194_" class="st0" points="3848.5,375 4011.8,351.7 4011.8,201.3 3848.5,201.3 " transform="translate(-630,-51.499997)" /></a>
      </svg>

    </div>
  </div>
  <style media="screen">
    .nav .nav_wrapper {
      font-size: 16px;
    }
    .nav_wrapper .nav-left li {
      margin: 30px 0px 0 26px;
    }
    .nav_wrapper .nav-left li:first-child {
      margin: 0px 28px 0 32px;
    }
    .nav .nav-right {
      right: 9px;
    }
    .nav_wrapper .nav-right li {
      margin: 30px 11px 0 9px;
    }
  </style>
