<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="http://code.jquery.com/jquery-2.1.1.js"></script>
<script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
<script src="http://davidlynch.org/projects/maphilight/jquery.maphilight.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf8">
<div style="padding: 0 0 0 0; max-height: 100%;" class="div">
<!--
<p id="demo"></p>
-->

<img src="http://138.201.178.152/img/news/plan.png" alt="" usemap="#Map" id="Image-Maps-Com-image-maps-2014-03-31-160814">
<map name="Map" id="Map">
    <area class="div_chil" alt="" title="" href="http://138.201.178.152/type.html" shape="poly" coords="303,114,155,115,153,6,431,6,431,58,303,62">
    <area class="div_chil_2" alt="" title="" href="http://138.201.178.152/type.html" shape="poly" coords="129,116,128,226,246,226,248,171,276,171,277,117">
    <area class="div_chil_3" alt="" title="" href="http://138.201.178.152/type.html" shape="poly" coords="124,338,126,227,248,225,247,304,278,306,276,337">
    <area class="div_chil_4" alt="" title="" href="http://138.201.178.152/type.html" shape="poly" coords="125,338,124,476,127,476,127,497,249,500,248,377,278,375,277,338">
    <area class="div_chil_5" alt="" title="" href="http://138.201.178.152/type.html" shape="poly" coords="332,224,458,225,458,115,429,114,432,60,304,60,302,115,332,119">
    <area class="div_chil_6" alt="" title="" href="http://138.201.178.152/type.html" shape="poly" coords="332,226,334,337,458,336,459,229">
    <area class="div_chil_7" alt="" title="" href="http://138.201.178.152/type.html" shape="poly" coords="334,497,459,499,458,339,333,337">
</map>
</div>
<style>
.div>div{
width:100% !important;
/*height: 100%!important;*/
/*max-height: 100%!important;*/
background-repeat: no-repeat;
}
.lin_1{

   display: none;
   font-family: "Solomon Sans Normal";
    background: #f8f8ff;
    width: 450px;
    height: 158px;
    border: 2px groove;
    position: absolute;
    z-index: 999999999999999;
	border: solid grey 1px;
}
.lin_2{

    display: none;
    font-family: "Solomon Sans Normal";
    background: #f8f8ff;
    width: 450px;
     height: 158px;
    border: 2px groove;
    position: absolute;
    z-index: 999999999999999;
	border: solid grey 1px;
}
.lin_3{

    display: none;
    font-family: "Solomon Sans Normal";
    background: #f8f8ff;
    width: 450px;
     height: 158px;
    border: 2px groove;
    position: absolute;
    z-index: 999999999999999;
	border: solid grey 1px;
}
.lin_4{

    display: none;
    font-family: "Solomon Sans Normal";
    background: #f8f8ff;
    width: 450px;
     height: 158px;
    border: 2px groove;
    position: absolute;
    z-index: 999999999999999;
	border: solid grey 1px;
}
.lin_5{

    display: none;
    font-family: "Solomon Sans Normal";
    background: #f8f8ff;
    width: 450px;
     height: 158px;
    border: 2px groove;
    position: absolute;
    z-index: 999999999999999;
	border: solid grey 1px;
}
.lin_6{

   display: none;
   font-family: "Solomon Sans Normal";
    background: #f8f8ff;
    width: 450px;
    height: 158px;
    border: 2px groove;
    position: absolute;
    z-index: 999999999999999;
	border: solid grey 1px;
}
.lin_7{

   /* margin-top: -1009px;*/
    /* right: 10px; */
    display: none;
    font-family: "Solomon Sans Normal";
    background: #f8f8ff;
    width: 450px;
    height: 158px;
    border: 2px groove;
    position: absolute;
    z-index: 999999999999999;
	border: solid grey 1px;
}
#opis_1
{
display:inline-flex;
}
#op{
  font-family: "Solomon Sans Normal";
font-size:25px;
padding: 10px 10px 0px 10px;
/*font-family: 'Roboto', sans-serif;*/
}
#numbr{
font-size:27px;
padding: 10px 0px 0px 0px;
font-family: "Solomon Sans Normal";
/*font-family: 'PT Sans', sans-serif;*/
}
</style>





<script>
$("html").mousemove(function(e){
    var x = e.clientX;
    var y = e.clientY;
    var coor = "Coordinates: (" + x + "," + y + ")";
    /*document.getElementById("demo").innerHTML = coor;*/

    });

$(document).ready(function(){
    $(".div_chil").mousemove(function(e){
    var x = e.clientX;
    var y = e.clientY;
    var coor = "Coordinates: (" + x + "," + y + ")";

    $(".lin_1").offset({top:y, left:x-470});
    });
$(".div_chil_2").mousemove(function(e){
    var x = e.clientX;
    var y = e.clientY;
    var coor = "Coordinates: (" + x + "," + y + ")";

    $(".lin_2").offset({top:y, left:x-470});
    });
$(".div_chil_3").mousemove(function(e){
    var x = e.clientX;
    var y = e.clientY;
    var coor = "Coordinates: (" + x + "," + y + ")";

    $(".lin_3").offset({top:y, left:x-470});
    });
$(".div_chil_4").mousemove(function(e){
    var x = e.clientX;
    var y = e.clientY;
    var coor = "Coordinates: (" + x + "," + y + ")";

    $(".lin_4").offset({top:y, left:x-470});
    });
$(".div_chil_5").mousemove(function(e){
    var x = e.clientX;
    var y = e.clientY;
    var coor = "Coordinates: (" + x + "," + y + ")";

    $(".lin_5").offset({top:y, left:x-470});
    });
$(".div_chil_6").mousemove(function(e){
    var x = e.clientX;
    var y = e.clientY;
    var coor = "Coordinates: (" + x + "," + y + ")";

    $(".lin_6").offset({top:y, left:x-470});
    });
$(".div_chil_7").mousemove(function(e){
    var x = e.clientX;
    var y = e.clientY;
    var coor = "Coordinates: (" + x + "," + y + ")";

    $(".lin_7").offset({top:y, left:x-470});
    });




  });



$('.div_chil').mouseover(function() {
  $('.lin_1').css('display', 'block');

//console.log('OVER');
}).mouseout(function()
{
$('.lin_1').css('display', 'none');
//console.log('OUT');
});
$('.div_chil_2').mouseover(function() {
  $('.lin_2').css('display', 'block');

//console.log('OVER');
}).mouseout(function()
{
$('.lin_2').css('display', 'none');
//console.log('OUT');
});
$('.div_chil_3').mouseover(function() {
  $('.lin_3').css('display', 'block');

//console.log('OVER');
}).mouseout(function()
{
$('.lin_3').css('display', 'none');
//console.log('OUT');
});

$('.div_chil_4').mouseover(function() {
  $('.lin_4').css('display', 'block');

//console.log('OVER');
}).mouseout(function()
{
$('.lin_4').css('display', 'none');
//console.log('OUT');
});

$('.div_chil_5').mouseover(function() {
  $('.lin_5').css('display', 'block');

//console.log('OVER');
}).mouseout(function()
{
$('.lin_5').css('display', 'none');
//console.log('OUT');
});

$('.div_chil_6').mouseover(function() {
  $('.lin_6').css('display', 'block');

//console.log('OVER');
}).mouseout(function()
{
$('.lin_6').css('display', 'none');
//console.log('OUT');
});

$('.div_chil_7').mouseover(function() {
  $('.lin_7').css('display', 'block');

//console.log('OVER');
}).mouseout(function()
{
$('.lin_7').css('display', 'none');
//console.log('OUT');
});

</script>
<script>
    $('#Image-Maps-Com-image-maps-2014-03-31-160814').maphilight({fill: true,
	fillColor: '000000',
	fillOpacity: 0.5,
	stroke: true,
	strokeColor: '000000',
	strokeOpacity: 0,
	strokeWidth: 1,
	fade: true,
	alwaysOn: false,
	neverOn: false,
	groupBy: false,
	wrapClass: true,
	shadow: false,
	shadowX: 0,
	shadowY: 0,
	shadowRadius: 6,
	shadowColor: '000000',
	shadowOpacity: 0.8,
	shadowPosition: 'outside',
	shadowFrom: false});

  </script>
<div class="lin_1">
<div id="opis_1" style="z-insex:1000;">
		<div id="op">Кількість кімнат : </div><div id="numbr">2<br></div>
	</div>
	<div id="opis_1">
		<div id="op">Загальна площа : </div><div id="numbr">81,04 м<br></div>
	</div>
	<div id="opis_1">
		<div id="op">Житлова площа : </div><div id="numbr">35,94 м<br></div>
	</div>
	<div id="opis_1">
		<div id="op">Поверх : </div><div id="numbr">2-25<br></div>
	</div>
</div>
<div class="lin_2">
<div id="opis_1">
		<div id="op">Кількість кімнат : </div><div id="numbr">1<br></div>
	</div>
	<div id="opis_1">
		<div id="op">Загальна площа : </div><div id="numbr">52,31 м<br></div>
	</div>
	<div id="opis_1">
		<div id="op">Житлова площа : </div><div id="numbr">18,83 м<br></div>
	</div>
	<div id="opis_1">
		<div id="op">Поверх : </div><div id="numbr">2-25<br></div>
	</div>
</div>
<div class="lin_3">
<div id="opis_1">
		<div id="op">Кількість кімнат : </div><div id="numbr">1<br></div>
	</div>
	<div id="opis_1">
		<div id="op">Загальна площа : </div><div id="numbr">49,59 м<br></div>
	</div>
	<div id="opis_1">
		<div id="op">Житлова площа : </div><div id="numbr">18,83 м<br></div>
	</div>
	<div id="opis_1">
		<div id="op">Поверх : </div><div id="numbr">2-25<br></div>
	</div>
</div>
<div class="lin_4">
<div id="opis_1">
		<div id="op">Кількість кімнат : </div><div id="numbr">2<br></div>
	</div>
	<div id="opis_1">
		<div id="op">Загальна площа : </div><div id="numbr">71,67 м<br></div>
	</div>
	<div id="opis_1">
		<div id="op">Житлова площа : </div><div id="numbr">34,72 м<br></div>
	</div>
	<div id="opis_1">
		<div id="op">Поверх : </div><div id="numbr">2-25<br></div>
	</div>
</div>
<div class="lin_5">
<div id="opis_1">
		<div id="op">Кількість кімнат : </div><div id="numbr">2<br></div>
	</div>
	<div id="opis_1">
		<div id="op">Загальна площа : </div><div id="numbr">72,17 м<br></div>
	</div>
	<div id="opis_1">
		<div id="op">Житлова площа : </div><div id="numbr">35,17 м<br></div>
	</div>
	<div id="opis_1">
		<div id="op">Поверх : </div><div id="numbr">2-25<br></div>
	</div>
</div>
<div class="lin_6">
<div id="opis_1">
		<div id="op">Кількість кімнат : </div><div id="numbr">1<br></div>
	</div>
	<div id="opis_1">
		<div id="op">Загальна площа : </div><div id="numbr">47,44 м<br></div>
	</div>
	<div id="opis_1">
		<div id="op">Житлова площа : </div><div id="numbr">18,16 м<br></div>
	</div>
	<div id="opis_1">
		<div id="op">Поверх : </div><div id="numbr">2-25<br></div>
	</div>
</div>
<div class="lin_7">
	<div id="opis_1">
		<div id="op">Кількість кімнат : </div><div id="numbr">2<br></div>
	</div>
	<div id="opis_1">
		<div id="op">Загальна площа : </div><div id="numbr">70,17 м<br></div>
	</div>
	<div id="opis_1">
		<div id="op">Житлова площа : </div><div id="numbr">32,48 м<br></div>
	</div>
	<div id="opis_1">
		<div id="op">Поверх : </div><div id="numbr">2-25<br></div>
	</div>
	</div>
