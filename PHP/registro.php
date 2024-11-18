<?php
// Conexión a la base de datos
$servidor = "localhost";
$usuario = "root";
$clave = "";
$baseDeDatos = "turismea_db"; // Asegúrate de que este sea el nombre correcto de tu base de datos

// Crear conexión
$conn = new mysqli($servidor, $usuario, $clave, $baseDeDatos);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Verificar si el formulario fue enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recibir datos del formulario y escapar caracteres especiales
    $nombre = $conn->real_escape_string($_POST['nombre']);
    $email = $conn->real_escape_string($_POST['email']);
    $telefono = $conn->real_escape_string($_POST['telefono']);
    $pais = $conn->real_escape_string($_POST['pais']);
    $destino = $conn->real_escape_string($_POST['destino']);
    $fechaViaje = $conn->real_escape_string($_POST['fechaViaje']);

    // Insertar los datos en la tabla usuarios
    $sql = "INSERT INTO usuarios (nombre, email, telefono, pais, destino, fechaViaje) VALUES ('$nombre', '$email', '$telefono', '$pais', '$destino', '$fechaViaje')";

    // Ejecutar la consulta
    if ($conn->query($sql) === TRUE) {
        echo "Registro exitoso";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error; // Mostrar error específico
    }
}

// Cerrar la conexión
$conn->close();
header('Location: ../registro.html?parametro=valor&msg=Registro%20Exitoso');
exit;
?>
