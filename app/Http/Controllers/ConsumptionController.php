<?php

namespace App\Http\Controllers;

use App\Models\ElectricityConsumption;
use Illuminate\Http\Request;

class ConsumptionController extends Controller
{
    public function getElectricityConsumptionData(Request $request)
    {
        // Consulta los datos de la tabla 'electricity_consumption' seleccionando las columnas 'date' y 'consumption_kwh'
        $data = ElectricityConsumption::select('date', 'consumption_kwh')->get()->toArray();

        // Devuelve los datos en formato JSON como respuesta a la solicitud
        return response()->json(['data' => $data]);
    }
}



/*
<?php

namespace App\Http\Controllers;

use App\Models\ElectricityConsumption;
use Datatables;

class ConsumptionController extends Controller
{
    public function getElectricityConsumptionData()
    {
        $data = ElectricityConsumption::all();

        return Datatables::of($data)->make(true);
    }
}
*/
