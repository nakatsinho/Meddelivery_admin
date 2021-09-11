@extends('layouts.master')
@section('title2', 'Farmacias')
@section('subtitle', 'farmacias')

@section('content')
<section class="related-product-area section_gap_bottom">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <div class="section-title"> <br><br><br><br>
                    <h4>Pedidos / Requisições</h4>
                </div>  <hr>
            </div>
        </div>
        <div class="box"> 
            <div class="box-body">
                <div class="table-responsive">
                    <div class="cart_inner">
                        <div class="table-responsive">
                            <table class="table  ">
                                <thead>
                                    <tr>
                                        <th>Produto</th>
                                        <th>Quantidade</th>
                                        <th>Total</th>
                                        <th>Tax</th>
                                        <th>Nr. Do pedido</th>
                                        <th>Data de Entrada</th> 
                                        <th class="text-center">Acções</th> 
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($pedidos as $row)
                                    <tr>
                                        <td>{{ $row->product_id }}</td>  
                                        <td>{{ $row->qty }}</td>  
                                        <td>{{ $row->total }}</td>
                                        <td>{{ $row->tax }}</td> 
                                        <td>{{ $row->pedido_id }}</td>  
                                        <td> {{ $row->created_at }} </td>  
                                        <td class="text-center">
                                            <a href="{{ route('farmacias.detalhes', ['id' => $row->id ]) }}" title="Ver detalhes" class="active" ui-toggle-class><i class="fa fa-search-plus text-warning inline"></i></a>
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
            </div>
        </div>
    </div>
</section>
<!-- End related-product Area -->
@endsection