@extends('layouts.master')
@section('title', 'Ficheiros')
 
@section('content')
    <div class="box">
        <div class="box-header b-b" >
            <h4> Subcategorias</h4>
        </div>
        <div class="box-body">
            <div class="row">
                <br>
                
                <div class="col-md-3">
                    <a href="{{ route('subcategoria.create') }}"><button type="button" class="btn btn-warning btn-md  btn-block">Adicionar</button></a> <br>
                </div> 

            </div> <br>  
             
           
            <div class="table-responsive">
                <p class="text-danger">Sub-Categorias</p> <hr>
                <table class="table table-hover table-striped">
                    <thead style=" background-color:#b8b8bb" >
                        <tr>  
                            <th>Imagem</th>
                            <th>Nome Cat.</th>
                            <th>Info. Slug</th> 
                            <th>Info. Sub</th>
                            <th>Data criacão</th>  
                            <th class="text-center">Editar</th> 
                        </tr>
                    </thead>
                    <tbody>
                       @foreach ($subcategoria as $row)
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
                                <td>{{ $row->info_sub }}</td>
                                <td>{{ $row->created_at }}</td>

                                <td class="text-center">
                                    <a href="{{ route('subcategoria.edit', ['id' => $row->id ]) }}" title="Editar" class="active"> 
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
                    {{ $subcategoria->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection