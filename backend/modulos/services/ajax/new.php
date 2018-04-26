<?php
	include dirname(dirname(dirname(__DIR__))).'/admin/base.php';

	$DB->query("
		INSERT INTO 
			services 
		VALUES (
			NULL,
			'{$titulo}',
			'{$subtitulo}',
			'{$contenido}',
			'{$img_reducida}'
		)
	");

	echo json_encode(array( "code" => 1 ));
?>