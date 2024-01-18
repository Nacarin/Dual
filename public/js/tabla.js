$(document).ready(function() {
    $('#id').DataTable({
        "ajax": "/electricity-consumption-data", // Configuración para DataTable: carga de datos desde la URL "/electricity-consumption-data"
        "columns": [
            { "data": "date" }, // Configuración de la primera columna: muestra la propiedad "date" de los datos
            { "data": "consumption_kwh" } // Configuración de la segunda columna: muestra la propiedad "consumption_kwh" de los datos
        ]
    });
});

