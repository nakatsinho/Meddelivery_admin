<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PedidoProduct as pedProd;
use App\Models\Pedido as pedidos;
use App\Models\Endereco as address;

class PedidosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pedidos = pedidos::all();
        $total = pedidos::all()->count();
        return view('pages.Admin.pedidos.faturas.index', compact('pedidos', 'total'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pedidos = pedidos::find($id);
        $prod = pedProd::where('pedido_id',$id)->get();
        $user = $pedidos->user_id; 
        $endereco = address::where('user_id', $user)->get();
        
        return view('pages.Admin.pedidos.faturas.detalhes', compact('pedidos', 'prod', 'endereco'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pedidos = pedidos::find($id)->update($request->all());
        return redirect()->route('pedidos.index')->with('info', 'Pedido aprovado!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
