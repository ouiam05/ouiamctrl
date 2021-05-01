<?php

use App\Http\Controllers\Facture;
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
//routage

Route::get('/','App\Http\Controllers\Facture@getAll');
Route::post('rechercherF','App\Http\Controllers\Facture@rechercher');

Route::get('supprimerF/{numF}','App\Http\Controllers\Facture@supprimerF');
Route::get('fact',[Facture::class,"editFacture"]);
Route::get('fact',[Facture::class,"Psave"]);
Route::post('saveF','App\Http\Controllers\Facture@save');

Route::view('dfact','deatailFacture');

/*
Route::get('fact/{numF}',function($numF){
    return view('editFacture',["numF"=>$numF]);
}
);*/


