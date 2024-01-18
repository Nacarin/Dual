$.ajax({
    url: "/electricity-consumption-data", // URL de la solicitud AJAX
    type: "GET", // Tipo de solicitud: GET
    dataType: "json", // Tipo de datos esperados en la respuesta: JSON
    success: function(response) { // Función a ejecutar si la solicitud tiene éxito
        const data = response.data; // Extraer datos de la respuesta
        const labels = data.map(item => item.date); // Crear un array de etiquetas a partir de fechas
        const consumptionData = data.map(item => item.consumption_kwh); // Crear un array de datos de consumo

        new Chart(document.getElementById('myChartLine'), { // Crear un nuevo gráfico en el elemento con el ID 'myChart'
            type: 'line', // Tipo de gráfico: barras
            data: {
                labels: labels, // Etiquetas en el eje X
                datasets: [{
                    label: 'Consumo Electrico', // Etiqueta del conjunto de datos
                    data: consumptionData, // Datos del conjunto de datos
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                        'rgba(255, 205, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(201, 203, 207, 0.2)'
                    ], // Colores de fondo de las barras
                    borderColor: [
                        'rgb(255, 99, 132)',
                        'rgb(255, 159, 64)',
                        'rgb(255, 205, 86)',
                        'rgb(75, 192, 192)',
                        'rgb(54, 162, 235)',
                        'rgb(153, 102, 255)',
                        'rgb(201, 203, 207)'
                    ], // Colores del borde de las barras
                    borderWidth: 1 // Ancho del borde de las barras
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true // El eje Y comienza desde cero
                    }
                }
            },
        });
    }
});
