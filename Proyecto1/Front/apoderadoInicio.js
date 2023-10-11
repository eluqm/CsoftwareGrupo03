// Función para cambiar la imagen cuando se hace clic en un botón
function cambiarImagen(nuevaImagen) {
    var imagen = document.getElementById("displayedImage");
    imagen.src = nuevaImagen;
    imagen.alt = "Imagen " + nuevaImagen.replace(/\.jpg/g, "");
}