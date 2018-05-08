<html>
<head>
<script type="text/javascript">
function ConfirmDemo() {
//Ingresamos un mensaje a mostrar
var mensaje = confirm("¿Te gusta Desarrollo Geek?");
//Detectamos si el usuario acepto el mensaje
if (mensaje) {
alert("¡Gracias por aceptar!");
header('Location:borraru.php');  

}
//Detectamos si el usuario denegó el mensaje
else {
alert("¡Haz denegado el mensaje!");
header('Location:verusuarios.php');  

}
}
</script>
</head>
<body>
<form>
<input type="button" onclick="ConfirmDemo()" value="Click para ver un mensaje de confirmación" />
</form>
</body>
</html>
