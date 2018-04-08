<!DOCTYPE html>
<html>
<head>
 <CENTER><FONT FACE="impact" SIZE=7 COLOR="red">
 SUPER MERCADO EL REY</FONT></CENTER>
</head>
<center>
	<img src="holi.gif"> <body style="background-repeat:no-repeat; background-position:center" bgcolor="WHITE" text="">
	<form name="inventario.php" action="inventario2.php" method="POST">
<table border=0 cellspacing=2  width=550 style="background-color: rgba(255, 0, 44, 0.9)"> 
	<tr><th colspan=5><FONT SIZE=6>INVENTARIO</FONT></th></tr>
	<tr><td align="right"><b> <FONT SIZE=5></FONT></b></td>
    	<tr><td align="right"><b> <FONT SIZE=5>CODIGO DEL INVENTARIO</FONT></b></td>
    	<td><input type="number" step="any" size="20" name="codigo_inventario" value=""></td>
    	</tr>
        	<tr><td align="right"><b> <FONT SIZE=5>CODIGO DEL PRODUCTO</FONT></b></td>
        	<td><input type="number" step="any" size="20" name="codigo_producto_inventario" value=""></td>
            </tr>
            	<tr><td align="right"><b> <FONT SIZE=5>NUMERO DE FACTURA</FONT></b></td>
            	<td><input type="number" step="any" size="20" name="no_factura_inventario" value=""></td>
            	</tr>
                    <tr><td align="right"><b> <FONT SIZE=5>DESCRIPCION DEL PRODUCTO</FONT></b></td>
                    <td><input type="text" step="any" size="20" name="descripcion_producto_inventario" value=""></td>
                    </tr>
                    <tr><td align="right"><b> <FONT SIZE=5>CANTIDAD DE BULTO</FONT></b></td>
                    <td><input type="number" step="any" size="20" name="cantidad_bulto_inventario" value=""></td>
                    </tr>
                    <tr><td align="right"><b> <FONT SIZE=5>CANTIDAD DE UNIDAD DE BULTO</FONT></b></td>
                    <td><input type="number" step="any" size="20" name="cantidad_unidad_bulto" value=""></td>
                    </tr>
                    <tr><td align="right"><b> <FONT SIZE=5>VALOR BULTO</FONT></b></td>
                    <td><input type="number" step="any" size="20" name="valor_bulto" value=""></td>
                    </tr>
                    <tr><td align="right"><b> <FONT SIZE=5>VALOR FLETE</FONT></b></td>
                    <td><input type="number" step="any" size="20" name="valor_flete" value=""></td>
                    </tr>
                    <tr><td align="right"><b> <FONT SIZE=5>NIT DE PROVEEDOR</FONT></b></td>
                    <td><input type="number" step="any" size="20" name="nit_proveedor_inventario" value=""></td>
                    </tr>
                    </table>
                     <td><input type="submit" value="ALMACENAR" name="almacenar4"></td>
                    </tr>
                    <td><input type="submit" value="SALIR" name="salirinve"></td>
                    </tr>
</body>
</html>
</center>