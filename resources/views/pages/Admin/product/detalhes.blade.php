


@extends('layouts.master') 

@section('content')

    <!-- Page Content -->
    <div class="padding">

        <h4 class="my-4 text-center"> 
            <small class="_700">{{ $prod->nome_pro }}</small><hr>
        </h4>

        <!-- Portfolio Item Row -->
        <div class="row">

            <div class="col-md-8">
            <img class="img-fluid" src="{{ asset('images/'.$prod->image.'') }}" alt="">
            </div>
            
            <div class="col-md-4">
            <br>
            <div class="text-center">
                    <a href="{{ route('admin_farm.create') }}"><button class="btn btn-sm btn-success">Adicionar Medicamento</button></a> &nbsp  
                    <a href="{{ route('farmacia.remover', ['id' => $farm->id]) }}"><button class="btn btn-sm btn-danger">Remover Fornecedor</button></a> <br><br>
            </div>
            <h4 class="my-4">Descrição do produto</h4> <hr>
            <p>{{  $prod->info_pro }}</p>
            
            <h5 class="my-5">Detalhes</h5> <hr>
            <ul> 
                <li><a><span class="_700">Fornecedor</span> : <b class="text-danger"> {{ prod->farmacia->nome }}</b> </a></li><br>
                <li><a><span class="_700">Nome </span> : <b class="text-danger">{{  $prod->nome_pro }}</b></a></li><br>
                <li><a><span class="_700">Codigo</span> : <b class="text-danger">{{ $prod->codigo_pro }}</b></a></li><br>
                <li><a><span class="_700">Preço</span> : <b class="text-danger">{{ $prod->preco_pro }}</b></a></li><br>
                <li><a><span class="_700">Descrição</span> : <b class="text-danger">{{ $prod->info_pro }}</b></a></li><br> 
                
                <li><a><span class="_700">Categoria</span> : <b class="text-danger">{{ $prod->info_pro }}</b></a></li><br> 
                <li><a><span class="_700">Sub-categoria</span> : <b class="text-danger">{{ $prod->info_pro }}</b></a></li><br> 
                @if ($prod->stock < 0)
                    <li  style="background-color:#fd8888" ><a><span class="_700">Stock</span> : <b class="text-danger">{{ $prod->stock }}</b></a></li><br> 
                @else
                    <li><a><span  class="_700">Stock</span> : <b class="text-danger">{{ $prod->stock }}</b></a></li>
                @endif
                <li><a><span class="_700">Data de Entrada</span> : <b class="text-danger">{{ $prod->created_at }}</b></a></li>
 
            </ul>
            
            </div>

        </div>
        <!-- /.row -->
        
    </div>
    <!-- /.container -->


 
</section>
@endsection
 