<?php
	include dirname(dirname(dirname(__DIR__))).'/admin/base.php';

	$testimonios = $DB->get_results("SELECT * FROM testimonios");
	$data["data"] = array();

	if( $testimonios !== false ){
		foreach ($testimonios as $testimonio) {

			$data["data"][] = array(
		        $testimonio->id,
		        "<img src='{$testimonio->imagen}' class='img_tabla' />",
		        $testimonio->nombre,
		        substr($testimonio->comentario, 0, 40)."...",
		        "
		        	<span 
		        		onclick='abrir_link( jQuery( this ) )' 
		        		data-id='".$testimonio->id."' 
		        		data-titulo='Update Testimony' 
		        		data-modal='update' 
		        		class='enlace'
		        	>Edit</span>

		        	<span 
		        		onclick='abrir_link( jQuery( this ) )' 
		        		data-id='".$testimonio->id."' 
		        		data-titulo='Delete Testimony' 
		        		data-modal='delete' 
		        		class='enlace'
		        	>Delete</span>
		        "
		    );

		}
	}

	echo json_encode($data);
?>