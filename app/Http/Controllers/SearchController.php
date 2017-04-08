<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SearchController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    public function search(Request $request)
    {
        $insect_search = $request->get('insect_search', '') . "%";
        $plant_search = $request->get('plant_search', '') . "%";
        $search_result =  DB::select('
            SELECT
              i.*,
              plants.plant_id as plant_id,
              plants.species as plant_species,
              plants.common_name as plant_common_name,
              plants.description as plant_description,
              insects.insect_id as insect_id,
              insects.species as insect_species,
              insects.common_name as insect_common_name,
              insects.description as insect_description
            FROM interactions as i
            JOIN plants using (plant_id)
            JOIN insects using (insect_id)
            WHERE plants.common_name LIKE ?
              AND insects.common_name LIKE ?
        ', [
                $plant_search,
                $insect_search,
        ]);
        

        return json_encode($search_result);
    }
}
