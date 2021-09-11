@extends('layouts.master')
@section('content')
 


<!-- ############ PAGE START-->
<div class="padding">
	<div class="margin">
		<h5 class="m-b-0 _300">Hi <b>{{ Auth::User()->name }}</b>, Welcome back</h5>
	</div>
	<div class="row">
      <div class="col-sm-6 col-md-4 col-lg-4">
        <div class="box p-a">
          <div class="pull-left m-r">
            <span class="w-40 warn text-center rounded">
              <i class="material-icons">shopping_basket</i>
            </span>
          </div>
          <div class="clear">
            <h4 class="m-a-0 text-md"><a href>{{ $vendas }} <span class="text-sm">Vendas</span></a></h4>
            <small class="text-muted">{{ $pedidos }} esperando pagamento.</small>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-4">
        <div class="box-color p-a primary">
          <div class="pull-right m-l">
            <span class="w-40 dker text-center rounded">
              <i class="material-icons">local_shipping</i>
            </span>
          </div>
          <div class="clear">
            <h4 class="m-a-0 text-md"><a href> {{ $pedidos }} <span class="text-sm">Pedidos</span></a></h4>
            <small class="text-muted">{{ $vendas }} Entregues.</small>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-4">
        <div class="box p-a">
          <div class="pull-right m-l">
            <span class="w-40 accent text-center rounded">
              <i class="material-icons">people</i>
            </span>
          </div>
          <div class="clear">
            <h4 class="m-a-0 text-md"><a href>{{ $membros }} <span class="text-sm">Membro(s)</span></a></h4>
            <small class="text-muted">0 Banidos.</small>
          </div>
        </div>
      </div>
      
	</div>
	 
	<div class="row">
	    
	    <div class="col-md-12 col-xl-12">
	    	<div class="box">
	          <div class="box-header">
	            <h3>Actividades</h3>
	            <small>Meddelivery_admin</small>
	          </div>
	          <div class="box-tool">
		        <ul class="nav">
		          <li class="nav-item inline">
		            <a class="nav-link">
		              <i class="material-icons md-18">&#xe863;</i>
		            </a>
		          </li>
		          <li class="nav-item inline dropdown">
		            <a class="nav-link" data-toggle="dropdown">
		              <i class="material-icons md-18">&#xe5d4;</i>
		            </a>
		            <div class="dropdown-menu dropdown-menu-scale pull-right">
		              <a class="dropdown-item" href>This week</a>
		              <a class="dropdown-item" href>This month</a>
		              <a class="dropdown-item" href>This week</a>
		              <div class="dropdown-divider"></div>
		              <a class="dropdown-item">Today</a>
		            </div>
		          </li>
		        </ul>
		      </div>
	          <div class="box-body">
	            <ul>
					<li></li>
					<li></li>
				</ul>
	          </div>
	        </div>
	    </div>
	</div>

	 
</div>

<!-- ############ PAGE END-->

    </div>
  </div>

@endsection