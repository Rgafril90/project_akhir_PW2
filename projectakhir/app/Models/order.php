<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    public function checkout() {
        return $this->belongsTo('App\Models\checkout');
    }

    public function keranjang() {
        return $this->belongTo('App\Models\keranjang');
    }
}
