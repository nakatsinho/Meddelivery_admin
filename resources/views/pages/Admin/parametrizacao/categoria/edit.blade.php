@extends('layouts.master') 

@section('content')
  
    <div class=" "> 
       
        <div class="box">
            <div class="box-header " >
                <h3> Inserção de nova Sub-categoria </h3> 
            </div>
            <div class="box-body">
                <form id="form" name="form" action="{{ route('categoria.update', ['id' => $cat->id]) }}" enctype="multipart/form-data" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="row">
  
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nome da categoria</label>
                                    <input type="text" name="nome" value="{{ $cat->nome }}" id="nome" class="form-control"> 
                                </div>
    
                                <div class="form-group">
                                    <label>Info. Slug</label>
                                    <input type="text" name="info_slug" value="{{ $cat->info_slug }}" id="info_slug" class="form-control"> 
                                </div>
                              
                            </div>
                        
                        <div class="col-md-6">

                            <div class="form-group">
                                <label>Info. Cat</label>
                                <input type="text" name="info_cat"  value="{{ $cat->info_cat }}" id="info_cat"   class="form-control"> 
                            </div> 
                            
                            <div class="form-group">
                                <label>Imagem</label>
                                <input type="file" name="image"  value="{{ old('image') }}" id="image"   class="form-control"> 
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