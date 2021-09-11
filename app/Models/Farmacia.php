<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Farmacia extends Model
{
    protected $table='farmacias';
    protected $fillable=[
        'nome',
        'titular',
        'nuit',
        'emaill',
        'location',
        'numero',
        'imagem',
        'descricao',
        'quarteirao',
        'pais_id',
        'provincia_id',
        'bairro_id',
        'user_id',
        'image_empresa',
        'video_link'
    ];    
    
    public function pais()
    {
        return $this->belongsTo(Pais::class);
    }

    public function provincia()
    {
        return $this->belongsTo(Provincia::class, 'provincia_id', 'id');
    }
 
 
}
