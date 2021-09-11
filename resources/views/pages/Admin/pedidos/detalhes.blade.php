@extends('layouts.master') 

@section('content')


    <!-- Page Content -->
    <div class="padding">

        <h5 class="my-5 text-center text-danger "> 
            <small class="_700"> Aguardando aprovação...</small><hr> 
        </h5>

        <!-- Portfolio Item Row -->
        <div class="row">

            <div class="text-center">
                <form action="{{ route('farmacia.update', ['id' => $farm->id] ) }}" method="POST">
                    @method('PUT')
                        <input type="hidden" name="status" value="1">
                        <button class="btn btn-sm btn-success" type="submit"> Aceitar pedido </button>
                    @csrf
                </form> 
            </div>
            <br>
            
            <div class="col-md-4">
                <img class="img-fluid" src="{{ asset('images/'.$farm->image_empresa.'') }}" alt="">
            </div>

            <div class="col-md-8">
 
                <h6 class="my-6 _700">Descrição do Fornecedor</h6> <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
             
            </div>

             

        </div> 

        <div class="row">
            <div class="col-md-6">
                <br> <br>
                <h6 class="my-6 _700">Dados do Fornecedor</h6> <hr> <hr>
                
                <ul> 
                    <li><a><span class="_700">Nome</span> : <b class="text-danger"> {{ optional($farm)->nome }}</b> </a></li><br>
                    <li><a><span class="_700">Titular</span> : <b class="text-danger">{{ $farm->titular }}</b></a></li><br>
                    <li><a><span class="_700">Nuit</span> : <b class="text-danger">{{ $farm->nuit }}</b></a></li><br>
                    <li><a><span class="_700">Email</span> : <b class="text-danger">{{ $farm->emaill }}</b></a></li><br>
                    <li><a><span class="_700">Contacto / Celular</span> : <b class="text-danger">{{ $farm->numero }}</b></a></li><br>
                    <li><a><span class="_700">Data de Criação</span> : <b class="text-danger">{{ $farm->created_at }}</b></a></li><br>
                </ul>
    
            </div>
    
            <div class="col-md-6">
                <br> <br>
                <h6 class="my-6 _700">Endereço</h6> <hr> <hr>
                
                <ul>
                    <li><a><span class="_700">Pais</span> : <b class="text-danger">{{ optional($farm->pais)->nome }}</b></a></li><br>
                    <li><a><span class="_700">Provincia</span> : <b class="text-danger">{{ optional($farm->provincia)->nome }}</b></a></li><br>
                    <li><a><span class="_700">Bairro </span> : <b class="text-danger">{{ optional($farm->bairro)->nome }}</b></a></li><br>
                    <li><a><span class="_700">Quarteirão </span> : <b class="text-danger">{{ $farm->quarteirao }}</b></a></li><br>
                </ul>
    
            </div>
        </div>

    </div>

</section>
@endsection