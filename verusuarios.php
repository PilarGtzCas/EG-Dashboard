<!DOCTYPE html>
<html>
<title>EG-Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="estilo.css">
<link rel="shortcut icon" type="image/png" href="imag/fab.png"/>


<style>
  
.btn {
    border: none;
    color: white;
    padding: 14px 28px;
    font-size: 16px;
    cursor: pointer;

}

.warning {background-color: #ff6600;} /* Orange */
.warning:hover {background: #0b7dda;}


.button {
  background-color: #f4511e;
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  font-size: 16px;
  margin: 4px 2px;
  opacity: 0.6;
  transition: 0.3s;
  display: inline-block;
  text-decoration: none;
  cursor: pointer;
}

.button:hover {opacity: 1}

</style>
  <body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-theme w3-top w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-right w3-hide-large w3-hover-white w3-large w3-theme-l1" href="javascript:void(0)" onclick="w3_open()"><i class="fa fa-bars"></i></a>
    <a href="#" class="w3-bar-item w3-button"><img src="imag/G-Dashboard2.png"  style="width:90%" alt="Avatar"></a>
     <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hide-medium w3-hover-white">RyS Directo</a>
     <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hide-medium w3-hover-white">RyS Indirecto</a>
     <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hide-medium w3-hover-white">Facilities</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hide-medium w3-hover-white">Mejora Continua</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hide-medium w3-hover-white">Nuevos Proyectos</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Compras</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-white">IT</a>
     <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Nominas</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-white">RH</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hide-medium w3-hover-white">ImpotyExport</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hide-medium w3-hover-white">Finanzas</a>
  </div>
</div>



<!-- Sidebar -->
<nav class="w3-sidebar w3-bar-block w3-collapse w3-large w3-theme-l5 w3-animate-left" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-right w3-xlarge w3-padding-large w3-hover-black w3-hide-large" title="Close Menu">
    <i class="fa fa-remove"></i>
  </a>
  <h4 class="w3-bar-item"><b>Menu</b></h4>
  <a class="w3-bar-item w3-button w3-hover-black" href="#">Open Positions by Plant (Quantity)</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="#">Hirings by Plant (Quantity)</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="#">Average Hiring time (Bussines Days)</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="#">Top Hiring Sources (Quantity)</a>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
<div class="w3-main" style="margin-left:250px">
  <div class="w1-row w1-padding-64">
    <div class="w3-row w3-padding-64">
    </div>
      <div align="center" >
        <a href="verusuarios.php"><button class="btn warning">Ver</button></a>
         <a href="altausuario.php"><button class="btn warning">Alta</button></a>
         <a href="verusuarios.php"><button class="btn warning">Modificar</button></a>
        <a href="verusuarios.php"> <button class="btn warning">Eliminar</button></a>
    
      </div>
      
          </div>
          <div align="center">
            <form action="au2.php" method="post" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin" style="width:95%;height:95%">
         
            <div class="container">
          <h2>Usuarios</h2>   
           <?php
                include 'conexion.php';
                // Create connection
                $conn = mysqli_connect($servername, $username, $password, $dbname);
                // Check connection
                if (!$conn) 
                {
                    die("La conexion fallo: " . mysqli_connect_error());
                }

                
                $sql = "SELECT * FROM user";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0)
                    {
                    echo" <table class='table table-striped'>
                <thead>
                  <tr>
                    <th>First</th>
                    <th>Last</th>
                    <th>Positions</th>
                    <th>Email</th>
                    <th>Plant</th>
                    <th>User</th>
                    <th></th>
                    <th></th>

                     </tr>
                  </thead>
                  <tbody> ";
                     while($row = mysqli_fetch_assoc($result)) {
                        echo "<tr><th>" . $row["first"].
                        "</th><td>" . $row["last"]. 
                        "</td><td>" . $row["position"]. 
                        "</td><td>" . $row["email"]. 
                        "</td><td>" . $row["plant"]. 
                        "</td><td>" . $row["user"]. 

                        "</td>";
                        
                  echo"<td><form action='borraru.php' method='post' >";
                    echo"<input type='hidden' name='oculto' value='$row[iduser]'>";
                    echo"<input type='image' src='imag/borrar.jpg'  name='image' width = '60' height = '60'>";
                    echo"</form></td>";
                    


                    echo"<td><form action='modificar1.php' method='post' >";
                    echo"<input type='hidden' name='oculto' value='$row[iduser]'>";
                    echo"<input type='image' src='imag/editar.jpg'  name='image' width = '60' height = '60'>";
                    echo"</form></td>";

                    
                    
                   //echo"<td><form action='modificar1.php' method='post'>";
                    //echo"<input type='hidden' name='iduser' value='$row[iduser]'>";
                   //echo"<input type='hidden' name='first' value='$row[first]'>";
                  //echo"<input type='hidden' name='last' value='$row[last]'>";
                   // echo"<input type='hidden' name='position' value='$row[position]'>";
                   // echo"<input type='hidden' name='email' value='$row[email]'>";
                   //echo"<input type='hidden' name='plant' value='$row[plant]'>";
                  // echo"<input type='hidden' name='user' value='$row[user]'>";
                   ///echo"<input type='image' src='imag/editar.jpg'  name='image' width = '60' height = '60'>";
                  // echo"</form></td></tr>";
                     }
                    echo"</tbody></table>";
                } 
                else 
                {
                    echo "No hay resultados<br>";
                }

                mysqli_close($conn);
                ?>


  </form>
          </div>
                  




     
  <!-- Pagination -->
  <div class="w3-center w3-padding-32">
    <div class="w3-bar">
      <a class="w3-button w3-black" href="#">1</a>
      <a class="w3-button w3-hover-black" href="#">2</a>
      <a class="w3-button w3-hover-black" href="#">3</a>
      <a class="w3-button w3-hover-black" href="#">4</a>
      <a class="w3-button w3-hover-black" href="#">5</a>
      <a class="w3-button w3-hover-black" href="#">&raquo;</a>
    </div>
  </div>

  <footer id="myFooter">
    <div class="w3-container w3-theme-l2 w3-padding-32">
      <h4>Entrada Group Mexico</h4>
    </div>

    

  </footer>

<!-- END MAIN -->
</div>

<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
        overlayBg.style.display = "none";
    } else {
        mySidebar.style.display = 'block';
        overlayBg.style.display = "block";
    }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
    overlayBg.style.display = "none";
}
</script>

</body>
</html>