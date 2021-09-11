 
@extends('layouts.master') 
@php
    $i = 0
@endphp
@section('content')
<div class="padding">
    <div class="box">
            
             
        <div class="box-header">
            <span class="label danger pull-right">{{ $total }}</span>
            <h3>Pedidos</h3>
        </div>
       
        <div class="table-responsive padding">  
            <table class="table dataTable">
                <thead>
                    <tr>
                        <th>Ord.</th>
                        <th>Cliente</th>
                        <th>Total</th>
                        <th>Data do pedido</th>
                        <th>Estado</th> 
                        <th class="text-center">detalhes</th> 
                        <th class="text-center">imprimir</th> 
                    </tr>
                </thead>
                <tbody>
                    @forelse ($pedidos as $row)
                    <tr>
                        @if ($row->status == '1')
                            <td>{{ ++$i}}</td> 
                            <td>{{ $row->user->name}}</td> 
                            <td>{{ number_format($row->total,2) }}</td>
                            <td>{{ $row->created_at }}</td>  
                             
                            <td class="text-success">Aprovado!</td>  
         
                            <td class="text-center">
                                <a href="{{ route('pedidos.show', ['id' => $row->id ]) }}" title="detalhes" class="active"> 
                                    <i class="material-icons text-success">
                                        &#xe8ff;
                                    </i>
                                </a>
                            </td>    
                            <td class="text-center">
                                <a href="{{ route('pdf', ['id' => $row->id ]) }}" title="print" class="active"> 
                                    <i class="material-icons text-danger">
                                        list_alt
                                    </i>
                                </a>
                            </td>  
                        @else
                            <td>{{ ++$i}}</td> 
                            <td>{{ $row->user->name}}</td> 
                            <td>{{ number_format($row->total,2) }}</td>
                            <td>{{ $row->created_at }}</td>  
                            <td class="text-danger">Pendente!</td>  


                            
                            <td class="text-center">
                                <a href="{{ route('pedidos.show', ['id' => $row->id ]) }}" title="print" class="active"> 
                                    <i class="material-icons text-success">
                                        &#xe8ff;
                                    </i>
                                </a>
                            </td>    
                            <td class="text-center"  >
                                <a href="{{ route('pdf', ['id' => $row->id ]) }}" title="print" class="active"> 
                                    <i class="material-icons text-danger">
                                        list_alt
                                    </i>
                                </a>
                            </td>  
                        @endif
                        
                         
                    </tr> 
                    @empty
                        <td colspan="7"> 
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