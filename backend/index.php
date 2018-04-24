<?php
	include __DIR__.'/base.php';

	if( $SESSION->get("user") !== false ){
		
		include __DIR__.'/admin/funciones/funciones.php';

		include __DIR__.'/admin/partes/header.php';
		include __DIR__.'/menu.php';
		include __DIR__.'/admin/partes/menu.php';
		include __DIR__.'/admin/partes/mensajes.php';
		include __DIR__.'/admin/partes/notificaciones.php';
		include __DIR__.'/admin/partes/busqueda.php';

		$URL = explode("?", $_SERVER["REQUEST_URI"]);
		$PAGE = str_replace($CONFIG["home"]."/backend/", "", $URL[0]);
		if( substr($PAGE, -1) == "/" ){
			$PAGE = substr($PAGE, 0, -1);
		}
		
		if( $PAGE == "" ){
			include __DIR__.'/admin/partes/breadcrumb.php';
			include __DIR__.'/modulos/index.php';
		}else{
			if( file_exists( __DIR__."/modulos/".$PAGE.".php" ) ){
				include __DIR__.'/admin/partes/breadcrumb.php';
				include( __DIR__."/modulos/".$PAGE.".php" );
			}else{
				include __DIR__.'/modulos/404.php';
			}
		}
		
		include __DIR__.'/admin/partes/footer.php';
	}else{
		include __DIR__.'/login.php';
	}
	
?>