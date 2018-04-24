<?php
	include dirname(dirname(dirname(__DIR__))).'/admin/base.php';

	$services = $DB->get_results("SELECT * FROM services");

	foreach ($services as $service) {

		$data["data"][] = array(
	        $service->id,
	        $service->titulo,
	        $service->subtitulo,
	        substr($service->contenido, 0, 40)."...",
	        "
	        	<span 
	        		onclick='abrir_link( jQuery( this ) )' 
	        		data-id='".$service->id."' 
	        		data-titulo='Editar Marca' 
	        		data-modulo='marcas' 
	        		data-modal='nuevo' 
	        		class='enlace'
	        	>Editar</span>
	        "
	    );

	}

	echo json_encode($data);
?>