<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product as Produto;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Marca;
use App\Models\Menu;


use Illuminate\Support\Facades\Auth;

class ProdutoFarmaciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prod = Produto::where('farmacia_id', Auth::user()->farmacia_id)->get();
        return view('pages.Farm.product.index', compact('prod'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menu = Menu::all();
        $marca = Marca::all();
        $category = Category::all();
        $subcategory = Subcategory::all();
        return view('pages.Farm.product.Form.create', compact('category', 'subcategory', 'marca','menu'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
        $produto = Produto::create($this->validateRequest());
        $this->storeImage($produto);

        if (request()->has('image')) {
            $imageName = request()->image->getClientOriginalName();
            // request()->image->move(public_path('images'), $imageName);
            // request()->image->move('/home/meddeliv/public_html/admin/images', $imageName);
            request()->image->move('./images', $imageName);
        }
          
        return redirect()->route('farmacia_produtos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $prod = Produto::find($id);
        return view('pages.Farm.product.detalhes', compact('prod'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    { 
        $marca = Marca::all();
        $category = Category::all();
        $subcategory = Subcategory::all();
        $prod = Produto::find($id);
        return view('pages.Farm.product.Form.edit', compact('category', 'subcategory', 'prod', 'marca'));
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
        $produto = Produto::find($id)->update($this->validateRequest());
        
        if (request()->has('image')) {

            Produto::find($id)->update([
                'image' => request()->image->getClientOriginalName()
            ]);

            $imageName = request()->image->getClientOriginalName(); 
            // request()->image->move(public_path('imagens'), $imageName);
            // request()->image->move('/home/meddeliv/public_html/admin/images', $imageName);
            
            request()->image->move('./images', $imageName);
        }
        
        // $this->storeImage($produto);
        return redirect()->back()->with('info', 'Dados do Produto atualizados com sucesso!'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Produto::find($request->id)->delete(); 
        return back()->with('info', 'Produto removido com sucesso!');
    }
    
    private function validateRequest()
    {
        $validated =  request()->validate([ 
            'codigo_pro' => 'required',
            'farmacia_id' => '',
            'marca_id' => '',
            'nome_pro' => 'required',
            'preco_pro' => 'required | int',
            'category_id' => 'required | int',
            'subcategory_id' => 'int',
            'spl_price' => 'required | int', 
            'stock' => 'required | int',
            'info_pro' => 'required | min:8 | max:300',
        ]);
        if (request()->hasFile('image')) { 
            request()->validate([
                'image' => 'required | file | image | max:5000'
            ]);
        }
        return $validated;
    }

    private function storeImage($produto)
    { 
        if (request()->has('image')) {
            $produto->update([
                'image' => request()->image->getClientOriginalName()
            ]);
        }
    }
}