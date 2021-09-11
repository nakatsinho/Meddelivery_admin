<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $table = "statuses";

    
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');  //bugs!!
    }
    
}
