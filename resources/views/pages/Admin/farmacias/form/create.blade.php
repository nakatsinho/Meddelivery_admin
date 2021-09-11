@extends('layouts.master')
@section('content')
  
    <div class="container"> 
        <br><br><br> 

        <div class="box">
            <div class="box-header b-b" >
                <b><h3> Inserção de novo produto </h3> 
            </div>
            <div class="box-body">
                <form id="form" name="form" action="{{ route('admin_farm.store') }}" method="POST" enctype="multipart/form-data">
                  @method('POST')
                  @csrf
                    <div class="row">
     
                        <div class="col-md-6">
    
                            <div class="form-group">
                                <label>Nome do produto</label>
                                <input type="text"  value="{{ old('nome_pro') }}" id="nome_pro" name="nome_pro" class="form-control"> 
                                <div><p style="color:red">{{ $errors->first('nome_pro', 'Este campo é necessario') }}</p></div>
                            </div> 
    
                            <div class="form-group">
                                <label>Preço</label>
                                <input type="text" name="preco_pro"  value="{{ old('preco_pro') }}" id="preco_pro" class="form-control">
                                <div><p style="color:red">{{ $errors->first('preco_pro', 'Este campo é necessario') }}</p></div>
                            </div> 
                            
                            <div class="form-group">
                                <label>Categoria</label>
                                    <select class="form-control" name="category_id" id="category_id">
                                        @forelse ($category as $item)
                                            <option value="{{ $item->id }}">{{ $item->nome }}</option>
                                        @empty
                                            <option selected disabled hidden>Sem categorias disponiveis!!</option>
                                        @endforelse
                                    </select>
                                <div><p style="color:red">{{ $errors->first('category_id', 'Este campo é necessario') }}</p></div>
                            </div>
    
                            <div class="form-group">
                                <label>Sub-categoria</label>
                                    <select class="form-control" name="subcategory_id" id="subcategory_id">
                                        @forelse ($subcategory as $item)
                                            <option value="{{ $item->id }}">{{ $item->nome }}</option>
                                        @empty
                                            <option selected disabled hidden>Sem categorias disponiveis!!</option>
                                        @endforelse
                                    </select>
                                <div><p style="color:red">{{ $errors->first('subcategory_id', 'Este campo é necessario') }}</p></div>
                            </div>  

                            <div class="form-group">
                                <label>Fornecedor</label>
                                    <select class="form-control" name="farmacia_id" id="farmacia_id">
                                        @forelse ($farmacias as $item)
                                            <option value="{{ $item->id }}">{{ $item->nome }}</option>
                                        @empty
                                            <option selected disabled hidden>Sem Fornecedores disponiveis!!</option>
                                        @endforelse
                                    </select>
                                <div><p style="color:red">{{ $errors->first('farmacia_id', 'Este campo é necessario') }}</p></div>
                            </div>
    
                        </div> 

                        <div class="col-md-6">
    
                            <div class="form-group">
                                <label>SPL Preço</label>
                                <input type="text"  value="{{ old('spl_price') }}" id="spl_price" name="spl_price" class="form-control"> 
                                <div><p style="color:red">{{ $errors->first('spl_price', 'Este campo é necessario') }}</p></div>
                            </div> 
    
                            <div class="form-group">
                                <label>Taxa</label>
                                <input type="text" name="tax"  value="{{ old('tax') }}" id="tax" class="form-control">
                                <div><p style="color:red">{{ $errors->first('tax', 'Este campo é necessario') }}</p></div>
                            </div> 
                            
                            <div class="form-group">
                                <label>Stock</label>
                                <input type="text"  value="{{ old('stock') }}" id="stock" name="stock" class="form-control"> 
                                <div><p style="color:red">{{ $errors->first('stock', 'Este campo é necessario') }}</p></div>
                            </div>
    
                            <div class="form-group">
                                <label>Codigo do produto</label>
                                <input type="text"  value="{{ old('codigo_pro') }}" id="codigo_pro" name="codigo_pro" class="form-control" > 
                                <div><p style="color:red">{{ $errors->first('codigo_pro', 'Este campo é necessario') }}</p></div>
                            </div>  
    
                            <div class="form-group">
                                <label>Imagem</label>
                                <input type="file" id="image" name="image" class="form-control" style="-webkit-appearance: menulist-button;"> 
                                <div><p style="color:red">{{ $errors->first('image', 'Este campo é necessario') }}</p></div>
                            </div> 

                        </div>
                   
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Descrição do produto</label>
                                <textarea name="info_pro" id="info_pro" cols="30" rows="3" class=" py-3 form-control"></textarea>
                                <div><p style="color:red">{{ $errors->first('info_pro', 'Este campo é necessario') }}</p></div>
                            </div>
                        </div>
    
                    </div>   
    
                    <button class="btn btn-warning btn-sm" type="submit" >Cadastrar</button>
                          
                </form>
            </div>
        </div>        
    </div> 

@endsection