<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Farmacia;
use App\Models\Product as Produto;
use App\Models\ProdVendidos as Sold; 
use DB; 
use PDF;

class VendasProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
         
         $prod = Sold::find($request->id);
        $pdf = PDF::loadView('pages.Admin.product.vendidos.pdf', ['prod' => $prod])->setPaper('a4', 'portrait');
        $file_name = "Registo_venda";
        return $pdf->stream($file_name. 'pdf');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $farmacias = Farmacia::where('status', '1')->get();
        $produtos = Produto::where([['status', '1'], ['stock', '>', '0']])->get();
        
        return view('pages.Admin.product.vendidos.create', compact('farmacias', 'produtos'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        $validated =  request()->validate([ 
            'pro_id' => 'required',
            'farmacia_id' => 'required',
            'quantidade' => 'required | int',
            'preco_prod' => 'required | int', 
        ]); 

        $produto_id = $request->pro_id;
        $produto = Produto::find($produto_id);

        $qtd = ($produto->stock - $request->quantidade);
        
        Sold::create($validated);
        DB::update('update produtos set stock = ? where id = ?', [$qtd ,$produto_id]);
        
        return redirect()->route('produtos/vendidos');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $prod = Sold::find($id);
        return view('pages.Admin.product.vendidos.detalhes', compact('prod'));
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
        //
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

    private function validateRequest()
    {
        $validated =  request()->validate([ 
            'pro_id' => 'required',
            'farmacia_id' => 'required',
            'quantidade' => 'required | int',
            'preco_prod' => 'required | int', 
        ]); 
   
        return $validated;
    }

   
}
