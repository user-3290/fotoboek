<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\DataController;
use App\Http\Controllers\JsonController;
use App\Models\Wisa\DataModel;
use Illuminate\Support\Facades\log;

class FotoboekController extends Controller
{
    function index(Request $request)
    {
        if (isset($request->q) || isset($request->functions) || isset($request->entities) || isset($request->teams) || isset($request->regions)) {
            // Parameters to array
            $query = isset($request->q) ? $request->q : null;
            $functions = isset($request->functions) ? array_map('intval', explode(",", $request->functions)) : null;
            $entities = isset($request->entities) ? array_map('intval', explode(",", $request->entities)) : null;
            $regions = isset($request->regions) ? explode(",", $request->regions) : null;
            $teams = isset($request->teams) ? array_map('intval', explode(",", $request->teams)) : null;

            $datacontroller = new DataController();
            $filtered = $datacontroller->filter($query, $functions, $entities, $regions, $teams);

            // return view('test', ["array" => $filtered]);
            return view('index', ["data" => $filtered]);
        }
        return view('index');
    }

    function filter(Request $request)
    {
        $url = "?";
        $query = isset($request->q) ? $url .= "q=" . $request->q . "&" : null;
        $functions = isset($request->functions) ? $url .= "functions=" . implode(",", $request->functions) . "&" : null;
        $entities = isset($request->entities) ? $url .= "entities=" . implode(",", $request->entities) . "&" : null;
        $regions = isset($request->regions) ? $url .= "regions=" . implode(",", $request->regions) . "&" : null;
        $teams = isset($request->teams) ? $url .= "teams=" . implode(",", $request->teams) . "&" : null;

        return redirect(route('fotoboek.index') . $url);
    }

    function test()
    {
        $data = DataModel::all();
        foreach ($data[0] as $column => $item)
            Log::debug($column);
        return view('test', ["array" => DataModel::all()]);
    }
}
