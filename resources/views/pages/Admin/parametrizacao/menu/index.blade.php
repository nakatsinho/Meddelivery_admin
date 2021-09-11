@extends('layouts.master')
@section('title', 'Ficheiros')
 
@section('content')
    <div class="box">
        <div class="box-header b-b" >
            <h4> Supercategorias </h4>
        </div>
        <div class="box-body">
            <div class="row">
                <br>
                
                <div class="col-md-3">
                    <a href="{{ route('menu.create') }}"><button type="button" class="btn btn-warning btn-md  btn-block">Adicionar</button></a> <br>
                </div> 

            </div> <br>  
             
           
            <div class="table-responsive">
                <table class="table table-hover table-striped">
                    <thead style=" background-color:#b8b8bb" >
                        <tr>  
                            <th>Ord.</th>
                            <th>Supercategoria</th> 
                            <th class="text-center">Editar</th> 
                            <th class="text-center">Remover</th> 
                        </tr>
                    </thead>
                    <tbody>
                       @foreach ($menu as $row)
                            <tr> 
                                <td>{{ $row->id }}</td> 
                                <td>{{ $row->nome }}</td> 
                                
                                <td class="text-center">
                                    <a href="{{ route('menu.edit', ['id' => $row->id ]) }}" title="Editar" class="active"> 
                                        <i class="material-icons text-primary">
                                            &#xe3c9;
                                        </i>
                                    </a>
                                </td>

                                <td class="text-center">
                                    <a href="{{ route('menu.destroy', ['id' => $row->id ]) }}" title="Editar" class="active"> 
                                        <i class="material-icons text-danger">
                                            &#xe872;
                                        </i>
                                    </a>
                                </td>
                            </tr>
                       @endforeach
                    </tbody>
                </table>
                <div class="text-center">
                    <p>{{ $menu->links() }}</p>    
                </div> 
            </div>
        </div>
    </div>
@endsection