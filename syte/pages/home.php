<?php
	setStyles(array(
		"home"
	));
?>
<header class='banner_home'>
	<div class="banner_box">
		<div class="fondo"></div>

		<div class="banner_txt">
			Transportation<br>
			Specialist
		</div>

	</div>
</header>

<section class="container seccion_home_1">
	
	<div class="mapa_container">
		<table>
			<tr>
				<td class="info">
					<div class="titulo editable" data-dominio="/" data-clave="seccion_1_titulo" ><?php echo _e("seccion_1_titulo", "M.C. Int'l Transportation Inc"); ?></div>
					<div class="subtitulo editable" data-dominio="/" data-clave="seccion_1_subtitulo" ><?php echo _e("seccion_1_subtitulo", "\"Transportation Specialist\""); ?></div>
					<div class="contenido editable" data-dominio="/" data-clave="seccion_1_contenido" ><?php echo _e("seccion_1_contenido", "M.C. Int'l Transportation Inc has been providing creative solutions for our customers since 1993. Our customers' satisfaction has always been measured by our exceptional growth and the commitment of our employees to be the most innovative industry leader in the marketplace.

We are an Intermodal Carrier having 48 state authority, servicing the international markets and specializing in the transportation and storage of ocean marine containers.

We are committed to our task of being the best Intermodal trucking company in the Southeast. We take great pride in our work and understand what it takes to be the best.

We have worked hard to attract experienced professionals, obtain the latest technology, acquire the physical facility as well as put into place all of the necessary control procedures to insure professional service from start to finish."); ?></div>
				</td>
				<td class="mapa">
					<img src="img/home/mapa.png" />
				</td>
			</tr>
		</table>
	</div>

</section>
<i class="fas fa-pencil-alt"></i>
<section class="seccion_home_2">
	<div class="fondo"></div>
	<div class="marco">
		<div class="container">
			<table>
				<tr>
					<td>
						<p class="editable" data-dominio="/" data-clave="seccion_2_txt_1" >
							<?php echo _e("seccion_2_txt_1", "We combine the best of our skills and ideas to present you products really worth your attention that will change the way you think about design."); ?>
						</p>
						<span class="editable" data-dominio="/" data-clave="seccion_2_txt_2" ><?php echo _e("seccion_2_txt_2", "THOMAS SIMSOMP, WEB DESIGNER"); ?></span>
					</td>
				</tr>
			</table>
		</div>
	</div>
</section>

<section class="container seccion_home_3">
	<div class="fila">
		<div class="container">
			<div class='titulo editable' data-dominio="/" data-clave="seccion_3_titulo">
				<?php 
					echo _e(
						"seccion_3_titulo", 
						"Prepare to meet Ronneby<br>
						 high quality, versatile and powerful theme"
					); 
				?>
			</div>
			<div class='subtitulo editable' data-dominio="/" data-clave="seccion_3_subtitulo" >
				<?php 
					echo _e(
						"seccion_3_subtitulo", 
						"Made by the team of adventurous and creative web developers and designers from Chicago."
					); 
				?>
			</div>
		</div>
	</div>
	<div class="fila">
		<div class="container">
			<div class="item_box">
				<div class="item_head">
					<div class="item_img"> <img src="img/home/iconos/1.png" > </div>
					<div class="item_titulo">
						Powerful options panel
						<span>Style every element</span>
					</div>
				</div>
				<div class="item_content">
					Nulla elementum vitae odio non sollicitudin. Nullam nec augue dui. Curabitur ullamcorper interdum mi, nec laoreet nisi varius et.
				</div>
			</div>
			<div class="item_box">
				<div class="item_head">
					<div class="item_img"> <img src="img/home/iconos/2.png" > </div>
					<div class="item_titulo">
						Numerous headers
						<span>Style the menus</span>
					</div>
				</div>
				<div class="item_content">
					Nulla elementum vitae odio non sollicitudin. Nullam nec augue dui. Curabitur ullamcorper interdum mi, nec laoreet nisi varius et.
				</div>
			</div>
			<div class="item_box">
				<div class="item_head">
					<div class="item_img"> <img src="img/home/iconos/3.png" > </div>
					<div class="item_titulo">
						Advanced Google Fonts
						<span>Manage typography</span>
					</div>
				</div>
				<div class="item_content">
					Nulla elementum vitae odio non sollicitudin. Nullam nec augue dui. Curabitur ullamcorper interdum mi, nec laoreet nisi varius et.
				</div>
			</div>
			<div class="item_box">
				<div class="item_head">
					<div class="item_img"> <img src="img/home/iconos/4.png" > </div>
					<div class="item_titulo">
						Retina ready design
						<span>Sharp image quality</span>
					</div>
				</div>
				<div class="item_content">
					Nulla elementum vitae odio non sollicitudin. Nullam nec augue dui. Curabitur ullamcorper interdum mi, nec laoreet nisi varius et.
				</div>
			</div>
			<div class="item_box">
				<div class="item_head">
					<div class="item_img"> <img src="img/home/iconos/5.png" > </div>
					<div class="item_titulo">
						Translated and localized
						<span>Multilingual ready</span>
					</div>
				</div>
				<div class="item_content">
					Nulla elementum vitae odio non sollicitudin. Nullam nec augue dui. Curabitur ullamcorper interdum mi, nec laoreet nisi varius et.
				</div>
			</div>
			<div class="item_box">
				<div class="item_head">
					<div class="item_img"> <img src="img/home/iconos/6.png" > </div>
					<div class="item_titulo">
						Customizable modules
						<span>Versatile style options</span>
					</div>
				</div>
				<div class="item_content">
					Nulla elementum vitae odio non sollicitudin. Nullam nec augue dui. Curabitur ullamcorper interdum mi, nec laoreet nisi varius et.
				</div>
			</div>
		</div>
	</div>
</section>

<section class="seccion_home_4">
	<div class="titulo">Services</div>
	<div class="service_container">

		<?php
			$servicios = $DB->get_results("SELECT * FROM services");
			$HTML = "";
			if( $servicios !== false ){
				foreach ($servicios as $servicio) {
					$HTML .= "
						<div class='service_box'>
							<div class='marco tabla'>
								<div class='celda'>
									<img src='{$servicio->imagen}' >
									<div class='txt_1'>
										{$servicio->titulo}
									</div>
									<div class='txt_2'>
										{$servicio->subtitulo}
									</div>
									<div class='txt_3'>
										{$servicio->contenido}
									</div>
								</div>			
							</div>
						</div>
					";
				}
			}
			echo $HTML;
		?>
		
	</div>
	
</section>

<section class="seccion_home_5">
	<div class="img"></div>
	<div class="testimonials tabla">
		<div class="celda">
			
			<div style="text-align: left;">

				<div class="titulo">
					Check out our customers' reviews
				</div>
				<div class="subtitulo">
					Shape your future web project with sharp design and functions.
				</div>
				<div class="delimitador"></div>

				<div class="testimonials_container">

					<?php

						$testimonios = $DB->get_results("SELECT * FROM testimonios");
						$data["data"] = array();

						$HTML = "";
						if( $testimonios !== false ){
							foreach ($testimonios as $testimonio) {
								$HTML .= "
									<div class='testimonials_box'>
										<div class='testimonials_item tabla'>
											<div class='testimonials_item_box_img celda'>
												<img src='{$testimonio->imagen}' />
											</div>
											<div class='testimonials_item_content celda'>
												{$testimonio->comentario}
											</div>
										</div>
										<div class='testimonials_autor'>{$testimonio->nombre}</div>
									</div>
								";
							}
						}
						echo $HTML;
					?>

				</div>

			</div>

		</div>

	</div>

</section>

<section class="seccion_home_6">

	<div class="container">
	
		<form id='form_contactar' class='tabla' method='POST'>
			<div class="celda">

				<div class="titulo">REQUEST FORM</div>

				<div class="container_inputs">

					<div class="info_titulo">
						Request A RAte Or More Information
					</div>
					<div class="info_subtitulo">
						Use this form to contact us ta get more information about our company, rates or services.
					</div>

					<table>
						<tr>
							<th>Origin (zip code): </th>
							<td><input type='text' id='origin' name='origin' /></td>
						</tr>
						<tr>
							<th>Destination (zip code): </th>
							<td><input type='text' id='destination' name='destination' /></td>
						</tr>
						<tr>
							<th>Your Name: </th>
							<td><input type='text' id='name' name='name' /></td>
						</tr>
						<tr>
							<th>Your E-mail Address: </th>
							<td><input type='text' id='email' name='email' /></td>
						</tr>
						<tr>
							<th>Your Phone Number: </th>
							<td><input type='text' id='phone' name='phone' /></td>
						</tr>
						<tr>
							<th>Comments: </th>
							<td>
								<textarea id='comments' name='comments' required></textarea>
							</td>
						</tr>
					</table>

				</div>

				<div class='center'>
					<div class='g-recaptcha' data-sitekey='6LfCD0oUAAAAAGpjR6_kH2hU14ULSr4OuUDiQWkh'></div>
				</div>

				<input type='submit' id='btn_enviar' value='SEND' />

				<!-- 
				<div class='confirmacion'>
					<table>	
						<tr>
							<td>
								Thank you for your interest in our services.
								Your request has been successfully submitted.
								One of our member team will get in touch with 
								you  as soon as possible.

								<span>CONTINUE</span>
							</td>
						</tr>
					</table>
				</div>
				-->

			</div>

		</form>

	</div>

</section>



<section class="seccion_home_7">

	<div class="titulo">GALLERY</div>

	<div class="gallery_container">
		
		<?php
			$imgs = array(
				"1.jpg",
				"2.jpg",
				"3.jpg",
				"4.jpg"
			);

			$galerias = $DB->get_results("SELECT * FROM galeria");
			$HTML = "";
			if( $galerias !== false ){
				foreach ($galerias as $galeria) {
					$HTML .= "
						<div class='gallery_item'>
							<div>
								<div style='background-image: url( {$galeria->imagen} );'>
									<div class='gallery_capa tabla'>
										<div class='celda'>
											<div class='gallery_item_titulo'>{$galeria->titulo}</div>
											<div class='gallery_item_separador'></div>
											<div class='gallery_item_subtitulo'>{$galeria->subtitulo}</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					";
				}
			}
		?>
		<div class="gallery_box">
			<?php
				echo $HTML;
			?>
		</div>

	</div>

</section>