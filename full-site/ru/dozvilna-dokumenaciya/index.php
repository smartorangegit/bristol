<!DOCTYPE html>
<html lang="uk">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <link rel="icon" href="/img/cimvol.png" type="image/png" />
    <title>ЖК BRISTOL Comfort House - разрешительная документация</title>
    <link rel="stylesheet" href="/css/intlTelInput.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/news.css">
    <link rel="stylesheet" href="/css/flats.css">
    <link rel="stylesheet" href="/css/menu.css">
    <link rel="stylesheet" href="/css/animate.css">
    <meta name="description" content="ЖК BRISTOL Comfort House - разрешительная документация. Отдел продаж: ☎ (044) 22 77 144, г.Киев, упр-т В. Лобановского, 146-б">
    <link rel="canonical" href="<?php echo 'https://'.$_SERVER['SERVER_NAME'], $_SERVER['REQUEST_URI'];?>"/>
    <link rel="alternate" hreflang="ru" href="https://bristol.house/ru/dozvilna-dokumenaciya/" />
    <link rel="alternate" hreflang="uk" href="https://bristol.house/dozvilna-dokumenaciya/" />
  </head>
  <body>
    <?php include '../../include/gtm.php';?>
    <?php include '../../include/main_menu_ru.php';?>
    <div class="section_one documentation">
      <div class="docs_wrapper">
        <h1 class="ten_name">Разрешительная документация</h1>
        <div class="doc__box">
          <!-- <p class="doc__name">Містобудівні умови та обмеження</p> -->
          <a class="doc__link" href="/img/docs/muo.PDF" target="_blank">
            Градостроительные условия и ограничения
          </a>
          <a class="doc__link" href="/img/docs/muo.PDF" target="_blank">
            <img src="/img/docs/muo.jpg" alt="Містобудівні умови та обмеження">
          </a>
        </div>
        <div class="doc__box">
          <!-- <p class="doc__name">Дозвіл на виконання будівельних робіт</p> -->
          <a class="doc__link" href="/img/docs/dozvil.PDF" target="_blank">
            Разрешение на выполнение строительных работ
          </a>
          <a class="doc__link" href="/img/docs/dozvil.PDF" target="_blank">
            <img src="/img/docs/dozvil.jpg" alt="Дозвіл на виконання будівельних робіт">
          </a>
        </div>
        <div class="doc__box">
          <!-- <p class="doc__name">Експертний звіт</p> -->
          <a class="doc__link" href="/img/docs/expert.PDF" target="_blank">
            Экспертный отчет
          </a>
          <a class="doc__link" href="/img/docs/expert.PDF" target="_blank">
            <img src="/img/docs/expert.jpg" alt="Експертний звіт">
          </a>
        </div>
        <div class="doc__box">
          <!-- <p class="doc__name">Договір оренди земельної ділянки</p> -->
          <a class="doc__link" href="/img/docs/orenda.PDF" target="_blank">
            Договор аренды земельного участка
          </a>
          <a class="doc__link" href="/img/docs/orenda.pdf" target="_blank">
            <img src="/img/docs/orenda.jpg" alt="Договір оренди земельної ділянки">
          </a>
        </div>
        <div class="doc__box">
          <!-- <p class="doc__name">Кадастровий план</p> -->
          <a class="doc__link" href="/img/docs/kadastr.PDF" target="_blank">
            Кадастровый план
          </a>
          <a class="doc__link" href="/img/docs/kadastr.PDF" target="_blank">
            <img src="/img/docs/kadastr.jpg" alt="Кадастровий план">
          </a>
        </div>
        <div class="doc__box">
          <!-- <p class="doc__name">Витяг з державного реєстру</p> -->
          <a class="doc__link" href="/img/docs/vityag.PDF" target="_blank">
            Выписка из государственного реестра
          </a>
          <a class="doc__link" href="/img/docs/vityag.PDF" target="_blank">
            <img src="/img/docs/vityag.jpg" alt="Витяг з державного реєстру">
          </a>
        </div>

      </div>
    </div>

<style media="screen">
.section_one.documentation{
  padding-top: 180px;
}
  .docs_wrapper{
    width: 100%;
    max-width: 1000px;
    padding: 0 10px;
    margin: 0 auto;
    text-align: center;
  }
  .doc__box{
    width: 30%;
    display: inline-block;
    vertical-align: bottom;
    box-sizing: border-box;
    padding: 20px;
  }
  .doc__link {
    color: inherit;
    display: block;
    margin-bottom: 16px;

  }
  .doc__link img {
    width: 100%;
    height: auto;
  }
  @media screen and (max-width:768px) {
    .section_one.documentation{
      padding-top: 110px;
    }
  }
  @media screen and (max-width:480px) {
    .doc__box{
      width: 48%;
      padding: 12px;
    }
  }
</style>


<?php include '../../include/futer_ru.php';?>

      <script>
            $('#phone2').click(function (event) {
              event.preventDefault();
            $('#one_callback').animate({opacity: 1, top: '170px'}, 500);
            $('#one_callback').css('display', 'block');
            $('#overlay').animate({opacity: 1}, 200);
            $('#overlay').css('display', 'block');
            $('.header_wrapper').css('z-index','99');
              })
            $('#overlay, .close_popup').click(function () {
              $('#one_callback').animate({opacity: 0, top: '-100px'}, 200);
              $('#one_callback').css('display', 'none');
              $('#overlay').animate({opacity: 0}, 200);
              $('#overlay').css('display', 'none');
              $('.header_wrapper').css('z-index','999999');
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

  </body>

</html>
