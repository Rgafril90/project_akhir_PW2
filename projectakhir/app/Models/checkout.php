<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class checkout extends Model
{
    use HasFactory;

    public function keranjang(){
        return $this->belongsTo('App\Models\keranjang');
    }

}
