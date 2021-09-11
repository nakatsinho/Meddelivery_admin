<?php

use App\Models\Category;
use App\Models\Subcategory as subcat;
use Illuminate\Support\Facades\Input;

Route::get('/', 'HomeController@index')->name('home'); 

// Controle do estado da farmacia
Route::resource('/farmacia', 'StatusController');
 
// Parte administrativa que controla as farmacias.........
Route::get('/farmacias', 'FarmaciaController@index')->name('farmacias'); 
Route::get('/farmacias/detalhes/{id}', 'FarmaciaController@detalhes')->name('farmacias.detalhes'); 
Route::get('/farmacias/pedidos', 'FarmaciaController@pedidos')->name('farmacias/pedidos'); 
Route::get('/farmacia/pedidos/detalhes', 'FarmaciaController@detalhes_pedidos')->name('farmacia.pedidos.detalhes'); 
Route::get('/farmacia/remover/{id}', 'FarmaciaController@eliminar_farmacia')->name('farmacia.remover'); 

// Parte administrativa que controla os produtos/medicamentos.........
Route::get('/produtos', 'ProdutoController@index')->name('produtos'); 
Route::get('/produtos/destroy', 'ProdutoController@destroy')->name('produtos.delete'); 
Route::get('/produtos/vendidos', 'ProdutoController@vendidos')->name('produtos/vendidos'); 
Route::get('/produtos/detalhes/{id}', 'ProdutoController@detalhes')->name('detalhes'); 
Route::get('/produtos/editar/{id}', 'ProdutoController@editar')->name('editar'); 


// Parte administrativa das farmacias que controla os produtos/medicamentos.........
Route::get('/produtos/pedidos', 'EncomendasController@index')->name('produtos.pedidos');

Route::resource('farmacia_produtos', 'ProdutoFarmaciaController', ['except' => 'destroy']);
Route::get('farmacia_produtos.destroy', 'ProdutoFarmaciaController@destroy')->name('farmacia_produtos/destroy');
Route::resource('produtos_vendidos', 'ProdVendidos');

// General admin controll individual farm / possibilita adicionar / remover medicamentos em farmacias
Route::resource('admin_farm', 'MasterAdminFarmController');
Route::resource('vendas', 'VendasProdutoController');
Route::resource('empresa', 'EmpresaController');

// varios 
Route::get('fixing', 'Staff@fixing')->name('fixing');

Route::resource('produtos_geral', 'ProdutoGeralController' , ['except' => 'destroy']);
Route::get('produtos_geral.destroy', 'ProdutoGeralController@destroy')->name('produtos_geral.destroy');
Route::resource('pedidos', 'PedidosController' , ['except' => 'destroy']);
 
// ************ Parametrizacao *****************

// Categorias e subcategorias
Route::resource('categoria', 'CategoriaController');
Route::resource('subcategoria', 'SubcategoriaController');

// Marcas & Menus
Route::resource('marca', 'MarcaController');
Route::get('menu.destroy', 'MenuController@destroy', ['except' => 'destroy']);
Route::resource('menu', 'MenuController');


// ************ Parte administrativa que controla os usuarios e feedback *****************
Route::resource('feedback', 'FeedbackController');
Route::resource('user_administrador', 'AdminUserController');
Route::resource('user_farmacia', 'FarmUserController');
Route::resource('user_comprador', 'CompradorUserController');

Auth::routes();

Route::get('index', function() {
    return "ola";
});


// Dynamic dependency
Route::get('/ajax-subcat2', function(){
    
    $cat_id = Input::post('id');
    $categories = Category::where('menu_id', $cat_id)->get();
    return Response::json($categories);
    
})->name('ajax-subcat2');

Route::get('/ajax-subcat', function(){
    
    $cat_id = Input::get('id');
    $subcategories = subcat::where('category_id', $cat_id)->get();
    return Response::json($subcategories);
    
})->name('ajax-subcat');


Route::get('pdf', 'PDFController@pdf')->name('pdf');

