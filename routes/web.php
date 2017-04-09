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

$app->get('/api/search', 'SearchController@search');

$app->get('/api/insects', 'InsectsController@returnInsects');

$app->get('/api/plants', 'PlantsController@returnPlants');

$app->post('/api/interactions', 'InteractionController@addInteraction');
