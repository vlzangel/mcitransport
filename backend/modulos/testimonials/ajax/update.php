<?php
	include dirname(dirname(dirname(__DIR__))).'/admin/base.php';

	$img = "";
	if( $img_reducida != "" ){
		$img = ", imagen = '{$img_reducida}'";
	}

	$DB->query("
		UPDATE 
			testimonios 
		SET 
			nombre = '{$name}',
			comentario = '{$comentario}' {$img}
		WHERE 
			id = {$ID};
	");

	echo json_encode(array( "code" => 1 ));
?>