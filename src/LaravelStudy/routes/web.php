<?php
use App\Http\Controllers\HelloController;

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
// Route::get('hello/{msg?}',function($msg='anonymous'){
//     return '<h1>Hello '.$msg.'</h1>';
// });
Route::get('hello/','HelloController@index');
Route::get('hello/other','HelloController@other');