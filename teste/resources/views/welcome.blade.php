<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        {{-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> --}}
        <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}" type="text/css" />

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <form action="" method="post">
                    @method('POST')
                    @csrf
                    <div class="row">
                
                        <div class="col-md-12">
                                  
                            <div class="form-group">
                                <label>Super Categoria</label>
                                    <select name="menu_id" id="menu_id" class="form-control menu_id js-example-basic-single js-example-basic-multiple js-states">
                                        <option selected hidden disabled>Selecione um Menu</option>
                                        @forelse ($men as $item) 
                                            <option value="{{ $item->id }}">{{ $item->nome }}</option>
                                        @empty
                                            <option selected disabled hidden>Sem Menus disponiveis!!</option>
                                        @endforelse
                                    </select>
                                <div><p style="color:red">{{ $errors->first('menu_id', 'Este campo é necessario') }}</p></div>
                            </div>
        
                            <div class="form-group">
                                <label>Categoria</label>
                                    <select name="category_id" id="category_id" class="form-control category_id">
                                        <option value=""> </option>
                                    </select>
                                    {{-- <select name="category_id" id="category_id" class="form-control js-example-basic-single js-example-basic-multiple js-states">
                                            <option selected hidden disabled>Selecione a categoria</option>
                                        @forelse ($cat as $item) 
                                            <option value="{{ $item->id }}">{{ $item->nome }}</option>
                                        @empty
                                            <option selected disabled hidden>Sem Menus disponiveis!!</option>
                                        @endforelse
                                    </select> --}}
                                <div><p style="color:red">{{ $errors->first('category_id', 'Este campo é necessario') }}</p></div>
                            </div>
        
                            <div class="form-group">
                                <label>Sub-categoria</label>
                                    <select name="subcategory_id" id="subcategory_id" class="form-control subcategory_id">
                                        <option value=""> </option>
                                    </select>
                                    {{-- <select name="subcategory_id" id="subcategory_id" class="form-control js-example-basic-single js-example-basic-multiple js-states">
                                        <option selected hidden disabled>Selecione subcategoria</option>
                                    @forelse ($subc as $item) 
                                        <option value="{{ $item->id }}">{{ $item->nome }}</option>
                                    @empty
                                        <option selected disabled hidden>Sem subcategorias disponiveis!!</option>
                                    @endforelse --}}
                                </select>
                                <div><p style="color:red">{{ $errors->first('subcategory_id', 'Este campo é necessario') }}</p></div>
                            </div>
                              
                        </div>
                        
                    </div>  
                </form>

            </div>
        </div>
        <script src="{{ asset('jquery.js') }}"></script>
        <script src="{{ asset('custom.js') }}"></script>
        <script src="{{ asset('jquery.pjax.js') }}"></script>

        <script>
 


    $('#menu_id').on('change', function(e) {
        console.log(e);
        var menu_id = e.target.value;
        var _token = $('input[name="_token"]').val();
        // alert(_token)
        $.get( '/ajaxc', { "_token": _token,"id": menu_id }).done(function( data ) {
            $('#category_id').empty();
        
            $.each(data, function(index, subcatObj) {
                // alert(subcatObj.nome)
                $('#category_id').append(' <option value=" '+subcatObj.id+' "> '+subcatObj.nome+'</option>'); 
            });
        });
    }) 

    $('#category_id').on('change', function(e) {
        console.log(e);
        var cat_id = e.target.value;

        $.post( '/ajax-subcat', { "_token": $('meta[name="csrf-token"]').attr('content'),"id": cat_id }).done(function( data ) {
            $('#subcategory_id').empty();
        
            $.each(data, function(index, subcatObj) {
                // alert(subcatObj.nome)
                $('#subcategory_id').append(' <option value=" '+subcatObj.id+' "> '+subcatObj.nome+'</option>'); 
            });
        });
    }) 


    

        </script>
    </body>
</html>
