<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Gloudemans\Shoppingcart\Facades\Cart;

class Endereco extends Model
{
    protected $table='endereco';
    protected $id='id';
    protected $fillable=['nomecompleto','estado','cidade','pais','tipo_pagamento','user_id','pincode','number'];

    public function pais()
    {
        return $this->belongsTo('App\Models\Pais', 'pais_id', 'id');
    }

    public function provincia()
    {
        return $this->belongsTo('App\Models\Provincia', 'provincia_id', 'id');
    }

    public function bairro()
    {
        return $this->belongsTo('App\Models\Bairro', 'bairro_id', 'id');
    }


}
