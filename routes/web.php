<?php

use App\Http\Controllers\TodosController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::get('about', 'TodosController@index');
Route::get('show/{todo}', 'TodosController@show');
Route::get('show/{todo}/edit', 'TodosController@update');
Route::get('delete/{todo}', 'TodosController@deleteName');
Route::get('create', 'TodosController@create');
Route::post('create-todo', 'TodosController@store'); 
Route::post('update-todos/{todo_id}', 'TodosController@updateField');
// Route::get('show/{todo}/{description}', 'TodosController@updateDescription');