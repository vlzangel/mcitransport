<?php
	include dirname(dirname(dirname(__DIR__))).'/admin/base.php';

	$DB->query("
		DELETE FROM 
			testimonios 
		WHERE 
			id = {$ID};
	");

	echo json_encode(array( "code" => 1 ));
?>