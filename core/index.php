<?php
	
	define("CONFIG", $CONFIG);

	include(__DIR__."/clases/db.php");
	include(__DIR__."/clases/emails.php");

	if( FRONT ){
		include(__DIR__."/clases/constructor.php");
	}

?>