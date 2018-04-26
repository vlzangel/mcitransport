<!DOCTYPE html>
<html>
	<head>
		<title>MC Intl Transportation INC</title>
		<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no'>

		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
		
		<link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">

		<link rel="shortcut icon" href="<?php echo HOME(); ?>img/logos/favicon_2.png" >

		<?php
			setStyles(array(
				"fuentes",
				"globales",
			));

			if( $SESSION->get("user") !== false ){
				setStyles(array(
					"/editor/froala_editor",
					"/editor/froala_style",
				));
				echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css">';
			}
		?>
		
		<?php
			setScripts(array(
				"jquery",
				"Smooth",
				"globales"
			));

			if( $SESSION->get("user") !== false ){
				echo '
			        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js"></script>
			        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js"></script>
				';
				setScripts(array(
					"/editor/froala_editor.min",
					"/editor/plugins/align.min",
				));
			}
		?>

		<script type="text/javascript">
			var HOME = "<?php echo HOME(); ?>";
		</script>
	</head>
	<body>
		<?php
			echo MENU();
		?>