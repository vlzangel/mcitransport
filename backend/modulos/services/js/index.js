var table = "";
jQuery(document).ready(function() {
    table = jQuery('#dataTable').DataTable({
        "scrollX": true,
        "ajax": {
            "url": HOME+"/ajax/list.php",
            "type": "POST"
        }
	});

} );