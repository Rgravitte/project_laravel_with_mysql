<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('projects.welcome');
});

// GET /projects (index)
// POST /projects (store)

// Route::resource('projects', 'ProjectsController');

// Route::get('/', 'ProjectsController@index');
Route::get('/projects', 'ProjectsController@index');
Route::get('/projects/{project}', 'ProjectsController@show');
Route::get('/projects/{project}/edit', 'ProjectsController@edit'); 

Route::patch('/projects/{project}', 'ProjectsController@update');


Route::get('/projects/create', 'ProjectsController@create');
Route::post('/projects', 'ProjectsController@store');
Route::delete('/projects/{project}', 'ProjectsController@destroy');