<?php
	include dirname(dirname(dirname(__DIR__))).'/admin/base.php';

	$contenidos = $DB->get_results("SELECT * FROM contents");

	foreach ($contenidos as $contenido) {

		$data["data"][] = array(
	        $contenido->id,
	        $contenido->dominio,
	        $contenido->clave,
	        substr($contenido->contenido, 0, 25)."...",
	        $contenido->creacion,
	        $contenido->modificacion,
	        "
	        	<span 
	        		onclick='abrir_link( jQuery( this ) )' 
	        		data-id='".$contenido->id."' 
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