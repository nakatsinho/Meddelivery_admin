@if (Auth::user()->user_group_id == 1)
 {{-- Admin area --}}
    <nav class="scroll"> 
          
        <ul class="nav" ui-nav>
          <li class="nav-header hidden-folded">
            <small class="text-muted">Main</small>
          </li>
          
          <li>
            <a href="{{ route('home') }}" >
              <span class="nav-icon">
                <i class="material-icons">&#xe3fc;
                  <span ui-include="{{ asset('images/i_0.svg') }}"></span>
                </i>
              </span>
              <span class="nav-text">Pagina inicial</span>
            </a>
          </li> <hr>
          
          <li>
            <a href="{{ route('farmacias') }}" >
              <span class="nav-icon">
                <i class="material-icons">&#xe548;
                  <span ui-include="'../assets/images/i_3.svg'"></span>
                </i>
              </span> 
              <span class="nav-text">Fornecedores<b style="color:red">  </b> </span>  
            </a>
          </li>

          <li>
            <a>
              <span class="nav-caret">
                <i class="fa fa-caret-down"></i>
              </span>
              <span class="nav-label">
                <b class="label label-sm yellow">2</b>
              </span>
              <span class="nav-icon">
                <i class="material-icons">&#xe545;
                  <span ui-include="'../assets/images/i_7.svg'"></span>
                </i>
              </span>
              <span class="nav-text">Medicamentos</span>
            </a>
            <ul class="nav-sub nav-mega nav-mega-3">
              <li>
                <a href="{{ route('produtos') }}" >
                  <span class="nav-text">Ver todos</span>
                </a>
              </li> 
              <li>
                <a href="{{ route('produtos_geral.create') }}" >
                  <span class="nav-text">Adicionar novo</span>
                </a>
              </li> 
            </ul>
          </li> 

          <li>
          <a href="{{ route('pedidos.index') }}" >
              <span class="nav-icon">
                <i class="material-icons">&#xe895;
                  <span ui-include="'../assets/images/i_7.svg'"></span>
                </i>
              </span>
              <span class="nav-text">Vendas / Pedidos</span>
            </a>
          </li>

          <li>
            <a href="{{ route('farmacias/pedidos') }}" >
              <span class="nav-icon">
                <i class="material-icons">&#xe3cd;
                  <span ui-include="'../assets/images/i_7.svg'"></span>
                </i>
              </span>
              <span class="nav-text">Pedidos de Adesão</span>
            </a> 
          </li>
 
          <li class="nav-header hidden-folded">
            <small class="text-muted">Componentes</small>
          </li>
      
          <li>
            <a>
              <span class="nav-caret">
                <i class="fa fa-caret-down"></i>
              </span>
              <span class="nav-label">
                <b class="label label-sm accent">1</b>
              </span>
              <span class="nav-icon">
                <i class="material-icons">&#xe429;
                  <span ui-include="'../assets/images/i_4.svg'"></span>
                </i>
              </span>
              <span class="nav-text">Ferramentas</span>
            </a>
            <ul class="nav-sub nav-mega nav-mega-3">
              <li>
                <a href="{{ route('empresa.index') }}" >
                  <span class="nav-text">Empresa</span>
                </a>
              </li> 
            </ul>
          </li>
      
          <!-- <li>
            <a>
              <span class="nav-caret">
                <i class="fa fa-caret-down"></i>
              </span>
              <span class="nav-label">
                <b class="label label-sm warning">2</b>
              </span>
              <span class="nav-icon">
                <i class="material-icons">&#xe3e8;
                  <span ui-include="'../assets/images/i_5.svg'"></span>
                </i>
              </span>
              <span class="nav-text">Paginas</span>
            </a>
            <ul class="nav-sub nav-mega">
              <li>
                <a href="{{ route('fixing') }}" >
                  <span class="nav-text">Termos e condicoes</span>
                </a>
              </li>
              <li>
              <a href="{{ route('fixing') }}" >
                  <span class="nav-text">Politica de Privacidade</span>
                </a>
              </li>
            </ul>
          </li> -->
      
          <li>
            <a>
              <span class="nav-caret">
                <i class="fa fa-caret-down"></i>
              </span>
              <span class="nav-label">
                <b class="label label-sm success">3</b>
              </span>
              <span class="nav-icon">
                <i class="material-icons">&#xe896;
                  <span ui-include="'../assets/images/i_7.svg'"></span>
                </i>
              </span>
              <span class="nav-text">Parametros</span>
            </a>
            <ul class="nav-sub">
              <li>
                <a href="{{ route('categoria.index') }}" >
                  <span class="nav-text">Categorias</span>
                </a>
              </li>
              <li>
               <a href="{{ route('marca.index') }}" >
                  <span class="nav-text">Marcas</span>
                </a>
              </li>
              <li>
                <a href="{{ route('menu.index') }}" >
                  <span class="nav-text">Supercategoria</span>
                </a>
              </li>
              <li>
              <a href="{{ route('subcategoria.index') }}" >
                  <span class="nav-text">Subcategorias</span>
                </a>
              </li>
            </ul>
          </li> 

          <li>
            <a>
              <span class="nav-caret">
                <i class="fa fa-caret-down"></i>
              </span>
              <span class="nav-label">
                <b class="label label-sm orimary">3</b>
              </span>
              <span class="nav-icon">
                <i class="material-icons">&#xe8d3;
                  <span ui-include="'../assets/images/i_5.svg'"></span>
                </i>
              </span>
              <span class="nav-text">Usuarios</span>
            </a>
            <ul class="nav-sub nav-mega">
              <li>
                <a href="{{ route('user_administrador.index') }}" >
                  <span class="nav-text">Administrador</span>
                </a>
              </li>
              <li>
                <a href="{{ route('user_comprador.index') }}" >
                  <span class="nav-text">Comprador</span>
                </a>
              </li>
              <li>
                <a href="{{ route('user_farmacia.index') }}" >
                  <span class="nav-text">Fornecedores</span>
                </a>
              </li>
            </ul>
          </li>
           
          <li class="nav-header hidden-folded">
            <small class="text-muted">Ajuda</small>
          </li>
          <li>
            <a>  
              <span class="nav-icon">
                <i class="material-icons">&#xe1b8;
                  <span ui-include="'../assets/images/i_8.svg'"></span>
                </i>
              </span>
              <span class="nav-text">FAQ</span>
            </a>
          </li>
           
        </ul>
    </nav>
 
    @else
    
    <nav class="scroll"> 
      <ul class="nav" ui-nav>
        <li class="nav-header hidden-folded">
          <small class="text-muted">Main</small>
        </li>
        
        <li>
          <a href="{{ route('home') }}" >
            <span class="nav-icon">
              <i class="material-icons">&#xe3fc;
                <span ui-include="{{ asset('images/i_0.svg') }}"></span>
              </i>
            </span>
            <span class="nav-text">Pagina inicial</span>
          </a>
        </li> <hr>
        
        <li>
          <a href="{{ route('farmacias.detalhes', ['id'=> Auth::User()->farmacia_id]) }}" >
            <span class="nav-icon">
              <i class="material-icons">&#xe548;
                <span ui-include="'../assets/images/i_3.svg'"></span>
              </i>
            </span> 
            <span class="nav-text">Minha Farmácia<b style="color:red">  </b> </span>  
          </a>
        </li>

        <li>
          <a href="{{ route('farmacia_produtos.index') }}" >
            <span class="nav-icon">
              <i class="material-icons">&#xe545;
                <span ui-include="'../assets/images/i_3.svg'"></span>
              </i>
            </span> 
            <span class="nav-text">Ver Produtos<b style="color:red">  </b> </span>  
          </a>
        </li>

        <li>
          <a href="{{ route('farmacia_produtos.create') }}" >
            <span class="nav-icon">
              <i class="material-icons">&#xe22b;
                <span ui-include="'../assets/images/i_3.svg'"></span>
              </i>
            </span> 
            <span class="nav-text">Adicionar novo<b style="color:red">  </b> </span>  
          </a>
        </li>

         
        

        <li>
        <a href="{{ route('produtos_vendidos.index') }}" >
            <span class="nav-icon">
              <i class="material-icons">&#xe0b2;
                <span ui-include="'../assets/images/i_7.svg'"></span>
              </i>
            </span>
            <span class="nav-text">Produtos Vendidos</span>
          </a>
        </li>

        <li>
            <a>
              <span class="nav-caret">
                <i class="fa fa-caret-down"></i>
              </span>
              <span class="nav-label">
                <b class="label label-sm success">1</b>
              </span>
              <span class="nav-icon">
                <i class="material-icons">&#xe896;
                  <span ui-include="'../assets/images/i_7.svg'"></span>
                </i>
              </span>
              <span class="nav-text">Parametros</span>
            </a>
            <ul class="nav-sub">
              <li>
               <a href="{{ route('marca.index') }}" >
                  <span class="nav-text">Marcas</span>
                </a>
              </li>
            </ul>
          </li> 
          
    </nav>

@endif