<?php
	include dirname(dirname(dirname(__DIR__))).'/admin/base.php';

	$r = $DB->get_row( "SELECT * FROM galeria WHERE id='{$ID}' " );
?>

<form role="form" id="form" >

	<input type="hidden" id="ID" name="ID" value="<?php echo $r->id; ?>" />

	<div class="form-group">
		<label for="titulo" >Title </label>
		<input type="text" class="form-control" id="titulo" name="titulo" value="<?php echo $r->titulo; ?>" required />
		<div class="val_error">This field is required</div>
	</div>

	<div class="form-group">
		<label for="subtitulo" >Subtitle </label>
		<input type="text" class="form-control" id="subtitulo" name="subtitulo" value="<?php echo $r->subtitulo; ?>" required />
		<div class="val_error">This field is required</div>
	</div>

	<div class="form-group">
		<label for="img">Image</label>
		<input type="file" class="form-control-file" id="img" name="img" accept="image/*">
		<input type="hidden" id="img_reducida" name="img_reducida" />
		<img id="img_vista" src="<?php echo $r->imagen; ?>" />
	</div>

	<div id="msg" class="alert alert-danger d-none" role="alert"></div>
	<hr>
  	<button type="submit" id="btn-enviar" class="btn btn-primary">Update</button>
</form>

<script type="text/javascript">
	jQuery("#form").on("submit", function(e){
		e.preventDefault();
		update( jQuery(this) );
	});
	initDimenciones(700, 500);
	initImg("img");
</script>