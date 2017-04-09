<?php
namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class InteractionController
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

        $imageUrl = null;
        if (isset($input['image_url'])) {
            $imageUrl = $input['image_url'] ?: null;
            unset($input['image_url']);
        }

        $imageInsert = [
            'interaction_id' => DB::table('interactions')->insertGetId($input),
            'url' => $imageUrl
        ];

        if ($imageInsert['url'] !== null) {
            DB::table('interaction_images')->insert($imageInsert);
        }

        return "success";
    }

    public function uploadImage(Request $request)
    {
        if ($request->hasFile('file')) {
            $imagePath = $request->file('file')->store('interactions');
            return $imagePath;
        }

        throw new \Exception('File not set', 400);
    }
}