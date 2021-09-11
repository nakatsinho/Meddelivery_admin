 
@extends('layouts.master') 

@section('content')
<div class="padding">
    <form id="form" name="form" action="{{ route('empresa.update', ['id' => $data->id]) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="box">
          <div class="box-header">
            <h2>Dados da empresa (Meddelivery)</h2>
          </div>
          <div class="box-body">
            <p class="text-muted">Preencha os dados da empresa</p>                        
              
              <div class="row m-b">
                <div class="col-sm-6">
                  <label>Nome da empresa</label>
                  <input type="text" name="nome" value="{{ $data->nome }}" class="form-control" >
                  <div><p style="color:red">{{ $errors->first('nome') }}</p></div>
                </div>
                <div class="col-sm-6">
                  <label>Endereço 1</label>
                  <input type="text" class="form-control" value="{{ $data->endereco }}" name="endereco">
                  <div><p style="color:red">{{ $errors->first('endereco') }}</p></div>
                </div>
              </div>

              <div class="row m-b">
                <div class="col-sm-6">
                  <label>Endereço 2</label>
                  <input type="text" class="form-control" value="{{ $data->endereco1 }}" name="endereco1">
                  <div><p style="color:red">{{ $errors->first('endereco2') }}</p></div>
                </div>
                <div class="col-sm-6">
                  <label>Endereço 3</label>
                  <input type="text" class="form-control" value="{{ $data->endereco2 }}" name="endereco2">
                  <div><p style="color:red">{{ $errors->first('endereco3') }}</p></div>
                </div>
              </div>

              <div class="form-group"> 
                <label>NUIT</label>
                <input type="number" name="nuit" value="{{ $data->nuit }}" class="form-control"> 
                <div><p style="color:red">{{ $errors->first('nuit') }}</p></div>
              </div>

              <div class="row m-b">
                <div class="col-sm-6">
                  <label>Contacto 1</label>
                  <input type="contacto1" name="contacto1" class="form-control" value="{{ $data->contacto1 }}">
                  <div><p style="color:red">{{ $errors->first('contacto1') }}</p></div>
                </div>
                <div class="col-sm-6">
                  <label>Contacto 2</label>
                  <input type="text" class="form-control" name="contacto2" value="{{ $data->contacto2 }}">
                  <div><p style="color:red">{{ $errors->first('contacto2') }}</p></div>
                </div>
              </div>
              
              <div class="row m-b">
                <div class="col-sm-6">
                  <label>Director</label>
                  <input type="text" name="director" value="{{ $data->director }}" class="form-control">
                  <div><p style="color:red">{{ $errors->first('director') }}</p></div>
                </div> 

                <div class="col-sm-6">
                  <label>Funcionarios</label>
                  <input type="text" class="form-control" value="{{ $data->funcionarios }}" name="funcionarios">
                  <div><p style="color:red">{{ $errors->first('funcionarios') }}</p></div>
                </div>
              </div>
              
              <div class="form-group">
                <label>Liçença</label>
                <input type="text" value="{{ $data->licenca }}" class="form-control" name="licenca">
                <div><p style="color:red">{{ $errors->first('licenca') }}</p></div>
              </div>
              
          </div>
          <div class="dker p-a text-right">
            <button type="submit" class="btn btn-warning">Submeter</button>
          </div>
        </div>
      </form>
</div>
           
@endsection