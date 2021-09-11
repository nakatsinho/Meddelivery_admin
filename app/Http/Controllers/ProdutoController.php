<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product as Produto;
use App\Models\ProdVendidos as Sold;

class ProdutoController extends Controller
{
    public function index()
    { 
        $prod = Produto::paginate(16);
        // $prod = Produto::all()->paginate(15); 
        return view('pages.Admin.product.index', compact('prod'));
    }

    public function destroy()
    { 
        Produto::find(request()->id)->delete();
        return back()->with('Produto removido!!');
    }

    public function detalhes()
    {   
        $prod = Produto::find(request()->id); 
        
        if( empty($prod->farmacia_id) && $prod->farmacia_id == '')
        {
            return view('pages.Admin.product.detalhes2', compact('prod'));
        }
        else{
            return view('pages.Admin.product.detalhes', compact('prod'));
        }
        
        
    }

    public function vendidos()
    {   
        $sold = Sold::all();
        return view('pages.Admin.product.vendidos.vendidos', compact('sold'));
    }

    public function editar()
    {   
        return $request->id;
        $sold = Sold::all();
        return view('pages.Admin.product.vendidos.vendidos', compact('sold'));
    }
}
