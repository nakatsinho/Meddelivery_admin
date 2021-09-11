<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProdVendidos extends Model
{
    protected $table = "prod_vendidos";

    protected $guarded = [];
    
    public function produto()
    {
        return $this->belongsTo('App\Models\Product', 'pro_id', 'id');
    }

    public function farmacia()
    {
        return $this->belongsTo('App\Models\Farmacia', 'farmacia_id', 'id');
    }
    
}
