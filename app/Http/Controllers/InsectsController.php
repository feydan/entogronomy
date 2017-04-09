<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class InsectsController
{
    public function returnInsects(Request $request)
    {
        $baseQuery ='
            SELECT *
            FROM insects
        ';

        $searchResults =  DB::select($baseQuery);
        return json_encode($searchResults);
    }
}