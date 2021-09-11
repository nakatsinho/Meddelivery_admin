@extends('layouts.master') 

@section('content')
<div class="padding">
    <div class="box">
            
             
        <div class="box-header">
            <span class="label danger pull-right">{{ $total }}</span>
            <h3>Fornecedores</h3>
        </div>
       
        <div class="table-responsive padding"> <br>
       
            <div class="col-md-3">
                <a href="{{ route('farmacia.create') }}"><button type="button" class="btn btn-md btn-warning  btn-block">Adicionar Novo Fornecedor</button></a> <br>
            </div>

            <table class="table dataTable">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Titular</th>
                        <th>Nuit</th>
                        <th>Email</th>
                        <th>Contacto / Celular</th>
                        <th>Data de Entrada</th> 
                        <th class="text-center">Ver</th> 
                        <th class="text-center">Editar</th> 
                    </tr>
                </thead>
                <tbody>
                    @forelse ($farm as $row)
                    <tr>
                        <td>{{ $row->nome }}</td> 
                        <td>{{ $row->titular }}</td>
                        <td>{{ $row->nuit }}</td>  
                        <td>{{ $row->emaill }}</td>  
                        <td>{{ $row->numero }}</td>  
                        <td> {{ $row->created_at }} </td>  
                        <td class="text-center">
                            <a href="{{ route('farmacias.detalhes', ['id' => $row->id ]) }}" title="Ver detalhes" class="active"> 
                                <i class="material-icons text-primary">
                                    &#xe8ff;
                                </i>
                            </a>
                        </td>
                        <td class="text-center">
                            <a href="{{ route('farmacia.edit', ['id' => $row->id ]) }}" title="Ver detalhes" class="active"> 
                                <i class="material-icons text-warning">
                                    &#xe3c9;
                                </i>
                            </a>
                        </td>
                    </tr> 
                    @empty
                        <td colspan="8"> 
                            <div class="alert alert-info alert-block text-center">
                                <strong>Opss!! Sem Fornecedores por mostrar...</strong>
                            </div> 
                        </td>
                    @endforelse
                </tbody> 
            </table>
        </div>
    </div>
</div>
           
@endsection