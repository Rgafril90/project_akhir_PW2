<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class roti extends Model
{
    use HasFactory;

    public function stock(){
        return $this->belongsTo('App\Models\stock');
    }

    public function detail_belanja(){
        return $this->belongsTo('App\Models\detail_belanja');
    }

}
