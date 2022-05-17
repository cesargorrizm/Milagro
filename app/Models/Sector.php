<?php

namespace App\Models;

use Hamcrest\Core\HasToString;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Codec\StringCodec;

class Sector extends Model
{


    use HasFactory;

    protected $table = 'sectores';


    protected $fillable = [
        'titulo', 'descripcion','subtitulo', 'tipo_id','capacidad_id'
    ];


    public function tipo(){
        return $this->belongsTo(Tipo::class);
    }
    public function capacidad(){
        return $this->belongsTo(Capacidad::class);
    }

    public function images(){
        $image  = $this->hasMany(Image::class);
        return $image;
    }
    //  public function imagePrincipal(){
    //     // $image = $this->hasMany(Image::where('principal','=','1')->first('url'));
    //     // dd($image->url);
    //     // return  $image->url;
    //     $image = $this->hasMany(Image::class)->where('principal','=','1')->first('url');
    //     dd($image->url);
    //     return  $image->url;
    //     //return $this->hasMany(Image::class)->where('principal','=','1')->first()->url;
    // }
}
