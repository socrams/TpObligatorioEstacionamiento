<!--a href="Eliminar.php?name=img/<?php echo $archivos[$i]; ?>" 
style="color: red;">
    Eliminar
</a-->
<?php
// Usamos el comando "unlink" para borrar el fichero
unlink($_GET["name"]);
// Redirigiendo hacia atrás
header("Location: estacionar.php")
?>