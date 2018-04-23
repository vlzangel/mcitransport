<?php
	function MENU(){
		$menus = array(
			"Home" => HOME(),
			"About Us" => HOME()."/about-us",
			"Services" => HOME()."/#servicios",
			"Request Form" => HOME()."/#request-form",
			"Gallery" => HOME()."/#gallery",
			"Contact" => HOME()."/contact",
		);

		$_menu = "";
		foreach ($menus as $menu => $link) {
			$_menu .= "<li><a href='{$link}'>{$menu}</a></li>";
		}

		echo "
			<nav {$PARAM['clases']}>
				<div class='logo_header'> </div>
				<ul>
					{$_menu}
				</ul>
			</nav>
		";
	}
?>