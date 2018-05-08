<?php
//include 'conexion.php';

            
			
			
			$sql="INSERT INTO user (first, last, position, email, password, plant, user)
		VALUES ('$first', '$last', '$position','$email','$contrasenaenc','$plant','$user')";

		if (mysqli_query($conn, $sql)) 
			{
			//include 'altausuario.php';
			   // echo "correcta";
			    echo "<a href = 'javascript:window.history.back();'></a>";
			} else 
				
			
			
			
			{echo "Error: " . $sql . "<br>" . mysqli_error($conn);}
			mysqli_close($conn);
 
?>