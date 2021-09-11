@extends('layouts.master') 

@section('content')
<div class="padding">
    <div class="box">
        <div class="box-header">
            <h3>Administradores</h3>
        </div>
        <div class="table-responsive padding"> 
        
           <div class="col-md-3">
                <a href="{{ route('user_administrador.create') }}"><button type="button" class="btn btn-warning btn-sm">Adicionar Novo Administrador</button></a> <br> <br> 
            </div>

                <table class="table table-hover table-striped">
                    <thead style=" background-color:#b8b8bb" >
                        <tr>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Contacto/Celular</th> 
                            <th>Data de Criação</th>  
                            <th class="text-center">Editar</th>  
                            <th class="text-center">Remover</th>  
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($data as $row)
                        <tr> 
                            <td>{{ $row->name }}</td> 
                            <td>{{ $row->email }}</td>  
                            <td>{{ $row->number }}</td>  
                            <td> {{ $row->created_at }} </td>   
                            
                            <td class="text-center">
                                <a href="{{ route('user_administrador.edit', ['id' => $row->id ]) }}" title="Ver detalhes" class="active"> 
                                    <i class="material-icons text-success">
                                        &#xe3c9;
                                    </i>
                                </a>
                            </td>
                            <td class="text-center">
                                <a href="{{ route('user_administrador.destroy', ['id' => $row->id ]) }}" title="Eliminar" class="active"> 
                                    <i class="material-icons text-danger">
                                        &#xe872;
                                    </i>
                                </a>
                            </td>   
                        </tr> 
                        @empty
                            <td colspan="7"> 
                                <div class="alert alert-info alert-block text-center">
                                    <strong>Opss!! Sem dados por mostrar...</strong>
                                </div> 
                            </td>
                        @endforelse
                    </tbody>
                </table>  
                <div class="text-center"> 
                    {{ $data->links() }}
                </div>
        </div>
    </div>
</div>
           
@endsection