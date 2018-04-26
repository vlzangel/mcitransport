<?php
	function _e($clave, $alternativo = "", $dominio = false){
		global $DB;
		global $PAGE;

		if( $dominio === false ){ $dominio = $PAGE; }

		$info = $DB->get_var("SELECT contenido FROM contents WHERE dominio = '{$dominio}' AND clave = '{$clave}' ");

		if( $info === false ){
			$info = $alternativo;
		}

		return trim( $info );
	}
?>