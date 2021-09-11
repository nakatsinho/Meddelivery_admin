@extends('layouts.master')
@section('content')
  
    <div class=" ">   
        <div class="box">
            <div class="box-header b-b" >
                <h3> Editar dados </h3> 
            </div>
            <div class="box-body">
                <form id="form" name="form" action="{{ route('farmacia_produtos.update', ['id' => $prod->id]) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                  @csrf
                    <div class="row">
     
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Marca</label>
                                    <select name="marca_id" id="marca_id" class="form-control">
                                        @forelse ($marca as $item)
                                            <option value="{{ $item->id }}">{{ $item->nome }}</option>
                                        @empty
                                            <option selected disabled hidden>Sem Marcas registadas!!</option>
                                        @endforelse
                                    </select>
                                <div><p style="color:red">{{ $errors->first('marca_id', 'Este campo é necessario') }}</p></div>
                            </div>  
                        </div>  

                        <div class="col-md-6">
    
                            <input type="hidden" name="farmacia_id" value="{{ Auth::User()->farmacia_id }}">
                            <div class="form-group">
                                <label>Nome do produto</label>
                                <input type="text"  value="{{ $prod->nome_pro }}" id="nome_pro" name="nome_pro" class="form-control"> 
                                <div><p style="color:red">{{ $errors->first('nome_pro', 'Este campo é necessario') }}</p></div>
                            </div> 
    
                            <div class="form-group">
                                <label>Preço</label>
                                <input type="text" name="preco_pro"  value="{{ $prod->preco_pro }}" id="preco_pro" class="form-control">
                                <div><p style="color:red">{{ $errors->first('preco_pro', 'Este campo é necessario') }}</p></div>
                            </div> 
                            
                            <div class="form-group">
                                <label>Categoria</label>
                                    <select name="category_id" id="category_id" class="form-control">
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
                                    <select  name="subcategory_id" id="subcategory_id" class=" form-control">
                                        @forelse ($subcategory as $item)
                                            <option value="{{ $item->id }}">{{ $item->nome }}</option>
                                        @empty
                                            <option selected disabled hidden>Sem categorias disponiveis!!</option>
                                        @endforelse
                                    </select>
                                <div><p style="color:red">{{ $errors->first('subcategory_id', 'Este campo é necessario') }}</p></div>
                            </div>  
    
                        </div> 

                        <div class="col-md-6">
    
                            <div class="form-group">
                                <label>SPL Preço</label>
                                <input type="text"  value="{{ $prod->spl_price }}" id="spl_price" name="spl_price" class="form-control"> 
                                <div><p style="color:red">{{ $errors->first('spl_price', 'Este campo é necessario') }}</p></div>
                            </div> 
    
                            <div class="form-group">
                                <label>Taxa</label>
                                <input type="text" name="tax"  value="{{ $prod->tax }}" id="tax" class="form-control">
                                <div><p style="color:red">{{ $errors->first('tax', 'Este campo é necessario') }}</p></div>
                            </div> 
                            
                            <div class="form-group">
                                <label>Stock</label>
                                <input type="text"  value="{{ $prod->stock }}" id="stock" name="stock" class="form-control"> 
                                <div><p style="color:red">{{ $errors->first('stock', 'Este campo é necessario') }}</p></div>
                            </div>
    
                            <div class="form-group">
                                <label>Codigo do produto</label>
                                <input type="text"  value="{{ $prod->codigo_pro }}" id="codigo_pro" name="codigo_pro" class="form-control" > 
                                <div><p style="color:red">{{ $errors->first('codigo_pro', 'Este campo é necessario') }}</p></div>
                            </div>  
    
                        </div>
                   
                        <div class="col-md-12">

                            <div class="form-group">
                                <label>Imagem</label>
                                <input type="file"  id="image" name="image" class="form-control" style="-webkit-appearance: menulist-button;"> 
                                <div><p style="color:red">{{ $errors->first('image', 'Este campo é necessario') }}</p></div>
                            </div>   
                            
                            <div class="form-group">
                                <label>Descrição do produto</label>
                                <input name="info_pro" id="info_pro" maxlength="191" value="{{ $prod->info_pro }}" class=" py-3 form-control">
                                <div><p style="color:red">{{ $errors->first('info_pro', 'Este campo é necessario') }}</p></div>
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