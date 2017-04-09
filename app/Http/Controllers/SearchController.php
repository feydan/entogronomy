<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $baseQuery = '
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
        ';

        $bindings = [];
        if ($insect_search = $request->get('insect_search', '')) {
            $bindings['insects.common_name LIKE ?'] = $insect_search . "%";
        }
        if ($plant_search = $request->get('plant_search', '')) {
            $bindings['plants.common_name LIKE ?'] = $plant_search . "%";
        }

        if (!empty($bindings)) {
            $baseQuery .= "WHERE " . implode(' AND ', array_keys($bindings));
        }

        $searchResults =  DB::select($baseQuery, array_values($bindings));

        return json_encode($this->transformSearchResults($searchResults));
    }

    protected function transformSearchResults($searchResults)
    {
        $out = [];
        foreach ($searchResults as $searchResult) {
            $out[] = [
                'interaction' => [
                    'interaction_id' => $searchResult->interaction_id,
                    'plant' => [
                        'plant_id' => $searchResult->plant_id,
                        'common_name' => $searchResult->plant_common_name,
                        'description' => $searchResult->plant_description,
                    ],
                    'insect' => [
                        'insect_id' => $searchResult->insect_id,
                        'common_name' => $searchResult->insect_common_name,
                        'description' => $searchResult->insect_description,
                    ],
                    'type' => $searchResult->type,
                    'verb' => $searchResult->verb,
                ]
            ];
        }
        return $out;
    }
}
