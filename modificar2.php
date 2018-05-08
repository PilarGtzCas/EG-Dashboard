<?php
include 'conexion.php';
  if(isset($_POST['guardar']))
  {
      
      
    if(isset($_POST['first'])and isset($_POST['last'])and isset($_POST['position'])and isset($_POST['email'])and isset($_POST['password'])and isset($_POST['plant'])and isset($_POST['user']))
    {      
        $first = htmlspecialchars($_POST['first']);
         $last = htmlspecialchars($_POST['last']);
        $position = htmlspecialchars($_POST['position']);
        $email = htmlspecialchars($_POST['email']);
      $password = htmlspecialchars($_POST['password']);
      $plant = htmlspecialchars($_POST['plant']);
      $user = htmlspecialchars($_POST['user']);
       // echo" ".$first;
        //echo" ".$last;
        //echo" ".$position;
        //echo" ".$email;
        //echo "".$password;
        //echo "".$plant;
        //echo "".$user;


      include 'modificaru3.php';
      
    }
    else
    {
      echo "</br>";
      echo "<h2></h2>";
      echo " <h2> Incompleto <a href='alta.php'> Contesta todo el formulario </a> </h2>";
    }
    
    }
  //mysqli_close($conn);
  header('Location:altausuario.php'); 

  ?>


