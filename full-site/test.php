<script src="https://code.jquery.com/jquery-latest.js"></script>
<script src="https://code.jquery.com/jquery-2.1.1.js"></script>
<script src="https://code.jquery.com/jquery-2.1.0.min.js"></script>
<script>
/*! maphilight 21-10-2015 */
!function(a){var b,c,d,e,f,g,h,j,k,l,m;if(c=!!document.createElement("canvas").getContext,b=function(){var a=document.createElement("div");a.innerHTML='<v:shape id="vml_flag1" adj="1" />';var b=a.firstChild;return b.style.behavior="url(#default#VML)",b?"object"==typeof b.adj:!0}(),!c&&!b)return void(a.fn.maphilight=function(){return this});if(c){j=function(a){return Math.max(0,Math.min(parseInt(a,16),255))},k=function(a,b){return"rgba("+j(a.substr(0,2))+","+j(a.substr(2,2))+","+j(a.substr(4,2))+","+b+")"},d=function(b){var c=a('<canvas style="width:'+a(b).width()+"px;height:"+a(b).height()+'px;"></canvas>').get(0);return c.getContext("2d").clearRect(0,0,a(b).width(),a(b).height()),c};var n=function(a,b,c,d,e){if(d=d||0,e=e||0,a.beginPath(),"rect"==b)a.rect(c[0]+d,c[1]+e,c[2]-c[0],c[3]-c[1]);else if("poly"==b)for(a.moveTo(c[0]+d,c[1]+e),i=2;i<c.length;i+=2)a.lineTo(c[i]+d,c[i+1]+e);else"circ"==b&&a.arc(c[0]+d,c[1]+e,c[2],0,2*Math.PI,!1);a.closePath()};e=function(b,c,d,e,f){var g=b.getContext("2d");if(e.shadow){g.save(),"inside"==e.shadowPosition&&(n(g,c,d),g.clip());var h=100*b.width,i=100*b.height;n(g,c,d,h,i),g.shadowOffsetX=e.shadowX-h,g.shadowOffsetY=e.shadowY-i,g.shadowBlur=e.shadowRadius,g.shadowColor=k(e.shadowColor,e.shadowOpacity);var j=e.shadowFrom;j||(j="outside"==e.shadowPosition?"fill":"stroke"),"stroke"==j?(g.strokeStyle="rgba(0,0,0,1)",g.stroke()):"fill"==j&&(g.fillStyle="rgba(0,0,0,1)",g.fill()),g.restore(),"outside"==e.shadowPosition&&(g.save(),n(g,c,d),g.globalCompositeOperation="destination-out",g.fillStyle="rgba(0,0,0,1);",g.fill(),g.restore())}g.save(),n(g,c,d),e.fill&&(g.fillStyle=k(e.fillColor,e.fillOpacity),g.fill()),e.stroke&&(g.strokeStyle=k(e.strokeColor,e.strokeOpacity),g.lineWidth=e.strokeWidth,g.stroke()),g.restore(),e.fade&&a(b).css("opacity",0).animate({opacity:1},100)},f=function(a){a.getContext("2d").clearRect(0,0,a.width,a.height)}}else d=function(b){return a('<var style="zoom:1;overflow:hidden;display:block;width:'+b.width+"px;height:"+b.height+'px;"></var>').get(0)},e=function(b,c,d,e,f){var g,h,i,j;for(var k in d)d[k]=parseInt(d[k],10);g='<v:fill color="#'+e.fillColor+'" opacity="'+(e.fill?e.fillOpacity:0)+'" />',h=e.stroke?'strokeweight="'+e.strokeWidth+'" stroked="t" strokecolor="#'+e.strokeColor+'"':'stroked="f"',i='<v:stroke opacity="'+e.strokeOpacity+'"/>',"rect"==c?j=a('<v:rect name="'+f+'" filled="t" '+h+' style="zoom:1;margin:0;padding:0;display:block;position:absolute;left:'+d[0]+"px;top:"+d[1]+"px;width:"+(d[2]-d[0])+"px;height:"+(d[3]-d[1])+'px;"></v:rect>'):"poly"==c?j=a('<v:shape name="'+f+'" filled="t" '+h+' coordorigin="0,0" coordsize="'+b.width+","+b.height+'" path="m '+d[0]+","+d[1]+" l "+d.join(",")+' x e" style="zoom:1;margin:0;padding:0;display:block;position:absolute;top:0px;left:0px;width:'+b.width+"px;height:"+b.height+'px;"></v:shape>'):"circ"==c&&(j=a('<v:oval name="'+f+'" filled="t" '+h+' style="zoom:1;margin:0;padding:0;display:block;position:absolute;left:'+(d[0]-d[2])+"px;top:"+(d[1]-d[2])+"px;width:"+2*d[2]+"px;height:"+2*d[2]+'px;"></v:oval>')),j.get(0).innerHTML=g+i,a(b).append(j)},f=function(b){var c=a("<div>"+b.innerHTML+"</div>");c.children("[name=highlighted]").remove(),b.innerHTML=c.html()};g=function(a){var b,c=a.getAttribute("coords").split(",");for(b=0;b<c.length;b++)c[b]=parseFloat(c[b]);return[a.getAttribute("shape").toLowerCase().substr(0,4),c]},m=function(b,c){var d=a(b);return a.extend({},c,a.metadata?d.metadata():!1,d.data("maphilight"))},l=function(a){return a.complete?"undefined"!=typeof a.naturalWidth&&0===a.naturalWidth?!1:!0:!1},h={position:"absolute",left:0,top:0,padding:0,border:0};var o=!1;a.fn.maphilight=function(i){return i=a.extend({},a.fn.maphilight.defaults,i),c||o||(a(window).ready(function(){document.namespaces.add("v","urn:schemas-microsoft-com:vml");var b=document.createStyleSheet(),c=["shape","rect","oval","circ","fill","stroke","imagedata","group","textbox"];a.each(c,function(){b.addRule("v\\:"+this,"behavior: url(#default#VML); antialias:true")})}),o=!0),this.each(function(){var j,k,n,o,p,q,r;if(j=a(this),!l(this))return window.setTimeout(function(){j.maphilight(i)},200);if(n=a.extend({},i,a.metadata?j.metadata():!1,j.data("maphilight")),r=j.get(0).getAttribute("usemap"),r&&(o=a('map[name="'+r.substr(1)+'"]'),j.is('img,input[type="image"]')&&r&&o.size()>0)){if(j.hasClass("maphilighted")){var s=j.parent();j.insertBefore(s),s.remove(),a(o).unbind(".maphilight")}k=a("<div></div>").css({display:"block",backgroundImage:'url("'+this.src+'")',backgroundSize:"contain",position:"relative",padding:0,width:this.width,height:this.height}),n.wrapClass&&(n.wrapClass===!0?k.addClass(a(this).attr("class")):k.addClass(n.wrapClass)),j.before(k).css("opacity",0).css(h).remove(),b&&j.css("filter","Alpha(opacity=0)"),k.append(j),p=d(this),a(p).css(h),p.height=this.height,p.width=this.width,a(o).bind("alwaysOn.maphilight",function(){q&&f(q),c||a(p).empty(),a(o).find("area[coords]").each(function(){var b,f;f=m(this,n),f.alwaysOn&&(!q&&c&&(q=d(j[0]),a(q).css(h),q.width=j[0].width,q.height=j[0].height,j.before(q)),f.fade=f.alwaysOnFade,b=g(this),c?e(q,b[0],b[1],f,""):e(p,b[0],b[1],f,""))})}).trigger("alwaysOn.maphilight").bind("mouseover.maphilight, focus.maphilight",function(b){var d,f,h=b.target;if(f=m(h,n),!f.neverOn&&!f.alwaysOn){if(d=g(h),e(p,d[0],d[1],f,"highlighted"),f.groupBy){var i;i=/^[a-zA-Z][\-a-zA-Z]+$/.test(f.groupBy)?o.find("area["+f.groupBy+'="'+a(h).attr(f.groupBy)+'"]'):o.find(f.groupBy);var j=h;i.each(function(){if(this!=j){var a=m(this,n);if(!a.neverOn&&!a.alwaysOn){var b=g(this);e(p,b[0],b[1],a,"highlighted")}}})}c||a(p).append("<v:rect></v:rect>")}}).bind("mouseout.maphilight, blur.maphilight",function(a){f(p)}),j.before(p),j.addClass("maphilighted")}})},a.fn.maphilight.defaults={fill:!0,fillColor:"000000",fillOpacity:.2,stroke:!0,strokeColor:"ff0000",strokeOpacity:1,strokeWidth:1,fade:!0,alwaysOn:!1,neverOn:!1,groupBy:!1,wrapClass:!0,shadow:!1,shadowX:0,shadowY:0,shadowRadius:6,shadowColor:"000000",shadowOpacity:.8,shadowPosition:"outside",shadowFrom:!1}}(jQuery);</script>
<meta https-equiv="Content-Type" content="text/html; charset=utf8">
<div style="padding: 0 0 0 0; max-height: 100%;" class="div">
<!--
<p id="demo"></p>
-->

<img src="https://bristol.house/img/news/plan.png" alt="" usemap="#Map" id="Image-Maps-Com-image-maps-2014-03-31-160814">
<map name="Map" id="Map">
    <area class="div_chil" alt="" title="" href="type.html" shape="poly" coords="303,114,155,115,153,6,431,6,431,58,303,62">
    <area class="div_chil_2" alt="" title="" href="type.html" shape="poly" coords="129,116,128,226,246,226,248,171,276,171,277,117">
    <area class="div_chil_3" alt="" title="" href="type.html" shape="poly" coords="124,338,126,227,248,225,247,304,278,306,276,337">
    <area class="div_chil_4" alt="" title="" href="type.html" shape="poly" coords="125,338,124,476,127,476,127,497,249,500,248,377,278,375,277,338">
    <area class="div_chil_5" alt="" title="" href="type.html" shape="poly" coords="332,224,458,225,458,115,429,114,432,60,304,60,302,115,332,119">
    <area class="div_chil_6" alt="" title="" href="type.html" shape="poly" coords="332,226,334,337,458,336,459,229">
    <area class="div_chil_7" alt="" title="" href="type.html" shape="poly" coords="334,497,459,499,458,339,333,337">
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
