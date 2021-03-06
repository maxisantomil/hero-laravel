<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\EnemyController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\BSController;
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

Route::group(['prefix'=>'admin'],function(){
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');

    Route::resource('heroes', HeroController::class);

/*  FORMA DE HACER RUTEO MAS LARGO
    Route::group(['prefix'=>'heroes'],function(){
        Route::get('/', [HeroController::class, 'index'])->name('admin.heroes');
        Route::get('create', [HeroController::class, 'create'])->name('admin.heroes.create');
        Route::post('store', [HeroController::class, 'store'])->name('admin.heroes.store');
        Route::get('edit/{id}', [HeroController::class, 'edit'])->name('admin.heroes.edit');
        Route::post('update/{id}', [HeroController::class, 'update'])->name('admin.heroes.update');
        Route::delete('destroy/{id}',[HeroController::class, 'destroy'])->name('admin.heroes.destroy');
            
    });
  */  

    Route::resource('item', ItemController::class);

    Route::resource('enemy', EnemyController::class);

    Route::resource('about', AboutController::class);

    Route::get('bs',[BSController::class, 'index'])->name('admin.bs');

});

//Route::get('/admin/{name}',[AdminController::class, 'index']); //A partir de Laravel 8 se escribe asi
//Route::get ('/admin','AdminController@index'); // posterior a laravel 8


/*Route::get('/home/{name}', function($name){
    return view ('home', ['name' => $name]);
})->where('name', '[A-Za-z]+');;  
/*Regular Expression Constraints(ruta valida solamente con esos caracteres )*/
