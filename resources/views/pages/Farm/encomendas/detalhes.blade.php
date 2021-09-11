
@extends('layouts.master')
@section('title2', 'Detalhes')
@section('subtitle', 'detalhes')

@section('content')
<section class="order_details section_gap">
        <div class="container">
            <hr>
            <h3 class="title_confirmation" style="color:black">Detalhes da Farmacia </h3>
            
            <div class="row order_d_inner">
                <div class="col-lg-6">
                    <div class="details_item">
                        <h4>Dados farmacia</h4>
                        <ul class="list">
                            <li><a><span>Nome</span> : <b> {{ $farm->nome }}</b> </a></li>
                            <li><a><span>Titular</span> : <b>{{ $farm->titular }}</b></a></li>
                            <li><a><span>Nuit</span> : <b>{{ $farm->nuit }}</b></a></li>
                            <li><a><span>Email</span> : <b>{{ $farm->email }}</b></a></li>
                            <li><a><span>Contacto / Celular</span> : <b>{{ $farm->number }}</b></a></li><br>
                            <li><a><span>Data de Criação</span> : <b>{{ $farm->created_at }}</b></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="details_item">
                        <h4>Endereço</h4>
                        <ul class="list">
                            <li><a><span>Pais</span> : <b>{{ $farm->pais->nome }}</b></a></li>
                            <li><a><span>Provincia</span> : <b>{{ $farm->provincia->nome }}</b></a></li>
                            <li><a><span>Bairro </span> : <b>{{ $farm->bairro->nome }}</b></a></li>
                            <li><a><span>Quarteirão</span> : <b>{{ $farm->quarteirao }}</b></a></li> 
                            <li><a href="{{ $farm->video_link }}"><span>Video-link </span> : <b>{{ $farm->video_link }}</b></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="section-top-border">
                <h4>Imagens & Arquivos</h4>  <hr>
                <div class="row gallery-item">
                    
                    <div class="col-md-4">
                        <a href="{{ asset('images/'.$farm->image.'') }}" class="img-pop-up">
                            <div class="single-gallery-image" style="background: url({{ asset('images/'.$farm->image.'') }});"></div>
                        </a>
                    </div> 
                    
                </div>
            </div>


            <br><br><hr>
            <h3 class="title_confirmation" style="color:black">Produtos da Farmacia </h3>

            <div class="cart_inner">
                <div class="row">  
                    @foreach ($prod as $products)
                        <div class="col-lg-3 col-md-6">
                            <div class="single-product">
                                <img class="img-fluid" src="{{ asset('images/'.$products->image.'') }}" alt="">
                                <div class="product-details">
                                    <h6> {{ $products->nome }} </h6>
                                    <div class="price">
                                        <h6>{{ number_format($products->preco_pro,2) }}</h6>
                                        <h6 class="l-through">$00.00</h6>
                                    </div>
                                    <div class="prd-bottom">
                                        <a href="{{ route('produtos') }}" class="social-info">
                                            <span class="lnr lnr-move"></span>
                                            <p class="hover-text">Ver mais</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    @endforeach 
                </div>
            </div>
 
        </div>
    </div>
</section>
@endsection