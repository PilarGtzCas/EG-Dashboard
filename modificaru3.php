<?php
//include 'conexion.php';

            
			
			
			$sql="UPDATE SET first='$first', last='$last', position='$position', email='$email', password='$password', plant='$plant', user='$user' WHERE iduser='$iduser')
	


		if (mysqli_query($conn, $sql)) 
			{
			include 'altausuario.php';
			    echo "correcta";
			    echo "<a href = 'javascript:window.history.back();'></a>";
			} else 
				
			
			
			
			{echo "Error: " . $sql . "<br>" . mysqli_error($conn);}
			mysqli_close($conn);
 
?>