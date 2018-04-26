<?php
	include dirname(dirname(dirname(__DIR__))).'/admin/base.php';
?>

<form role="form" id="form" >

	<input type="hidden" id="ID" name="ID" value="<?php echo $ID; ?>" />

	Do you want to delete this service?

	<hr>

  	<button data-dismiss="modal" aria-label="Close" class="btn btn-light" style="float: left; margin: 0px;">Close</button>
  	<button type="submit" id="btn-enviar" class="btn btn-danger" style="float: right; margin: 0px;">Delete</button>
</form>

<script type="text/javascript">
	jQuery("#form").on("submit", function(e){
		e.preventDefault();
		_delete( jQuery(this) );
	});
</script>