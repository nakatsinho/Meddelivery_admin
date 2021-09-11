 
@extends('layouts.master') 

@section('content')
  
    <div class=" "> 
       
        <div class="box">
            <div class="box-header " >
                <b><h3> Atualização Fornecedor </h3> 
            </div>
            <div class="box-body">
                <form id="form" name="form" action="{{ route('farmacia.update', ['id' => $farm->id]) }}" method="POST" enctype="multipart/form-data">
                  @method('PUT')
                  @csrf
                    <div class="row">
                      
                        <div class="col-md-4">
                            <input type="hidden" name="verification">
                            <input type="hidden" name="status" value="1">
                            <div class="form-group">
                                <label>Nome da farmacia</label>
                                <input type="text"  value="{{ $farm->nome }}" id="nome" name="nome" class="form-control"> 
                                <div><p style="color:red">{{ $errors->first('nome', 'Este campo é necessario') }}</p></div>
                            </div> 
    
                            <div class="form-group">
                                <label>Titular</label>
                                <input type="text" name="titular"  value="{{ $farm->titular }}" id="titular" class="form-control">
                                <div><p style="color:red">{{ $errors->first('titular', 'Este campo é necessario') }}</p></div>
                            </div> 
                            
                            <div class="form-group">
                                <label>NUIT</label>
                                <input type="text" name="nuit"  value="{{ $farm->nuit }}" id="nuit" class="form-control">
                                <div><p style="color:red">{{ $errors->first('nuit', 'Este campo é necessario') }}</p></div>
                            </div> 
    
                            <div class="form-group">
                                <label>Localização</label>
                                <input type="text" name="location"  value="{{ $farm->location }}" id="location" class="form-control">
                                <div><p style="color:red">{{ $errors->first('location', 'Este campo é necessario') }}</p></div>
                            </div> 

                            <div class="form-group">
                                <label>Descrição</label>
                                <input type="text" name="descricao"  value="{{ $farm->descricao }}" id="descricao" class="form-control">
                                <div><p style="color:red">{{ $errors->first('descricao', 'Este campo é necessario') }}</p></div>
                            </div> 
    
                        </div> 

                        <div class="col-md-4">
    
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text"  value="{{ $farm->email }}" id="email" name="email" class="form-control"> 
                                <div><p style="color:red">{{ $errors->first('email', 'Este campo é necessario') }}</p></div>
                            </div> 
    
                            <div class="form-group">
                                <label>Contacto (celular)</label>
                                <input type="text" name="number"  value="{{ $farm->number }}" id="number" class="form-control">
                                <div><p style="color:red">{{ $errors->first('number', 'Este campo é necessario') }}</p></div>
                            </div>  

                            <div class="form-group">
                                <label>Pais</label>
                                <select class="form-control" name="pais_id" id="pais_id">
                                    @foreach($pais as $row)
                                        <option value="{{ $row->id}}">{{ $row->nome }}</option>
                                    @endforeach
                                </select>
                            </div>  
    
                            <div class="form-group">
                                <label>Provincia</label>
                                <select class="form-control" name="provincia_id" id="provincia_id">
                                    @foreach($prov as $row)
                                        <option value="{{ $row->id}}">{{ $row->nome }}</option>
                                    @endforeach
                                </select>
                            </div>   

                            <div class="form-group">
                                <label>Bairro</label>
                                <select class="form-control" name="bairro_id" id="bairro_id">
                                    @foreach($bairro as $row)
                                        <option value="{{ $row->id}}">{{ $row->nome }}</option>
                                    @endforeach
                                </select>
                            </div> 
                        </div>

                        <div class="col-md-4">
    
                            <div class="form-group">
                                <label>Quarteirão</label>
                                <input type="text" name="quarteirao"  value="{{ $farm->quarteirao }}" id="quarteirao" class="form-control">
                                <div><p style="color:red">{{ $errors->first('quarteirao', 'Este campo é necessario') }}</p></div>
                            </div> 
                            
                            <div class="form-group">
                                <label>Video_link</label>
                                <input type="text"  value="{{ $farm->video_link }}" id="video_link" name="video_link" class="form-control"> 
                                <div><p style="color:red">{{ $errors->first('video_link', 'Este campo é necessario') }}</p></div>
                            </div> 
    
                            <div class="form-group">
                                <label>Imagem Farmacia</label>
                                <input type="file" id="image_empresa" name="image_empresa" class="form-control" style="-webkit-appearance: menulist-button;"> 
                                <div><p style="color:red">{{ $errors->first('image_empresa', 'Este campo é necessario e coloque somente imagens com os formatos "jpg, jpeg, png" ') }}</p></div>
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