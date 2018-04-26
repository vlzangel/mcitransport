<?php if( $SESSION->get("user") !== false ){ ?>
	<style type="text/css">
		div#editor {
		    position: fixed;
		    z-index: 99999999999;
		    top: 100px;
		    left: 100px;
		    width: calc( 100% - 200px);
		    height: calc( 100% - 230px);
		}
		.fr-wrapper {
		    height: calc( 100% - 90px );
		}
		div#edit {
		    height: 100%;
		    margin-top: 30px;
		}
		.ocultarEditor{
			display: none;
		}
		#cerrarEditor{
			position: absolute;
			top: 10px;
		    right: -40px;
		    font-size: 35px;
		    cursor: pointer;
		    z-index: 999999999;
	        background: #FFF;
            border-radius: 50%;
		}

		#saveEditor {
		    position: absolute;
		    bottom: -85px;
		    right: -2px;
		    font-size: 26px;
		    cursor: pointer;
		    z-index: 999999999;
		    background: #15acdc;
		    border-radius: 4px;
		    border: solid 2px #008db9;
		    padding: 5px 30px;
		    color: #FFF;
		}
	</style>
	<button id="init">Init Editor</button>
	<button id="destroy">Destroy Editor</button>
	<div id="editor" class="ocultarEditor">
		<i id="cerrarEditor" class="fas fa-times-circle"></i>
        <div id='edit' class="fr-view">
            
        </div>
        <button id="saveEditor">Save</button>
    </div>
    <script>
    	var seccionActual = "";
        jQuery(function(){
        	
            jQuery('#cerrarEditor').on('click', function (e) {
            	jQuery('#edit').froalaEditor('destroy');
                jQuery('#edit').addClass('fr-view');
                jQuery('#editor').addClass('ocultarEditor');
            });

            jQuery('#saveEditor').on('click', function (e) {
            	var HTML = jQuery('#edit').froalaEditor('html.get');

            	jQuery.post(
            		HOME+"/ajax/editor.php",
            		{
            			CONTENIDO: HTML,
            			DOMINIO: jQuery(this).attr("data-dominio"),
            			CLAVE: jQuery(this).attr("data-clave")
            		},
            		function(data){

            			console.log( data );

            			seccionActual.html( HTML );

            			seccionActual = "";

            			jQuery('#edit').froalaEditor('destroy');
                    	jQuery('#edit').addClass('fr-view');
                    	jQuery('#editor').addClass('ocultarEditor');
            		}
            	);

            });

			jQuery(".editable").on("click", function(e){
				// console.log( jQuery(this).html() );

				seccionActual = jQuery(this);

				jQuery("#saveEditor").attr("data-dominio", jQuery(this).attr("data-dominio") );
				jQuery("#saveEditor").attr("data-clave", jQuery(this).attr("data-clave") );

                jQuery('#editor').removeClass('ocultarEditor');

				jQuery("#edit").html( jQuery(this).html() );
				jQuery('#edit').removeClass('fr-view').froalaEditor();
			});
        });
    </script>
<?php } ?>