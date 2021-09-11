<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PedidoProduct extends Model
{
    protected $table = "pedido_product";

    public function produto()
    {
        return $this->belongsTo('App\Models\Product', 'product_id', 'id');
    }

    public function farmacia()
    {
        return $this->belongsTo('App\Models\Farmacia', 'farmacia_id', 'id');
    }

    public function pedido()
    {
        return $this->belongsTo('App\Models\Pedido', 'pedido_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    
    
}
