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
<<<<<<< HEAD

$app->get('/api/insects', 'InsectsController@returnInsects');

$app->get('/api/plants', 'PlantsController@returnPlants');
=======
>>>>>>> 85a7d346224eccccb9fce56d51a550f0b66a4cc9
