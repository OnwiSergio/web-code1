// Animación de desplazamiento al cargar
window.addEventListener('load', function() {
    const contenedor_registro = document.getElementById("contenedor_registro");
    contenedor_registro.classList.add('visible');
});

// Validación básica y mensaje de éxito
document.getElementById('registroForm').addEventListener('submit', function(e) {
    e.preventDefault();
    alert('¡Registro exitoso! Pronto nos pondremos en contacto contigo para brindarte más información sobre nuestros tours.');
    this.reset();
});
