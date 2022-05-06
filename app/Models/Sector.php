<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    use HasFactory;
    
    
    protected $fillable = [
        'titulo', 'descripcion', 'tipo_id','capacidad_id'
    ];


    public function tipos(){
        return $this->belongsTo('App\Models\Tipo');
    }
}
