<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Posts;
use App\Http\Controllers\BlogController;
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

Route::get('/post/add',function(){
    DB::table('post')->insert([
        'id'=>190103218,
        'body'=>'Olzh'
           ]);
}
           );

Route::get('/post/{id}','BlogController@index');