<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PlantsController
{
    public function returnPlants(Request $request)
    {
        $baseQuery ='
            SELECT *
            FROM plants
        ';

        $searchResults =  DB::select($baseQuery);
        return json_encode($searchResults);
    }
}