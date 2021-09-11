@extends('layouts.master')
@section('title2', 'Produtos')
@section('subtitle', 'vendidos')
@section('content') 
    <section class="cart_area">
        <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <div class="section-title">  
                            <h3 style="color:#ffc107">Produtos Vendidos</h3> <hr> 

                        </div>
                    </div>
                </div>
                <div class="row">   
                    <a href="{{ route('vendas.create') }}"><button class="btn btn-sm btn-warning">Registar venda</button></a> <br><br>
                </div>  
            <div class="cart_inner">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Produto</th>
                                <th scope="col">Preço</th>
                                <th scope="col">Quantidade</th>
                                <th scope="col">Total</th>
                                <th scope="col">Data de venda</th>
                                <th colspan="2" class="text-center">Acções</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($sold as $row)
                                <tr>
                                    
                                    <td>
                                        <div class="media">
                                            <div class="d-flex">
                                                <img src="{{ asset('imagens/'.$row->produto->image ) }}" style="width:111px">
                                            </div>
                                            <div class="media-body">
                                                <p>{{ $row->produto->nome_pro  }}</p>
                                            </div>
                                        </div>
                                    </td>

                                    <td> {{ number_format($row->preco_prod ,2)." Mzn" }} </td>

                                    <td>
                                        <div class="product_count">
                                            <input type="text"  disabled  value="{{ $row->quantidade }}" title="Quantity:" class="input-text qty">
                                        </div>
                                    </td>

                                    <td>{{ number_format($row->quantidade * $row->preco_prod ,2)." Mzn" }}</td>
                                    
                                    <td>{{ date_format( $row->created_at, 'd-m-Y') }}</td>
                                    
                                    <td class="text-center">  
                                        <a href="{{ route('vendas.show', ['id' => $row->id ]) }}" title="Ver detalhes" class="active" ui-toggle-class><i class="fa fa-search-plus text-warning inline"></i></a>
                                    </td>

                                    <td class="text-center">  
                                        <a href="{{ route('vendas.index', ['id' => $row->id ]) }}" title="Ver detalhes" class="active" ui-toggle-class><i class="fa fa-print text-success inline"></i></a>
                                    </td>
                                
                                </tr>
                            @empty
                                <td colspan="7"> 
                                    <div class="alert alert-info alert-block text-center">
                                        <strong>Opss!! Sem produtos vendidos por mostrar...</strong>
                                    </div> 
                                </td>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section> 
@endsection