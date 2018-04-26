<?php
	include dirname(dirname(dirname(__DIR__))).'/admin/base.php';

	$DB->query("
		INSERT INTO 
			testimonios 
		VALUES (
			NULL,
			'{$name}',
			'{$comentario}',
			'{$img_reducida}'
		)
	");

	echo json_encode(array( "code" => 1 ));
?>