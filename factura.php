<!DOCTYPE html>
<html>
<head>
 <CENTER><FONT FACE="impact" SIZE=7 COLOR="red">
 SUPER MERCADO EL REY</FONT></CENTER>
</head>
<center>
	<img src="holi.gif"> <body style="background-repeat:no-repeat; background-position:center" bgcolor="WHITE" text="">
	<form name="factura.php" action="factura2.php" method="POST">
<table border=0 cellspacing=2  width=550 style="background-color: rgba(255, 0, 44, 0.9)"> 
	<tr><th colspan=5><FONT SIZE=6>VENTA PRODUCTO</FONT></th></tr>
	<tr><td align="right"><b> <FONT SIZE=5></FONT></b></td>
    	<tr><td align="right"><b> <FONT SIZE=5>NO FACTURA</FONT></b></td>
    	<td><input type="number" step="any" size="20" name="no_factura" value=""></td>
    	</tr>
        	<tr><td align="right"><b> <FONT SIZE=5>CODIGO PRODUCTO</FONT></b></td>
        	<td><input type="number" step="any" size="20" name="codigo_producto_factura" value=""></td>
            </tr>
            	<tr><td align="right"><b> <FONT SIZE=5>DOCUMENTO DEL CLIENTE</FONT></b></td>
            	<td><input type="text" step="any" size="20" name="documento_cliente_factura" value=""></td>
            	</tr>
                    <tr><td align="right"><b> <FONT SIZE=5>CANTIDAD DETALLADA A COMPRAR</FONT></b></td>
                    <td><input type="text" step="any" size="20" name="cantidad_detalle_comprar" value=""></td>
                    </tr>
                    <tr><td align="right"><b> <FONT SIZE=5>PUNTOS FACTURA</FONT></b></td>
                    <td><input type="number" step="any" size="20" name="puntos_factura" value=""></td>
                    </tr>
                    </table>
                     <td><input type="submit" value="COMPRAR" name="almacenar6"></td>
                    </tr>
                    <td><input type="submit" value="SALIR" name="salirfac"></td>
                    </tr>
</body>
</html>
</center>