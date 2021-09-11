<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table='produtos';
    protected $primaryKey='id';
    protected $guarded = [];

    public function getName()
    {
        if ($this->nome_pro &&  $this->info_pro)
        {
            return "{$this->nome_pro} {$this->info_pro}";
        }

        if ($this->nome_pro)
        {
            return $this->nome_pro;
        }

        return null;
    }

    public function getNameOrPrice()
    {
        return $this->getName() ?: $this->preco_pro;
    }

    public function getNameOrCategory()
    {
        return $this->nome_pro ?: $this->category_id;
    }

    // public function getNameOrUsername()
    // {
    //     return $this->getName() ?: $this->username;
    // }

    
    public function categoria()
    {
        return $this->belongsTo('App\Models\Category', 'category_id', 'id');
    }
    
    public function subcategoria()
    {
        return $this->belongsTo('App\Models\Subcategory', 'subcategory_id', 'id');
    }

    public function farmacia()
    {
        return $this->belongsTo('App\Models\Farmacia', 'farmacia_id', 'id');
    }

}
