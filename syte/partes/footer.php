		<footer>
			
			<div class="tabla">
				
				<div class="celda">
					<div class="titulo">ABOUT US</div>

					<div class="content">
						<p>But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with</p>

						<div class="info">
							<div class="content_icon">
								<i class="fas fa-map-marker-alt"></i>
							</div>
							121 King Street, Melbourne Victoria 3000 Australia
						</div>

						<div class="info">
							<div class="content_icon">
								<i class="fas fa-mobile"></i>
							</div>
							(0556) 501-889-322 or (0665) 577-133-001
						</div>

						<div class="info">
							<div class="content_icon">
								<i class="far fa-envelope"></i>
							</div>
							dynamicframeworks@gmail.com
						</div>
					</div>
				</div>

				<div class="celda">
					<div class="titulo">CATEGORIES</div>

					<ul class="categories">
						<li>
							<a href="#">Business</a>
						</li>
						<li>
							<a href="#">Design</a>
						</li>
						<li>
							<a href="#">Real life</a>
						</li>
						<li>
							<a href="#">Science</a>
						</li>
					</ul>

				</div>

				<div class="celda">
					<div class="titulo">SOCIAL NETWORKS</div>

					<ul class="social">
						<li id="facebook">
							<a target="_blank" href="https://www.facebook.com/Mciff3plmiami-1811213382514788/">
								<i class="fab fa-facebook-f"></i>
							</a>
						</li>
						<li id="twitter">
							<a target="_blank" href="https://www.instagram.com/mciff3plmiami/">
								<i class="fab fa-instagram"></i>
							</a>
						</li>
						<li id="linkedin">
							<a target="_blank" href="https://plus.google.com/u/3/111491832350257700494?hl=es">
								<i class="fab fa-google-plus-g"></i>
							</a>
						</li>
						<li id="behance">
							<a target="_blank" href="https://www.linkedin.com/in/mciff-miami-91083a15b/">
								<i class="fab fa-linkedin-in"></i>
							</a>
						</li>
					</ul>

					<div class="nombre_empresa">&copy; M.C. INT'L TRANSPORT</div>

					<div class="vlz-copyright-box">
						<div>Designed by <a href="https://angelveloz.com.ve" target="_blank" rel="nofollow">JG Social Media</a></div>
						<div>Developed by <a href="https://angelveloz.com.ve" target="_blank" rel="nofollow">&Aacute;ngel Veloz</a></div>
					</div>
				</div>

				<div class="celda">
					<div class="titulo">GALLERY</div>

					<?php
						$imgs = array(
							"1.jpg",
							"2.jpg",
							"3.jpg",
							"4.jpg",
							"5.jpg",
							"6.jpg"
						);
					?>

					<div class="gallery_container">
						<div class="gallery">
							<?php
								foreach ($imgs as $img) {
									echo "
										<div>
											<div>
												<div style='background-image: url( img/gallery/footer/{$img} );'></div>
											</div>
										</div>
									";
								}
							?>
						</div>	
					</div>

				</div>

			</div>

			<?php include __DIR__.'/editor.php'; ?>

		</footer>

	</body>
</html>