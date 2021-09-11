<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\PedidoProduct as Pedidos;

class EncomendasController extends Controller
{
    public function index()
    {  

        $pedidos = Pedidos::where('farmacia_id', Auth::user()->farmacia_id)->get(); 
        
        return view('pages.Farm.pedidos.index', compact('pedidos'));
      
    } 

}
