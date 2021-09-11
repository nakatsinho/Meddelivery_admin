 
 
@extends('layouts.master') 

@section('content')
  
    <div class=" "> 
       
        <div class="box">
            <div class="box-header " >
                <h3> Inserção de nova Sub-categoria </h3> 
            </div>
            <div class="box-body">
            <form id="form" name="form" action="{{ route('subcategoria.update', ['id' => $subcat->id]) }}" enctype="multipart/form-data" method="POST">
                  @method('PUT')
                  @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nome da Subcategoria</label>
                                <input type="text" name="nome" value="{{ $subcat->nome }}" id="nome" class="form-control"> 
                            </div>

                            <div class="form-group">
                                <label>Info. Slug</label>
                                <input type="text" name="info_slug" value="{{ $subcat->info_slug }}" id="info_slug" class="form-control"> 
                            </div>
                            
                        </div>

                        <div class="col-md-6">

                        <div class="form-group">
                            <label>Info. Sub</label>
                            <input type="text" name="info_sub"  value="{{ $subcat->info_sub }}" id="info_sub"   class="form-control"> 
                        </div> 
                        
                        <div class="form-group">
                            <label>Imagem</label>
                            <input type="file" name="image"  value="{{ $subcat->image }}" id="image"   class="form-control"> 
                        </div> 

                        </div> 

                        <div class="col-md-12">

                        <div class="form-group">
                            <label>Subcategoria</label>
                            <select name="category_id" class="form-control" id="category_id">
                                @forelse ($categoria as $row)
                                    <option value="{{ $row->id }}">{{ $row->nome }}</option>
                                @empty
                                    <option value="" selected disabled hidden>Sem categorias disponiveis!!</option>
                                @endforelse
                            </select>
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