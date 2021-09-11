@extends('layouts.master') 

@section('content')
  
    <div class=" "> 
       
        <div class="box">
            <div class="box-header " >
                <h3> Atualização de Marca </h3> 
            </div>
            <div class="box-body">
                <form id="form" name="form" action="{{ route('marca.update', ['id' => $marca->id]) }}"  method="POST">
                    @method('PUT')
                    @csrf

                    <div class="row">

                        <div class="col-md-12">

                            <div class="form-group">
                                <label>Nome da categoria</label>
                                <input type="text" name="nome" value="{{ $marca->nome }}" id="nome" class="form-control"> 
                            </div>

                        </div>
        
                    </div>  
                    
                    <div class="dker p-a text-right">
                        <button type="submit" class="btn btn-warning">Submeter</button>
                    </div>
                        
                </form>
            </div>
        </div>        
    </div> 

@endsection