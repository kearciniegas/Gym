<?php  

if (isset($_POST['salirfac'])) 
{
	echo "<script> location.href='rey.php'</script>";
}	

if (isset($_POST['almacenar6'])) 

{
	$no_factura=$_POST['no_factura'];
	$codigo_producto_factura=$_POST['codigo_producto_factura'];
	$documento_cliente_factura=$_POST['documento_cliente_factura'];
	$cantidad_detalle_comprar=$_POST['cantidad_detalle_comprar'];	
	$puntos_factura=$_POST['puntos_factura'];

	$link=mysqli_connect("localhost","root","");	
mysqli_select_db($link,"rey");
$result=mysqli_query($link, "SELECT * FROM producto WHERE codigo_producto='$codigo_producto_factura' ");
mysqli_data_seek($result,0);
$extraido= mysqli_fetch_array($result);

$codigo_producto=$extraido['codigo_producto'];

mysqli_free_result($result);
mysqli_close($link);

if ($codigo_producto<>$codigo_producto_factura) 

{
	echo "<script> location.href='producto.php'</script>";
}

$link=mysqli_connect("localhost","root","");	
mysqli_select_db($link,"rey");
$result=mysqli_query($link, "SELECT * FROM inventario WHERE no_factura_inventario='$no_factura' ");
mysqli_data_seek($result,0);
$extraido= mysqli_fetch_array($result);

$no_factura_inventario=$extraido['no_factura_inventario'];

mysqli_free_result($result);
mysqli_close($link);

if ($no_factura_inventario<>$no_factura) 

{
	echo "<script> location.href='inventario.php'</script>";
}

$link=mysqli_connect("localhost","root","");	
mysqli_select_db($link,"rey");
$result=mysqli_query($link, "SELECT * FROM cliente WHERE documento_cliente='$documento_cliente_factura' ");
mysqli_data_seek($result,0);
$extraido= mysqli_fetch_array($result);

$documento_cliente=$extraido['documento_cliente'];

mysqli_free_result($result);
mysqli_close($link);

if ($documento_cliente<>$documento_cliente_factura) 

{
	echo "<script> location.href='cliente.php'</script>";
}
	$link=mysqli_connect("localhost","root","");	
mysqli_select_db($link,"rey");
$result=mysqli_query($link, "SELECT * FROM inventario WHERE no_factura_inventario='$no_factura' ");
mysqli_data_seek($result,0);
$extraido= mysqli_fetch_array($result);

$valor_unitario_factura=$extraido['valor_compra_unitario'];
$valor_venta_factura=$extraido['valor_venta_unitario'];
mysqli_free_result($result);
mysqli_close($link);

$total_pagar_factura=($valor_venta_factura*$cantidad_detalle_comprar);

	$mysql = new mysqli("localhost","root","","rey");
	$link = $mysql -> query("INSERT INTO factura(no_factura, codigo_producto_factura, documento_cliente_factura, valor_unitario_factura, valor_venta_factura, cantidad_detalle_comprar, puntos_factura, total_pagar_factura)VALUES('$no_factura','$codigo_producto_factura', '$documento_cliente_factura', '$valor_unitario_factura', '$valor_venta_factura','$cantidad_detalle_comprar', '$puntos_factura', '$total_pagar_factura')")or die(mysql_error());

			
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
	echo "<center>";
	
	echo "<table border=9 cellspacing=3 width=700";
	
	echo "<tr><th colspan=5>VENTA PRODUCTO</th></tr>";
	
	echo "<tr><th colspan=3 align=left> NO FACTURA:<th colspan=2 align=right> ".$no_factura." </th></tr>";
	
	echo "<tr><th colspan=3 align=left> CODIGO PRODUCTO:<th colspan=2 align=right> ".$codigo_producto_factura." </th></tr>";
	
	echo "<tr><th colspan=3 align=left> DOCUMENTO DEL CLIENTE :<th colspan=2 align=right> ".$documento_cliente_factura." </th></tr>";
	echo "<tr><th colspan=3 align=left> VALOR UNITARIO :<th colspan=2 align=right> ".$valor_unitario_factura." </th></tr>";

	echo "<tr><th colspan=3 align=left> VALOR VENTA :<th colspan=2 align=right> ".$valor_venta_factura." </th></tr>";

	echo "<tr><th colspan=3 align=left> CANTIDAD DETALLE COMPRAR:<th colspan=2 align=right> ".$cantidad_detalle_comprar." </th></tr>";
	
	echo "<tr><th colspan=3 align=left> PUNTOS FACTURA :<th colspan=2 align=right> ".$puntos_factura." </th></tr>";

	echo "<tr><th colspan=3 align=left> TOTAL PAGAR :<th colspan=2 align=right> ".$total_pagar_factura." </th></tr>";

?>
<!DOCTYPE html>
<html>
<head>
	</head>
<center>
	<form name="factura2.php" action="factura2.php" method="POST">
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