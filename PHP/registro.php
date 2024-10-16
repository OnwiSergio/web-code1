<?php
// Conexión a la base de datos
$conn = new mysqli('localhost', 'root', '', 'turismea_db');

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Verificar si el formulario fue enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $pais = $_POST['pais'];
    $destino = $_POST['destino'];
    $fechaViaje = $_POST['fechaViaje'];

    // Insertar los datos en la tabla usuarios
    $sql = "INSERT INTO usuarios (nombre, email, telefono, pais, destino, fechaViaje)
            VALUES ('$nombre', '$email', '$telefono', '$pais', '$destino', '$fechaViaje')";

    if ($conn->query($sql) === TRUE) {
        echo "Registro exitoso";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Cerrar la conexión
$conn->close();
?>
