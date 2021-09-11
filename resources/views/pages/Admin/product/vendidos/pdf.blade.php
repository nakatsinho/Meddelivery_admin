  
<style>
    
        .pdf-container{
            position: relative;
        }
        .header-wrapper{
            text-align: center;
            margin: 0% 0 45px 0;
        }
        .logo{
            width: 120px;
            display: block;
        }
       
        {{--  For portrait  --}}
         .logo2{
            width: 770px;
            display: block;
        } 
    
        .address{
            margin: 20;
            text-align: right;
        }
    
        .address2{
            margin: 5;
            text-align: left;
        }
    
        .address3{
            margin: 5;
            text-align: center;
        }
    
        
    
        .footer-wrapper{
            position: absolute;
            bottom: -30; 
        }
        table {
            border-collapse: collapse;
        }
          
        table, th, td {
            border: 1px solid #808080;
        }
    
        th, td {
            padding: 15px;
            text-align: left;
          }
    
    </style>
    
    
<div class="container">
    <section class="order_details section_gap">
            <div class="container">

                <div class="  text-center"> 
                    <img class="logo" src="{{ ('/home/meddeliv/public_html/admin/images/medlogo.png') }}" /> <hr>
                </div>
               
                <h3 class="title_confirmation " style="color:black; text-align:center">Registo de venda </h3>
                
                <div class="row order_d_inner">
                    
                    <div class="col-lg-6">
                        <div class="details_item">
                            <h4> Dados de compra </h4>
                            <ul class="list">
                                <li><a><span>Produto</span> : <b>{{ $prod->produto->nome_pro }}</b></a></li>
                                <li><a><span>Fornecedor</span> : <b> {{ $prod->farmacia->nome}}</b> </a></li>
                                <li><a><span>Quantidade</span> : <b>{{ $prod->quantidade }}</b></a></li> 
                                <li><a><span>Preço Unit.</span> : <b>{{ number_format($prod->preco_prod,2) }}</b></a></li><br>
                                <li><a><span>Total pago.</span> : <b>{{ number_format($prod->preco_prod * $prod->quantidade,2) }}</b></a></li><br>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="details_item">
                            <h4> Farmácia vendedora </h4>
                            <ul class="list">
                                <li><a><span>Fornecedor</span> : <b> {{ $prod->farmacia->nome}}</b> </a></li>
                                <li><a><span>Titular</span> : <b>{{ $prod->farmacia->titular }}</b></a></li>
                                <li><a><span>Email</span> : <b>{{ $prod->farmacia->email }}</b></a></li>
                                <li><a><span>Contacto (Celular)</span> : <b>{{ $prod->farmacia->number }}</b></a></li>
                                <li><a><span>Endereço</span> : <b>{{ $prod->farmacia->location }}</b></a></li>
                                <li><a><span>Descrição</span> : <b>{{ $prod->farmacia->descricao }}</b></a></li><br>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="details_item">
                            <h4> Produto/medicamento </h4>
                            <ul class="list">
                                <li><a><span>Nome</span> : <b>{{ $prod->produto->nome_pro}}</b></a></li>
                                <li><a><span>Código</span> : <b> {{ $prod->produto->codigo_pro}}</b> </a></li>
                                <li><a><span>Preço</span> : <b>{{ $prod->produto->preco_pro }}</b></a></li>
                                <li><a><span>Categoria</span> : <b>{{ $prod->produto->categoria->nome }}</b></a></li>
                                <li><a><span>Sub-categoria</span> : <b>{{ $prod->produto->subcategoria->nome }}</b></a></li>
                                <li><a><span>Descrição</span> : <b>{{ $prod->produto->info_pro }}</b></a></li>
                            </ul>
                        </div>
                    </div>
    
                    {{-- <div class="col-lg-12">
                        <div class="details_item">
                            <h4> Comprador (cliente) </h4>
                            <ul class="list">
                                <li class="text-danger">Brevemente.....</li>
                            </ul>
                        </div>
                    </div> --}}

                    <br> <br> <br> <br> <br> <br>
                    <div class="address3">
                        <p>(Cliente / Comprador)</p>
                        <p>__________________________</p>
                    </div>

                    <div class="footer-wrapper"> 
                        <p>Data de impressão: {{ date('d-m-Y H:i ') }} </p>
                    </div>

                        
                </div>
    
                 
                    
            </div>
        </div>
    </section> 
</div>
    