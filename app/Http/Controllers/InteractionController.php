<?php
namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class interactionController
{
    public function addInteraction(Request $request)
    {
        $input = $request->all();

        $plant = DB::table('plants')->where('common_name', '=', $input['plant_name'])->first();
        unset($input['plant_name']);
        $insect = DB::table('insects')->where('common_name', '=', $input['insect_name'])->first();
        unset($input['insect_name']);

        if ($plant === null || $insect === null) {
            throw new \Exception('Could not find plant or insect', 400);
        }

        $input['plant_id'] = $plant->plant_id;
        $input['insect_id'] = $insect->insect_id;
        $input['type'] = 'negative';
        $input['verb'] = 'consumes';

        DB::table('interactions')->insert($input);
        return "success";
    }
}