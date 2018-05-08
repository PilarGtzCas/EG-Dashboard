<!DOCTYPE html>
<html>
<title>EG-Dashboard</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="estilo.css">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="shortcut icon" type="image/png" href="imag/fab.png"/>



<!– Inicio estilo de menu–>
<style>
 
.w3-theme-l5 {color:#000 !important; background-color:#f0f0f0 !important}
.w3-theme-l4 {color:#000 !important; background-color:#cccccc !important}
.w3-theme-l3 {color:#fff !important; background-color:#999999 !important}
.w3-theme-l2 {color:#fff !important; background-color:#666666 !important}
.w3-theme-l1 {color:#fff !important; background-color:#333333 !important}
.w3-theme-d1 {color:#fff !important; background-color:#000000 !important}
.w3-theme-d2 {color:#fff !important; background-color:#000000 !important}
.w3-theme-d3 {color:#fff !important; background-color:#000000 !important}
.w3-theme-d4 {color:#fff !important; background-color:#000000 !important}
.w3-theme-d5 {color:#fff !important; background-color:#000000 !important}

.w3-theme-light {color:#000 !important; background-color:#f0f0f0 !important}
.w3-theme-dark {color:#fff !important; background-color:#000000 !important}
.w3-theme-action {color:#fff !important; background-color:#000000 !important}

.w3-theme {color:#000 !important; background-color:#cccccc !important}
.w3-text-theme {color:#000000 !important}
.w3-border-theme {border-color:#000000 !important}

.w3-hover-theme:hover {color:#fff !important; background-color:#000000 !important}
.w3-hover-text-theme:hover {color:#000000 !important}
.w3-hover-border-theme:hover {border-color:#000000 !important}


</style>
<!– Fin estilo de menu–>

<style>

html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif;}

.w3-sidebar {
  z-index: 3;
  width: 250px;
  top: 80px;
  bottom: 0;
  height: inherit;
}
</style>

<meta name="viewport" content="width=device-width, initial-scale=1">

<!– Inico de estilo de boton ver modificar–>
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




@import "lesshat";

.container{   
  width: 200px;
  height: 200px;
  position: absolute;
  left: 0;
  right: 0;
  margin: 0 auto;
  top:20px;
}
.zoomIt{
display:block!important;
-webkit-transition:-webkit-transform 1s ease-out;
-moz-transition:-moz-transform 1s ease-out;
-o-transition:-o-transform 1s ease-out;
-ms-transition:-ms-transform 1s ease-out;
transition:transform 1s ease-out;
}
.zoomIt:hover{
-moz-transform: scale(1.5);
-webkit-transform: scale(1.5);
-o-transform: scale(1.5);
-ms-transform: scale(1.5);
transform: scale(1.5)
}
]]></b:skin>


</style>



<!– Fin de estilo de boton ver modificar–>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-theme w3-top w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-right w3-hide-large w3-hover-white w3-large w3-theme-l1" href="javascript:void(0)" onclick="w3_open()"><i class="fa fa-bars"></i></a>
    <a href="#" class="w3-bar-item w3-button"><img src="imag/G-Dashboard2.png" style="width:100%" alt="Avatar"></a>
     <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hide-medium w3-hover-white">R&S Directo</a>
     <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hide-medium w3-hover-white">R&S Indirecto</a>
     <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hide-medium w3-hover-white">Facilities</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hide-medium w3-hover-white">Mejora Continua</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hide-medium w3-hover-white">Nuevos Proyectos</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Compras</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-white">IT</a>
     <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Nominas</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-white">RH</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hide-medium w3-hover-white">Impot&Export</a>
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

    
   <div align='center'>
    <table class='tabl' align="center">
 
       
<tr></tr>
        <tr>
            <td><a href="loguinbowles.php"><img src="imag/p1.png" class='zoomIt'  style="width:45%;height:45%;border:0; position: relative; left:10%"></a></td>
            <td><a href="loguinfuba.php"><img src="imag/p2.png" class='zoomIt' alt="HTML tutorial" style="width:45%;height:45%;border:0; position: relative; right:5%"></a></td>
            <td>  <a href="loguinplastomer.php"><img src="imag/p3.png" class='zoomIt' alt="HTML tutorial" style="width:45%;height:45%;border:0; position: relative; right: 20%"></a></td>
            <td> <a href="loguinaxiom.php"><img src="imag/p4.png" class='zoomIt' alt="HTML tutorial" style="width:45%;height:45%;border:0; position: relative; left:20%"></a></td>
            <td> <a href="loguintelamon.php"><img src="imag/p11.png" class='zoomIt' alt="HTML tutorial" style="width:45%;height:45%;border:0; position: relative; left:20%"></a></td>
        </tr>
            
             <tr align="center">
            <td><a href="loguinkaufftman.php"><img src="imag/p5.png" class='zoomIt' alt="HTML tutorial" style="width:45%;height:45%;border:0; position: relative; left:60%"></a></td>
            <td><a href="loguinegm.php"><img src="imag/Imagen1.png" class='zoomIt' alt="HTML tutorial" style="width:65%;height:65%;border:0; position: relative; right:-75%"></a></td>
            <td>  <a href="loguinmca.php"><img src="imag/p6.png" class='zoomIt' alt="HTML tutorial" style="width:45%;height:45%;border:0; position: relative; right: -140%"></a></td>
            
        </tr>

        
        <tr>
            <td><a href="loguinelectrex.php"><img src="imag/p7.png" class='zoomIt' alt="HTML tutorial" style="width:45%;height:45%;border:0; position: relative; left:1%"></a></td>
            <td><a href="loguinmeggittt.php"><img src="imag/p8.png" class='zoomIt' alt="HTML tutorial" style="width:45%;height:45%;border:0; position: relative; right:1%"></a></td>
            <td>  <a href="loguinpss.php"><img src="imag/p9.png" class='zoomIt' alt="HTML tutorial" style="width:45%;height:45%;border:0; position: relative; right: 10%"></a></td>
            <td> <a href="loguinpacific.php"><img src="imag/p10.png" class='zoomIt' alt="HTML tutorial" style="width:45%;height:45%;border:0; position: relative; left:20%"></a></td>
             <td> <a href="loguiniec.php"><img src="imag/p12.png" class='zoomIt' alt="HTML tutorial" style="width:45%;height:45%;border:0; position: relative; left:20%"></a></td>
        </tr>

    </table>
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

    <div class="w3-container w3-theme-l1">
      <p>EG-Dashboard <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">IT</a></p>
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