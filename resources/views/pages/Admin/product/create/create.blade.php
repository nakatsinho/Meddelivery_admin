
<meta name="csrf-token" content="{!! csrf_token() !!}">
@extends('layouts.master')
@section('head')
@endsection
@section('content')
    <div class=" ">  
        <div class="box">
            <div class="box-header " >
                <h3 class=" "> <b>Inserção de novo produto </b></h3>
            </div>
            <div class="box-body">
                <form id="form" name="form" action="{{ route('produtos_geral.store') }}" method="POST" enctype="multipart/form-data">
                  @method('POST')
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

                        <div class="col-md-4">
    
                            <div class="form-group">
                                <label>Nome do produto</label>
                                <input type="text"  value="{{ old('nome_pro') }}" id="nome_pro" name="nome_pro" class="form-control"> 
                                <div><p style="color:red">{{ $errors->first('nome_pro', 'Este campo é necessario') }}</p></div>
                            </div> 
    
                            <div class="form-group">
                                <label>Preço de venda</label>
                                <input type="text" name="preco_pro"  value="{{ old('preco_pro') }}" id="preco_pro" class="form-control">
                                <div><p style="color:red">{{ $errors->first('preco_pro', 'Este campo é necessario') }}</p></div>
                            </div> 
                            

                            <div class="form-group">
                                <label>Preço antigo</label>
                                <input type="text"  value="{{ old('spl_price') }}" id="spl_price" name="spl_price" class="form-control"> 
                                <div><p style="color:red">{{ $errors->first('spl_price', 'Este campo é necessario') }}</p></div>
                            </div> 

                            <div class="form-group">
                                <label>Stock</label>
                                <input type="text"  value="{{ old('stock') }}" id="stock" name="stock" class="form-control"> 
                                <div><p style="color:red">{{ $errors->first('stock', 'Este campo é necessario') }}</p></div>
                            </div>

                        </div> 

                        <div class="col-md-4">
                              
                            <div class="form-group">
                                <label>Super Categoria</label>
                                    <select name="menu_id" id="menu_id" class="form-control menu_id js-example-basic-single js-example-basic-multiple js-states">
                                        <option selected hidden disabled>Selecione um Menu</option>
                                        @forelse ($menu as $item) 
                                            <option value="{{ $item->id }}">{{ $item->nome }}</option>
                                        @empty
                                            <option selected disabled hidden>Sem Menus disponiveis!!</option>
                                        @endforelse
                                    </select>
                                <div><p style="color:red">{{ $errors->first('menu_id', 'Este campo é necessario') }}</p></div>
                            </div>

                            <div class="form-group">
                                <label>Categoria</label>
                                    {{-- <select name="category_id" id="category_id" class="form-control category_id">
                                        <option value=""> </option>
                                    </select> --}}
                                    <select name="category_id" id="category_id" class="form-control js-example-basic-single js-example-basic-multiple js-states">
                                            <option selected hidden disabled>Selecione a categoria</option>
                                        @forelse ($cat as $item) 
                                            <option value="{{ $item->id }}">{{ $item->nome }}</option>
                                        @empty
                                            <option selected disabled hidden>Sem Menus disponiveis!!</option>
                                        @endforelse
                                    </select>
                                <div><p style="color:red">{{ $errors->first('category_id', 'Este campo é necessario') }}</p></div>
                            </div>
    
                            <div class="form-group">
                                <label>Sub-categoria</label>
                                    {{-- <select name="subcategory_id" id="subcategory_id" class="form-control subcategory_id">
                                        <option value=""> </option>
                                    </select> --}}
                                    <select name="subcategory_id" id="subcategory_id" class="form-control js-example-basic-single js-example-basic-multiple js-states">
                                        <option selected hidden disabled>Selecione subcategoria</option>
                                    @forelse ($subcat as $item) 
                                        <option value="{{ $item->id }}">{{ $item->nome }}</option>
                                    @empty
                                        <option selected disabled hidden>Sem subcategorias disponiveis!!</option>
                                    @endforelse
                                </select>
                                <div><p style="color:red">{{ $errors->first('subcategory_id', 'Este campo é necessario') }}</p></div>
                            </div>  

                            <div class="form-group">
                                <div class="form-group">
                                    <label>Fornecedor</label>
                                        <select name="farmacia_id" id="farmacia_id" class="form-control">
                                            @forelse ($farm as $item)
                                                <option value="{{ $item->id }}">{{ $item->nome }}</option>
                                            @empty
                                                <option selected disabled hidden>Sem Fornecedores disponiveis!!</option>
                                            @endforelse
                                        </select>
                                    <div><p style="color:red">{{ $errors->first('farmacia_id', 'Este campo é necessario') }}</p></div>
                                </div>  
                            </div>  
    
                        </div>
                   
                        <div class="col-md-4">
                           

                            <div class="form-group">
                                <label>Imagem</label>
                                <input type="file" id="image" name="image"  class="form-control" style="-webkit-appearance: menulist-button;"> 
                                <div><p style="color:red">{{ $errors->first('image', 'Este campo é obrigatorio') }}</p></div>
                            </div> 

                            <div class="form-group">
                                <label>Codigo do produto</label>
                                <input type="text"  value="{{ old('codigo_pro') }}" id="codigo_pro" name="codigo_pro" class="form-control" > 
                                <div><p style="color:red">{{ $errors->first('codigo_pro', 'Este campo é necessario') }}</p></div>
                            </div>  
                            
                            <div class="form-group">
                                <label>Descrição do produto</label>
                                <textarea name="info_pro" id="info_pro" cols="30" rows="5" maxlength="191" class=" py-3 form-control"></textarea>
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