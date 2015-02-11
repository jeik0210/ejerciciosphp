<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>pregunta 1</title>
	<script type="text/javascript">
		function limpiar()
		{
			pregunta1.nombre.value="0";
			pregunta1.pra1.value="0";
			pregunta1.pra2.value="0";
			pregunta1.pra3.value="0";
			pregunta1.pa1.value="0";
			pregunta1.pa2.value="0";
			pregunta1.evp.value="0";
			pregunta1.pf.value="0";
			pregunta1.nombre.focus();
		}
	</script>
</head>
<body bgcolor="brown">
	<?php
		error_reporting(0);
		$nom="";
		$pra1=0;
		$pra2=0;
		$pra3=0;
		$pa1=0;
		$pa2=0;
		$evp=0;
		$ppra=0;
		$ppa=0;
		$pf=0;
		if (isset($_POST["boton"])) {
			
		
		$nom=$_POST["nombre"];
		$pra1=$_POST["pra1"];
		$pra2=$_POST["pra2"];
		$pra3=$_POST["pra3"];
		$pa1=$_POST["pa1"];
		$pa2=$_POST["pa2"];
		$evp=(int)$_POST["evp"];
		$menor=$pra1;
		if ($pra2<$menor) {
			$menor=$pra2;
		}
		elseif ($pra3<$menor) {
			$menor=$pra3;
		}
	}
		$ppra=(($pra1+$pra2+$pra3)-$menor)/2;
		$ppa=($pa1+$pa2)/2;
		$pf=(3*$ppra+2*$ppa+$evp)/6;

	?>
	<form action="pregunta1.php" method="post" name="pregunta1">
		<table width="390" height="256" border="0">
  <tr>
    <td width="203"><b>NOMBRES DEL ALUMNO</b></td>
    <td width="169"><b><input type="text" name="nombre" id="" value="<?php echo ($nom) ?>"required></b></td>
  </tr>
  <tr>
    <td><b>PRIMERA PRACTICA</b></td>
    <td><input type="text" name="pra1" id="" value="<?php echo ($pra1) ?>"></td>
  </tr>
  <tr>
    <td><b>SEGUNDA PRACTICA</b></td>
    <td><input type="text" name="pra2" id="" value="<?php echo ($pra2) ?>"></td>
  </tr>
  <tr>
    <td><b>TERCERA PRACTICA</b></td>
    <td><input type="text" name="pra3" id="" value="<?php echo ($pra3) ?>"></td>
  </tr>
  <tr>
    <td><b>PRIMER PARCIAL</b></td>
    <td><input type="text" name="pa1" id="" value="<?php echo ($pa1) ?>"></td>
  </tr>
  <tr>
    <td><b>SEGUNDO PARCIAL</b></td>
    <td><input type="text" name="pa2" id="" value="<?php echo ($pa2) ?>"></td>
  </tr>
  <tr>
    <td><b>EVALUACION PERMANENTE</b></td>
    <td><input type="text" name="evp" id="" value="<?php echo ($evp) ?>"></td>
  </tr>
  <tr>
    <td><b>PROMEDIO FINAL</b></td>
    <td><input type="text" name="pf" disabled style="background-color:yellow" value="<?php echo ($pf) ?>" ></td>
  </tr>
  <tr>
    <td colspan="2"><input type="submit" value="calcular" name="boton"><input type="button" value="limpiar" onclick="limpiar();"></td>
  </tr>
</table>
	</form>
</body>
</html>