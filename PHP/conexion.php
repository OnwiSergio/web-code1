<?php
include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['tnom']) >= 1 && strlen($_POST['tedad']) >= 1 && strlen($_POST['tdni']) >= 1 && strlen($_POST['tnum']) >= 1 && strlen($_POST['tcos']) >= 1 && strlen($_POST['cbd']) >= 1) {
        $name = trim($_POST['tnom']);
        $edad = trim($_POST['tedad']);
        $dni = trim($_POST['tdni']);
        $telefono = trim($_POST['tnum']);
        $costo = trim($_POST['tcos']);
        $destino = trim($_POST['cbd']);
        $consulta = "INSERT INTO datos(nombre, edad, dni, telefono, costo, destino) VALUES ('$name','$edad','$dni','$telefono','$costo', '$destino')";
        $resultado = mysqli_query($conex, $consulta);
        
        if ($resultado) {
            header("Location: exitoso.php");
            exit();
        } else {
            echo "<h3 class='bad'>¡Ups, ha ocurrido un error!</h3>";
        }
    } else {
        echo "<h3 class='bad'>¡Por favor complete los campos!</h3>";
    }
}
?>
