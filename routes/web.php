<?php

use Illuminate\Support\Facades\Route;

Route::any('products/search', 'ProductController@search')->name('products.search');
Route::resource('products', 'ProductController');

/* Route::put('products/{id}', 'ProductController@update')->name('products.update');
Route::get('products/{id}/edit', 'ProductController@edit')->name('products.edit');
Route::get('products/create', 'ProductController@create')->name('products.create');
Route::get('products/{id}', 'ProductController@show')->name('products.show');
Route::get('products', 'ProductController@index')->name('products.index');
Route::post('products', 'ProductController@store')->name('products.store');
Route::delete('products/{id}', 'ProductController@destroy')->name('products.destroy'); */


Route::get('/login', function () {
    return 'LOGIN';
})->name('login');


Route::group([
    'middleware' => [],
    'prefix' => 'admin',
    'namespace' => 'Admin',
    'name' => 'admin.'
], function() {
    Route::get('/dashboard', 'TesteController@teste')->name('dashboard');

    Route::get('/financeiro', 'TesteController@teste')->name('financeiro');

    Route::get('/produtos', 'TesteController@teste')->name('produtos');

    Route::get('/', function () {
        return redirect()->route('admin.dashboard');
    })->name('home');

});


Route::get('redirect3', function () {
    return redirect()->route('url.name');
});

Route::get('/name-url', function () {
    return 'Hey hey hey';
})->name('url.name');

Route::view('/view', 'welcome');

Route::redirect('/redirect1', '/redirect2');

/* Route::get('redirect1', function(){
return redirect ('/redirect2');
}); */

Route::get('redirect2', function () {
    return 'Redirect 02';
});

Route::get('/produtos/{idProduct?}', function ($idProduct = "Todos os produtos") {
    return "Produto(s) {$idProduct}";
});

Route::get('/categorias/{flag}', function ($flag) {
    return "Produtos da categoria: {$flag}";

});

Route::Any('/any', function () {
    return 'Any';
});

Route::post('/register', function () {
    return '';
});

Route::get('/contato', function () {
    return view('site.contato');
});

Route::get('/', function () {
    return view('welcome');
});
