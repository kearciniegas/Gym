<?php  

if (isset($_POST['salirinve'])) 
{
	echo "<script> location.href='rey.php'</script>";
}

if (isset($_POST['almacenar4'])) 

{
$codigo_inventario=$_POST['codigo_inventario'];
$codigo_producto_inventario=$_POST['codigo_producto_inventario']; 
$no_factura_inventario=$_POST['no_factura_inventario'];
$descripcion_producto_inventario=$_POST['descripcion_producto_inventario'];
$cantidad_bulto_inventario=$_POST['cantidad_bulto_inventario'];
$cantidad_unidad_bulto=$_POST['cantidad_unidad_bulto'];
$valor_bulto=$_POST['valor_bulto'];
$valor_flete=$_POST['valor_flete'];
$nit_proveedor_inventario=$_POST['nit_proveedor_inventario'];


$cantidad_producto_detalle= ($cantidad_bulto_inventario*$cantidad_unidad_bulto);
$valor_compra_unitario= (($valor_bulto+$valor_flete)/$cantidad_producto_detalle);
$valor_venta_unitario= ($valor_compra_unitario+($valor_compra_unitario*(40/100)));
$ganancia=($valor_venta_unitario-$valor_compra_unitario);

$link=mysqli_connect("localhost","root","");	
mysqli_select_db($link,"rey");
$result=mysqli_query($link, "SELECT * FROM producto WHERE codigo_producto='$codigo_producto_inventario' ");
mysqli_data_seek($result,0);
$extraido= mysqli_fetch_array($result);

$codigo_producto=$extraido['codigo_producto'];

mysqli_free_result($result);
mysqli_close($link);

if ($codigo_producto<>$codigo_producto_inventario) 

{
	echo "<script> location.href='producto.php'</script>";
}

	$mysql = new mysqli("localhost","root","","rey");
	$mysql = $mysql -> query("INSERT INTO inventario(codigo_inventario, codigo_producto_inventario, no_factura_inventario, descripcion_producto_inventario, cantidad_bulto_inventario, cantidad_unidad_bulto, valor_bulto, flete, valor_compra_unitario, cantidad_producto_detalle, valor_venta_unitario, ganancia, nit_proveedor_inventario)VALUES('$codigo_inventario', '$codigo_producto_inventario', '$no_factura_inventario', '$descripcion_producto_inventario', '$cantidad_bulto_inventario', '$cantidad_unidad_bulto', '$valor_bulto', '$valor_flete', '$valor_compra_unitario', '$cantidad_producto_detalle', '$valor_venta_unitario', '$ganancia', '$nit_proveedor_inventario')")or die(mysql_error());
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

if (isset($_POST['salirinve3'])) 
{
	echo "<script> location.href='rey.php'</script>";
}

if (isset($_POST['consultar4']))
{
	$codigo_inventario_consul=$_POST['codigo_inventario_consul'];

$link=mysqli_connect("localhost","root","");	
mysqli_select_db($link,"rey");
$result=mysqli_query($link, "SELECT * FROM inventario WHERE codigo_inventario='$codigo_inventario_consul' ");
mysqli_data_seek($result,0);
$extraido= mysqli_fetch_array($result);

echo "<center>";
	echo "<table border=9 cellspacing=3 width=700";
	echo "<tr><th colspan=5>INVENTARIO</th></tr>";
	echo "<tr><th colspan=3 align=left> CODIGO INVENTARIO:<th colspan=2 align=right> ".$extraido['codigo_inventario']." </th></tr>";
	echo "<tr><th colspan=3 align=left> CODIGO PRODUCTO:<th colspan=2 align=right> ".$extraido['codigo_producto_inventario']." </th></tr>";
	echo "<tr><th colspan=3 align=left> NO FACTURA:<th colspan=2 align=right> ".$extraido['no_factura_inventario']." </th></tr>";
	echo "<tr><th colspan=3 align=left> DESCRIPCION PRODUCTO :<th colspan=2 align=right> ".$extraido['descripcion_producto_inventario']." </th></tr>";
	echo "<tr><th colspan=3 align=left> CANTIDAD BULTO :<th colspan=2 align=right> ".$extraido['cantidad_bulto_inventario']." </th></tr>";
	echo "<tr><th colspan=3 align=left> CANTIDAD UNIDAD :<th colspan=2 align=right> ".$extraido['cantidad_unidad_bulto']." </th></tr>";
	echo "<tr><th colspan=3 align=left> VALOR BULTO :<th colspan=2 align=right> ".$extraido['valor_bulto']." </th></tr>";
	echo "<tr><th colspan=3 align=left> FLETE :<th colspan=2 align=right> ".$extraido['flete']." </th></tr>";
	echo "<tr><th colspan=3 align=left> VALOR COMPRA UNITARIO :<th colspan=2 align=right> ".$extraido['valor_compra_unitario']." </th></tr>";
	echo "<tr><th colspan=3 align=left> CANTIDAD PRODUCTO DETALLE :<th colspan=2 align=right> ".$extraido['cantidad_producto_detalle']." </th></tr>";
	echo "<tr><th colspan=3 align=left> VALOR VENTA UNITARIO BULTO :<th colspan=2 align=right> ".$extraido['valor_venta_unitario']." </th></tr>";
	echo "<tr><th colspan=3 align=left> GANANCIA :<th colspan=2 align=right> ".$extraido['ganancia']." </th></tr>";
	echo "<tr><th colspan=3 align=left> NIT PROVEEDOR :<th colspan=2 align=right> ".$extraido['nit_proveedor_inventario']." </th></tr>";
mysqli_free_result($result);
mysqli_close($link);
}
?>
<!DOCTYPE html>
<html>
<head>
	</head>
<center>
	<form name="inventario2.php" action="inventario2.php" method="POST">
	<td><center><input type="submit" value="SALIR" name="salir4"></center></td>
                    </tr>
</body>
</html>
</center>
<?php
if (isset($_POST['salir4'])) 
{
	echo "<script> location.href='rey.php'</script>";
}
?>