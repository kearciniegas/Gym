<?php  

if (isset($_POST['salirprovee'])) 
{
	echo "<script> location.href='rey.php'</script>";
}

if (isset($_POST['almacenar2'])) 

{

$nit_proveedor=$_POST['nit_proveedor'];
$nit_infra=$_POST['nit_infra'];
$nombre_proveedor=$_POST['nombre_proveedor']; 
$documento_preventista=$_POST['documento_preventista'];
$nombre_preventista=$_POST['nombre_preventista'];
$apellido_preventista=$_POST['apellido_preventista'];
$telefono_preventista=$_POST['telefono_preventista'];
$telefono_proveedor=$_POST['telefono_proveedor'];
$direccion_proveedor=$_POST['direccion_proveedor'];
$inicio_proveedor=$_POST['inicio_proveedor'];

$link=mysqli_connect("localhost","root","");	
mysqli_select_db($link,"rey");
$result=mysqli_query($link, "SELECT * FROM infraestructura WHERE nit='$nit_infra' ");
mysqli_data_seek($result,0);
$extraido= mysqli_fetch_array($result);

$nit=$extraido['nit'];

mysqli_free_result($result);
mysqli_close($link);

if ($nit<>$nit_infra) 

{
	echo "<script> location.href='infraestructura.php'</script>";
}

	$mysql = new mysqli("localhost","root","","rey");
	$mysql = $mysql -> query("INSERT INTO proveedor(nit_proveedor, nit_infraestructura,nombre_proveedor, documento_preventista, nombre_preventista, apellido_preventista, telefono_preventista, telefono_proveedor, direccion_proveedor, fecha_inicio_proveedor)VALUES('$nit_proveedor', '$nit_infra', '$nombre_proveedor', '$documento_preventista', '$nombre_preventista', '$apellido_preventista', '$telefono_preventista', '$telefono_proveedor', '$direccion_proveedor', '$inicio_proveedor')")or die(mysql_error());
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

if (isset($_POST['salirprovee3'])) 
{
	echo "<script> location.href='rey.php'</script>";
}

if (isset($_POST['consultar2']))
{
	$nit_proveedor_consul=$_POST['nit_proveedor_consul'];

$link=mysqli_connect("localhost","root","");	
mysqli_select_db($link,"rey");
$result=mysqli_query($link, "SELECT * FROM proveedor WHERE nit_proveedor='$nit_proveedor_consul' ");
mysqli_data_seek($result,0);
$extraido= mysqli_fetch_array($result);

echo "<center>";
	echo "<table border=9 cellspacing=3 width=700";
	echo "<tr><th colspan=5>PROVEEDOR</th></tr>";
	echo "<tr><th colspan=3 align=left> NIT PROVEEDOR:<th colspan=2 align=right> ".$extraido['nit_proveedor']." </th></tr>";
	echo "<tr><th colspan=3 align=left> NIT INFRAESTRUCTURA:<th colspan=2 align=right> ".$extraido['nit_infraestructura']." </th></tr>";
	echo "<tr><th colspan=3 align=left> NOMBRE PROVEEDOR :<th colspan=2 align=right> ".$extraido['nombre_proveedor']." </th></tr>";
	echo "<tr><th colspan=3 align=left> DOCUMENTO PREVENTISTA :<th colspan=2 align=right> ".$extraido['documento_preventista']." </th></tr>";
	echo "<tr><th colspan=3 align=left> NOMBRE PREVENTISTA :<th colspan=2 align=right> ".$extraido['nombre_preventista']." </th></tr>";
	echo "<tr><th colspan=3 align=left> APELLIDO PREVENTISTA :<th colspan=2 align=right> ".$extraido['apellido_preventista']." </th></tr>";
	echo "<tr><th colspan=3 align=left> TELEFONO PREVENTISTA :<th colspan=2 align=right> ".$extraido['telefono_preventista']." </th></tr>";
	echo "<tr><th colspan=3 align=left> TELEFONO PROVEEDOR :<th colspan=2 align=right> ".$extraido['telefono_proveedor']." </th></tr>";
	echo "<tr><th colspan=3 align=left> DIRECCION PROVEEDOR :<th colspan=2 align=right> ".$extraido['direccion_proveedor']." </th></tr>";
	echo "<tr><th colspan=3 align=left> FECHA INICIO PROVEEDOR :<th colspan=2 align=right> ".$extraido['fecha_inicio_proveedor']." </th></tr>";
mysqli_free_result($result);
mysqli_close($link);
}
?>
<!DOCTYPE html>
<html>
<head>
	</head>
<center>
	<form name="proveedor2.php" action="proveedor2.php" method="POST">
	<td><center><input type="submit" value="SALIR" name="salir2"></center></td>
                    </tr>
</body>
</html>
</center>
<?php
if (isset($_POST['salir2'])) 
{
	echo "<script> location.href='rey.php'</script>";
}
?>