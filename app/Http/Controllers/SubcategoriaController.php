<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subcategory as Subcategoria;
use App\Models\Category as Categoria;

class SubcategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcategoria = Subcategoria::orderBy('id')->paginate(10);
        return view('pages.Admin.parametrizacao.subcategoria.index', compact('subcategoria'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoria = Categoria::all();
        return view('pages.Admin.parametrizacao.subcategoria.create', compact('categoria'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nome' => 'required',
            'info_slug' => '',
            'info_sub' => '',
            'category_id' => 'required', 
        ]);
        $store = Subcategoria::create($data);
        $this->storeImage($store);

        if (request()->has('image')) {
            $imageName = request()->image->getClientOriginalName();
            request()->image->move(public_path('imagens'), $imageName);
        }
       
        
        return back()->with('success', 'Subcategoria inserida com sucesso!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        Subcategoria::find($id)->delete();
        return back()->with('warning', 'Sub-Categoria removida!!!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categoria = Categoria::all();
        $subcat = Subcategoria::find($id);
        return view('pages.Admin.parametrizacao.subcategoria.edit', compact('subcat', 'categoria'));
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
        $data = $request->validate([
            'nome' => 'required',
            'info_slug' => '',
            'info_sub' => '',
            'category_id' => 'required', 
        ]);

        $store = Subcategoria::find($id)->update($data);
        
        if ($request->has('image')) {
            
            Subcategoria::find($id)->update([
                'image' => request()->image->getClientOriginalName()
            ]);

            $imageName = request()->image->getClientOriginalName();
            request()->image->move(public_path('images'), $imageName);
        }
        
        return redirect()->route('subcategoria.index')->with('info', 'SubCategoria atualizada com sucesso!!!');
   
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

    private function storeImage($store)
    { 
        if (request()->has('image')) {
            $store->update([
                'image' => request()->image->getClientOriginalName()
            ]);
        }
    }
}
