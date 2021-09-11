 
@extends('layouts.master') 

@section('content')
<div class="padding">
    <div class="box">
            
             
        <div class="box-header">
            <span class="label danger pull-right"> </span>
            <h3>Produtos Vendidos</h3>
        </div>
       
        <div class="table-responsive padding"> <br>
            <table class="table dataTable">
                <thead>
                    <tr>
                        <th scope="col">Produto</th>
                        <th scope="col">Preço</th>
                        <th scope="col">Quantidade</th>
                        <th scope="col">Total</th>
                        <th scope="col">Data de venda</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($sold as $row)
                        <tr>
                            
                            <td>
                                <div class="media">
                                    <div class="d-flex">
                                        <img src="{{ asset('imagens/'.$row->produto->image) }}" style="width:111px">
                                    </div>
                                    <div class="media-body">
                                        <p>{{ $row->produto->info_pro }}</p>
                                    </div>
                                </div>
                            </td>

                            <td> {{ number_format($row->produto->preco_pro,2)." Mzn" }} </td>

                            <td>
                                <div class="product_count">
                                    <input type="text"   disabled  value="{{ $row->quantidade }}" title="Quantity:" class="input-text qty">
                                </div>
                            </td>

                            <td>{{ number_format($row->quantidade * $row->produto->preco_pro,2)." Mzn" }}</td>
                            
                            <td>{{ date_format( $row->created_at, 'd-m-Y') }}</td>
                        
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
           
@endsection