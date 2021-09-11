@extends('layouts.master')
@section('content')
  
    <div class="container"> 
        <br><br><br> 

        <div class="box">
            <div class="box-header b-b" >
                <b><h3 class="text-center"> Inserção de nova venda </h3></b> <hr> <hr>
            </div>
            <div class="box-body">
                <form id="form" name="form" action="{{ route('vendas.store') }}" method="POST" enctype="multipart/form-data">
                  @method('POST')
                  @csrf
                    <div class="row">
     
                        <div class="col-md-6">
    
                                <input type="hidden" name="stock" value="">
                            <div class="form-group">
                                <label>Farmácia</label>
                                    <select name="farmacia_id" id="farmacia_id">
                                        @forelse ($farmacias as $item)
                                            <option value="{{ $item->id }}">{{ $item->nome }} {{ ($item->id) }}</option>
                                        @empty
                                            <option selected disabled hidden>Sem Fornecedores disponiveis!!</option>
                                        @endforelse
                                    </select>
                                <div><p style="color:red">{{ $errors->first('farmacia_id', 'Este campo é necessario') }}</p></div>
                            </div>
                      
                            <div class="form-group">
                                <label>Quantidade</label>
                                <input type="number" name="quantidade"  value="{{ old('quantidade') }}" id="quantidade" class="form-control">
                                <div><p style="color:red">{{ $errors->first('quantidade', 'Este campo é necessario') }}</p></div>
                            </div> 

                        </div> 

                        <div class="col-md-6">
                             
                            <div class="form-group">
                                <label>Produto</label>
                                    <select name="pro_id" id="pro_id">
                                        @forelse ($produtos as $item)
                                            <option value="{{ $item->id }}">{{ $item->nome_pro }}</option>
                                        @empty
                                            <option selected disabled hidden>Sem categorias disponiveis!!</option>
                                        @endforelse
                                    </select>
                                <div><p style="color:red">{{ $errors->first('pro_id', 'Este campo é necessario') }}</p></div>
                            </div>

                            <div class="form-group">
                                <label>Preço</label>
                                <input type="text"  value="{{ old('preco_prod') }}" id="preco_prod" name="preco_prod" class="form-control"> 
                                <div><p style="color:red">{{ $errors->first('stock', 'Este campo é necessario') }}</p></div>
                            </div>
    
                        </div>
                   
                    </div>   
    
                    <button class="btn btn-success btn-outline-warning btn-block z-depth-0 my-4 waves-effect" type="submit" >Cadastrar</button>
                          
                </form>
            </div>
        </div>        
    </div> 

@endsection