@php
    use App\Models\Farmacia;
    $freq= Farmacia::where('status', '0')->count();  
@endphp

<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  
  <title>@yield('title')</title>
  <meta name="description" content="Admin, Dashboard, Bootstrap, Bootstrap 4, Angular, AngularJS" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  

  <!-- for ios 7 style, multi-resolution icon of 152x152 -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
  <link rel="apple-touch-icon" href="/images/logo.png">
  <meta name="apple-mobile-web-app-title" content="Flatkit">
  <!-- for Chrome on Android, multi-resolution icon of 196x196 -->
  <meta name="mobile-web-app-capable" content="yes"> 
  
  <!-- style -->
  <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}" type="text/css" />
  <link rel="stylesheet" href="{{ asset('css/glyphicons.css') }}" type="text/css" />
  <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" type="text/css" />
  <link rel="stylesheet" href="{{ asset('css/material-design-icons.css') }}" type="text/css" />

  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css" />
  <!-- build:css ../assets/styles/app.min.css -->
  <link rel="stylesheet" href="{{ asset('css/app2.css') }}" type="text/css" />
  <!-- endbuild -->
  <link rel="stylesheet" href="{{ asset('css/fonts/roboto/font.css') }}" type="text/css" />
  <link rel="stylesheet" href="{{ asset('dataTable/jquery.dataTables.min.css') }}"> 

</head>
<body>
  <div class="app" id="app">
 

  <!-- aside -->
  <div id="aside" class="app-aside box-shadow-z3 modal fade lg nav-expand">
    <div class="left navside white dk" layout="column">
      <div class="navbar navbar-md info no-radius box-shadow-z4">
        <!-- brand -->
        <a class="navbar-brand">
        	<div ui-include="/home/meddeliv/public_html/admin/images/medlogo.png"></div>
    			    <img src="{{ asset('images/medlogo.png') }}" alt="" style=" width: 144px; height: 38px; padding: inherit;  margin: 3px; ">
        </a>
        <!-- / brand -->
      </div>
      <div flex class="hide-scroll">
        @include('includes.header')
      </div>
      <div flex-no-shrink>
        <div>@include('includes.aside-bottom-1')</div>
      </div>
    </div>
  </div>
  <!-- / aside -->
  
  <!-- content -->
  <div id="content" class="app-content box-shadow-z3" role="main">
    <div class="app-header info box-shadow-z4 navbar-md">
      <div class="navbar">
          <!-- Open side - Naviation on mobile -->
          <a data-toggle="modal" data-target="#aside" class="navbar-item pull-left hidden-lg-up">
            <i class="material-icons">&#xe5d2;</i>
          </a>
          <!-- / -->
      
          <div class="navbar-item pull-left h5" ng-bind="$state.current.data.title" id="pageTitle"></div>
      
          <!-- navbar right -->
          <ul class="nav navbar-nav pull-right">
             
			
			<li class="nav-item dropdown">
              <a class="nav-link clear" href data-toggle="dropdown">
                <span class="avatar w-32">
                  <img  src="{{ asset('images/user.png') }}"  alt="...">
                  <i class="on b-white bottom"></i>
                </span>
              </a>
				<div class="dropdown-menu pull-right dropdown-menu-scale">
					<a class="dropdown-item" href="{{ route('farmacias/pedidos') }}">
						<span>Pedidos de adesão</span>
            <span class="label warn m-l-xs">{{ $freq }}</span>
					</a>
				 
					<a class="dropdown-item" href="{{ route('user_administrador.edit', ['id' => Auth::User()->id ]) }}">
						<span>configurações de usuario</span>
						<span class="label primary m-l-xs">x</span>
					</a>
						 
          <a class="dropdown-item" uhref="{{ route('logout') }}" onclick="event.preventDefault();  document.getElementById('logout-form').submit();">Sair</a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
				</div>
			</li>
			
            <li class="nav-item hidden-md-up">
              <a class="nav-link" data-toggle="collapse" data-target="#collapse">
                <i class="material-icons">&#xe5d4;</i>
              </a>
            </li>
          </ul>
          <!-- / navbar right -->
      
          <!-- navbar collapse -->
          <div class="collapse navbar-toggleable-sm" id="collapse">
  
            <!-- link and dropdown -->
            <ul class="nav navbar-nav">
              <li class="nav-item dropdown">
                <div>@include('includes.dropdown-new')</div>
              </li>
            </ul>
            <!-- / -->
          </div>
          <!-- / navbar collapse -->
      </div>
    </div>
    <div class="app-footer">
      <div class="p-a text-xs">
        <div class="pull-right text-muted">
          &copy; Copyright <strong>LEGOCODE</strong> <span class="hidden-xs-down">- Built with Love v1.1.2</span>
          <a ui-scroll-to="content"><i class="fa fa-long-arrow-up p-x-sm"></i></a>
        </div>
        <div class="nav">
          <a class="nav-link" href="http://legocode.com">About</a>
          <span class="text-muted">-</span>
          <a class="nav-link label accent" href="http://legocode.com">visite a LEGOCODE!</a>
        </div>
      </div>
    </div>
    <div class="app-body" id="view">

<!-- ############ PAGE START-->
  <div class="padding">
    @include('layouts.flash_messages')
    @yield('content')
  </div>

<!-- ############ PAGE END-->

  </div>
</div>
<!-- / -->
 
 

  </div>
<!-- build:js scripts/app.html.js -->
<!-- jQuery -->
  <script src="{{ asset('js/jquery.js') }}"></script>
  {{-- dataTable --}}
  <script src="{{ asset('dataTable/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('dataTable/script.js') }}"></script>

<!-- Bootstrap -->
  <script src="{{ asset('js/tether.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.js') }}"></script>
<!-- core -->
  <script src="{{ asset('js/underscore-min.js') }}"></script>
  <script src="{{ asset('js/jquery.storageapi.min.js') }}"></script>
  <script src="{{ asset('js/pace.min.js') }}"></script>
 

  <script src="{{ asset('js/custom.js') }}"></script>

  <script src="{{ asset('js/palette.js') }}"></script>
  <script src="{{ asset('js/ui-load.js') }}"></script>
  <script src="{{ asset('js/ui-jp.js') }}"></script>
  <script src="{{ asset('js/ui-include.js') }}"></script>
  <script src="{{ asset('js/ui-device.js') }}"></script>
  <script src="{{ asset('js/ui-form.js') }}"></script>
  <script src="{{ asset('js/ui-nav.js') }}"></script> 
  <script src="{{ asset('js/ui-scroll-to.js') }}"></script>
  <script src="{{ asset('js/ui-toggle-class.js') }}"></script>
  <!-- ajax -->
  <script src="{{ asset('js/jquery.pjax.js') }}"></script>
  {{-- <script src="{{ asset('js/ajax.js') }}"></script> --}}
  
<!-- endbuild -->
</body>
</html>