<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail_belanja extends Model
{
    use HasFactory;
    
    public function roti(){
        return $this->belongsTo('App\Models\roti');
    }
}