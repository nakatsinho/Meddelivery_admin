 

 


@extends('layouts.master') 

@section('content')


    <!-- Page Content -->
    <div class="padding"> 

        <!-- Portfolio Item Row -->
        <div class="row">

            <div class="text-center">
                <a href="{{ route('produtos_geral.edit', ['id' => $prod->id]) }}"><button class="btn btn-sm btn-success">Editar dados</button></a> &nbsp  
                <a href="{{ route('produtos_geral.destroy', ['id' => $prod->id]) }} "><button class="btn btn-sm btn-danger">Remover medicamento</button></a> <br><br>
            </div>
            <br>
            
            <div class="col-md-4">
                <img class="img-fluid" src="{{ asset('images/'.$prod->image.'') }}" alt="">
            </div>

            <div class="col-md-8">
 
                <h6 class="my-6 _700">Descrição do produto</h6> <hr>
                <p>{{ $prod->info_pro }}</p>
             
            </div>

             

        </div> 

        <div class="row">
            <div class="col-md-6">
                <br> <br>
                <h6 class="my-6 _700">Detalhes</h6> <hr> <hr>
                
                <ul> 
                    <?php 
                    if ( $prod->farmacia_id == "") { ?>
                        <li><a><span class="_700">Farmacia</span> : <b class="text-danger">medicamento sem farmacia</b> </a></li><br>
                    <?php } else { ?>
                        <li><a><span class="_700">Fornecedor</span> : <b class="text-danger"> {{ $prod->farmacia->nome }}</b> </a></li><br>
                    <?php } ?>
                   
                    <li><a><span class="_700">Nome </span> : <b class="text-danger">{{  $prod->nome_pro }}</b></a></li><br>
                    <li><a><span class="_700">Codigo</span> : <b class="text-danger">{{ $prod->codigo_pro }}</b></a></li><br>
                    <li><a><span class="_700">Preço</span> : <b class="text-danger">{{ $prod->preco_pro }}</b></a></li><br>
                    
                    @if ($prod->categoria_id == "")
                    <li><a><span class="_700">Categoria</span> : <b class="text-danger">{{ $prod->categoria->nome }}</b></a></li><br> 
                    @else
                    <li><a><span class="_700">Categoria</span> : <b class="text-danger">{{ $prod->categoria->nome }}</b></a></li><br> 
                    @endif
                    
                    <li><a><span class="_700">Sub-categoria</span> : <b class="text-danger">{{ $prod->subcategory_id }}</b></a></li><br> 
                    @if ($prod->stock < 0)
                        <li  style="background-color:#fd8888" ><a><span class="_700">Stock</span> : <b class="text-danger">{{ $prod->stock }}</b></a></li><br> 
                    @else
                        <li><a><span  class="_700">Stock</span> : <b class="text-danger">{{ $prod->stock }}</b></a></li>
                    @endif
                    <li><a><span class="_700">Data de Entrada</span> : <b class="text-danger">{{ $prod->created_at }}</b></a></li> 

                </ul>
    
            </div>
    
        </div>

    </div>

</section>
@endsection   