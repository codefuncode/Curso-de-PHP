<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8"/>
      <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
      <title>
         Document
      </title>
<!--  Declaración de lago de CSS para  comprehender mejor los ejemplos  -->


      <style type="text/css">
					.cuadrado{
					display: inline-block;
					width: 100px;
					height: 100px;
					padding: 25px;
					background-color: blue;
					text-align: center;
					color: white;
					}
					p, div{
						margin-top: 10px;
					}
      </style>
   </head>
   <body>
			<!--  Declaración de variable -->


			<?php $valor_generico = "Generico";?>
			<!-- ====================================================================== -->


			<?php $divicion_generica = "<div class='cuadrado'><p>$valor_generico</p></div>";?>
			<!-- ====================================================================== -->


			<?php $fracmento_text = <<<EOD
			Lorem ipsum dolor sit amet, consectetur adipisicing elit.
			Hic aut quo temporibus. Mollitia, cumque, ipsam. Sit praesentium, eum illum
			doloremque atque, amet rem reprehenderit quibusdam, dolor facilis ipsam,
			cum architecto. $valor_generico.
			EOD; ?>
			<!-- ====================================================================== -->


			<!--  Podemos almacenar fragmentos de etiquetas HTML para mostrarlas después  -->


			<?php $divicion4 = "<div class='cuadrado'><p>Ejemplo 4</p></div>"?>

			<!-- =================================================================== -->


			<?php $lorem = "Lorem ipsum dolor sit amet, consectetur adipisicing elit.
			Hic aut quo temporibus. Mollitia, cumque, ipsam. Sit praesentium, eum illum
			doloremque atque, amet rem reprehenderit quibusdam, dolor facilis ipsam,
			cum architecto";?>
			<!-- =================================================================== -->


      <p>
         <!-- Muy útil para desplegar datos dentro de HTML con una sintaxis intuitiva y limpia  -->


         <?="$lorem"?>
      </p>


      <p>
      	<!-- ============================================================ -->


      	<!--  Podemos incluir valores de una variable dentro de un texto  -->


         <?="Lorem ipsum dolor sit amet, consectetur adipisicing elit.
         Hic aut quo temporibus. Mollitia, cumque, ipsam. Sit praesentium,
         eum illum doloremque atque, amet rem reprehenderit quibusdam,
         dolor facilis ipsam, cum architecto.<br/> ${lorem} agregado."?>
      </p>
				<!-- ================= -->


				<?=$divicion4?>
				<!-- ============================================================== -->


      <p>
         <?php echo 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.
         Hic aut quo temporibus. Mollitia, cumque, ipsam. Sit praesentium, eum
         illum doloremque atque, amet rem reprehenderit quibusdam, dolor facilis
         ipsam, cum architecto.' ?>
      </p>
      <!-- ====================================== -->


      <!--  Ejemplo de usos de sintaxis corta  -->


      <div class="<?="cuadrado"?>">
      	<p>Ejemplo 1</p>
      </div>
      <!-- ====================================== -->


      <!--  Usamos la declaración normal de HTML -->


      <div class="cuadrado">
      	<p>Ejemplo 2</p>
      </div>
      <!-- ====================================== -->


      <!--  Uso de echo para establecer el valor de un atributo de HTML -->


      <div class="<?php echo "cuadrado" ?>">
      	<p>Ejemplo 3</p>
      </div>


      <!-- ===================================== -->
			<?=$divicion4?>
      <!-- ===================================== -->


      <?="<div class='cuadrado'><p>Ejemplo 5</p></div>"?>
      <!-- ==================================== -->


      <div class="">
      	 <?php echo $fracmento_text ?>
      </div>
      <!-- ==================================== -->


      <?= $divicion_generica?>
      <!-- ==================================== -->


     <div class="">
     	  <?= $fracmento_text ?>
     </div>
			<!-- ============================================================================== -->


			<?php $valor_generico      = "Generico 2";?>
			<!--  PHP no restablece las declaraciones de variables de valores en valores dados -->


			<?= $divicion_generica?>
			<?php $divicion_generica = "<div class='cuadrado'><p>$valor_generico</p></div>"?>
			<!-- ============================================================================== -->


			<?= $divicion_generica?>

			<div class="">
			<?php echo $fracmento_text ?>
			</div>
   </body>
</html>
