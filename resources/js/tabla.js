$(document).ready(function() {
    $('#id').DataTable({
        "ajax": "/electricity-consumption-data",
        "columns": [
            { "data": "date" },
            { "data": "consumption_kwh" }
        ]
    })})