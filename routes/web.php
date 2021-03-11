<?php

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
    return view('home');
})->name('homepage');

Route::get('/products', function () {
    $pasta = config('pasta');

    //Filtro con collect
    $collections = collect($pasta);
    $pasta_lunga = $collections->where('tipo', 'lunga');
    $pasta_corta = $collections->where('tipo', 'corta');
    $pasta_cortissima = $collections->where('tipo', 'cortissima');

    $data = [
        'formati' => [
            'lunga' => $pasta_lunga,
            'corta' => $pasta_corta,
            'cortissima' => $pasta_cortissima
        ] 
    ];

    return view('products', $data);
})->name('pagina-prodotti');

Route::get('/info/{id}', function ($id) {

    $pasta = config('pasta');
    $prodotto = $pasta[$id];

    $data = ['tipoProdotto' => $prodotto];
    return view('info_pasta', $data);
})->name('informazioni-pasta');

Route::get('/news', function () {
    return view('news');
})->name('sezione-notizie');
