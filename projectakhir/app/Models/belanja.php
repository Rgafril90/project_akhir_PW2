<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class belanja extends Model
{
    use HasFactory;

    public function stock(){
        return $this->belongsTo('App\Models\stock');
    }

    // public function pembeli(){
    //     return $this->belongTo('App\Models\pembeli');
    // }

}
