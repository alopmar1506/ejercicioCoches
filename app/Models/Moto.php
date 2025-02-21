<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class moto extends Model
{
    use HasFactory;
    public function concesionario(){
        return $this->belongsTo(concesionario::class);
    }
}
