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




Route::get('/login','AuthController@login')->name('login');
Route::post('/postlogin','AuthController@postlogin');
Route::get('/logout', 'AuthController@logout');



Route::group(['middleware' => 'auth'],function(){
    
    Route::get('/catatproduk','CatatProdukController@index');
    Route::post('/catatproduk/create','CatatProdukController@create');
    Route::get('/catatproduk/{id}/edit','CatatProdukController@edit');
    Route::post('/catatproduk/{id}/update','CatatProdukController@update');
    Route::get('/catatproduk/{id}/delete','CatatProdukController@delete');

    Route::get('/adminn','AdminController@index');
    Route::post('/adminn/create','AdminController@create');
    Route::get('/adminn/{id}/edit','AdminController@edit');
    Route::post('/adminn/{id}/update','AdminController@update');
    Route::get('/adminn/{id}/delete','AdminController@delete');
    
    Route::get('/dashboard','DashboardController@index');

    //Produk
    Route::get('/departemen','DepartemenController@index');
    Route::post('/departemen/create','DepartemenController@create');
    Route::get('/departemen/{id}/edit','DepartemenController@edit');
    Route::post('/departemen/{id}/update','DepartemenController@update');
    Route::get('/departemen/{id}/delete','DepartemenController@delete');

    Route::get('/kategori','KategoriController@index');
    Route::post('/kategori/create','KategoriController@create');
    Route::get('/kategori/{id}/edit','KategoriController@edit');
    Route::post('/kategori/{id}/update','KategoriController@update');
    Route::get('/kategori/{id}/delete','KategoriController@delete');

    Route::get('/produkvar','ProdukVarianController@index');
    Route::post('/produkvar/create','ProdukVarianController@create');
    Route::get('/produkvar/{id}/edit','ProdukVarianController@edit');
    Route::post('/produkvar/{id}/update','ProdukVarianController@update');
    Route::get('/produkvar/{id}/delete','ProdukVarianController@delete');

    Route::get('/deposit','DepositController@index');
    Route::post('/deposit/create','DepositController@create');
    Route::get('/deposit/{id}/edit','DepositController@edit');
    Route::post('/deposit/{id}/update','DepositController@update');
    Route::get('/deposit/{id}/delete','DepositController@delete');

    Route::get('/ojol','OjolController@index');
    Route::post('/ojol/create','OjolController@create');
    Route::get('/ojol/{id}/edit','OjolController@edit');
    Route::post('/ojol/{id}/update','OjolController@update');
    Route::get('/ojol/{id}/delete','OjolController@delete');


    //Customer
    Route::get('/pelanggan','PelangganController@index');
    Route::post('/pelanggan/create', 'PelangganController@create');
    Route::get('/pelanggan/{id}/edit','PelangganController@edit');
    Route::post('/pelanggan/{id}/update','PelangganController@update');
    Route::get('/pelanggan/{id}/delete','PelangganController@delete');

    Route::get('/group','GroupController@index');
    Route::post('/group/create', 'GroupController@create');
    Route::get('/group/{id}/edit','GroupController@edit');
    Route::post('/group/{id}/update','GroupController@update');
    Route::get('/group/{id}/delete','GroupController@delete');

    Route::get('/harga','HargaController@index');
    Route::post('/harga/create', 'HargaController@create');
    Route::get('/harga/{id}/edit','HargaController@edit');
    Route::post('/harga/{id}/update','HargaController@update');
    Route::get('/harga/{id}/delete','HargaController@delete');
    Route::get('/harga/search','HargaController@search');
    Route::post('/piliharga/create', 'HargaController@createpel');

    //invoice
    Route::group(['prefix' => 'invoice'], function() {
        Route::get('/', 'InvoiceController@index')->name('invoice.index');
        Route::get('/new', 'InvoiceController@create')->name('invoice.create');
        Route::post('/', 'InvoiceController@save')->name('invoice.store');
        Route::get('/{id}', 'InvoiceController@edit')->name('invoice.edit');
        Route::put('/{id}', 'InvoiceController@update')->name('invoice.update');
        Route::delete('/{id}', 'InvoiceController@deleteProduct')->name('invoice.delete_product');
        Route::delete('/{id}/delete', 'InvoiceController@destroy')->name('invoice.destroy');
        Route::get('/{id}/print', 'InvoiceController@generateInvoice')->name('invoice.print');
    });

    Route::group(['prefix' => 'pesanan'], function() {
        Route::get('/', 'PesananController@index')->name('pesanan.index');
        Route::get('/new', 'PesananController@create')->name('pesanan.create');
        Route::get('/{id}', 'PesananController@edit')->name('pesanan.edit');
        Route::put('/{id}', 'PesananController@update')->name('pesanan.update');
        Route::delete('/{id}', 'PesananController@destroy');
    });

    Route::group(['prefix' => 'pengiriman'], function() {
        Route::get('/', 'PengirimanController@index')->name('pengiriman.index');
        Route::get('/new', 'PengirimanController@create')->name('pengiriman.create');
        Route::post('/', 'InvoiceController@save')->name('pengiriman.store');
        Route::get('/{id}', 'PengirimanController@edit')->name('pengiriman.edit');
        Route::put('/{id}', 'PengirimanController@update')->name('pengiriman.update');
        Route::delete('/{id}', 'PengirimanController@destroy');
    });

});

// Route::group(['middleware' => ['auth','checkRole:operator,admin']],function(){
// });
    

Route::get('aturtoko', function(){
    $aturtoko =['Adel','prima'];
    return view('aturtoko.indx', compact('aturtoko'));
});
