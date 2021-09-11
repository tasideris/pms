<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('fees',  ['uses' => 'FeeController@showAllFees']);
  
    $router->get('fees/{id}', ['uses' => 'FeeController@showOneFee']);
  
    $router->post('fees', ['uses' => 'FeeController@create']);
  
    $router->delete('fees/{id}', ['uses' => 'FeeController@delete']);
  
    $router->put('fees/{id}', ['uses' => 'FeeController@update']);

    $router->get('requests',  ['uses' => 'RequestController@showAllRequests']);
  
    $router->get('requests/{id}', ['uses' => 'RequestController@showOneRequest']);
  
    $router->post('requests', ['uses' => 'RequestController@create']);
  
    $router->delete('requests/{id}', ['uses' => 'RequestController@delete']);
  
    $router->put('requests/{id}', ['uses' => 'RequestController@update']);
});