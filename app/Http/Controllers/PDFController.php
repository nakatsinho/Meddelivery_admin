<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PedidoProduct as pedProd;
use App\Models\Pedido as pedidos;
use App\User;
use PDF;

class PDFController extends Controller
{
    public function pdf(Request $request)
    {  
        $id = $request->id;
        $prod = pedProd::where('pedido_id',$request->id)->get();
        $pdf = PDF::loadView('pages.Admin.pedidos.faturas.invoice1', ['prod' => $prod, 'id' => $id])->setPaper('a4', 'portrait');
        $file_name = "medelivery_doc";
        return $pdf->stream($file_name.'pdf');
    }
}
