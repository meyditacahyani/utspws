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


	$app->get('/categories', 'CategoryController@index');
	$app->get('/categories/{id}', 'CategoryController@show');
	$app->post('/categories', 'CategoryController@store');
	$app->put('/categories/{id}', 'CategoryController@update');
	$app->delete('/categories/{id}', 'CategoryController@destroy');
	
	$app->get('/book','BooksController@index');
	$app->get('/book/{id}','BooksController@show');
	$app->post('/book','BooksController@store');
*/

$app->get('/', function () use ($app) {
    return $app->version();
});

$app->get('/todo', 'todoController@index');
$app->get('/todo/{id}', 'todoController@show');
$app->post('/todo', 'todoController@store');
$app->put('/todo', 'todoController@update');
$app->delete('/todo', 'todoController@destroy');

$app->get('/book','todoController@buku');
$app->get('/book/{id}','todoController@showbuku');
$app->post('/book','todoController@storebuku');
$app->put('/book', 'todoController@updatebuku');
$app->delete('/book/{id}', 'todoController@destroybuku');
