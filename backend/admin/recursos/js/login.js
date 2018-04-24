jQuery(document).ready(function(){

	jQuery("#login").on("submit", function(e){
		e.preventDefault();

		jQuery.post(
			"admin/recursos/ajax/login.php",
			jQuery(this).serialize(),
			function(data){
				console.log( data );
			}, "json"
		).fail(function(e){
			console.log( e );
		});

		console.log("Chao");
	});

	console.log("Hola");

});