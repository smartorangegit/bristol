<?php
include("../admin/bd.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <meta name="description" content="ЖК BRISTOL Comfort House всі новини від забудовника Відділ продажу: ☎ (044) 22 77 144, Адреса м.Київ, впр-т В. Лобановського,146Б">
	  <link rel="icon" href="/img/cimvol.png" type="image/png" />
    <title>ЖК BRISTOL Comfort House - усі новини від забудовника</title>
    <link rel="stylesheet" href="/css/intlTelInput.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/news.css">
    <link rel="stylesheet" href="/css/menu.css">
    <link rel="stylesheet" href="/css/animate.css">

  </head>
  <body>
    <script>

    </script>
    <?php include '../include/main_menu.php';?>
<?php include '../include/gtm.php';?>

    <div class="section_one">
      <div class="wrapper">
          <div class="one_text_left wow bounceInRight">
            <h3>НОВИНИ</h3>
<?php /*<h4>В даний час новин немає</h4>*/ ?>
          </div>
		  <div class="news_wrapper">

              <?
              $sel = $DB->query("SELECT * FROM `news` WHERE `isActive`='0' ORDER BY `date` DESC ");
              while ($myrow = mysqli_fetch_array($sel)){
                  $dt = $myrow['date'];
                  //russian_date($dt);
                  $tm = $myrow['time'];
                  $time = $date=explode(":",$tm);
                  $cutTime = $time[0].':'.$time[1];
                  $dateMon=explode("-",$dt);
                  ?>
                  <div class="news_block">
                      <div class="news_body">
                          <div class="news_head">
                              <div class="date">
                <span><p><?=$dateMon[2];?></p>
                    </br><?russian_date($dt);?></span>
                              </div>
                              <p><?=$myrow['name_news_ua'];?></p>
                          </div>
                          <div class="news_text">
                              <p><?=$myrow['min_text_ua'];?></p>
                              <a href="<?=$myrow['news_code'];?>/"><p>Детальніше</p><span></span></a>
                          </div>
                      </div>

                      <div class="news_picture">
                          <img src="<?=$myrow['img_path']."/".$myrow['img_name'];?>"  alt="news">
                      </div>
                  </div>
                  <?
              }
              function russian_date($dt){
                  $date=explode("-",$dt);
                  switch ($date[1]){
                      case 1: $m='січня'; break;
                      case 2: $m='лютого'; break;
                      case 3: $m='березня'; break;
                      case 4: $m='квітня'; break;
                      case 5: $m='травня'; break;
                      case 6: $m='червня'; break;
                      case 7: $m='липня'; break;
                      case 8: $m='серпня'; break;
                      case 9: $m='вересня'; break;
                      case 10: $m='жовтня'; break;
                      case 11: $m='листопада'; break;
                      case 12: $m='грудня'; break;
                  }
                  echo '&nbsp;'.$m.'&nbsp;';
              }
              ?>
		  </div>

      </div>
    </div>


    <?php include '../include/futer.php';?>
    
    <!-- <script src="/js/header.js"></script> -->
    <!-- <script>
        window.addEventListener('DOMContentLoaded', function() {
        (function($) {
            $(document).ready(function() {

            });
        })(jQuery);
    });
      if(window.screen.width > 768) {
      	document.write('<script defer src="/js/header.js"><\/script>');
      }
    </script>
    <script>
      if(window.screen.width > 1219) {
        document.write('<script defer src="/js/header1220.js"><\/script>');
      }
    </script> -->

    <!-- <script type="text/javascript">
        $(window).resize(function() {
          if(document.documentElement.clientWidth > 1219) {
            document.write('<script src="/js/header1220.js"><\/script>');
          }
          if(document.documentElement.clientWidth > 768) {
          	document.write('<script src="/js/header.js"><\/script>');
          }
        });

    </script> -->
  </body>

</html>
