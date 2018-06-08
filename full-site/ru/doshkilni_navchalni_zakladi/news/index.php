<?php
include("../../admin/bd.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <meta name="description" content="ЖК BRISTOL Comfort House все новости от застройщика Отдел продаж: ☎ (044) 22 77 144, Адрес г.Киев, пр-т В. Лобановского,146Б">
    <link rel="icon" href="/img/cimvol.png" type="image/png" />
    <title>ЖК BRISTOL Comfort House - все новости от застройщика</title>
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
    <?php include '../../include/main_menu_ru.php';?>
<?php include '../../include/gtm.php';?>

    <div class="section_one">
      <div class="wrapper">
          <div class="one_text_left wow bounceInRight">
            <h3>НОВОСТИ</h3>
	<!--<h4>В данный момент новостей нет</h4>-->
          </div>

        <div class="news_wrapper">

            <?
            $sel = $DB->query("SELECT * FROM `news` WHERE `isActive`='0' ORDER BY `date` DESC");
            while ($myrow = mysqli_fetch_array($sel)){
                $dt = $myrow['date'];
                //russian_date($dt);
                $tm = $myrow['time'];
                $time = $date=explode(":",$tm);
                $cutTime = $time[0].':'.$time[1];
                $dateMon=explode("-",$dt);
                if($myrow['name_news_ru']){
                ?>
                <div class="news_block">
                    <div class="news_body">
                        <div class="news_head">
                            <div class="date">
                <span><p><?=$dateMon[2];?></p>
                    </br><?russian_date($dt);?></span>
                            </div>
                            <p><?=$myrow['name_news_ru'];?></p>
                        </div>
                        <div class="news_text">
                            <p><?=$myrow['min_text_ru'];?></p>
                            <a href="<?=$myrow['news_code'];?>/"><p>Подробнее</p><span></span></a>
                        </div>
                    </div>

                    <div class="news_picture">
                        <img src="<?=$myrow['img_path']."/".$myrow['img_name'];?>"  alt="news">
                    </div>
                </div>
                <?
            }
            }
            function russian_date($dt){
                $date=explode("-",$dt);
                switch ($date[1]){
                    case 1: $m='января'; break;
                    case 2: $m='февраля'; break;
                    case 3: $m='марта'; break;
                    case 4: $m='апреля'; break;
                    case 5: $m='мая'; break;
                    case 6: $m='июня'; break;
                    case 7: $m='июля'; break;
                    case 8: $m='августа'; break;
                    case 9: $m='сентября'; break;
                    case 10: $m='октября'; break;
                    case 11: $m='ноября'; break;
                    case 12: $m='декабря'; break;
                }
                echo '&nbsp;'.$m.'&nbsp;';
            }
            ?>
            </div>

      </div>
    </div>


    <div class="footer clearfix">
      <div class="wrapper">
        <div class="copy">© 2016 BRISTOL Comfort House все права защищены.</div>
        <div class="develop">Разработка сайта <img src="/img/logo/logo_smart.png" alt="smart"></div>
      </div>
    </div>


    <script src="/js/script.js"></script>
    <script type="text/javascript" src="/js/lib/wow.min.js"></script>
<style>
.news_wrapper div:nth-child(1) .news_picture img {
    margin-top: -21%;
    width: 155%;
    margin-left: -47%;
}
</style>
  </body>

</html>
