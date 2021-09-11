
@extends('layouts.master')
@section('title2', 'Detalhes')
@section('subtitle', 'detalhes')

@section('content')
<section class="order_details section_gap">
        <div class="container">
            <hr>
            <h3 class="title_confirmation" style="color:black">Detalhes de venda </h3>
            
            <div class="row order_d_inner">
                <div class="col-lg-6">
                    <div class="details_item">
                        <h4> Farmácia vendedora </h4>
                        <ul class="list">
                            <li><a><span>Fornecedor</span> : <b> {{ $prod->farmacia->nome}}</b> </a></li>
                            <li><a><span>Titular</span> : <b>{{ $prod->farmacia->titular }}</b></a></li>
                            <li><a><span>Email</span> : <b>{{ $prod->farmacia->email }}</b></a></li>
                            <li><a><span>Contacto (Celular)</span> : <b>{{ $prod->farmacia->number }}</b></a></li>
                            <li><a><span>Endereço</span> : <b>{{ $prod->farmacia->location }}</b></a></li>
                            <li><a><span>Descrição</span> : <b>{{ $prod->farmacia->descricao }}</b></a></li><br>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="details_item">
                        <h4> Produto/medicamento </h4>
                        <ul class="list">
                            <li><a><span>Nome</span> : <b>{{ $prod->produto->nome_pro}}</b></a></li>
                            <li><a><span>Código</span> : <b> {{ $prod->produto->codigo_pro}}</b> </a></li>
                            <li><a><span>Preço</span> : <b>{{ $prod->produto->preco_pro }}</b></a></li>
                            <li><a><span>Categoria</span> : <b>{{ $prod->produto->categoria->nome }}</b></a></li>
                            <li><a><span>Sub-categoria</span> : <b>{{ $prod->produto->subcategoria->nome }}</b></a></li>
                            <li><a><span>Descrição</span> : <b>{{ $prod->produto->info_pro }}</b></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="details_item">
                        <h4> Comprador (cliente) </h4>
                        <ul class="list">
                            <li class="text-danger">Brevemente.....</li>
                            {{-- <li><a><span>Nome</span> : <b>{{ $prod->produto->nome_pro}}</b></a></li>
                            <li><a><span>Cogigo</span> : <b> {{ $prod->produto->codigo_pro}}</b> </a></li>
                            <li><a><span>Preço</span> : <b>{{ $prod->produto->preco_pro }}</b></a></li>
                            <li><a><span>Categoria</span> : <b>{{ $prod->produto->categoria->nome }}</b></a></li>
                            <li><a><span>Sub-categoria</span> : <b>{{ $prod->produto->subcategoria->nome }}</b></a></li>
                            <li><a><span>Descrição</span> : <b>{{ $prod->produto->info_pro }}</b></a></li> --}}
                        </ul>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="details_item">
                        <h4> Anexos (documentos / imagens) </h4> 
                    </div>
                </div>
                 
            </div>

            <div class="section-top-border">
                <hr>
                <div class="row gallery-item">
                   
                    @if ($prod->produto->image)
                        <div class="col-md-4">
                            <a href="{{ asset('imagens/'.$prod->produto->image.'') }}" class="img-pop-up">
                                <div class="single-gallery-image" style="background: url({{ asset('imagens/'.$prod->produto->image.'') }});"></div>
                            </a>
                        </div>   
                    @endif
                    @if ($prod->image)
                        <div class="col-md-4">
                            <a href="{{ asset('imagens/'.$prod->image.'') }}" class="img-pop-up">
                                <div class="single-gallery-image" style="background: url({{ asset('imagens/'.$prod->image.'') }});"></div>
                            </a>
                        </div> 
                    @endif
                        
                </div>
            </div>
             
        </div>
    </div>
</section>
@endsection