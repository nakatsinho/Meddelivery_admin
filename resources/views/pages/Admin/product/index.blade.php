

@extends('layouts.master') 

@section('content')

    <div class="padding">

        <hr>  
        <h4 class="my-4 text-center"> 
            <small >Produtos / Medicamentos</small> 
        </h4><hr>

        <div class="row">
            @forelse ($prod as $products)  
                <div class="col-xs-8 col-sm-6 col-md-3">
                    <div class="box p-a-xs"  >
                        <a href="#"><img src="{{ asset('images/'.$products->image.'') }}" 
                            style="max-width:200px; max-height:150px; width: auto;
                            height: auto; margin: 8px 69px -1px 77px;" alt="" class="img-responsive">
                        </a>
                        <a href="{{ route('produtos_geral.show', ['id' => $products->id ]) }}">
                            <div class="p-a-sm">
                                <div class="text-ellipsis" style="color:#ffcc00"> {{ $products->nome_pro }}</div>
                                <div class="text-ellipsis">Preço: <span class="text-danger"> {{ number_format($products->preco_pro,2) }}</span></div>
                                <div class="text-ellipsis">Publicação: <span class="text-success"> {{  $products->created_at }}</span></div>
                            </div>
                        </a>
                    </div>
                </div>
            @empty
                <div class="col-lg-12 col-md-12">
                    <div class="alert alert-info alert-block text-center">
                        <strong>Opss!! Sem produtos pra mostrar...</strong>
                    </div> 
                </div>  
            @endforelse 
            
        </div>
       <div class="text-center text-danger">
            {{ $prod->links() }}
       </div>
    </div>

@endsection
 

    