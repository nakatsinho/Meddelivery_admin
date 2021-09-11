<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category as Categoria;
use App\Models\Subcategory as Subcategoria;
use App\Models\Farmacia;
use App\Models\Marca;
use App\Models\Menu;
use App\Models\Product as Produto;

class ProdutoGeralController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $marca = Marca::all();
        $cat = Categoria::all();
        $subcat = Subcategoria::all();
        $menu = Menu::all();
        $farm = Farmacia::where('status', '1')->get();
        return view('pages.Admin.product.create.create', compact('cat', 'subcat', 'farm', 'marca', 'menu'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //   return $request->all();
        $produto = Produto::create($this->validateRequest());
        $this->storeImage($produto);
       
        
        if (request()->has('image')) {
            $imageName = request()->image->getClientOriginalName();
            // request()->image->move( public_path('imagens'), $imageName);
            request()->image->move('./images', $imageName);
            
             // Medelivery domain
            // request()->image_empresa->move('/home/meddeliv/public_html/admin/images', $imageName);
        }
       
        return redirect()->route('produtos_geral.create')->with('success', 'Produto adicionado a lista!');
 
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
        $category = Categoria::all();
        $subcategory = Subcategoria::all();
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
        // return $request->image_empresa;
        $produto = Produto::find($id)->update($this->validateRequest());
    
        if (request()->has('image')) {

            Produto::find($id)->update([
                'image' => request()->image->getClientOriginalName()
            ]);
 
            $imageName = request()->image->getClientOriginalName();
            // request()->image->move( public_path('imagens'), $imageName);
            request()->image->move('./images', $imageName);
            
             // Medelivery domain
            // request()->image_empresa->move('/home/meddeliv/public_html/admin/images', $imageName);
        }
        return redirect()->route('produtos_geral/'.$id.'')->with('info', 'Dados atualizados com sucesso!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    { 
        Produto::find(request()->id)->delete();
        return redirect()->route('home')->with('info', 'Medicamento removido!!!');
    }

    private function validateRequest()
    {
        $validated =  request()->validate([ 
            'codigo_pro' => 'required',
            'farmacia_id' => 'required',
            'nome_pro' => 'required',
            'marca_id' => '',
            'preco_pro' => 'required | int',
            'category_id' => 'required | int',
            'subcategory_id' => '',
            'spl_price' => 'required', 
            'stock' => '',
            'info_pro' => 'required | min:8 | max:300',
        ]);
        if (request()->hasFile('image')) { 
            request()->validate([
                'image' => 'file | image | max:5000'
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