<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    use HasFactory;
    
    protected $table = 'articulos';

    protected $fillable = ['id','descripcion','precio','stock'];

    protected $hidden = ['created_at',
                         'updated_at'];
}
