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

/**
 * Page Routes
 */
$app->get('/', function () {
    return view('index', ['title' => 'Entogronomy | Home']);
});
$app->get('/report', function () {
    return view('report', ['title' => 'Entogronomy | Report Form',]);
});
$app->get('/map', function () {
    return view('map', ['title' => 'Entogronomy | Map',]);
});

/**
 * API Routes
 */
$app->get('/api/search', 'SearchController@search');

$app->get('/api/insects', 'InsectsController@returnInsects');

$app->get('/api/plants', 'PlantsController@returnPlants');

$app->post('/api/interactions', 'InteractionController@addInteraction');
$app->post('/api/image', 'InteractionController@uploadImage');
