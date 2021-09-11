<?php

namespace App\Http\Controllers;

use App\Models\Farmacia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class FarmUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::where('user_group_id', '2')->paginate(10);
        return view('pages.Admin.usuarios.admin-farmacia.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $farm = Farmacia::where('status', '1')->get();
        return view('pages.Admin.usuarios.admin-farmacia.create', compact('farm'));
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'user_group_id' => ['required'],
            'farmacia_id' => ['required'],
        ]);

        User::create([
            'name' => $data['name'],
            'user_group_id' => $data['user_group_id'],
            'email' => $data['email'],
            'farmacia_id' => $data['farmacia_id'],
            'password' => Hash::make($data['password']), 
        ]);
        return redirect()->route('user_farmacia.index')->with('success', 'Usuario criado com sucesso!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        User::find($id)->delete();
        return redirect()->route('user_farmacia')->with('info', 'Usuario Banido da Meddelivery');
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
}
