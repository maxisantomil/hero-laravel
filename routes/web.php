<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\EnemyController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\ItemController;
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

Route::get('/admin',[AdminController::class, 'index'])->name ('admin');
Route::get('/admin/heroes',[HeroController::class, 'index'])->name ('admin.heroes');
Route::get('/admin/items',[ItemController::class, 'index'])->name ('admin.items');
Route::get('/admin/enemies',[EnemyController::class, 'index'])->name ('admin.enemies');
Route::get('/admin/about',[AboutController::class, 'index'])->name ('admin.about');

//Route::get('/admin/{name}',[AdminController::class, 'index']); //A partir de Laravel 8 se escribe asi
//Route::get ('/admin','AdminController@index'); // posterior a laravel 8


/*Route::get('/home/{name}', function($name){
    return view ('home', ['name' => $name]);
})->where('name', '[A-Za-z]+');;  
/*Regular Expression Constraints(ruta valida solamente con esos caracteres )*/