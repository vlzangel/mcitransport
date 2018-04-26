<?php
	include dirname(dirname(dirname(__DIR__))).'/admin/base.php';

	$galerias = $DB->get_results("SELECT * FROM galeria");
	$data["data"] = array();

	if( $galerias !== false ){
		foreach ($galerias as $galeria) {
			$data["data"][] = array(
		        $galeria->id,
		        "<img src='{$galeria->imagen}' class='img_tabla' style='height: 35px;' />",
		        $galeria->titulo,
		        $galeria->subtitulo,
		        "
		        	<span 
		        		onclick='abrir_link( jQuery( this ) )' 
		        		data-id='".$galeria->id."' 
		        		data-titulo='Update Image Gallery' 
		        		data-modal='update' 
		        		class='enlace'
		        	>Edit</span>

		        	<span 
		        		onclick='abrir_link( jQuery( this ) )' 
		        		data-id='".$galeria->id."' 
		        		data-titulo='Delete Image Gallery' 
		        		data-modal='delete' 
		        		class='enlace'
		        	>Delete</span>
		        "
		    );
		}
	}

	echo json_encode($data);
?>