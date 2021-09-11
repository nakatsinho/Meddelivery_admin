
 
@extends('layouts.master') 

@section('content')
<div class="padding">
    <div class="box">
        <div class="box-header">
            <span class="label danger pull-right"> </span>
            <h3>Pedidos de Adesão a Medeliver</h3>
        </div>
        <div class="table-responsive padding"> 
            <table class="table dataTable">
                <thead>
                    <tr>
                        <th>Fornecedor</th>
                        <th>Titular</th>
                        <th>Nuit</th>
                        <th>Email</th>
                        <th>Contacto / Celular</th>
                        <th>Data de Pedido</th> 
                        <th class="text-center">Acções</th> 
                    </tr>
                </thead>
                <tbody>
                    @forelse ($farm as $row)
                    <tr>
                        <td>{{ $row->nome }}</td> 
                        <td>{{ $row->titular }}</td>
                        <td>{{ $row->nuit }}</td>  
                        <td>{{ $row->email }}</td>  
                        <td>{{ $row->number }}</td>  
                        <td> {{ $row->created_at }} </td>  
                        <td class="text-center">
                            <a href="{{ route('farmacia.pedidos.detalhes', ['id' => $row->id ]) }}" title="Ver detalhes" class="active">
                                <i class="material-icons" style="color:#ffc107">
                                    &#xe8ff;
                                </i>
                            </a>
                        </td> 
                    </tr>
                    @empty
                        <td colspan="7"> 
                            <div class="alert alert-info alert-block text-center">
                                <strong>Opss!! Sem pedidos por mostrar...</strong>
                            </div> 
                        </td>
                    @endforelse
                </tbody>
            </table>  
        </div>
    </div>
</div>
           
@endsection