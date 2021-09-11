<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Factura Meddelivery</title>

    <style>
        .invoice-box {
            max-width: 700px;
            margin: auto;
            padding: 30px;
            border: 1px solid #eee;
            box-shadow: 0 0 10px rgba(0, 0, 0, .15);
            font-size: 16px;
            line-height: 24px;
            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            color: #555;
        }
 
        .invoice-box table td {
            padding: 5px;
       
        }

        .invoice-box table tr td:nth-child(2) {
            text-align: right;
        }

        .invoice-box table tr.top table td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.top table td.title {
            font-size: 45px;
            line-height: 45px;
            color: #333;
        }

        .invoice-box table tr.information table td {
            padding-bottom: 40px;
        }

        .invoice-box table tr.heading td {
            background: #eee;
            border-bottom: 1px solid #ddd;
            font-weight: bold;
        }

        .invoice-box table tr.details td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.item td {
            border-bottom: 1px solid #eee;
        }

        .invoice-box table tr.item.last td {
            border-bottom: none;
        }

        .invoice-box table tr.total td:nth-child(2) {
            border-top: 2px solid #eee;
            font-weight: bold;
        }

        @media only screen and (max-width: 600px) {
            .invoice-box table tr.top table td {
                width: 100%;
                display: block;
                text-align: center;
            }

            .invoice-box table tr.information table td {
                width: 100%;
                display: block;
                text-align: center;
            }
        }

        /** RTL **/
        .rtl {
            direction: rtl;
            font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        }

        .rtl table {
            text-align: right;
        }

        .rtl table tr td:nth-child(2) {
            text-align: left;
        }

        .page-break {
            page-break-after: always;
        }
    </style>
</head>

<body>
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="1">
                    <table>
                        <tr>
                    
                            <td class="heading">
                                <b>Factura nr. #: {{ $id }}</b><br>
                                Data de Emissão: {{ date('M-d') }} , {{ date('Y') }}<br>
                                Vencimento: , {{ date('Y') }}
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr class="information">
                <td colspan="1">
                    <table>
                        <tr>
                            <td>
                                <b>Meddelivery, Lda</b> <br>
                                Email: pagamentos@meddelivery.co.mz<br>
                                Tel.: +258 845132931<br>
                                Tel.: +258 845248888<br>
                                Endereço: Av. Emilia Daússe <br> Bairro Central "A" | Maputo
                            </td>

                            <td>
                                <b>Facturado a:</b><br>
                                Entidade Individual<br>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr class="heading">
                <td> Método de Pagamento  </td>
                <td>  Entidade  </td>
            </tr>

            <tr class="details">
                <td> individua </td>
                <td> individuas </td>
            </tr>
            
            <tr class="heading">
                <td>Produto</td>
                <td colspan="1">Qnt.</td>
                <td> Subtotal </td>
            </tr>
            @forelse ($prod as $row) 
                <tr class="item">
 
                    @if (empty($row->product_id))
                        <td>Desconhecido</td> 
                    @else
                        <td>{{ $row->produto->nome_pro}}</td> 
                    @endif
                    
                    <td class="text-center"> {{ $row->qty }} </td>
                    <td>{{ $row->qty }}</td>
                </tr>
                <tr class="total">
                    <td></td>
                    <td>Total: </td>
                    <td> {{ $row->qty }}</td>
                </tr>
            @empty
            <td colspan="3"> 
                <div class="alert alert-info alert-block text-center">
                    <strong>Opss!! Sem produtos por mostrar...</strong>
                </div> 
            </td>
            @endforelse
            
           
        </table>
        
    </div>
 
</body>

</html>