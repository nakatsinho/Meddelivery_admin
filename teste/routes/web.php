<?php

use App\Categoria as cat;
use App\Menu as men;
use App\Subcategoria as subc;
use Illuminate\Support\Facades\Input;


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
    $cat = cat::all();
    $men = men::all();
    $subc = subc::all();
    return view('welcome', compact('cat', 'men', 'subc'));
});

Route::get('/ajaxc', function(){
    
   return $cat_id = $_GET['id'];
    $categories = Category::where('menu_id', $cat_id)->get();
    return Response::json($categories);
    
})->name('ajaxc');

Route::post('/ajaxs', function(){
    
    // $cat_id = Input::get('id');
    // $subcategories = subcat::where('category_id', $cat_id)->get();
    // return Response::json($subcategories);
    
})->name('ajaxs');
