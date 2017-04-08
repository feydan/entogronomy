<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {
    return "hi";
});

$app->get('/search', function () use ($app) {
    $search_result =  DB::statement('
        SELECT
          i.*,
          plant.id as plant_id,
          plant.species as plant_species,
          plant.common_name as plant_common_name,
          plant.description as plant_description,
          insect.id as insect_id,
          insect.species as insect_species,
          insect.common_name as insect_common_name,
          insect.description as insect_description
        FROM interaction as i
        JOIN plant using (plant_id)
        JOIN insect using (insect_id)
        WHERE
    ');

    return;
});
