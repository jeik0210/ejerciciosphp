<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>pregunta 2</title>
	<script type="text/javascript">
		function limpiar()
		{
			pregunta2.n1.value="0";
			pregunta2.n2.value="0";
			pregunta2.n1.focus();
		}
	</script>
</head>
<?php
	$num1=0;
	$num2=0;
	$i=0;
	$cont=0;
	$suma=0;
	$impar=0;
	if(isset($_REQUEST['hallar']))
	{
		$num1=$_REQUEST['n1'];
		$num2=$_REQUEST['n2'];
		
		
	}
?>
<body bgcolor="brown">


<form action="" method="post" name="pregunta2">
<table width="316" border="0">
  <tr>
    <td width="82"><b>NUMERO 1</b></b></td>
    <td width="144"><input name="n1" type="text" style="background-color:yellow" value="<?php echo $num1?>"/></td>
    <td width="68"><input name="hallar" type="submit" value="Hallar" /></td>
  </tr>
  <tr>
    <td><b>NUMERO 2</b></td>
    <td><input name="n2" type="text" style="background-color:yellow" value="<?php echo $num2?>" /></td>
    <td><input name="borrar" type="button" value="Borrar" onclick="limpiar();" /></td>
  </tr>
 
</table>

<table width="200" border="1">
  <tr>
    <td><b>RESULTADO</b></td>
  </tr>
  <?php
  for($i=$num1;$i<=$num2;$i++){
  	echo "<tr><td>$i</td></tr>";
	if($i%2==0)
	{$suma=$suma+1;
		}
	if($i%2==1)
	{$impar=$impar+$i;
		}
	$cont=$cont+1;
  }
	
  ?>
  <tr>
    <td><?php echo "hay ".$cont." numeros";?></td>
  </tr>
   <tr>
    <td><?php echo "La cantidad de pares es ".$suma;?></td>
  </tr>
   <tr>
    <td><?php echo "La suma de impares es ".$impar;?></td>
  </tr>
</table>

