<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    protected $table='subcategorias';
    protected $primaryKey='id';
    protected $guarded=[];

    public function categoria()
    {
        return $this->belongsTo('App\Models\Category', 'category_id', 'id');
    }
}
