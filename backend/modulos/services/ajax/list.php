<?php
	include dirname(dirname(dirname(__DIR__))).'/admin/base.php';

	$services = $DB->get_results("SELECT * FROM services");
	$data["data"] = array();

	if( $services !== false ){
		foreach ($services as $service) {
			$data["data"][] = array(
		        $service->id,
		        "<img src='{$service->imagen}' class='img_tabla' style='height: 35px;' />",
		        $service->titulo,
		        $service->subtitulo,
		        substr($service->contenido, 0, 40)."...",
		        "
		        	<span 
		        		onclick='abrir_link( jQuery( this ) )' 
		        		data-id='".$service->id."' 
		        		data-titulo='Update Service' 
		        		data-modal='update' 
		        		class='enlace'
		        	>Edit</span>

		        	<span 
		        		onclick='abrir_link( jQuery( this ) )' 
		        		data-id='".$service->id."' 
		        		data-titulo='Delete Service' 
		        		data-modal='delete' 
		        		class='enlace'
		        	>Delete</span>
		        "
		    );
		}
	}

	echo json_encode($data);
?>