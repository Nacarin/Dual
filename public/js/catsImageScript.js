document.addEventListener('DOMContentLoaded', function() {
    console.log('Esto es una prueba y solo se ve en la vista de la imagen del gato');

    let contenidoAdicionalElement = document.getElementById('contenidoAdicional');

    let nuevoParrafo = document.createElement('p');

    nuevoParrafo.textContent = 'Esto es una prueba y solo se ve en la vista de la imagen del gato fuera de la consola';

    contenidoAdicionalElement.appendChild(nuevoParrafo);
});

