<?php

$conex = mysqli_connect("localhost", "root", "", "turismea_db"); 

// Verificar la conexión
if (!$conex) {
    die("Error de conexión: " . mysqli_connect_error());
} else {
    echo "Conexión exitosa";
}

?>
