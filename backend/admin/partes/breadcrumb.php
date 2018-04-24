<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            Dashboard
        </li>
        <?php
        	$partes = explode("/", $PAGE);
        	foreach ($partes as $value) {
        		if( $value != "" && $value != "/" ){
        			echo '
		    			<li class="breadcrumb-item">
				            '.$MENUS[$value]["titulo"].'
				        </li>
	        		';
        		}
        	}
        ?>
    </ol>
    <div class="row">
        <div class="col-12">