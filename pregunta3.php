<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>pregunta 3</title>
</head>
<body bgcolor="brown">
	<?php
 
echo "Convertir numero a Romano <br/>
      <form method='post' action='$_SERVER[REQUEST_URI]'> 
         Introdusca el numero: <input type='text' name='num' /> 
         <input type='submit' value='operar' /> 
      </fotm>";

 
function AROMANO($numero)
{
  $Resultado="";
 
  $Romanos=array(
          "M" => 1000,
          "CM" => 900,
          "D" => 500,
          "C" => 100,
          "XC" => 90,
          "L" => 50,
          "XL" => 40,
          "X" => 10,
          "IX" => 9,
          "V" => 5,
          "IV" => 4,
          "I" => 1 );
   
 foreach($Romanos as $R => $V)
 {  
  while($numero >= $V)
  {
        $Resultado .= $R;
        $numero-=$V;
  } 
 }
 return $Resultado;
}


 if(isset($_POST['num']))
 {
  $elnumero=intval($_POST['num']);
  
  if($elnumero <1 || $elnumero>5000)
  {
    die("<br/>Este programa solo convierte números entre 1 y 4000");
  }
  else
  {    
    
    echo "<br/>El numero <b> $elnumero </b> en romano es igual a ";
    echo "<font color='blue' size='+1'> ". AROMANO($elnumero) ." </font>";
  }  

 }
?>

</body>
</html>