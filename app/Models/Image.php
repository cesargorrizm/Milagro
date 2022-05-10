<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = "images";
    public $timestamps = false;
    use HasFactory;

    protected $fillable = [
        'url', 'principal', 'sector_id'
         // ,'idInstancia'
    ];

    
    public function sector(){
        return $this->belongsTo(Sector::class);
    }

}
