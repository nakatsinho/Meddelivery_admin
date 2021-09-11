@extends('layouts.master') 

@section('content')
    <div class="item"> 

        <div class="p-a-md">
            <div class="row m-t">
                <div class="col-sm-7">
                    
                    <a href class="pull-left m-r-md">
                    <span class="avatar w-96">
                        <img src="{{ asset('images/'.$user->image.'') }}">
                        <i class="on b-white"></i>
                    </span>
                    </a>

                    <div class="clear m-b">
                        
                        <h3 class="m-a-0 m-b-xs">{{ $user->name }}</h3>
                        <p class="text-muted"><span class="m-r">{{ $user->profissao }}</span> <small><i class="fa fa-map-marker m-r-xs"></i>{{ $user->provincia->nome }}, {{ $user->pais->nome }}</small></p>
                        
                        <div class="block clearfix m-b">
                            <a href="" class="btn btn-icon btn-social rounded white btn-sm">
                                <i class="fa fa-facebook"></i>
                                <i class="fa fa-facebook indigo"></i>
                            </a>
                            <a href="" class="btn btn-icon btn-social rounded white btn-sm">
                                <i class="fa fa-twitter"></i>
                                <i class="fa fa-twitter light-blue"></i>
                            </a>
                            <a href="" class="btn btn-icon btn-social rounded white btn-sm">
                                <i class="fa fa-google-plus"></i>
                                <i class="fa fa-google-plus red"></i>
                            </a>
                            <a href="" class="btn btn-icon btn-social rounded white btn-sm">
                                <i class="fa fa-linkedin"></i>
                                <i class="fa fa-linkedin cyan-600"></i>
                            </a>
                        </div>
                    </div>

                </div>

            </div>
        </div>

 
        <div class="dker p-x">
            <div class="row">
                <div class="col-sm-6 push-sm-6">
                    <div class="p-y text-center text-sm-right">
                        <a href class="inline p-x text-center">
                            <span class="h4 block m-a-0 text-danger">{{ $pedidos }}</span>
                            <small class="text-xs " style="color:#ffcc00">Pedidos</small>
                        </a>
                        <a href class="inline p-x b-l b-r text-center">
                            <span class="h4 block m-a-0 text-danger">{{ $comprados }}</span>
                            <small class="text-xs " style="color:#ffcc00">Produtos comprados</small>
                        </a> 
                    </div>
                </div>
            </div>
        </div>
        
        <div class=" ">
            <div class="row">
                <div class="col-sm-8 col-lg-9">
                    <div class="tab-pane p-v-sm" id="tab_4">
                        <div class="row m-b">
                            <div class="col-xs-4">
                                <small class="text-muted">Usuario</small>
                                <div class="_500">{{ $user->surname }}</div>
                            </div>
                            <div class="col-xs-4 col-md-4">
                                <small class="text-muted">Celular / Contacto</small>
                                <div class="_500">{{ $user->number }}</div>
                            </div>
                            <div class="col-xs-4 col-md-4">
                                <small class="text-muted">Data de Nascimento</small>
                                <div class="_500">{{ $user->nascimento }}</div>
                            </div>
                            
                        </div>
                        <div class="row m-b">
                            <div class="col-xs-4 col-md-4">
                                <small class="text-muted">Profis.</small>
                                <div class="_500">{{ $user->profissao }}</div>
                            </div>
                            <div class="col-xs-4 col-md-4">
                                <small class="text-muted">Provincia</small>
                                <div class="_500">{{ $user->provincia_id }}</div>
                            </div>

                            <div class="col-xs-4 col-md-4">
                                <small class="text-muted">Data de Inscricao</small>
                                <div class="_500">{{ $user->created_at }}</div>
                            </div>
                        </div>
                         
                    </div>
                </div>
            </div>
        </div>
    
    </div>      
           
@endsection