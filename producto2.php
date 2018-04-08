<?php  

if (isset($_POST['salirprodu'])) 
{
	echo "<script> location.href='rey.php'</script>";
}

if (isset($_POST['almacenar3'])) 

{
$codigo_producto=$_POST['codigo_producto'];
$nit_proveedor_producto=$_POST['nit_proveedor_producto'];
$descripcion_producto=$_POST['descripcion_producto']; 
$lote_producto=$_POST['lote_producto'];
$vencimiento_producto=$_POST['vencimiento_producto'];
$tipo_producto=$_POST['tipo_producto'];

$link=mysqli_connect("localhost","root","");	
mysqli_select_db($link,"rey");
$result=mysqli_query($link, "SELECT * FROM proveedor WHERE nit_proveedor='$nit_proveedor_producto' ");
mysqli_data_seek($result,0);
$extraido= mysqli_fetch_array($result);

$nit_proveedor=$extraido['nit_proveedor'];

mysqli_free_result($result);
mysqli_close($link);

if ($nit_proveedor<>$nit_proveedor_producto) 

{
	echo "<script> location.href='proveedor.php'</script>";
}

	$mysql = new mysqli("localhost","root","","rey");
	$mysql = $mysql -> query("INSERT INTO producto(codigo_producto, nit_proveedor_producto, descripcion_producto, lote_producto, fecha_vecimiento, tipo_producto)VALUES('$codigo_producto', '$nit_proveedor_producto', '$descripcion_producto', '$lote_producto', '$vencimiento_producto', '$tipo_producto')")or die(mysql_error());
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

if (isset($_POST['salirpro3'])) 
{
	echo "<script> location.href='rey.php'</script>";
}

if (isset($_POST['consultar3']))
{
$codigo_producto_consul=$_POST['codigo_producto_consul'];

$link=mysqli_connect("localhost","root","");	
mysqli_select_db($link,"rey");
$result=mysqli_query($link, "SELECT * FROM producto WHERE codigo_producto='$codigo_producto_consul' ");
mysqli_data_seek($result,0);
$extraido= mysqli_fetch_array($result);

echo "<center>";
	echo "<table border=9 cellspacing=3 width=700";
	echo "<tr><th colspan=5>PRODUCTO</th></tr>";
	echo "<tr><th colspan=3 align=left> CODIGO PRODUCTO:<th colspan=2 align=right> ".$extraido['codigo_producto']." </th></tr>";
	echo "<tr><th colspan=3 align=left> NIT PROVEEDOR PRODUCTO:<th colspan=2 align=right> ".$extraido['nit_proveedor_producto']." </th></tr>";
	echo "<tr><th colspan=3 align=left> DESCRIPCION PRODUCTO :<th colspan=2 align=right> ".$extraido['descripcion_producto']." </th></tr>";
	echo "<tr><th colspan=3 align=left> LOTE PRODUCTO :<th colspan=2 align=right> ".$extraido['lote_producto']." </th></tr>";
	echo "<tr><th colspan=3 align=left> FECHA VENCIMIENTO :<th colspan=2 align=right> ".$extraido['fecha_vecimiento']." </th></tr>";
	echo "<tr><th colspan=3 align=left> TIPO PRODUCTO :<th colspan=2 align=right> ".$extraido['tipo_producto']." </th></tr>";
	
mysqli_free_result($result);
mysqli_close($link);
}
?>
<!DOCTYPE html>
<html>
<head>
	</head>
<center>
	<form name="producto2.php" action="producto2.php" method="POST">
	<td><center><input type="submit" value="SALIR" name="salir3"></center></td>
                    </tr>
</body>
</html>
</center>
<?php
if (isset($_POST['salir3'])) 
{
	echo "<script> location.href='rey.php'</script>";
}
?>