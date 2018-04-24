<?php
	function _e($clave, $formato = "", $dominio = false){
		global $DB;
		global $PAGE;

		if( $dominio === false ){ $dominio = $PAGE; }

		$info = $DB->get_var("SELECT contenido FROM contents WHERE dominio = '{$dominio}' AND clave = '{$clave}' ");

		/*echo "<pre>";
			print_r($PAGE);
		echo "</pre>";*/

		switch ( $formato  ) {
			case 'parrafo':
				$_info = explode("\n", $info); 
				$temp = "";
				foreach ($_info as $parrafo) {
					$temp .= "<p>".$parrafo."</p>";
				}
			break;
		}

		return $info;
	}
?>