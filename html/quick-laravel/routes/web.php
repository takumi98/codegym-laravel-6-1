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

// Route::get('/', function () {
//     return view('welcome');
// });

use App\Http\Middleware\LogMiddleware;

// Route::get('ctrl/form', 'StateController@recCookie');

// Route::get('/', 'StateController@readCookie');
Route::get('/', 'RecordController@where');

Route::get('hello', 'HelloController@index');

Route::get('hello/view', 'HelloController@view');

Route::get('hello/list', 'HelloController@list')
    ->name('list');

Route::get('view/escape', 'ViewController@escape');

Route::get('view/if', 'ViewController@if');

Route::get('view/unless', 'ViewController@unless');

Route::get('view/isset', 'ViewController@isset');

Route::get('view/switch', 'ViewController@switch');

Route::get('view/while', 'ViewController@while');

Route::get('view/for', 'ViewController@for');

Route::get('view/list', 'ViewController@list');

Route::get('view/foreach_assoc', 'ViewController@foreach_assoc');

Route::get('view/foreach_loop', 'ViewController@foreach_loop');

Route::get('view/master', 'ViewController@master');

Route::get('view/comp', 'ViewController@comp');

Route::get('ctrl/form', 'CtrlController@form');

Route::post('ctrl/result', 'CtrlController@result');

Route::get('ctrl/upload', 'CtrlController@upload');

Route::post('ctrl/uploadfile', 'CtrlController@uploadfile');

Route::get('ctrl/middle', 'CtrlController@middle');

Route::group(['middleware' => ['debug']], function () {
    Route::get('ctrl/middle', 'CtrlController@middle');
});

Route::get('state/readcookie', 'StateController@readCookie');

Route::get('record/hasmany', 'RecordController@hasmany');

// Route::post('save', 'SaveController@store');
Route::post('save/store', 'SaveController@store');

Route::get('save/create', 'SaveController@create');

Route::get('save/{id}/edit', 'SaveController@edit');

Route::patch('save/{id}', 'SaveController@update');

Route::get('save/{id}', 'SaveController@show');
Route::delete('save/{id}', 'SaveController@destroy');
