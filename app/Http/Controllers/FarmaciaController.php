<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Farmacia;
use App\Models\Produto;
use App\User;

class FarmaciaController extends Controller
{
    public function index()
    {  
        $farm = Farmacia::all();
        $total = Farmacia::where('status', '1')->count();
        // $farm = Farmacia::orderBy('nome')->paginate(10);
        return view('pages.Admin.farmacias.index', compact('farm', 'total'));
    }

    public function detalhes($id)
    { 
        $prod = Produto::where('farmacia_id', Auth::user()->farmacia_id)->get();
        $farm = Farmacia::find($id);  
        return view('pages.Admin.farmacias.detalhes', compact('farm', 'prod'));
    }

    public function pedidos()
    {
        $farm = Farmacia::where('status', '0')->get();  
        return view('pages.Admin.pedidos.index', compact('farm'));
    }

    public function detalhes_pedidos()
    {
        $farm = Farmacia::find(request()->id); 
        return view('pages.Admin.pedidos.detalhes', compact('farm'));
    }


    public function rejeitar_pedido()
    {
        $farm = Farmacia::find(request()->id); 
        return view('pages.Admin.pedidos.detalhes', compact('farm'));
    }

    public function eliminar_farmacia($id)
    {  
        Farmacia::find($id)->delete(); 
        //  $user = User::where('farmacia_id', $id)->get();
        // return $user->all();
        return redirect()->route('farmacias')->with('info', 'Farmacia removida do sistema!');
    }
 
     
    
    
}
