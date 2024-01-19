<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP</title>
</head>
	<body>
		<h1>
			Lenguaje PHP
		</h1>
		<!--  Los comentarios con HTML no surgen efecto con php embebido  -->
		<!-- <?php echo "1) Código de sintaxis especial PHP"; ?><br> -->

		<?="2) Código de sintaxis especial PHP";?><br>

		 <!-- Not Working -->
		<? "3) Código de sintaxis especial PHP" ?>

		<?php /* COMMENT */// ... más código /* COMMENT */ // el script finaliza aquí sin etiqueta de cierre de PHP   ?>
	</body>
</html>