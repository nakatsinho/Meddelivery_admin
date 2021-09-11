<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Farmacia;
use App\Models\Provincia;
use App\Models\Pais;
use App\Models\Bairro;
use App\User;

class StatusController extends Controller
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
        $prov = Provincia::all();
        $pais = Pais::all();
        $bairro = Bairro::all();
        return view('pages.Admin.farmacias.creating.create',  
        compact('prov','pais','bairro'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        // return $request->image_empresa;
        $farmacia = Farmacia::create($this->validateRequest());
    
        $this->storeImage($farmacia);
        
        if (request()->has('image_empresa')) {
            $imageName = request()->image_empresa->getClientOriginalName();
            
            // Local_domain
            // request()->image_empresa->move(public_path('imagens'), $imageName);
            
            // Medelivery domain
            // request()->image_empresa->move('/home/meddeliv/public_html/admin/images', $imageName);
            
            // Hypertech_domain
            request()->image_empresa->move('images', $imageName);
        }
        return redirect()->route('farmacias')->with('success', 'Farmacia criada com sucesso!!!');
  
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
        $prov = Provincia::all();
        $pais = Pais::all();
        $bairro = Bairro::all();
        $farm = Farmacia::find($id);
        return view('pages.Admin.farmacias.creating.edit',  
        compact('prov','pais','bairro', 'farm'));
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
        // Adicionar farmacia
        if (request()->has('nome')) {

            // return $request->image_empresa;
            $farmacia = Farmacia::find($id)->update($this->validateRequest());
        
            if (request()->has('image_empresa')) {

                Farmacia::find($id)->update([
                    'image_empresa' => request()->image_empresa->getClientOriginalName()
                ]);
    
                $imageName = request()->image_empresa->getClientOriginalName(); 
                // Local_domain
                // request()->image_empresa->move(public_path('imagens'), $imageName);
                
                // Medelivery domain
                // request()->image_empresa->move('/home/meddeliv/public_html/admin/images', $imageName);
                
                // Hypertech_domain
                request()->image_empresa->move('images', $imageName);
                
            }
            return redirect()->route('farmacias')->with('info', 'Dados da Farmacia atualizados com sucesso!!!');
        }

        $data = $request->validate([
            'status' => 'required | int',
        ]);
        Farmacia::find($id)->update($data);
        return redirect()->route('farmacias')->with('success', 'Acesso permitido!');
    
        
        
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
            'nome' => 'required',
            'status' => 'int',
            'titular' => 'required',
            'nuit' => 'required',
            'email' => '',
            'location' => 'required',
            'number' => 'required',
            'descricao' => '',
            'quarteirao' => 'required',
            'pais_id' => 'required',
            'provincia_id' => 'required',
            'bairro_id' => 'required',
            'video_link' => '',
        ]);
        if (request()->hasFile('image_empresa')) { 
            request()->validate([
                'image_empresa' => 'file | image | max:5000'
            ]);
        }
        return $validated;
    }

    private function storeImage($farmacia)
    { 
        if (request()->has('image_empresa')) {
            $farmacia->update([
                'image_empresa' => request()->image_empresa->getClientOriginalName()
            ]);
        }
    }
}