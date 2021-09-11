 
@extends('layouts.master') 

@section('content')
<div class="padding">
    <div class="box">
            
             
        <div class="box-header">
            <span class="label danger pull-right"> </span>
            <h3>Pedidos</h3>
        </div>
       
        <div class="table-responsive padding">  
            <table class="table dataTable">
                <thead>
                    <tr>
                        <th>Total</th>
                        <th>Produto</th>
                        <th>ID do pedido</th>
                        <th>Quantidade</th>
                        <th>Farmacia</th> 
                        <th class="text-center">tratar</th> 
                    </tr>
                </thead>
                <tbody>
                    @forelse ($pedidos as $row)
                    <tr>
                        <td>{{ $row->total }}</td>
                        <td>{{ $row->produto->nome_pro }}</td>  
                        <td>{{ $row->pedido_id }}</td>  
                        <td>{{ $row->qty }}</td>  
                        <td> {{ $row->farmacia->nome }} </td>   
                        <td class="text-center">
                            <a href="{{ route('farmacia.edit', ['id' => $row->id ]) }}" title="Ver detalhes" class="active"> 
                                <i class="material-icons text-warning">
                                    &#xe3c9;
                                </i>
                            </a>
                        </td>
                    </tr> 
                    @empty
                        <td colspan="7"> 
                            <div class="alert alert-info alert-block text-center">
                                <strong>Opss!! Sem farmacias por mostrar...</strong>
                            </div> 
                        </td>
                    @endforelse
                </tbody> 
            </table>
        </div>
    </div>
</div>
           
@endsection