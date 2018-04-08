<!DOCTYPE html>
<html>
<head>
 <CENTER><FONT FACE="impact" SIZE=7 COLOR="red">
 SUPER MERCADO EL REY</FONT></CENTER>
</head>
<center>
	<img src="holi.gif"> <body style="background-repeat:no-repeat; background-position:center" bgcolor="WHITE" text="">
	<form name="producto.php" action="producto2.php" method="POST">
<table border=0 cellspacing=2  width=550 style="background-color: rgba(255, 0, 44, 0.9)"> 
	<tr><th colspan=5><FONT SIZE=6>PRODUCTO:</FONT></th></tr>
	<tr><td align="right"><b> <FONT SIZE=5></FONT></b></td>
    	<tr><td align="right"><b> <FONT SIZE=5>CODIGO PRODUCTO:</FONT></b></td>
    	<td><input type="number" step="any" size="20" name="codigo_producto" value=""></td>
    	</tr>
        <tr><td align="right"><b> <FONT SIZE=5>NIT DE PROVEEDOR:</FONT></b></td>
        <td><input type="number" step="any" size="20" name="nit_proveedor_producto" value=""></td>
        </tr>
        	<tr><td align="right"><b> <FONT SIZE=5>DESCRIPCION PRODUCTO:</FONT></b></td>
        	<td><input type="text" step="any" size="20" name="descripcion_producto" value=""></td>
            </tr>
            	<tr><td align="right"><b> <FONT SIZE=5>LOTE PRODUCTO:</FONT></b></td>
            	<td><input type="number" step="any" size="20" name="lote_producto" value=""></td>
            	</tr>
                    <tr><td align="right"><b> <FONT SIZE=5>FECHA VENCIMIENTO DEL PRODUCTO:</FONT></b></td>
                    <td><input type="date" step="1" name="vencimiento_producto" min="2017-01-01" max="2017-12-31" value="2017-01-01"></td>
                    </tr>
                    <tr><td align="right"><b> <FONT SIZE=5>TIPO DE PRODUCTO:</FONT></b></td>
                    <td><input type="text" step="any" size="20" name="tipo_producto" value=""></td>
                    </tr>
                    </table>
                     <td><input type="submit" value="ALMACENAR" name="almacenar3"></td>
                    </tr>
                    <td><input type="submit" value="SALIR" name="salirprodu"></td>
                    </tr>
</body>
</html>
</center>