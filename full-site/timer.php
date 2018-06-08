<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">



	<link type="text/css" href="../jquery.countdown.css?v=1.0.0.0" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="../jquery.countdown.min.js?v=1.0.0.0"></script>
</head>
<body><div id="jquery-script-menu">
<div class="jquery-script-center">
<div class="jquery-script-ads"><script type="text/javascript">
</script>
<script type="text/javascript"
src="https://pagead2.googlesyndication.com/pagead/show_ads.js">
</script></div>
<div class="jquery-script-clear"></div>
</div>
</div>
	<ul id="example">
	  <li><span class="days">00</span><p class="days_text">Днів</p></li>
		<li class="seperator">:</li>
		<li><span class="hours">00</span><p class="hours_text">Годин</p></li>
		<li class="seperator">:</li>
		<li><span class="minutes">00</span><p class="minutes_text">Хвилин</p></li>
		<li class="seperator">:</li>
		<li><span class="seconds">00</span><p class="seconds_text">Секунд</p></li>
	</ul>

	<script type="text/javascript">
		$('#example').countdown({
			date: '04/27/2017 23:59:59',
			offset: -7,
			day: 'День',
			days: 'Днів',
			hour : 'Година',
			hours : 'Годин',
			minute : 'Хвилина',
			minutes : 'Хвилин',
			second : 'Секунда',
			seconds	: 'Секунд',
		}, function () {
			alert('Done!');
		});
	</script>

	
</body>
</html>
