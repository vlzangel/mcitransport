<?php
	include dirname(dirname(dirname(__DIR__))).'/admin/base.php';

	$img = "";
	if( $img_reducida != "" ){
		$img = ", imagen = '{$img_reducida}'";
	}

	$DB->query("
		UPDATE 
			services 
		SET 
			titulo = '{$titulo}',
			subtitulo = '{$subtitulo}',
			contenido = '{$contenido}' {$img}
		WHERE 
			id = {$ID};
	");

	echo json_encode(array( "code" => 1 ));
?>