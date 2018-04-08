<?php  

if (isset($_POST['salirinfra'])) 
{
	echo "<script> location.href='rey.php'</script>";
}


if (isset($_POST['almacenar1'])) 

{
$nit=$_POST['nit_negocio'];
$nombre_negocio=$_POST['nombre_negocio']; 
$comercio_negocio=$_POST['comercio_negocio'];
$direccion_negocio=$_POST['direccion_negocio'];
$telefono_negocio=$_POST['telefono_negocio'];


	$mysql = new mysqli("localhost","root","","rey");
	$link = $mysql -> query("INSERT INTO infraestructura(nit, nombre_negocio, camara_comercio, direccion_negocio, telefono_negocio)VALUES('$nit', '$nombre_negocio', '$comercio_negocio', '$direccion_negocio', '$telefono_negocio')")or die(mysql_error());
	echo "<script> location.href='rey.php'</script>";	
}

?>
<head>
<center>
 <CENTER><FONT FACE="impact" SIZE=7 COLOR="red">
 GYM</FONT></CENTER>
</head>
<body>
<img src="holi.gif">
<body bgcolor="WHITE" text="RED">
<br>
<br>
</center>
<?php 

if (isset($_POST['salirinfra3'])) 
{
	echo "<script> location.href='rey.php'</script>";
}

if (isset($_POST['consultar1']))
{
$nit_infraestructura_consul=$_POST['nit_infraestructura_consul'];

$link=mysqli_connect("localhost","root","");	
mysqli_select_db($link,"rey");
$result=mysqli_query($link, "SELECT * FROM infraestructura WHERE nit='$nit_infraestructura_consul' ");
mysqli_data_seek($result,0);
$extraido= mysqli_fetch_array($result);

echo "<center>";
	echo "<table border=9 cellspacing=3 width=700";
	echo "<tr><th colspan=5>INFRAESTRUCTURA</th></tr>";
	echo "<tr><th colspan=3 align=left> NIT INFRAESTRUCTURA:<th colspan=2 align=right> ".$extraido['nit']." </th></tr>";
	echo "<tr><th colspan=3 align=left> NOMBRE DEL NEGOCIO:<th colspan=2 align=right> ".$extraido['nombre_negocio']." </th></tr>";
	echo "<tr><th colspan=3 align=left> CAMARA COMERCIO :<th colspan=2 align=right> ".$extraido['camara_comercio']." </th></tr>";
	echo "<tr><th colspan=3 align=left> DIRECCION NEGOCIO :<th colspan=2 align=right> ".$extraido['direccion_negocio']." </th></tr>";
	echo "<tr><th colspan=3 align=left> TELEFONO NEGOCIO :<th colspan=2 align=right> ".$extraido['telefono_negocio']." </th></tr>";
mysqli_free_result($result);
mysqli_close($link);
}
?>
<!DOCTYPE html>
<html>
<head>
	</head>
<center>
	<form name="infraestructura2.php" action="infraestructura2.php" method="POST">
	<td><center><input type="submit" value="SALIR" name="salir1"></center></td>
                    </tr>
</body>
</html>
</center>
<?php
if (isset($_POST['salir1'])) 
{
	echo "<script> location.href='rey.php'</script>";
}
?>