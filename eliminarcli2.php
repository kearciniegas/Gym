<?php 
$documento_cliente=$_POST['documento_cliente'];

if (isset($_POST['eliminar'])) 
{
			$link=mysqli_connect("localhost","root","");	
			mysqli_select_db($link,"rey");
			mysqli_query($link,"DELETE FROM cliente WHERE documento_cliente='documento_cliente'");
			mysqli_close($link);
	echo "<script> location.href='rey.php'</script>";
}
?>