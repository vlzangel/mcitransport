<?php
	include dirname(dirname(dirname(__DIR__))).'/admin/base.php';

	$DB->query("
		INSERT INTO 
			galeria 
		VALUES (
			NULL,
			'{$titulo}',
			'{$subtitulo}',
			'{$img_reducida}'
		)
	");

	echo json_encode(array( "code" => 1 ));
?>