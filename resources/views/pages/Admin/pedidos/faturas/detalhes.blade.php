 
@extends('layouts.master') 
@php
    $i = 0
@endphp
@section('content')


    <!-- Page Content -->
    <div class="padding">

        @if ($pedidos->status == '1')
            <h5 class="my-5 text-center  "> 
                Requisição<small class="_600 text-success"> (Pedido aceite!)</small><hr> 
            </h5>  
        @else
            <h5 class="my-5 text-center  "> 
                Requisição<small class="_600 "> (Aguardando aprovação...)</small><hr> 
            </h5>
        @endif
        

        <!-- Portfolio Item Row -->
        <div class="row">

            @if ($pedidos->status == '1')
                    
            @else
                <div class="text-center">
                    <form action="{{ route('pedidos.update', ['id' => $pedidos->id] ) }}" method="POST">
                        @method('PUT')
                            <input type="hidden" name="status" value="1">
                            <button class="btn btn-sm btn-success " type="submit"> Aprovar pedido </button>
                        @csrf
                    </form> 
                </div>
                <br>  
            @endif
           
             
        </div> 

        <div class="row">
            <div class="col-md-6">
                <br> <br>
                <h6 class="my-6 _700">Dados do cliente/usuario</h6> <hr> <hr>
                
                <ul> 
                    <li><a><span class=" ">Nome</span> : <b class="text-danger"> {{ $pedidos->user->name }}</b> </a></li><br>
                    <li><a><span class=" ">Contacto / Celular</span> : <b class="text-danger">{{ $pedidos->user->number }}</b></a></li><br>
                    <li><a><span class=" ">email</span> : <b class="text-danger">{{ $pedidos->user->email }}</b></a></li><br>
                    <li><a><span class=" ">Sexo</span> : <b class="text-danger">{{ $pedidos->user->email }}</b></a></li><br>
                    <li><a><span class=" ">Profissão</span> : <b class="text-danger">{{ $pedidos->user->profissao }}</b></a></li><br>
                </ul>
    
            </div>
    
            <div class="col-md-6">
                <br> <br>
                <h6 class="my-6  _700">Endereço</h6> <hr> <hr>
                
                @forelse ($endereco as $row)
                    <ul>

                        @if (empty($row->pais_id))
                            <li><a><span class=" ">Pais</span> : <b class="text-danger">Nao referenciado!</b></a></li><br>
                        @else
                            <li><a><span class=" ">Pais</span> : <b class="text-danger">{{ $row->pais->nome  }}</b></a></li><br>
                        @endif

                        @if (empty($row->provinvia_id))
                            <li><a><span class=" ">Provincia</span> : <b class="text-danger">Nao referenciado!</b></a></li><br>
                        @else
                            <li><a><span class=" ">Provincia</span> : <b class="text-danger">{{ $row->pais->nome  }}</b></a></li><br>
                        @endif

                        @if (empty($row->bairro_id))
                            <li><a><span class=" ">Bairro</span> : <b class="text-danger">Nao referenciado!</b></a></li><br>
                        @else
                            <li><a><span class=" ">Bairro</span> : <b class="text-danger">{{ $row->bairro->nome  }}</b></a></li><br>
                        @endif

                    </ul>
                @empty
                <ul>
                    <li><a><span class=" "></span> : <b class="text-danger">Sem dados de Endereço!</b></a></li><br>
                </ul>
                @endforelse
    
            </div>

        </div>


        <div class="row"> 

            <div class="col-md-12">
 
                <h6 class="my-6 _700">Produtos requisitados</h6> <hr>
                <div class="table-responsive padding">  
                    <table class="table table-sm  table-striped">
                        <thead style="color:#965e64">
                            <tr>
                                <th>Ord.</th>
                                <th>Produto</th>
                                <th>Fornecedor</th>
                                <th>ID do pedido</th>
                                <th>Qtd.</th>
                                <th>Total</th>
                                <th>Taxa</th>
                                <th>Data do pedido</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($prod as $row)
                            <tr>
                                <td>{{ ++$i}}</td> 
                                
                                @if (empty($row->produto_id))
                                    <td>Desconhecido</td> 
                                @else
                                    <td>{{ $row->produto->nome_pro}}</td> 
                                @endif

                                @if (empty($row->farmacia_id))
                                    <td>Desconhecido</td> 
                                @else
                                    <td>{{ $row->pedido->nome}}</td> 
                                @endif

                                <td>{{ $row->pedido_id }}</td>
                                <td>{{ $row->qty }}</td>  
                                <td>{{ number_format($row->total,2) }}</td>  
                                <td>{{ $row->tax }}</td>  
                                <td>{{ $row->created_at }}</td>  
                            </tr> 
                            @empty
                                <td colspan="8"> 
                                    <div class="alert alert-info alert-block text-center">
                                        <strong>Opss!! Pedido sem produtos/medicamentos...</strong>
                                    </div> 
                                </td>
                            @endforelse
                        </tbody> 

                    </table>
                </div>
            </div>
        </div> 
    </div>
</section>
@endsection   