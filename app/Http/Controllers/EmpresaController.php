<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresa as Company;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Company::all()->max('id');
        $data = Company::find($data); 
        return view('pages.Admin/empresa/index', compact('data'));
        
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
        $data = $request->validate([
            'nome' => 'required',
            'endereco' => 'required',
            'endereco1' => 'required',
            'endereco2' => '',
            'nuit' => 'int',
            'contacto1' => '',
            'contacto2' => '',
            'licenca' => '',
            'director' => 'required',
            'funcionarios' => 'required', 
        ]);
        Company::find($id)->update($data);
        return redirect()->back()->with('success', 'Dados da Empresa atualizados com sucesso!!');
        
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
