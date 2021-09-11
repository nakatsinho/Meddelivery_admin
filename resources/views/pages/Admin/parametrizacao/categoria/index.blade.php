@extends('layouts.master')
@section('title', 'Ficheiros')
 
@section('content')
<div class="padding">
    <div class="box">
        <div class="box-header " >
            <h4> Categorias</h4>
        </div>
        <div class="box-body">
            <div class="row">
                
                <div class="col-md-3">
                    <a href="{{ route('categoria.create') }}"><button type="button" class="btn btn-warning btn-md">Adicionar</button></a> <br>
                </div> 

            </div> <br>  
           
            <div class="table-responsive">
                <table class="table table-hover table-striped">
                    <thead style=" background-color:#b8b8bb" >
                        <tr>  
                            <th>Imagem</th>
                            <th>Nome Cat.</th>
                            <th>Info. Cat</th>
                            <th>Info. Slug</th> 
                            <th class="text-center">Remover</th> 
                            <th class="text-center">Editar</th> 
                        </tr>
                    </thead>
                    <tbody>
                       @foreach ($categoria as $row)
                            <tr>
                               @if ($row->image == '')
                                   <td><b style="color:red">Sem imagem</b></td>
                               @else
                                    <td>
                                        <div class="d-flex">
                                            <img src="{{ asset('images/'.$row->image) }}" style="width:111px">
                                        </div>
                                    </td>
                               @endif
                                <td>{{ $row->nome }}</td>
                                <td>{{ $row->info_slug }}</td>
                                <td>{{ $row->info_cat }}</td> 

                                <td class="text-center">
                                    <a href="{{ route('categoria.destroy', ['id' => $row->id]) }}" title="Ver detalhes" class="active"> 
                                        <i class="material-icons text-danger">
                                            &#xe872;
                                        </i>
                                    </a>
                                </td>

                                <td class="text-center">
                                    <a href="{{ route('categoria.edit', ['id' => $row->id ]) }}" title="Ver detalhes" class="active"> 
                                        <i class="material-icons text-primary">
                                            &#xe3c9;
                                        </i>
                                    </a>
                                </td>
                           
                            </tr>
                       @endforeach
                    </tbody>
                </table> 
                  <div class="text-center"> 
                    {{ $categoria->links() }}
                </div>
            </div>

        </div>
    </div>
</div>
@endsection

