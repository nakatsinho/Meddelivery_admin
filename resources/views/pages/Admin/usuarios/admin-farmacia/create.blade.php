 

 
@extends('layouts.master') 

@section('content')
<div class="padding">
    <div class="box">
            
             
        <div class="box-header">
            <span class="label danger pull-right"> </span>
            <h3>Usuarios (Farm_Admin)</h3>
        </div>
       
        <div class="box-body">
            <form method="POST" action="{{ route('user_farmacia.store') }}">
                @csrf
                <input type="hidden" id="user_group_id" name="user_group_id" value="2">

                <div class="form-group row">
                    <label for="farmacia_id" class="col-md-4 col-form-label text-md-right">{{ __('Fornecedor') }}</label>

                    <div class="col-md-6">
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

                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome de usuario') }}</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Senha') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmação Senha') }}</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-warning">
                            {{ __('Registar') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
         
    </div>
</div>
           
@endsection