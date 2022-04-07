<?php

use App\Http\Controllers\homme;
use App\Http\Controllers\femme;
use App\Http\Controllers\enfant;
use Illuminate\Support\Facades\Route;
use App\Http\Middelware\AdminMiddleware;
use Illuminate\Support\Facades\Auth;



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
    return view('firstPage');
})->name("first");

Auth::routes();

Route::group(['middleware' => ['admin']], function () {
    Route::get('/form_add', [homme::class, 'formAdd'])->name("form.add");
    Route::post('/store_add', [homme::class, 'store'])->name("card.store");
    Route::delete('/delete/espadrille/{id}', [homme::class, 'delete'])->name("espadrille.delete");
    Route::get('/edit/espadrille/{id}', [homme::class, 'edit'])->name("espadrille.edit");
    Route::put('/update/espadrille/{id}', [homme::class, 'update'])->name("espadrille.update");
    Route::delete('/delete/chaussure/{id}', [homme::class, 'delete2'])->name("chaussure.delete");
    Route::get('/edit/chaussure/{id}', [homme::class, 'edit2'])->name("chaussure.edit");
    Route::put('/update/chaussure/{id}', [homme::class, 'update2'])->name("chaussure.update");
    Route::delete('/delete/escarpin/{id}', [femme::class, 'delete'])->name("escarpin.delete");
    Route::get('/edit/escarpin/{id}', [femme::class, 'edit'])->name("escarpin.edit");
    Route::put('/update/escarpin/{id}', [femme::class, 'update'])->name("escarpin.update");
    Route::delete('/delete/sandale/{id}', [femme::class, 'delete2'])->name("sandale.delete");
    Route::get('/edit/sandale/{id}', [femme::class, 'edit2'])->name("sandale.edit");
    Route::put('/update/sandale/{id}', [femme::class, 'update2'])->name("sandale.update");
    Route::delete('/delete/bottine/{id}', [enfant::class, 'delete'])->name("bottine.delete");
    Route::get('/edit/bottine/{id}', [enfant::class, 'edit'])->name("bottine.edit");
    Route::put('/update/bottine/{id}', [enfant::class, 'update'])->name("bottine.update");
    Route::delete('/delete/espadrille_enfant/{id}', [enfant::class, 'delete2'])->name("espadrilleEnfant.delete");
    Route::get('/edit/espadrille_enfant/{id}', [enfant::class, 'edit2'])->name("espadrilleEnfant.edit");
    Route::put('/update/espadrille_enfant/{id}', [enfant::class, 'update2'])->name("espadrilleEnfant.update");
});

Route::group(['middleware' => ['user']], function () {
    //panier
    Route::get('/Panier/{titre}/{prix}/{image}/{id_user}', [homme::class, 'ajouterPanier'])->name('addPanier');
    Route::get('/Panier/{id_user}', [homme::class, 'getPanier'])->name("Panier");
    Route::get('/Supprimer/{id}', [homme::class, 'remove'])->name("Supprimer");
    Route::get('/Payer/{id_user}', [homme::class, 'payer'])->name("Payer");
});


// espadrille homme
Route::get('/espadrille_Homme', [homme::class, 'index'])->name('show');


//chaussures homme
Route::get('/chaussures_Homme', [homme::class, 'index2'])->name('show1');




//escarpins femme
Route::get('/escarpin', [femme::class, 'index'])->name('show2');



//sandale femme
Route::get('/sandales', [femme::class, 'index2'])->name('show3');

//bottine enfant
Route::get('/bottines', [enfant::class, 'index'])->name('show4');


//espadrille enfant
Route::get('/espadrille_enfant', [enfant::class, 'index2'])->name('show5');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
