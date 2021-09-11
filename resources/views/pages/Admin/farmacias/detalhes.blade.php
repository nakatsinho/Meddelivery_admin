
@extends('layouts.master') 

@section('content')


    <!-- Page Content -->
    <div class="padding">

        <h4 class="my-4 text-center"> 
            <small class="_700">{{ optional($farm)->nome }}</small><hr>
        </h4>

        <!-- Portfolio Item Row -->
        <div class="row">

            <div class="col-md-8">
            <img class="img-fluid" src="{{ asset('images/'.$farm->image_empresa.'') }}" alt="">
            </div>
            
            <div class="col-md-4">
            <br>

            @if(Auth::User()->farmacia_id == "")
                <div class="text-center">
                    <!-- <a href="{{ route('admin_farm.create') }}"><button class="btn btn-sm btn-success">Adicionar Medicamento</button></a> &nbsp   -->
                    <a href="{{ route('farmacia.remover', ['id' => $farm->id]) }}"><button class="btn btn-sm btn-danger">Remover Fornecedor</button></a> <br><br>
                </div>
            @endif
            
            <h4 class="my-4">Descrição da farmacia</h4> <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            
            <h5 class="my-5">Detalhes</h5> <hr>
            <ul>
                <li><a><span class="_700">Nome</span> : <b class="text-danger"> {{ optional($farm)->nome }}</b> </a></li><br>
                <li><a><span class="_700">Titular</span> : <b class="text-danger">{{ $farm->titular }}</b></a></li><br>
                <li><a><span class="_700">Nuit</span> : <b class="text-danger">{{ $farm->nuit }}</b></a></li><br>
                <li><a><span class="_700">Email</span> : <b class="text-danger">{{ $farm->emaill }}</b></a></li><br>
                <li><a><span class="_700">Contacto / Celular</span> : <b class="text-danger">{{ $farm->numero }}</b></a></li><br>
                <li><a><span class="_700">Data de Criação</span> : <b class="text-danger">{{ $farm->created_at }}</b></a></li><br>
                <li><a><span class="_700">Pais</span> : <b class="text-danger">{{ optional($farm->pais)->nome }}</b></a></li><br>
                <li><a><span class="_700">Provincia</span> : <b class="text-danger">{{ optional($farm->provincia)->nome }}</b></a></li><br>
                <li><a><span class="_700">Bairro </span> : <b class="text-danger">{{ $farm->bairro_id }}</b></a></li><br>
            </ul>
            
            </div>

        </div>
        <!-- /.row -->
        <br>
        
        <h4 class="my-4"> 
            <small>Produtos do Fornecedor</small> 
        </h4><hr>

        <div class="row">
            @forelse ($prod as $products) 
                    <div class="">
                        <div class="col-xs-8 col-sm-6 col-md-3">
                            <div class="box p-a-xs"  >
                                <a href="#"><img src="{{ asset('images/'.$products->image.'') }}" alt="" style="max-width:200px; max-height:150px; width: auto;
                                    height: auto; margin: 8px 69px -1px 77px;" alt="" class="img-responsive"> </a>
                                <div class="p-a-sm">
                                    <div class="text-ellipsis" style="color:#ffcc00"> {{ optional($products)->nome_pro }}</div>
                                    <div class="text-ellipsis">Preço: <span class="text-danger"> {{ number_format($products->preco_pro,2) }}</span></div>
                                    <div class="text-ellipsis">Publicação: <span class="text-success"> {{  $products->created_at }}</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- pagination --}}
            @empty
                <div class="col-lg-12 col-md-12">
                    <div class="alert alert-info alert-block text-center">
                        <strong>Opss!! Sem produtos pra mostrar...</strong>
                    </div> 
                </div>  
            @endforelse 
        </div>

    </div>
    <!-- /.container -->


 
</section>
@endsection

{{-- <div>
        <div class="btn-group m-r">
          <button type="button" class="btn btn-sm white"><i class="fa fa-chevron-left"></i></button>
          <button type="button" class="btn btn-sm white"><i class="fa fa-chevron-right"></i></button>
        </div>
        Showing <strong>8</strong> of 25
      </div> --}}