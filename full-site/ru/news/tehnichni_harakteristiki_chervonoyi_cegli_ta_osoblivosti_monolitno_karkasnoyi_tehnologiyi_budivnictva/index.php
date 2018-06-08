<?php
header('Cache-Control: no-cache, no-store, must-revalidate'); // HTTP 1.1.
header('Pragma: no-cache'); // HTTP 1.0.
header('Expires: 0');
session_start();
include ("../../../admin/bd.php");// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь
$check = $DB->query("SELECT * FROM `users`");
while ($myrow = mysqli_fetch_array($check)) {

    $sec_k = $myrow['sec_code'];
}
//echo '<pre>'; print_r($_SERVER); echo '</pre>';
$uri = explode("/",$_SERVER['PHP_SELF']);
//print_r($uri);
$kod = $uri[3];

$sel = $DB->query("SELECT * FROM `news` WHERE `news_code`='$kod'");
while ($myrow = mysqli_fetch_array($sel))
{
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="/img/cimvol.png" type="image/png" />
        <title><?=$myrow['title_ru'];?></title>
        <meta name="description" content="<?=$myrow['description_ru'];?>">
        <meta property="og:title" content="<?=$myrow['title_ru'];?>" />
        <meta property="og:description" content="<?=$myrow['description_ru'];?>" />
        <meta property="og:image" content="<?=$_SERVER['HTTP_HOST'].$myrow['img_path'].'/'.$myrow['img_name'];?>" />
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
        <style>
            .news_chervona_cegla {
                padding-top: 40px
            }
            @media only screen and (max-width: 767px) and (min-width: 280px){
                .datail_wrapper .news_text.news_text_chervona_cegla {
                    margin-top: 200px;
                }
            }
        </style>
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-TS4HDBT');</script>
        <!-- End Google Tag Manager -->
    </head>
    <body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TS4HDBT"
                      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <script>
        var controller = new ScrollMagic.Controller();
        new WOW().init();
    </script>
    <?php include '../../../include/menu_ru.php';?>

    <div class="news_det section_one">
        <div class="wrapper">
            <div class="one_text_left wow bounceInRight">
                <h3>НОВОСТИ</h3>
            </div>
            <?
            $dt = $myrow['date'];
            $dateMon=explode("-",$dt);
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
                    case 9: $m='сентярбя'; break;
                    case 10: $m='октября'; break;
                    case 11: $m='ноября'; break;
                    case 12: $m='декабря'; break;
                }
                echo '&nbsp;'.$m.'&nbsp;';
            }?>
            <div class="news_wrapper datail_wrapper">

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
                            <?=$myrow['full_text_ru'];?>
                            <a href="/news/"><span>‹‹</span>Вернутся к новостям</a>
                        </div>
                    </div>

                    <div class="news_picture">
                        <img style="margin:0; width: 95%;"src="<?=$myrow['img_path'].'/'.$myrow['img_name'];?>" name="example_img" alt="news">
                    </div>
                </div>
                <?php /*    <div class="news_picture-list">
                <a href="javascript:l_image ('img/news/list-1.jpg')"><img src="img/news/list-1.jpg" alt="list_picture"></a>
                <a href="javascript:l_image ('img/news/list-2.jpg')"><img src="img/news/list-2.jpg" alt="list_picture"></a>
                <a href="javascript:l_image ('img/news/list-3.jpg')"><img src="img/news/list-3.jpg" alt="list_picture"></a>
                <a href="javascript:l_image ('img/news/list-4.jpg')"><img src="img/news/list-4.jpg" alt="list_picture"></a>
                <a href="javascript:l_image ('img/news/list-5.jpg')"><img src="img/news/list-5.jpg" alt="list_picture"></a>
              </div> */ ?>
            </div>
        </div>
    </div>
    <div class="footer clearfix">
        <div class="wrapper">
            <div class="copy">© 2016 BRISTOL Comfort House все права защищены.</div>
            <div class="develop">Разработка сайта <img src="/img/logo/logo_smart.png" alt="smart"></div>
        </div>
    </div>

    <script type="text/javascript">
        function l_image (a) {
            document.example_img.src=a;
        }
    </script>
    <script src="/js/script.js"></script>
    <script type="text/javascript" src="/js/lib/wow.min.js"></script>
    <style>
        .news_text p.title_p {
            font-size: 21px;
            color: black;
            padding: 20px;
        }
        .datail_wrapper .news_body {
            margin-bottom: 10px;
        }
    </style>
    </body>

    </html>
<?}?>