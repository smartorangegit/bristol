(function() {

    $(document).ready(function() {

        //Общие данные 
        var totalConstructionMain = 75.26; //Загально будівельні - Общестроительные работы
        var facadeMain = 0; // Фасад
        var networksMain = 0.23; // Мережі - Сети
        var beautificationMain = 0; //Благоустрій - Благоустройство

        //Уточненные данные
        //Загально будівельні - Общестроительные работы
        var constructionTillPoint = 100; //Работы до отм.
        var carcassConstrution = 96.35; //Каркас
        var brickworkConstrution = 28.73; //Кирпичная кладка
        var interiorFinshConstrution = 0; //Внутренняя отделка
        //Фасад
        var facadeFacade = 0; //Фасад
        var windowsFacade = 0; //Окна
        //Мережі - Сети
        var internalEngineering = 0; //Внутренние
        var externalEngineering = 53.30; //Внешние



        var location = window.location.href.split('/');
        var constructionText, facadeText, engineeringText, totalConstructionMainText, networksMaintext, beautificationMainText, facadeMainText;

        if(location[3] == 'ru') {
            constructionText = 'Работы до отм. 0,000 - '+ constructionTillPoint + '%&#013;<br>Каркас -' + carcassConstrution + '%&#013;<br>Кирпичная кладка - ' + brickworkConstrution + '%&#013;</br>Внутренняя отделка - ' + interiorFinshConstrution + '%&#013;';
            facadeText = 'Окна - ' + windowsFacade + '%&#013; <br>Фасад - ' + facadeFacade +'%&#013;';
            engineeringText = 'Внутренние - ' + internalEngineering + '%&#013; <br>Внешние - ' + externalEngineering + '%&#013;';
            totalConstructionMainText = 'Общестроительные <br>работы';
            facadeMainText = 'Фасад';
            networksMaintext = 'Сети';
            beautificationMainText = 'Благоустройство';
        } else if(location[3] == 'en'){
            constructionText = 'Роботи до відм. 0,000 - '+ constructionTillPoint + '%&#013;<br>Каркас -' + carcassConstrution + '%&#013;<br>Цегляна кладка - ' + brickworkConstrution + '%&#013;</br>Внутрішнє опорядження - ' + interiorFinshConstrution + '%&#013;';
            facadeText = 'Вікна - ' + windowsFacade + '%&#013; <br>Фасад - ' + facadeFacade +'%&#013;';
            engineeringText = 'Внутрішні - ' + internalEngineering + '%&#013; <br>Зовнішні - ' + externalEngineering + '%&#013;';
        } else {
            constructionText = 'Роботи до відм. 0,000 - '+ constructionTillPoint + '%&#013;<br>Каркас -' + carcassConstrution + '%&#013;<br>Цегляна кладка - ' + brickworkConstrution + '%&#013;</br>Внутрішнє опорядження - ' + interiorFinshConstrution + '%&#013;';
            facadeText = 'Вікна - ' + windowsFacade + '%&#013; <br>Фасад - ' + facadeFacade +'%&#013;';
            engineeringText = 'Внутрішні - ' + internalEngineering + '%&#013; <br>Зовнішні - ' + externalEngineering + '%&#013;';
            totalConstructionMainText = 'Загально будівельні <br>роботи';
            facadeMainText = 'Фасад';
            networksMaintext = 'Мережі';
            beautificationMainText = 'Благоустрій';            
        }

        $("#rad1_tooltip-text").html(constructionText);
        $("#rad2_tooltip-text").html(facadeText);
        $("#rad3_tooltip-text").html(engineeringText);

        $("#rad1").circularloader({
            backgroundColor: "#ffffff",//background colour of inner circle
            fontColor: "#000000",//font color of progress text
            fontSize: "20px",//font size of progress text
            radius: 40,//radius of circle
            progressBarBackground: "#f6f6f6",//background colour of circular progress Bar
            progressBarColor: "#e4202b",//colour of circular progress bar
            progressBarWidth: 80,//progress bar width
            progressPercent: totalConstructionMain,//progress percentage out of 100
            progressValue: true,//diplay this value instead of percentage
            showText: true,//show progress text or not
            title: totalConstructionMainText,//show header title for the progress bar
        });

        $("#rad2").circularloader({
            backgroundColor: "#ffffff",//background colour of inner circle
            fontColor: "#000000",//font color of progress text
            fontSize: "20px",//font size of progress text
            radius: 40,//radius of circle
            progressBarBackground: "#f6f6f6",//background colour of circular progress Bar
            progressBarColor: "#e4202b",//colour of circular progress bar
            progressBarWidth: 80,//progress bar width
            progressPercent: networksMain,//progress percentage out of 100
            progressValue: true,//diplay this value instead of percentage
            showText: true,//show progress text or not
            title: networksMaintext,//show header title for the progress bar
        });

        $("#rad3").circularloader({
            backgroundColor: "#ffffff",//background colour of inner circle
            fontColor: "#000000",//font color of progress text
            fontSize: "20px",//font size of progress text
            radius: 40,//radius of circle
            progressBarBackground: "#f6f6f6",//background colour of circular progress Bar
            progressBarColor: "#e4202b",//colour of circular progress bar
            progressBarWidth: 80,//progress bar width
            progressPercent: facadeMain,//progress percentage out of 100
            progressValue: 0,//diplay this value instead of percentage
            showText: true,//show progress text or not
            title: facadeMainText,//show header title for the progress bar
        });

        $("#rad4").circularloader({
            backgroundColor: "#ffffff",//background colour of inner circle
            fontColor: "#000000",//font color of progress text
            fontSize: "20px",//font size of progress text
            radius: 40,//radius of circle
            progressBarBackground: "#f6f6f6",//background colour of circular progress Bar
            progressBarColor: "#e4202b",//colour of circular progress bar
            progressBarWidth: 80,//progress bar width
            progressPercent: beautificationMain,//progress percentage out of 100
            progressValue:0,//diplay this value instead of percentage
            showText: true,//show progress text or not
            title: beautificationMainText,//show header title for the progress bar
        });

    });

})();