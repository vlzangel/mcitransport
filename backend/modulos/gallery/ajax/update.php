<?php
	include dirname(dirname(dirname(__DIR__))).'/admin/base.php';

	$img = "";
	if( $img_reducida != "" ){
		$img = ", imagen = '{$img_reducida}'";
	}

	$DB->query("
		UPDATE 
			galeria 
		SET 
			titulo = '{$titulo}',
			subtitulo = '{$subtitulo}' {$img}
		WHERE 
			id = {$ID};
	");

	echo json_encode(array( "code" => 1 ));
?>