<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category  as Categoria;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoria = Categoria::orderBy('id')->paginate(10);
        return view('pages.Admin.parametrizacao.categoria.index', compact('categoria'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.Admin.parametrizacao.categoria.create');
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
            'info_cat' => '',
            'image' => '',
            'qty' => '',
            'menu_id' => '', 
        ]);
        $store = Categoria::create($data);
        
        if (request()->has('image')) {

            $this->storeImage($store);
            $imageName = request()->image->getClientOriginalName();
            request()->image->move(public_path('images'), $imageName);
            // request()->image->move('/home/meddeliv/public_html/admin/images', $imageName);
        }
        
        return back()->with('success', 'Categoria adicionada com sucesso!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        Categoria::find($id)->delete();
        return back()->with('warning', 'Categoria removida!!!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cat = Categoria::find($id);
        return view('pages.Admin.parametrizacao.categoria.edit', compact('cat'));
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
            'info_cat' => '',
            'image' => '',
            'qty' => '',
            'menu_id' => '', 
        ]);

        $store = Categoria::find($id)->update($data);
        
        if ($request->has('image')) {
            
            Categoria::find($id)->update([
                'image' => request()->image->getClientOriginalName()
            ]);

            $imageName = request()->image->getClientOriginalName();
            request()->image->move('/home/meddeliv/public_html/admin/images', $imageName);
        }
        
        return redirect()->route('categoria.index')->with('info', 'Categoria atualizada com sucesso!!!');
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
