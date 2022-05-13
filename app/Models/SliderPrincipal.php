<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SliderPrincipal extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $table = 'slider_principal';


    protected $fillable = [
        'url', 'orden'
    ];
}
