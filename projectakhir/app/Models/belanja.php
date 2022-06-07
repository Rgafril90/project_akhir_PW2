<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class belanja extends Model
{
    use HasFactory;

    public function detailbelanja(){
        return $this->belongsTo('App\Models\detail_belanja');
    }

    public function pembeli(){
        return $this->belongsTo('App\Models\pembeli');
    }

}
