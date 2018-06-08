<?$filename='include/language/'.(substr($_POST['lang'], 0,2)).".ini"; global 	 $mes;
	if (file_exists($filename)) { //echo 111; echo $_POST['lang'];
	 $mes = parse_ini_file($filename);
	 }
	 else{
	 $mes = parse_ini_file('language/ua.ini');
	// echo 6666; echo $_POST['lang'];
	}


	?>
