<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Farmacia;
use App\Models\Product as Produto;

class MasterAdminFarmController extends Controller
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
        $category = Category::all();
        $subcategory = Subcategory::all();
        $farmacias = Farmacia::where('status', '1')->get();
        return view('pages.Admin.farmacias.form.create', compact('category', 'subcategory', 'farmacias'));
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
        $imageName = request()->image->getClientOriginalName();
        request()->image->move('/home/meddeliv/public_html/admin/images', $imageName);

        return redirect()->route('produtos');
  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
            'codigo_pro' => 'required',
            'farmacia_id' => 'required',
            'marca_id' => '',
            'nome_pro' => 'required',
            'preco_pro' => 'required | int',
            'category_id' => 'required | int',
            'subcategory_id' => 'required | int',
            'spl_price' => 'required | int',
            'tax' => 'required | int',
            'stock' => 'required | int',
            'info_pro' => 'required | min:8',
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
