<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\post;
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

Route::get('/post/create',function(){
    DB::table('post')->insert([
        'id'=>190103218,
        'title'=>'Lab',
        'body'=>'Olzh'
           ]);
}
           );

Route::get('/post', [BlogController::class,'index']);
Route::get('/blog/create',function(){
    return view('blog.create');
});
Route::post('/blog/create',[BlogController::class,'store'])->name('add-post');