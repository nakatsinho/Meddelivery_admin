
@extends('layouts.master')
@section('title2', 'Detalhes')
@section('subtitle', 'detalhes')

@section('content')
<section class="order_details section_gap">
        <div class="container">
            <hr>
            <h3 class="title_confirmation" style="color:black">Detalhes do produto </h3>
            
            <div class="row order_d_inner">
                <div class="col-lg-6">
                    <div class="details_item">
                        <h4> </h4>
                        <ul class="list"> 
                            <li><a><span>Fornecedor</span> : <b class="text-danger"> Medicamento sem Fornecedor...!!</b> </a></li>
                            <li><a><span>Nome</span> : <b>{{ $prod->nome_pro }}</b></a></li>
                            <li><a><span>Codigo</span> : <b>{{ $prod->codigo_pro }}</b></a></li>
                            <li><a><span>Preço</span> : <b>{{ $prod->preco_pro }}</b></a></li>
                            <li><a><span>Descrição</span> : <b>{{ $prod->info_pro }}</b></a></li><br>
                        </ul>
                    </div>
                </div> 
                <div class="col-lg-6">
                    <div class="details_item">
                        <h4> </h4>
                        <ul class="list">
                            <li><a><span>Categoria</span> : <b>{{ $prod->categoria->nome }}</b></a></li>
                            <li><a><span>Sub-categoria</span> : <b> {{ $prod->subcategoria->nome }}</b> </a></li>
                            <li><a><span>Taxa</span> : <b>{{ $prod->tax }}</b></a></li>
                            @if ($prod->stock < 0)
                                <li style="background-color:#fd8888" ><a> <span>Stock</span> : <h6 >{{ $prod->stock }}</h6></a></li>
                            @else
                                <li><a><span>Stock</span> : <b>{{ $prod->stock }}</b></a></li>
                            @endif
                            <li><a><span>Data de Entrada</span> : <b>{{ $prod->created_at }}</b></a></li>
                        </ul>
                    </div>
                </div>
                 
            </div>

            <div class="section-top-border">
                <hr>
                <div class="row gallery-item">
                   
                    <div class="col-md-4">
                        <a href="{{ asset('images/'.$prod->image.'') }}" class="img-pop-up">
                            <div class="single-gallery-image" style="background: url({{ asset('images/'.$prod->image.'') }});"></div>
                        </a>
                    </div> 
                    
                </div>
            </div>
             
        </div>
    </div>
</section>
@endsection