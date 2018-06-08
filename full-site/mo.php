<html lang="en">
<head>
  <meta charset="utf-8">
  <title>mouseover demo</title>
  <style>
  div.out {
    width: 40%;
    height: 120px;
    margin: 0 15px;
    background-color: #d6edfc;
    float: left;
  }
  div.in1,div.in {
    width: 60%;
    height: 60%;
    background-color: #fc0;
    margin: 10px auto;
  }
  p {
    line-height: 1em;
    margin: 0;
    padding: 0;
  }
  </style>
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>
 
<div class="out overout">
  <span class="n1">Поверх 0</span>
  <div class="in1">
  </div>
</div>
 
<div class="out overout1">
  <span>Поверх 0 </span>
  <div class="in">
  </div>
</div>
 
<div class="out enterleave">
  <span>move your mouse</span>
  <div class="in">
  </div>
</div>
 
<script>
var i = 0;
var jJ = 0;
$( "div.overout" )
  .mouseover(function() {
    i = 1;
    $( this ).find("span.n1").text( +i );
  })
  .mouseout(function() {
   $( this ).find( "span.n1" ).text( "Поверх "+ jJ  );
  });

$( "div.overout1" )
  .mouseover(function() {
    i = 2;
     $( this ).find( "span" ).text( +i );
  })
  .mouseout(function() {
    $( this ).find( "span" ).text( "Поверх " + jJ  );
  });
 
/*var n = 0;
$( "div.enterleave" )
  .mouseenter(function() {
    n += 1;
    $( this ).find( "span" ).text( "mouse enter x " + n );
  })
  .mouseleave(function() {
    $( this ).find( "span" ).text( "mouse leave" );
  });*/
</script>
 
</body>
</html>
