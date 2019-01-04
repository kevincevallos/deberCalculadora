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

/*$router->get('/', function () use ($router) {
    $fecha =  date(DATE_RFC2822);
    return json_encode($fecha);
});

*/
$router->group(['middleware' => []], function () use ($router) {
    $router->post('/suma', ['uses' => 'ExampleController@suma']);
});
