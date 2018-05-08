<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<head>
	

<?php
include'conexion.php';



				if(isset($_POST['oculto']))
					{
				if (mysqli_connect_errno()) 
						{
							echo "Failed to connect to MySQL: " . mysqli_connect_error();
						}
					
					echo $_POST['oculto'];
						if(mysqli_query($conn," Delete FROM user where iduser ='$_POST[oculto]'"))
						{
						
							echo " Se a Eliminado Correctamente ";
						}
						else
						{
							echo " errores";
						}
						mysqli_close($conn);
					}
	
			    //echo "<a href = 'javascript:window.history.back();'>&larr;Volver </a>";
				header('Location:verusuarios.php');  


?>

 
 </head>
 </html>
    