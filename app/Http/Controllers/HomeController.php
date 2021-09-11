<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\PedidoProduct as Pedidos;
use App\Models\Farmacia;
use App\Models\Produto;
use App\Models\Pedido;
use App\User;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::user()->user_group_id == 1) {
            
            $membros = User::where('user_group_id', '3')->count(); 
            $pedidos = Pedido::where('status','0')->count(); 
            $vendas = Pedido::where('status','1')->count(); 
            // $farmT = Farmacia::all()->count();
            // $prodT = Produto::all()->count();
            // $userT = User::all()->count(); 
            // $prod = Produto::limit(16)->get();
            // $farm = Farmacia::limit(12)->get(); 
            return view('pages.Admin.index', compact('pedidos', 'vendas',  'membros'));
            
        }
            // Farm admin
        elseif(Auth::user()->user_group_id == 2)
        {
            $farmT = Farmacia::all()->count();
            $prodT = Produto::where('farmacia_id', Auth::user()->farmacia_id)->count();
            
            $request = Pedidos::where('farmacia_id', Auth::user()->farmacia_id)->count();

            $prod = Produto::where('farmacia_id', Auth::user()->farmacia_id)->get();
            $farm = Farmacia::all();
            
            return view('pages.Farm.index', compact('farmT', 'prod', 'farm', 'prodT', 'request'));
                
        }
    }
}
