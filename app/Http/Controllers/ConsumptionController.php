<?php

namespace App\Http\Controllers;

use App\Models\ElectricityConsumption;
use Illuminate\Http\Request;

class ConsumptionController extends Controller
{
    public function getElectricityConsumptionData(Request $request)
    {
        $data = ElectricityConsumption::select('date','consumption_kwh')->get()->toArray();

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
