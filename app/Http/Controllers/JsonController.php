<?php

namespace App\Http\Controllers;

use App\Http\Controllers\DataController;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\log;

class JsonController extends Controller
{
    function functions($data)
    {
        $functions = array();
        $dataController = new DataController();
        $grouped = $dataController->_group_by($data, 'ID_FUNCTIE');
        foreach ($grouped as $row) {
            if ($row[0]["ID_FUNCTIE"]  !== null && $row[0]["FUNCTIE"] !== null)
                $functions[] = array(
                    "id" => $row[0]["ID_FUNCTIE"] == 0 ? 9999999 : $row[0]["ID_FUNCTIE"],
                    "text" => iconv('Windows-1250', 'UTF-8', $row[0]["FUNCTIE"]),
                );
        }

        $content = "var functions = " . json_encode($functions) . "; export default functions;";

        return Storage::disk('local')->put('public/data/functions.js', $content);
    }

    function entities($data)
    {
        $entities = array();
        $dataController = new DataController();
        $grouped = $dataController->_group_by($data, 'ID_ENTITEIT');
        foreach ($grouped as $row) {
            if ($row[0]["ID_ENTITEIT"]  !== null && $row[0]["ENTITEIT"] !== null)
                $entities[] = array(
                    "id" => $row[0]["ID_ENTITEIT"] == 0 ? 9999999 : $row[0]["ID_ENTITEIT"],
                    "text" => iconv('Windows-1250', 'UTF-8', $row[0]["ENTITEIT"]),
                );
        }

        $content = "var entities = " . json_encode($entities) . "; export default entities;";

        return Storage::disk('local')->put('public/data/entities.js', $content);
    }

    function regions($data)
    {
        $regions = array();
        foreach ($data[0] as $column => $item)
            Log::debug($column);

        $content = "var regions = " . json_encode($regions) . "; export default regions;";

        return Storage::disk('local')->put('public/data/regions.js', $content);
    }

    function teams($data)
    {
        $entities = array();
        $dataController = new DataController();
        $grouped_entities = $dataController->_group_by($data, 'ID_ENTITEIT');
        foreach ($grouped_entities as $entity) {
            if ($entity[0]["ID_ENTITEIT"]  == null && $entity[0]["ENTITEIT"] == null) continue;
            $teams = array();
            $grouped_teams = $dataController->_group_by($entity, 'ID_TEAM');

            $teams["id"] = $entity[0]["ID_ENTITEIT"] == 0 ? 9999999 : $entity[0]["ID_ENTITEIT"];
            $teams["text"] = $entity[0]["ENTITEIT"];
            foreach ($grouped_teams as $row) {
                if ($row[0]["ID_TEAM"]  !== null && $row[0]["TEAM"] !== null)
                    $teams["children"][] = array(
                        "id" => $row[0]["ID_TEAM"] == 0 ? 9999999 : $row[0]["ID_TEAM"],
                        "text" => iconv('Windows-1250', 'UTF-8', $row[0]["TEAM"]),
                    );
            }

            $entities[] = $teams;
        }

        $content = "var teams = " . json_encode($entities) . "; export default teams;";

        return Storage::disk('local')->put('public/data/teams.js', $content);
    }

    function colors($data)
    {
        $colors = array(
            array(
                "fields" => "PS_VOORNAAM|PS_NAAM",
                "values" => "miet|schmitz",
                "colors" => array(
                    "background" => "snoep",
                    "text" => "black"
                )
            ),
            array(
                "fields" => "TEAM",
                "values" => "Aanvullende algemene vorming",
                "colors" => array(
                    "background" => "lime",
                    "text" => "white"
                )
            ),
            array(
                "fields" => "ENTITEIT",
                "values" => "NT2",
                "colors" => array(
                    "background" => "azuur",
                    "text" => "white"
                )
            ),
        );

        foreach ($colors as $color) {
            $fields = explode("|", $color["fields"]);
            $values = explode("|", $color["values"]);
            if (count($fields) !== count($values)) continue;

            for ($i = 0; $i < count($fields); $i++)
                if ($data[$fields[$i]] !== $values[$i]) continue 2;

            return $color["colors"];
        }

        return array(
            "background" => "petrol",
            "text" => "white"
        );
    }
}
