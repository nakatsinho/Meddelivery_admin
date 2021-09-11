@extends('layouts.master') 

@section('content')
  
    <div class=" "> 
       
        <div class="box">
            <div class="box-header " >
                <h3> Inserção de nova Marca </h3> 
            </div>
            <div class="box-body">
                <form id="form" name="form" action="{{ route('marca.store') }}"  method="POST">
                    @method('POST')
                    @csrf

                    <div class="row">

                        <div class="col-md-12">

                            <div class="form-group">
                                <label>Nome da categoria</label>
                                <input type="text" name="nome" value="{{ old('nome') }}" id="nome" class="form-control"> 
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