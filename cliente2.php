<?php  
if (isset($_POST['salir'])) 
{
	echo "<script> location.href='rey.php'</script>";
}

if (isset($_POST['almacenar5'])) 

{
	$documento_cliente=$_POST['documento_cliente'];
	$nombre_cliente=$_POST['nombre_cliente']; 
	$direccionusuario=$_POST['direccionusuario'];
	$telefonousuario=$_POST['telefonousuario'];
	$edadusuario=$_POST['edadusuario'];
	$peso=$_POST['peso'];
	$masamuscular=$_POST['masamuscular'];


	$mysql = new mysqli("localhost","root","","gym");
	$link = $mysql -> query("INSERT INTO usuario(nombre_cliente, documento_cliente, edadusuario, telefonousuario, direccionusuario, peso, masamuscular)VALUES('$documento_cliente','$nombre_cliente', '$edadusuario', '$telefonousuario', '$direccionusuario','$masamuscular')")or die(mysql_error());
	echo "<script> location.href='rey.php'</script>";	
}

?>

<head>
<center>
 <CENTER><FONT FACE="impact" SIZE=7 COLOR="red">
 SUPER MERCADO EL REY</FONT></CENTER>
</head>
<body>
<img src="holi.gif">
<body bgcolor="WHITE" text="RED">
<br>
<br>
</center>
<?php 

if (isset($_POST['salircli'])) 

{
	echo "<script> location.href='rey.php'</script>";
}

if (isset($_POST['consultar6']))
{
$documento_cliente_consultar=$_POST['documento_cliente_consultar'];

$link=mysqli_connect("localhost","root","");	
mysqli_select_db($link,"rey");
$result=mysqli_query($link, "SELECT * FROM cliente WHERE documento_cliente='$documento_cliente_consultar' ");
mysqli_data_seek($result,0);
$extraido= mysqli_fetch_array($result);

echo "<center>";
	echo "<table border=9 cellspacing=3 width=700";
	echo "<tr><th colspan=5>CLIENTE</th></tr>";
	echo "<tr><th colspan=3 align=left> DOCUMENTO CLIENTE:<th colspan=2 align=right> ".$extraido['documento_cliente']." </th></tr>";
	echo "<tr><th colspan=3 align=left> NOMBRE DEL CLIENTE:<th colspan=2 align=right> ".$extraido['nombre_cliente']." </th></tr>";
	echo "<tr><th colspan=3 align=left> EDAD DEL CLIENTE :<th colspan=2 align=right> ".$extraido['edadusuario']." </th></tr>";
	echo "<tr><th colspan=3 align=left> TELEFONO CLIENTE :<th colspan=2 align=right> ".$extraido['telefonousuario']." </th></tr>";
	echo "<tr><th colspan=3 align=left> DIRECCION CLIENTE :<th colspan=2 align=right> ".$extraido['direccionusuario']." </th></tr>";
	echo "<tr><th colspan=3 align=left> MASA MUSCULAR :<th colspan=2 align=right> ".$extraido['masamuscular']." </th></tr>";

mysqli_free_result($result);
mysqli_close($link);
}
?>
<!DOCTYPE html>
<html>
<head>
	</head>
<center>
	<form name="cliente2.php" action="cliente2.php" method="POST">
	<td><center><input type="submit" value="SALIR" name="salir6"></center></td>
                    </tr>
</body>
</html>
</center>
<?php
if (isset($_POST['salir6'])) 
{
	echo "<script> location.href='rey.php'</script>";
}
?>