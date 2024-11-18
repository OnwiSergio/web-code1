
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra de Pasajes</title>
    <link rel="stylesheet" href="CSS\ccs_cp.css">
</head>
<body>
    <header>
        <div class="logo">
            <h1>Turismea Perú S.A.C.</h1>
        </div>
            <nav>
                <ul>
                <li><a href="Pagina_Principal.html">Turismea</a></li>
                <li><a href="quienes_somos.html">Quienes Somos</a></li>
                <li><a href="registro.html">Registro</a></li>
                <li><a href="contacto_destino.html">Contáctanos</a></li>
                <li><a href="destinos_turisticos.html">Destino Túristicos</a></li>
                <li><a href="   ">   </a></li>
                </ul>
            </nav>
    </header>
    <div class="form-container">
        <h2 class="form-header">Compra de Pasaje</h2>
        <form name="fr" action="PHP/conexion.php" method="POST">
            <label for="tnom">Nombre del pasajero</label>
            <input name="tnom" type="text" id="tnom" required>

            <label for="tedad">Edad</label>
            <input name="tedad" type="number" id="tedad" required>

            <label for="tdni">DNI</label>
            <input name="tdni" type="text" id="tdni" required>

            <label for="tnum">Telefono</label>
            <input name="tnum" type="text" id="tnum" required>

            <label for="cbd">Seleccione su destino a visitar</label>
    <select name="cbd" id="cbd" onchange="cambia()" required>
        <option value="0">Elegir</option>
        <option value="80" data-img="ANTIOQUIA.jpg">Antioquia</option>
        <option value="100" data-img="CANTA.jpg">Canta</option>
        <option value="130" data-img="CASTILLO_CHANCAI1.jpg">Castillo de Chancai</option>
        <option value="120" data-img="CHURIN.jpg">Churín</option>
        <option value="100" data-img="LUNAHUANA.jpg">Lunahuaná</option>
        <option value="90" data-img="MARCAHUASI1.jpg">Marcahuasi</option>
    </select>
<div class="image-container">
        <img name="foto" height="500" width="500">
    </div>
            <label for="tcos">Costo</label>
            <input name="tcos" type="text" id="tcos" >

            <button type="submit" name="register">Enviar</button>
</form>

    </div>

    <div class="image-container">
        <img src="Imagen/card.jpg" width="200" height="80">
        <img src="Imagen/visa.jpg" width="200" height="80">
    </div>

    <footer>
        <p>&copy; 2024 Turismea Perú. Todos los derechos reservados.</p>
        <hr>
    </footer>

    <script type="text/javascript">
        function cambia() {
            let depto = fr.cbd;
            let costo = depto.options[depto.selectedIndex].value;
            let imgSrc = depto.options[depto.selectedIndex].getAttribute("data-img");

            fr.tcos.value = costo;

            if (imgSrc) {
                fr.foto.src = "IMAGENES TOURS/" + imgSrc;
            } else {
                fr.foto.src = "";
            }
        }

    </script>
        </form>
    </div>
</body>
</html>
