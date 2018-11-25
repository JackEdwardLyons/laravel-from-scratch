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

/*
7 different behavious

    GET /projects (index)
    GET projects/:id (show)
    POST /projects (store)
    PATCH /projects/:d (edit)
    DELETE /projects/:id (destroy)
*/
Route::get('/', 'ProjectsController@index');

Route::resource('projects', 'ProjectsController');
// Following a naming convention, we can leverage the
// Route::resource() function.



// Route::get('/projects', 'ProjectsController@index');
// Route::get('/projects/create', 'ProjectsController@create');
// Route::get('/projects/{project}, ProjectsController@show');
// Route::post('/projects', 'ProjectsController@store'); // storing a new resource
// Route::get('/projects/{project}/edit', 'ProjectsController@edit');
// Route::patch('/projects/{project}', 'ProjectsController@update');
// Route::delete('/projects/{project}', 'ProjectsController@destory');

