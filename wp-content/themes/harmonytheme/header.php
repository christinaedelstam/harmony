<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Harmony - Accueil</title>

	<?php wp_head();?>

</head>
<body>

<header>

	<div class="container">
		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'top-menu',
				'menu_class' => 'top-bar'
			)
		);
		?>
	</div>

</header>