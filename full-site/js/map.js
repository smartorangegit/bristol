var map;
function initMap() {
  var SS = {lat: 50.406025,lng: 30.502019};/*{lat:50.406493, lng: 30.519515};*/
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 15,
    center: SS,
    scrollwheel: false,
    navigationControl: false,
    mapTypeControl: false,
    scaleControl: false,
    draggable: true,
    styles: [{"featureType":"administrative.province","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"landscape","elementType":"all","stylers":[{"saturation":-100},{"lightness":65},{"visibility":"on"}]},{"featureType":"poi","elementType":"all","stylers":[{"saturation":-100},{"lightness":51},{"visibility":"simplified"}]},{"featureType":"road.highway","elementType":"all","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"all","stylers":[{"saturation":-100},{"lightness":30},{"visibility":"on"}]},{"featureType":"road.local","elementType":"all","stylers":[{"saturation":-100},{"lightness":40},{"visibility":"on"}]},{"featureType":"transit","elementType":"all","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"transit","elementType":"geometry.fill","stylers":[{"visibility":"on"}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#ffff00"},{"lightness":-25},{"saturation":-97}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":-25},{"saturation":-100}]}]
  });

 var marker = new google.maps.Marker({
    //icon: 'http://brist.webiart.com.ua/mt-content/uploads/2016/10/logo3.png',
   // position: new google.maps.LatLng(50.433464, 30.513194),
    map: map,
    title: 'Bristol map'
    //animation: google.maps.Animation.BOUNCE,
    //label: 'B',
    //fillColor : 'black'
    //icon: 'target.png'
  });
    /*marker.addListener('click', function() {
    infowindow.open(map, marker);
    });*/

var polygonCoords = [
new google.maps.LatLng(50.433919, 30.513405),
new google.maps.LatLng(50.433924, 30.512895),
new google.maps.LatLng(50.433408, 30.512668),
new google.maps.LatLng(50.433336, 30.513424),
new google.maps.LatLng(50.433919, 30.513405)
];

// Настройки для полигона
var polygon = new google.maps.Polygon({
path: polygonCoords, // Координаты
strokeColor: '#FF0000',
strokeOpacity: 0.8,
strokeWeight: 2,
fillColor: '#FF0000',
fillOpacity: 0.5

});
/*var polygon2 = new google.maps.Polyline({
path: polygonCoords2, // Координаты
strokeColor: '#FF0000',
strokeOpacity: 0.8,
strokeWeight: 2,
fillColor: '#FF0000'
fillOpacity: 0.35

});*/

// Добавляем на карту
polygon.setMap(map);
//polygon2.setMap(map);

var infoBubble, infoBubble2, infoBubble3, infoBubble4, infoBubble5, infoBubble6, infoBubble7, infoBubble8, infoBubble9,
infoBubble10, infoBubble11, infoBubble12, infoBubble13, infoBubble15, infoBubble16, infoBubble17, infoBubble18,
infoBubble19, infoBubble20, infoBubble21, infoBubble22, infoBubble23, infoBubble24, infoBubble25;
var marker = new google.maps.Marker({
map: map,
position: new google.maps.LatLng(50.4069303, 30.5076748),
//draggable: true,
 //   animation: google.maps.Animation.BOUNCE,
icon: new google.maps.MarkerImage("/img/pin/pin_spritesheet.png", new google.maps.Size(100, 142), new google.maps.Point(158, 5))

});
infoBubble = new InfoBubble({
map: map,
content: '<div class="phoneytext" style="text-align:center;">Bristol Comfort House'+
'<hr>'+
'<h2>пр-т В.Лобановського, 146Б</h2>'+
'</div>',
//position: new google.maps.LatLng(50.408537, 30.525904),

//	50.43545681, 30.51317453
shadowStyle: 1,
padding: 0,
backgroundColor: 'rgba(30,14,0,0.5)',
borderRadius: 4,
arrowSize: 10,
borderWidth: 1,
borderColor: '#ff000b',
disableAutoPan: true,
hideCloseButton: true,
arrowPosition: 5,
backgroundClassName: 'phoney',
arrowStyle: 2,
width: 350,
height: 125,

});

infoBubble.open();
marker.addListener('click', function() {
infoBubble.open(map, marker);
infoBubble2.close();
infoBubble3.close();
infoBubble4.close();
infoBubble5.close();
infoBubble6.close();
infoBubble7.close();
infoBubble8.close();
infoBubble9.close();
infoBubble10.close();
/*infoBubble11.close();
infoBubble12.close();
infoBubble13.close();
infoBubble14.close();
infoBubble15.close();
infoBubble16.close();
infoBubble17.close();
infoBubble18.close();
infoBubble19.close();
infoBubble20.close();
infoBubble21.close();
infoBubble22.close();
infoBubble23.close();
infoBubble24.close();
infoBubble25.close();*/
});

google.maps.event.addListener(map, "click", function () {
infoBubble.close();
});


var marker2 = new google.maps.Marker({
map: map,
position: new google.maps.LatLng(50.40564908, 30.50567508),
//draggable: true,
icon: new google.maps.MarkerImage("/img/pin/pin_spritesheet.png", new google.maps.Size(41, 58), new google.maps.Point(107, 5))

});
infoBubble2 = new InfoBubble({
map: map,
content: '<div class="phoneytext">Фора'+
'<hr>'+
'<p>вулиця Кустанайська, 10</p>'+
'</div>',
position: new google.maps.LatLng(50.40564908, 30.50567508),
shadowStyle: 1,
padding: 0,
backgroundColor: 'rgba(30,14,0,0.7)',
borderRadius: 4,
arrowSize: 10,
borderWidth: 1,
borderColor: '#ff000b',
disableAutoPan: true,
hideCloseButton: true,
arrowPosition: 30,
backgroundClassName: 'phoney',
arrowStyle: 2
});

//infoBubble2.open();
marker2.addListener('click', function() {
infoBubble2.open(map, marker2);
infoBubble.close();
infoBubble3.close();
infoBubble4.close();
infoBubble5.close();
infoBubble6.close();
infoBubble7.close();
infoBubble8.close();
infoBubble9.close();
infoBubble10.close();
/*infoBubble11.close();
infoBubble12.close();
infoBubble13.close();
infoBubble14.close();
infoBubble15.close();
infoBubble16.close();
infoBubble17.close();
infoBubble18.close();
infoBubble19.close();
infoBubble20.close();
infoBubble21.close();
infoBubble22.close();
infoBubble23.close();
infoBubble24.close();
infoBubble25.close();*/

});

google.maps.event.addListener(map, "click", function () {
infoBubble2.close();
});

var marker3 = new google.maps.Marker({
map: map,
position: new google.maps.LatLng(50.4049,  30.507477),
//draggable: true,
icon: new google.maps.MarkerImage("/img/pin/pin_spritesheet.png", new google.maps.Size(41, 58), new google.maps.Point(107, 73))

});
infoBubble3 = new InfoBubble({
map: map,
content: '<div class="phoneytext">Ясли №24'+
'<hr>'+
'<p>вулиця Козацька, 34</p>'+
'</div>',
position: new google.maps.LatLng(50.4049,  30.507477),
shadowStyle: 1,
padding: 0,
backgroundColor: 'rgba(30,14,0,0.7)',
borderRadius: 4,
arrowSize: 10,
borderWidth: 1,
borderColor: '#ff000b',
disableAutoPan: true,
hideCloseButton: true,
arrowPosition: 30,
backgroundClassName: 'phoney',
arrowStyle: 2
});

//infoBubble2.open();
marker3.addListener('click', function() {
infoBubble3.open(map, marker3);
infoBubble.close();
infoBubble2.close();
infoBubble4.close();
infoBubble5.close();
infoBubble6.close();
infoBubble7.close();
infoBubble8.close();
infoBubble9.close();
infoBubble10.close();
/*infoBubble11.close();
infoBubble12.close();
infoBubble13.close();
infoBubble14.close();
infoBubble15.close();
infoBubble16.close();
infoBubble17.close();
infoBubble18.close();
infoBubble19.close();
infoBubble20.close();
infoBubble21.close();
infoBubble22.close();
infoBubble23.close();
infoBubble24.close();
infoBubble25.close();*/

});

google.maps.event.addListener(map, "click", function () {
infoBubble3.close();
});
var marker4 = new google.maps.Marker({
map: map,
position: new google.maps.LatLng( 50.40867138,  30.51092148),
//draggable: true,
icon: new google.maps.MarkerImage("/img/pin/pin_spritesheet.png", new google.maps.Size(41, 58), new google.maps.Point(107, 73))

});
infoBubble4 = new InfoBubble({
map: map,
content: '<div class="phoneytext">Міжрегіональна Академія управління персоналом'+
'<hr>'+
'<p>вулиця Фрометівська, 2</p>'+
'</div>',
position: new google.maps.LatLng( 50.40867138,  30.51092148),
shadowStyle: 1,
padding: 0,
backgroundColor: 'rgba(30,14,0,0.7)',
borderRadius: 4,
arrowSize: 10,
borderWidth: 1,
borderColor: '#ff000b',
disableAutoPan: true,
hideCloseButton: true,
arrowPosition: 30,
backgroundClassName: 'phoney',
arrowStyle: 2
});

//infoBubble2.open();
marker4.addListener('click', function() {
infoBubble4.open(map, marker4);
infoBubble.close();
infoBubble2.close();
infoBubble3.close();
infoBubble5.close();
infoBubble6.close();
infoBubble7.close();
infoBubble8.close();
infoBubble9.close();
infoBubble10.close();
/*infoBubble11.close();
infoBubble12.close();
infoBubble13.close();
infoBubble14.close();
infoBubble15.close();
infoBubble16.close();
infoBubble17.close();
infoBubble18.close();
infoBubble19.close();
infoBubble20.close();
infoBubble21.close();
infoBubble22.close();
infoBubble23.close();
infoBubble24.close();
infoBubble25.close();*/

});

google.maps.event.addListener(map, "click", function () {
infoBubble4.close();
});
var marker5 = new google.maps.Marker({
map: map,
position: new google.maps.LatLng( 50.4123259,  30.5225569),
//draggable: true,
icon: new google.maps.MarkerImage("/img/pin/pin_spritesheet.png", new google.maps.Size(41, 58), new google.maps.Point(107, 5))

});
infoBubble5 = new InfoBubble({
map: map,
content: '<div class="phoneytext">ТРЦ Ocean Plaza'+
'<hr>'+
'<p>вулиця Антоновича, 176</p>'+
'</div>',
position: new google.maps.LatLng( 50.4123259, 30.5225569),
shadowStyle: 1,
padding: 0,
backgroundColor: 'rgba(30,14,0,0.7)',
borderRadius: 4,
arrowSize: 10,
borderWidth: 1,
borderColor: '#ff000b',
disableAutoPan: true,
hideCloseButton: true,
arrowPosition: 30,
backgroundClassName: 'phoney',
arrowStyle: 2
});

//infoBubble2.open();
marker5.addListener('click', function() {
infoBubble5.open(map, marker5);
infoBubble.close();
infoBubble2.close();
infoBubble3.close();
infoBubble4.close();
infoBubble6.close();
infoBubble7.close();
infoBubble8.close();
infoBubble9.close();
infoBubble10.close();
/*infoBubble11.close();
infoBubble12.close();
infoBubble13.close();
infoBubble14.close();
infoBubble15.close();
infoBubble16.close();
infoBubble17.close();
infoBubble18.close();
infoBubble19.close();
infoBubble20.close();
infoBubble21.close();
infoBubble22.close();
infoBubble23.close();
infoBubble24.close();
infoBubble25.close();*/

});

google.maps.event.addListener(map, "click", function () {
infoBubble5.close();
});

var marker6 = new google.maps.Marker({
map: map,
position: new google.maps.LatLng(  50.400985,  30.517012),
//draggable: true,
icon: new google.maps.MarkerImage("/img/pin/pin_spritesheet.png", new google.maps.Size(41, 58), new google.maps.Point(56, 5))

});
infoBubble6 = new InfoBubble({
map: map,
content: '<div class="phoneytext">Міська клінічна лікарня №10'+
'<hr>'+
'<p>Голосіївський проспект, 59Б</p>'+
'</div>',
position: new google.maps.LatLng( 50.400985,  30.517012),
shadowStyle: 1,
padding: 0,
backgroundColor: 'rgba(30,14,0,0.7)',
borderRadius: 4,
arrowSize: 10,
borderWidth: 1,
borderColor: '#ff000b',
disableAutoPan: true,
hideCloseButton: true,
arrowPosition: 30,
backgroundClassName: 'phoney',
arrowStyle: 2
});


marker6.addListener('click', function() {
infoBubble6.open(map, marker6);
infoBubble.close();
infoBubble2.close();
infoBubble3.close();
infoBubble4.close();
infoBubble5.close();
infoBubble7.close();
infoBubble8.close();
infoBubble9.close();
infoBubble10.close();
/*infoBubble11.close();
infoBubble12.close();
infoBubble13.close();
infoBubble14.close();
infoBubble15.close();
infoBubble16.close();
infoBubble17.close();
infoBubble18.close();
infoBubble19.close();
infoBubble20.close();
infoBubble21.close();
infoBubble22.close();
infoBubble23.close();
infoBubble24.close();
infoBubble25.close();*/

});

google.maps.event.addListener(map, "click", function () {
infoBubble6.close();
});

/*Метро демиевская*/

var marker7 = new google.maps.Marker({
map: map,
position: new google.maps.LatLng(50.404743, 30.516851),
//draggable: true,
icon: new google.maps.MarkerImage("/img/pin/pin_spritesheet.png", new google.maps.Size(41, 58), new google.maps.Point(5, 73))

});
infoBubble7 = new InfoBubble({
map: map,
content: '<div class="phoneytext" style="text-align:center;">Метро Деміївскька'+
'</div>',
position: new google.maps.LatLng(50.404743, 30.516851),
shadowStyle: 1,
padding: 0,
backgroundColor: 'rgba(30,14,0,0.7)',
borderRadius: 4,
arrowSize: 10,
borderWidth: 1,
borderColor: '#ff000b',
disableAutoPan: true,
hideCloseButton: true,
arrowPosition: 30,
backgroundClassName: 'phoney',
arrowStyle: 2
});


marker7.addListener('click', function() {
infoBubble7.open(map, marker7);
infoBubble.close();
infoBubble2.close();
infoBubble3.close();
infoBubble4.close();
infoBubble5.close();
infoBubble6.close();
infoBubble8.close();
infoBubble9.close();
infoBubble10.close();
/*infoBubble11.close();
infoBubble12.close();
infoBubble13.close();
infoBubble14.close();
infoBubble15.close();
infoBubble16.close();
infoBubble17.close();
infoBubble18.close();
infoBubble19.close();
infoBubble20.close();
infoBubble21.close();
infoBubble22.close();
infoBubble23.close();
infoBubble24.close();
infoBubble25.close();*/

});

google.maps.event.addListener(map, "click", function () {
infoBubble7.close();
});

/*метро голосеевская*/

var marker8 = new google.maps.Marker({
map: map,
position: new google.maps.LatLng(50.397477, 30.508426),
//draggable: true,
icon: new google.maps.MarkerImage("/img/pin/pin_spritesheet.png", new google.maps.Size(41, 58), new google.maps.Point(5, 73))

});
infoBubble8 = new InfoBubble({
map: map,
content: '<div class="phoneytext" style="text-align:center;">Метро Голосіївскька'+
'</div>',
position: new google.maps.LatLng(50.397477, 30.508426),
shadowStyle: 1,
padding: 0,
backgroundColor: 'rgba(30,14,0,0.7)',
borderRadius: 4,
arrowSize: 10,
borderWidth: 1,
borderColor: '#ff000b',
disableAutoPan: true,
hideCloseButton: true,
arrowPosition: 30,
backgroundClassName: 'phoney',
arrowStyle: 2
});


marker8.addListener('click', function() {
infoBubble8.open(map, marker8);
infoBubble.close();
infoBubble2.close();
infoBubble3.close();
infoBubble4.close();
infoBubble5.close();
infoBubble6.close();
infoBubble7.close();
infoBubble9.close();
infoBubble10.close();
/*infoBubble11.close();
infoBubble12.close();
infoBubble13.close();
infoBubble14.close();
infoBubble15.close();
infoBubble16.close();
infoBubble17.close();
infoBubble18.close();
infoBubble19.close();
infoBubble20.close();
infoBubble21.close();
infoBubble22.close();
infoBubble23.close();
infoBubble24.close();
infoBubble25.close();*/

});

google.maps.event.addListener(map, "click", function () {
infoBubble8.close();
});

/*метро Лыбидская*/
var marker9 = new google.maps.Marker({
map: map,
position: new google.maps.LatLng(50.414192, 30.525033),
//draggable: true,
icon: new google.maps.MarkerImage("/img/pin/pin_spritesheet.png", new google.maps.Size(41, 58), new google.maps.Point(5, 73))

});
infoBubble9 = new InfoBubble({
map: map,
content: '<div class="phoneytext" style="text-align:center;">Метро Либідська'+
'</div>',
position: new google.maps.LatLng(50.414192, 30.525033),
shadowStyle: 1,
padding: 0,
backgroundColor: 'rgba(30,14,0,0.7)',
borderRadius: 4,
arrowSize: 10,
borderWidth: 1,
borderColor: '#ff000b',
disableAutoPan: true,
hideCloseButton: true,
arrowPosition: 30,
backgroundClassName: 'phoney',
arrowStyle: 2
});


marker9.addListener('click', function() {
infoBubble9.open(map, marker9);
infoBubble.close();
infoBubble2.close();
infoBubble3.close();
infoBubble4.close();
infoBubble5.close();
infoBubble6.close();
infoBubble7.close();
infoBubble8.close();
infoBubble10.close();
/*infoBubble11.close();
infoBubble12.close();
infoBubble13.close();
infoBubble14.close();
infoBubble15.close();
infoBubble16.close();
infoBubble17.close();
infoBubble18.close();
infoBubble19.close();
infoBubble20.close();
infoBubble21.close();
infoBubble22.close();
infoBubble23.close();
infoBubble24.close();
infoBubble25.close();*/

});

google.maps.event.addListener(map, "click", function () {
infoBubble9.close();
});

/*нац библиотека*/
var marker10 = new google.maps.Marker({
map: map,
position: new google.maps.LatLng(50.404323, 30.519012),
//draggable: true,
icon: new google.maps.MarkerImage("/img/pin/pin_spritesheet.png", new google.maps.Size(41, 58), new google.maps.Point(107, 73))

});
infoBubble10 = new InfoBubble({
map: map,
content: '<div class="phoneytext" style="text-align:center;">Національна бібліотека України імені В. І. Вернадського'+
'<hr>'+
'<p>Голосіївський просп., 3</p>'+
'</div>',
position: new google.maps.LatLng(50.404323, 30.519012),
shadowStyle: 1,
padding: 0,
backgroundColor: 'rgba(30,14,0,0.7)',
borderRadius: 4,
arrowSize: 10,
borderWidth: 1,
borderColor: '#ff000b',
disableAutoPan: true,
hideCloseButton: true,
arrowPosition: 30,
backgroundClassName: 'phoney',
arrowStyle: 2
});


marker10.addListener('click', function() {
infoBubble10.open(map, marker10);
infoBubble.close();
infoBubble2.close();
infoBubble3.close();
infoBubble4.close();
infoBubble5.close();
infoBubble6.close();
infoBubble7.close();
infoBubble8.close();
infoBubble10.close();
/*infoBubble11.close();
infoBubble12.close();
infoBubble13.close();
infoBubble14.close();
infoBubble15.close();
infoBubble16.close();
infoBubble17.close();
infoBubble18.close();
infoBubble19.close();
infoBubble20.close();
infoBubble21.close();
infoBubble22.close();
infoBubble23.close();
infoBubble24.close();
infoBubble25.close();*/

});

google.maps.event.addListener(map, "click", function () {
infoBubble10.close();
});


}
