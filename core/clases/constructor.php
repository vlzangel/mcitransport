<?php
	/**
	* 	Constructor Web
	*/

	$URL = explode("?", $_SERVER["REQUEST_URI"]);

	$PAGE = str_replace($CONFIG["home"]."/", "", $URL[0]);
	$preCargas = array(
		"funciones",
		"preHeader",
		"header",
	);
	foreach ($preCargas as $archivo) {
		if( file_exists( dirname(dirname(__DIR__))."/syte/frontend/partes/{$archivo}.php" ) ){
			include( dirname(dirname(__DIR__))."/syte/frontend/partes/{$archivo}.php" );
		}
	}
	if( $PAGE != "" && $PAGE != "/" ){
		if( file_exists( dirname(dirname(__DIR__))."/syte/frontend/pages/".$PAGE.".php" ) ){
			include( dirname(dirname(__DIR__))."/syte/frontend/pages/".$PAGE.".php" );
		}else{
			if( file_exists( dirname(dirname(__DIR__))."/syte/frontend/pages/404.php" ) ){
				include( dirname(dirname(__DIR__))."/syte/frontend/pages/404.php" );
			}else{
				include( dirname(__DIR__)."/plantillas/404.php" );
			}
		}
	}else{
		if( file_exists( dirname(dirname(__DIR__))."/syte/frontend/pages/home.php" ) ){
			include( dirname(dirname(__DIR__))."/syte/frontend/pages/home.php" );
		}else{
			if( file_exists( dirname(dirname(__DIR__))."/syte/frontend/index.php" ) ){
				include( dirname(dirname(__DIR__))."/syte/frontend/index.php" );
			}else{
				echo "Error no hay un index definido";
			}
		}
	}
	$posCargas = array(
		"footer",
	);
	foreach ($posCargas as $archivo) {
		if( file_exists( dirname(dirname(__DIR__))."/syte/frontend/partes/{$archivo}.php" ) ){
			include( dirname(dirname(__DIR__))."/syte/frontend/partes/{$archivo}.php" );
		}
	}
?>