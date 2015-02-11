<!--Teniendo en cuenta que la clave es “eureka”, escribir un algoritmo que nos pida una clave. Solo tenemos 3 intentos para acertar, si fallamos los 3 intentos nos mostrara un mensaje indicándonos que hemos agotado esos 3 intentos. (Recomiendo utilizar un interruptor). 
Si acertamos la clave, saldremos directamente del programa.-->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>pregunta 4</title>
</head>
<body bgcolor="brown">
	<form action="pregunta4.php" method="post">
		<b>INGRESE LA CLAVE</b>
		<input type="password" name="clave" id=""><br>
		<input type="submit" value="verificar"> 	
	</form>
	<?php
	error_reporting(0);
		$clave="";
		$acierto=(bool)0 ;
		$contador=0;
		
		while ( $contador<= 3 && $acierto==(bool)0) {
			$clave=$_POST["clave"];
			if ($clave=="eureka") {
				echo "la clave es correcta";
				$acierto=(bool)1;
			}
			$contador=$contador+1;
		}
		if ($contador>=3 && $acierto==(bool)0) {
			echo "ya no tienes mas intentos";
		}
	?>
</body>
</html>