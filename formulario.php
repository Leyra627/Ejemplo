<html>
<head>
<body>
/** lo agrego esto para ver la modificacion y vuelvo a subir en mi pagina, teoricamente tiene que subir este archivo modificado **/

<?php
 
echo("Su nombre es: ".$_GET['nombre']."<br>");
if(isset($_GET['soltero'])){
echo("Estado civil soltero <br>");
}else{
echo("Estado civil preocupante <br>");
}
echo("Su rango de edad es: ".$_GET['edad']."<br>");
echo("El campo oculto vale: ".$_GET['oculto']."<br>");
?>

</body>
</head>
</html>