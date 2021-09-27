

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Documento</title>
</head>
<body>
<?php
$contenido = "Texto dentro del párrafo ";
$parrafo   = "<p>$contenido</p>";
?>

<?=$parrafo;?>

<?php
$contenido = "Texto dentro del párrafo mas largo que el anterior  ";
$parrafo   = "<p>$contenido</p>";
//  Uso de echo para desplegar en pantalla
echo $parrafo;
?>

<?php

//Uso de la sintaxis corta  para el despliegue en pantalla
;?>

<?="<p>$contenido</p>";?>
<?="<p>${contenido}</p>";?>

<?php

// Ejemplo dle uso de print para desplegar en pantalla
print($parrafo);?>


</body>
</html>