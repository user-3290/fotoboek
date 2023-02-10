<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class DataController extends Controller
{
    static function fake()
    {
        $fake = [
            /*
            [
                "ID_ENTITEIT" => null,
                "ENTITEIT" => null,
                "ID_TEAM" => null,
                "TEAM" => null,
                "REGIO_AARSCHOT" => null,
                "REGIO_DIEST" => null,
                "REGIO_HAAGT" => null,
                "REGIO_LEUVEN" => null,
                "REGIO_TIENEN" => null,
                "PS_ID" => null,
                "PS_NAAM" => null,
                "PS_VOORNAAM" => null,
                "ID_FUNCTIE" => null,
                "FUNCTIE" => null,
                "VERDUIDELIJKING" => null
            ]
            */
            [
                "ID_ENTITEIT" => 1,
                "ENTITEIT" => "Hahaha test",
                "ID_TEAM" => 1,
                "TEAM" => "dfsqdf",
                "REGIO_AARSCHOT" => "J",
                "REGIO_DIEST" => null,
                "REGIO_HAAGT" => null,
                "REGIO_LEUVEN" => null,
                "REGIO_TIENEN" => null,
                "PS_ID" => 7,
                "PS_NAAM" => "Van Horebeek",
                "PS_VOORNAAM" => "Matse",
                "ID_FUNCTIE" => 1,
                "FUNCTIE" => "Test",
                "VERDUIDELIJKING" => "dfsdfsqdfsq"
            ],
            [
                "ID_ENTITEIT" => 1,
                "ENTITEIT" => "Hahaha test",
                "ID_TEAM" => 1,
                "TEAM" => "dfsqdf",
                "REGIO_AARSCHOT" => "J",
                "REGIO_DIEST" => null,
                "REGIO_HAAGT" => null,
                "REGIO_LEUVEN" => null,
                "REGIO_TIENEN" => null,
                "PS_ID" => 7,
                "PS_NAAM" => "Van Horebeek",
                "PS_VOORNAAM" => "Matse",
                "ID_FUNCTIE" => 0,
                "FUNCTIE" => "Leerkracht",
                "VERDUIDELIJKING" => "dfsdfsqdfsq"
            ],
            [
                "ID_ENTITEIT" => 1,
                "ENTITEIT" => "Hahaha test",
                "ID_TEAM" => 1,
                "TEAM" => "dfsqdf",
                "REGIO_AARSCHOT" => "J",
                "REGIO_DIEST" => null,
                "REGIO_HAAGT" => null,
                "REGIO_LEUVEN" => null,
                "REGIO_TIENEN" => null,
                "PS_ID" => 7,
                "PS_NAAM" => "Van Horebeek",
                "PS_VOORNAAM" => "Matse",
                "ID_FUNCTIE" => 0,
                "FUNCTIE" => "Leerkracht",
                "VERDUIDELIJKING" => "dfsdfsqdfsq"
            ],
            [
                "ID_ENTITEIT" => null,
                "ENTITEIT" => null,
                "ID_TEAM" => null,
                "TEAM" => null,
                "REGIO_AARSCHOT" => null,
                "REGIO_DIEST" => null,
                "REGIO_HAAGT" => null,
                "REGIO_LEUVEN" => null,
                "REGIO_TIENEN" => null,
                "PS_ID" => "7",
                "PS_NAAM" => "sdfsdf",
                "PS_VOORNAAM" => "qsdfsf",
                "ID_FUNCTIE" => 5,
                "FUNCTIE" => "fg",
                "VERDUIDELIJKING" => null
            ],
            [
                "ID_ENTITEIT" => null,
                "ENTITEIT" => null,
                "ID_TEAM" => null,
                "TEAM" => null,
                "REGIO_AARSCHOT" => null,
                "REGIO_DIEST" => null,
                "REGIO_HAAGT" => null,
                "REGIO_LEUVEN" => null,
                "REGIO_TIENEN" => null,
                "PS_ID" => "7",
                "PS_NAAM" => "sdfsdf",
                "PS_VOORNAAM" => "qsdfsf",
                "ID_FUNCTIE" => 5,
                "FUNCTIE" => "fg",
                "VERDUIDELIJKING" => null
            ],
            [
                "ID_ENTITEIT" => null,
                "ENTITEIT" => null,
                "ID_TEAM" => null,
                "TEAM" => null,
                "REGIO_AARSCHOT" => null,
                "REGIO_DIEST" => null,
                "REGIO_HAAGT" => null,
                "REGIO_LEUVEN" => null,
                "REGIO_TIENEN" => null,
                "PS_ID" => "7",
                "PS_NAAM" => "sdfsdf",
                "PS_VOORNAAM" => "qsdfsf",
                "ID_FUNCTIE" => 5,
                "FUNCTIE" => "fg",
                "VERDUIDELIJKING" => null
            ],
            [
                "ID_ENTITEIT" => null,
                "ENTITEIT" => null,
                "ID_TEAM" => null,
                "TEAM" => null,
                "REGIO_AARSCHOT" => null,
                "REGIO_DIEST" => null,
                "REGIO_HAAGT" => null,
                "REGIO_LEUVEN" => null,
                "REGIO_TIENEN" => null,
                "PS_ID" => "7",
                "PS_NAAM" => "sdfsdf",
                "PS_VOORNAAM" => "qsdfsf",
                "ID_FUNCTIE" => 5,
                "FUNCTIE" => "fg",
                "VERDUIDELIJKING" => null
            ],
            [
                "ID_ENTITEIT" => null,
                "ENTITEIT" => null,
                "ID_TEAM" => null,
                "TEAM" => null,
                "REGIO_AARSCHOT" => null,
                "REGIO_DIEST" => null,
                "REGIO_HAAGT" => null,
                "REGIO_LEUVEN" => null,
                "REGIO_TIENEN" => null,
                "PS_ID" => "7",
                "PS_NAAM" => "sdfsdf",
                "PS_VOORNAAM" => "qsdfsf",
                "ID_FUNCTIE" => 5,
                "FUNCTIE" => "fg",
                "VERDUIDELIJKING" => null
            ],
            [
                "ID_ENTITEIT" => null,
                "ENTITEIT" => null,
                "ID_TEAM" => null,
                "TEAM" => null,
                "REGIO_AARSCHOT" => null,
                "REGIO_DIEST" => null,
                "REGIO_HAAGT" => null,
                "REGIO_LEUVEN" => null,
                "REGIO_TIENEN" => null,
                "PS_ID" => "7",
                "PS_NAAM" => "sdfsdf",
                "PS_VOORNAAM" => "qsdfsf",
                "ID_FUNCTIE" => 5,
                "FUNCTIE" => "fg",
                "VERDUIDELIJKING" => null
            ],
            [
                "ID_ENTITEIT" => null,
                "ENTITEIT" => null,
                "ID_TEAM" => null,
                "TEAM" => null,
                "REGIO_AARSCHOT" => null,
                "REGIO_DIEST" => null,
                "REGIO_HAAGT" => null,
                "REGIO_LEUVEN" => null,
                "REGIO_TIENEN" => null,
                "PS_ID" => "7",
                "PS_NAAM" => "sdfsdf",
                "PS_VOORNAAM" => "qsdfsf",
                "ID_FUNCTIE" => 5,
                "FUNCTIE" => "fg",
                "VERDUIDELIJKING" => null
            ],
            [
                "ID_ENTITEIT" => null,
                "ENTITEIT" => null,
                "ID_TEAM" => null,
                "TEAM" => null,
                "REGIO_AARSCHOT" => null,
                "REGIO_DIEST" => null,
                "REGIO_HAAGT" => null,
                "REGIO_LEUVEN" => null,
                "REGIO_TIENEN" => null,
                "PS_ID" => "7",
                "PS_NAAM" => "sdfsdf",
                "PS_VOORNAAM" => "qsdfsf",
                "ID_FUNCTIE" => 5,
                "FUNCTIE" => "fg",
                "VERDUIDELIJKING" => null
            ],
            [
                "ID_ENTITEIT" => null,
                "ENTITEIT" => null,
                "ID_TEAM" => null,
                "TEAM" => null,
                "REGIO_AARSCHOT" => null,
                "REGIO_DIEST" => null,
                "REGIO_HAAGT" => null,
                "REGIO_LEUVEN" => null,
                "REGIO_TIENEN" => null,
                "PS_ID" => "7",
                "PS_NAAM" => "sdfsdf",
                "PS_VOORNAAM" => "qsdfsf",
                "ID_FUNCTIE" => 5,
                "FUNCTIE" => "fg",
                "VERDUIDELIJKING" => null
            ],
            [
                "ID_ENTITEIT" => null,
                "ENTITEIT" => null,
                "ID_TEAM" => null,
                "TEAM" => null,
                "REGIO_AARSCHOT" => null,
                "REGIO_DIEST" => null,
                "REGIO_HAAGT" => null,
                "REGIO_LEUVEN" => null,
                "REGIO_TIENEN" => null,
                "PS_ID" => "7",
                "PS_NAAM" => "sdfsdf",
                "PS_VOORNAAM" => "qsdfsf",
                "ID_FUNCTIE" => 5,
                "FUNCTIE" => "fg",
                "VERDUIDELIJKING" => null
            ],
            [
                "ID_ENTITEIT" => null,
                "ENTITEIT" => null,
                "ID_TEAM" => null,
                "TEAM" => null,
                "REGIO_AARSCHOT" => null,
                "REGIO_DIEST" => null,
                "REGIO_HAAGT" => null,
                "REGIO_LEUVEN" => null,
                "REGIO_TIENEN" => null,
                "PS_ID" => "7",
                "PS_NAAM" => "sdfsdf",
                "PS_VOORNAAM" => "qsdfsf",
                "ID_FUNCTIE" => 5,
                "FUNCTIE" => "fg",
                "VERDUIDELIJKING" => null
            ],
            [
                "ID_ENTITEIT" => null,
                "ENTITEIT" => null,
                "ID_TEAM" => null,
                "TEAM" => null,
                "REGIO_AARSCHOT" => null,
                "REGIO_DIEST" => null,
                "REGIO_HAAGT" => null,
                "REGIO_LEUVEN" => null,
                "REGIO_TIENEN" => null,
                "PS_ID" => "7",
                "PS_NAAM" => "sdfsdf",
                "PS_VOORNAAM" => "qsdfsf",
                "ID_FUNCTIE" => 5,
                "FUNCTIE" => "fg",
                "VERDUIDELIJKING" => null
            ],
            [
                "ID_ENTITEIT" => null,
                "ENTITEIT" => null,
                "ID_TEAM" => null,
                "TEAM" => null,
                "REGIO_AARSCHOT" => null,
                "REGIO_DIEST" => null,
                "REGIO_HAAGT" => null,
                "REGIO_LEUVEN" => null,
                "REGIO_TIENEN" => null,
                "PS_ID" => "7",
                "PS_NAAM" => "sdfsdf",
                "PS_VOORNAAM" => "qsdfsf",
                "ID_FUNCTIE" => 5,
                "FUNCTIE" => "fg",
                "VERDUIDELIJKING" => null
            ],
            [
                "ID_ENTITEIT" => null,
                "ENTITEIT" => null,
                "ID_TEAM" => null,
                "TEAM" => null,
                "REGIO_AARSCHOT" => null,
                "REGIO_DIEST" => null,
                "REGIO_HAAGT" => null,
                "REGIO_LEUVEN" => null,
                "REGIO_TIENEN" => null,
                "PS_ID" => "7",
                "PS_NAAM" => "sdfsdf",
                "PS_VOORNAAM" => "qsdfsf",
                "ID_FUNCTIE" => 5,
                "FUNCTIE" => "fg",
                "VERDUIDELIJKING" => null
            ],
            [
                "ID_ENTITEIT" => null,
                "ENTITEIT" => null,
                "ID_TEAM" => null,
                "TEAM" => null,
                "REGIO_AARSCHOT" => null,
                "REGIO_DIEST" => null,
                "REGIO_HAAGT" => null,
                "REGIO_LEUVEN" => null,
                "REGIO_TIENEN" => null,
                "PS_ID" => "7",
                "PS_NAAM" => "sdfsdf",
                "PS_VOORNAAM" => "qsdfsf",
                "ID_FUNCTIE" => 5,
                "FUNCTIE" => "fg",
                "VERDUIDELIJKING" => null
            ],
            [
                "ID_ENTITEIT" => null,
                "ENTITEIT" => null,
                "ID_TEAM" => null,
                "TEAM" => null,
                "REGIO_AARSCHOT" => null,
                "REGIO_DIEST" => null,
                "REGIO_HAAGT" => null,
                "REGIO_LEUVEN" => null,
                "REGIO_TIENEN" => null,
                "PS_ID" => "7",
                "PS_NAAM" => "sdfsdf",
                "PS_VOORNAAM" => "qsdfsf",
                "ID_FUNCTIE" => 5,
                "FUNCTIE" => "fg",
                "VERDUIDELIJKING" => null
            ],
            [
                "ID_ENTITEIT" => null,
                "ENTITEIT" => null,
                "ID_TEAM" => null,
                "TEAM" => null,
                "REGIO_AARSCHOT" => null,
                "REGIO_DIEST" => null,
                "REGIO_HAAGT" => null,
                "REGIO_LEUVEN" => null,
                "REGIO_TIENEN" => null,
                "PS_ID" => "7",
                "PS_NAAM" => "sdfsdf",
                "PS_VOORNAAM" => "qsdfsf",
                "ID_FUNCTIE" => 5,
                "FUNCTIE" => "fg",
                "VERDUIDELIJKING" => null
            ],
            [
                "ID_ENTITEIT" => null,
                "ENTITEIT" => null,
                "ID_TEAM" => null,
                "TEAM" => null,
                "REGIO_AARSCHOT" => null,
                "REGIO_DIEST" => null,
                "REGIO_HAAGT" => null,
                "REGIO_LEUVEN" => null,
                "REGIO_TIENEN" => null,
                "PS_ID" => "7",
                "PS_NAAM" => "sdfsdf",
                "PS_VOORNAAM" => "qsdfsf",
                "ID_FUNCTIE" => 5,
                "FUNCTIE" => "fg",
                "VERDUIDELIJKING" => null
            ],
            [
                "ID_ENTITEIT" => null,
                "ENTITEIT" => null,
                "ID_TEAM" => null,
                "TEAM" => null,
                "REGIO_AARSCHOT" => null,
                "REGIO_DIEST" => null,
                "REGIO_HAAGT" => null,
                "REGIO_LEUVEN" => null,
                "REGIO_TIENEN" => null,
                "PS_ID" => "7",
                "PS_NAAM" => "sdfsdf",
                "PS_VOORNAAM" => "qsdfsf",
                "ID_FUNCTIE" => 5,
                "FUNCTIE" => "fg",
                "VERDUIDELIJKING" => null
            ],
            [
                "ID_ENTITEIT" => null,
                "ENTITEIT" => null,
                "ID_TEAM" => null,
                "TEAM" => null,
                "REGIO_AARSCHOT" => null,
                "REGIO_DIEST" => null,
                "REGIO_HAAGT" => null,
                "REGIO_LEUVEN" => null,
                "REGIO_TIENEN" => null,
                "PS_ID" => "7",
                "PS_NAAM" => "sdfsdf",
                "PS_VOORNAAM" => "qsdfsf",
                "ID_FUNCTIE" => 5,
                "FUNCTIE" => "fg",
                "VERDUIDELIJKING" => null
            ],
            [
                "ID_ENTITEIT" => null,
                "ENTITEIT" => null,
                "ID_TEAM" => null,
                "TEAM" => null,
                "REGIO_AARSCHOT" => null,
                "REGIO_DIEST" => null,
                "REGIO_HAAGT" => null,
                "REGIO_LEUVEN" => null,
                "REGIO_TIENEN" => null,
                "PS_ID" => "7",
                "PS_NAAM" => "sdfsdf",
                "PS_VOORNAAM" => "qsdfsf",
                "ID_FUNCTIE" => 5,
                "FUNCTIE" => "fg",
                "VERDUIDELIJKING" => null
            ],
            [
                "ID_ENTITEIT" => null,
                "ENTITEIT" => null,
                "ID_TEAM" => null,
                "TEAM" => null,
                "REGIO_AARSCHOT" => null,
                "REGIO_DIEST" => null,
                "REGIO_HAAGT" => null,
                "REGIO_LEUVEN" => null,
                "REGIO_TIENEN" => null,
                "PS_ID" => "7",
                "PS_NAAM" => "sdfsdf",
                "PS_VOORNAAM" => "qsdfsf",
                "ID_FUNCTIE" => 5,
                "FUNCTIE" => "fg",
                "VERDUIDELIJKING" => null
            ],
            [
                "ID_ENTITEIT" => null,
                "ENTITEIT" => null,
                "ID_TEAM" => null,
                "TEAM" => null,
                "REGIO_AARSCHOT" => null,
                "REGIO_DIEST" => null,
                "REGIO_HAAGT" => null,
                "REGIO_LEUVEN" => null,
                "REGIO_TIENEN" => null,
                "PS_ID" => "7",
                "PS_NAAM" => "sdfsdf",
                "PS_VOORNAAM" => "qsdfsf",
                "ID_FUNCTIE" => 5,
                "FUNCTIE" => "fg",
                "VERDUIDELIJKING" => null
            ],
            [
                "ID_ENTITEIT" => null,
                "ENTITEIT" => null,
                "ID_TEAM" => null,
                "TEAM" => null,
                "REGIO_AARSCHOT" => null,
                "REGIO_DIEST" => null,
                "REGIO_HAAGT" => null,
                "REGIO_LEUVEN" => null,
                "REGIO_TIENEN" => null,
                "PS_ID" => "7",
                "PS_NAAM" => "sdfsdf",
                "PS_VOORNAAM" => "qsdfsf",
                "ID_FUNCTIE" => 5,
                "FUNCTIE" => "fg",
                "VERDUIDELIJKING" => null
            ],
            [
                "ID_ENTITEIT" => null,
                "ENTITEIT" => null,
                "ID_TEAM" => null,
                "TEAM" => null,
                "REGIO_AARSCHOT" => null,
                "REGIO_DIEST" => null,
                "REGIO_HAAGT" => null,
                "REGIO_LEUVEN" => null,
                "REGIO_TIENEN" => null,
                "PS_ID" => "7",
                "PS_NAAM" => "sdfsdf",
                "PS_VOORNAAM" => "qsdfsf",
                "ID_FUNCTIE" => 5,
                "FUNCTIE" => "fg",
                "VERDUIDELIJKING" => null
            ],
            [
                "ID_ENTITEIT" => null,
                "ENTITEIT" => null,
                "ID_TEAM" => null,
                "TEAM" => null,
                "REGIO_AARSCHOT" => null,
                "REGIO_DIEST" => null,
                "REGIO_HAAGT" => null,
                "REGIO_LEUVEN" => null,
                "REGIO_TIENEN" => null,
                "PS_ID" => "7",
                "PS_NAAM" => "sdfsdf",
                "PS_VOORNAAM" => "qsdfsf",
                "ID_FUNCTIE" => 5,
                "FUNCTIE" => "fg",
                "VERDUIDELIJKING" => null
            ],
            [
                "ID_ENTITEIT" => null,
                "ENTITEIT" => null,
                "ID_TEAM" => null,
                "TEAM" => null,
                "REGIO_AARSCHOT" => null,
                "REGIO_DIEST" => null,
                "REGIO_HAAGT" => null,
                "REGIO_LEUVEN" => null,
                "REGIO_TIENEN" => null,
                "PS_ID" => "7",
                "PS_NAAM" => "sdfsdf",
                "PS_VOORNAAM" => "qsdfsf",
                "ID_FUNCTIE" => 5,
                "FUNCTIE" => "fg",
                "VERDUIDELIJKING" => null
            ],
            [
                "ID_ENTITEIT" => null,
                "ENTITEIT" => null,
                "ID_TEAM" => null,
                "TEAM" => null,
                "REGIO_AARSCHOT" => null,
                "REGIO_DIEST" => null,
                "REGIO_HAAGT" => null,
                "REGIO_LEUVEN" => null,
                "REGIO_TIENEN" => null,
                "PS_ID" => "7",
                "PS_NAAM" => "sdfsdf",
                "PS_VOORNAAM" => "qsdfsf",
                "ID_FUNCTIE" => 5,
                "FUNCTIE" => "fg",
                "VERDUIDELIJKING" => null
            ],
            [
                "ID_ENTITEIT" => null,
                "ENTITEIT" => null,
                "ID_TEAM" => null,
                "TEAM" => null,
                "REGIO_AARSCHOT" => null,
                "REGIO_DIEST" => null,
                "REGIO_HAAGT" => null,
                "REGIO_LEUVEN" => null,
                "REGIO_TIENEN" => null,
                "PS_ID" => "7",
                "PS_NAAM" => "sdfsdf",
                "PS_VOORNAAM" => "qsdfsf",
                "ID_FUNCTIE" => 5,
                "FUNCTIE" => "fg",
                "VERDUIDELIJKING" => null
            ],
            [
                "ID_ENTITEIT" => null,
                "ENTITEIT" => null,
                "ID_TEAM" => null,
                "TEAM" => null,
                "REGIO_AARSCHOT" => null,
                "REGIO_DIEST" => null,
                "REGIO_HAAGT" => null,
                "REGIO_LEUVEN" => null,
                "REGIO_TIENEN" => null,
                "PS_ID" => "7",
                "PS_NAAM" => "sdfsdf",
                "PS_VOORNAAM" => "qsdfsf",
                "ID_FUNCTIE" => 5,
                "FUNCTIE" => "fg",
                "VERDUIDELIJKING" => null
            ],
            [
                "ID_ENTITEIT" => null,
                "ENTITEIT" => null,
                "ID_TEAM" => null,
                "TEAM" => null,
                "REGIO_AARSCHOT" => null,
                "REGIO_DIEST" => null,
                "REGIO_HAAGT" => null,
                "REGIO_LEUVEN" => null,
                "REGIO_TIENEN" => null,
                "PS_ID" => "7",
                "PS_NAAM" => "sdfsdf",
                "PS_VOORNAAM" => "qsdfsf",
                "ID_FUNCTIE" => 5,
                "FUNCTIE" => "fg",
                "VERDUIDELIJKING" => null
            ],
            [
                "ID_ENTITEIT" => null,
                "ENTITEIT" => null,
                "ID_TEAM" => null,
                "TEAM" => null,
                "REGIO_AARSCHOT" => null,
                "REGIO_DIEST" => null,
                "REGIO_HAAGT" => null,
                "REGIO_LEUVEN" => null,
                "REGIO_TIENEN" => null,
                "PS_ID" => "7",
                "PS_NAAM" => "sdfsdf",
                "PS_VOORNAAM" => "qsdfsf",
                "ID_FUNCTIE" => 5,
                "FUNCTIE" => "fg",
                "VERDUIDELIJKING" => null
            ],
            [
                "ID_ENTITEIT" => null,
                "ENTITEIT" => null,
                "ID_TEAM" => null,
                "TEAM" => null,
                "REGIO_AARSCHOT" => null,
                "REGIO_DIEST" => null,
                "REGIO_HAAGT" => null,
                "REGIO_LEUVEN" => null,
                "REGIO_TIENEN" => null,
                "PS_ID" => "7",
                "PS_NAAM" => "sdfsdf",
                "PS_VOORNAAM" => "qsdfsf",
                "ID_FUNCTIE" => 5,
                "FUNCTIE" => "fg",
                "VERDUIDELIJKING" => null
            ],
            [
                "ID_ENTITEIT" => null,
                "ENTITEIT" => null,
                "ID_TEAM" => null,
                "TEAM" => null,
                "REGIO_AARSCHOT" => null,
                "REGIO_DIEST" => null,
                "REGIO_HAAGT" => null,
                "REGIO_LEUVEN" => null,
                "REGIO_TIENEN" => null,
                "PS_ID" => "7",
                "PS_NAAM" => "sdfsdf",
                "PS_VOORNAAM" => "qsdfsf",
                "ID_FUNCTIE" => 5,
                "FUNCTIE" => "fg",
                "VERDUIDELIJKING" => null
            ],
            [
                "ID_ENTITEIT" => null,
                "ENTITEIT" => null,
                "ID_TEAM" => null,
                "TEAM" => null,
                "REGIO_AARSCHOT" => null,
                "REGIO_DIEST" => null,
                "REGIO_HAAGT" => null,
                "REGIO_LEUVEN" => null,
                "REGIO_TIENEN" => null,
                "PS_ID" => "7",
                "PS_NAAM" => "sdfsdf",
                "PS_VOORNAAM" => "qsdfsf",
                "ID_FUNCTIE" => 5,
                "FUNCTIE" => "fg",
                "VERDUIDELIJKING" => null
            ],
            [
                "ID_ENTITEIT" => null,
                "ENTITEIT" => null,
                "ID_TEAM" => null,
                "TEAM" => null,
                "REGIO_AARSCHOT" => null,
                "REGIO_DIEST" => null,
                "REGIO_HAAGT" => null,
                "REGIO_LEUVEN" => "J",
                "REGIO_TIENEN" => null,
                "PS_ID" => "dgdqgfq",
                "PS_NAAM" => "fdsqfqs",
                "PS_VOORNAAM" => "dfqsf",
                "ID_FUNCTIE" => 9,
                "FUNCTIE" => "dqfsdqf",
                "VERDUIDELIJKING" => "sdsqf"
            ],
            [
                "ID_ENTITEIT" => "sdfsdf",
                "ENTITEIT" => "sfdsdf",
                "ID_TEAM" => "sfsdq",
                "TEAM" => "qfsdq",
                "REGIO_AARSCHOT" => null,
                "REGIO_DIEST" => null,
                "REGIO_HAAGT" => null,
                "REGIO_LEUVEN" => null,
                "REGIO_TIENEN" => null,
                "PS_ID" => "sdgfdgqsfs",
                "PS_NAAM" => "sdfsqf",
                "PS_VOORNAAM" => "sdqfsf",
                "ID_FUNCTIE" => 7,
                "FUNCTIE" => "dsfq",
                "VERDUIDELIJKING" => "qdsqf"
            ]
        ];

        return $fake;
    }

    function format($data)
    {
        $formated = array();
        $grouped = $this->_group_by($data, 'PS_ID');
        foreach ($grouped as $group) {
            $user = [
                "firstname" => $group[0]["PS_VOORNAAM"],
                "lastname" => $group[0]["PS_NAAM"],
                "image" => "https://s.gravatar.com/avatar/fd2f83164d6242e75300c434b82b2f69?s=256",
            ];
            $functions = [];
            foreach ($group as $group_function) {
                $region = "";
                if ($group_function["REGIO_AARSCHOT"] !== null) $region = $region . "Aarschot ";
                if ($group_function["REGIO_DIEST"] !== null) $region = $region . "Diest ";
                if ($group_function["REGIO_HAAGT"] !== null) $region = $region . "Haagt ";
                if ($group_function["REGIO_LEUVEN"] !== null) $region = $region . "Leuven ";
                if ($group_function["REGIO_TIENEN"] !== null) $region = $region . "Tienen ";
                $function = [
                    "function_id" => $group_function["ID_FUNCTIE"],
                    "function" => $group_function["FUNCTIE"],
                    "entity_id" => $group_function["ID_ENTITEIT"],
                    "entity" => $group_function["ENTITEIT"],
                    "team_id" => $group_function["ID_TEAM"],
                    "team" => $group_function["TEAM"],
                    "region" => $region,
                    "extra" => $group_function["VERDUIDELIJKING"],
                    "color" => [
                        "background" => "lime",
                        "text" => "black"
                    ]
                ];

                $functions[] = $function;
            }
            $user["functions"] = $functions;
            $formated[] = $user;
        }
        return $formated;
    }

    function filter($query, $functions, $entities, $regions, $teams)
    {
        $datacontroller = new DataController();
        $data = $datacontroller->format(DataController::fake());

        $filtered = array();
        foreach ($data as $user) {
            $q_check = null;
            $function_check = null;
            $entity_check = null;
            $region_check = null;
            $team_check = null;

            // Check if first or lastname includes the search query
            if ($query !== null && $query !== "") {
                foreach (explode(" ", $query) as $string)
                    if (!$q_check)
                        if (str_contains(strtolower($user["firstname"]), strtolower($string)) || str_contains(strtolower($user["lastname"]), strtolower($string))) $q_check = true;

                if ($q_check == null) $q_check = false;
            }

            // Check if the function is included
            if ($functions !== null && $functions !== "") {
                foreach ($functions as $function)
                    if (!$function_check)
                        foreach ($user["functions"] as $user_function)
                            if ($user_function["function_id"] ==  $function) $function_check = true;

                if ($function_check == null) $function_check = false;
            }

            // Check if the entity is included
            if ($entities !== null && $entities !== "") {
                foreach ($entities as $entity)
                    if (!$entity_check)
                        foreach ($user["functions"] as $user_function)
                            if ($user_function["entity_id"] ==  $entity) $entity_check = true;

                if ($entity_check == null) $entity_check = false;
            }

            // Check if the region is included
            if ($regions !== null && $regions !== "") {
                foreach ($regions as $region)
                    if (!$region_check)
                        foreach ($user["functions"] as $user_function)
                            if (str_contains(strtolower($user_function["region"]), strtolower($region))) $region_check = true;

                if ($region_check == null) $region_check = false;
            }

            // Check if the team is included
            if ($teams !== null && $teams !== "") {
                foreach ($teams as $team)
                    if (!$team_check)
                        foreach ($user["functions"] as $user_function)
                            if ($user_function["team_id"] ==  $team) $team_check = true;

                if ($team_check == null) $team_check = false;
            }

            if ($q_check !== false && $function_check !== false && $entity_check !== false && $team_check !== false) $filtered[] = $user;
        }

        return $filtered;
    }

    function _group_by($array, $key)
    {
        $result = array();
        foreach ($array as $element) {
            $result[$element['PS_ID']][] = $element;
        }

        return $result;
    }
}
