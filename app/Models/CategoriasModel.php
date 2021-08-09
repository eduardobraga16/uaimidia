<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriasModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table='categorias';
    protected $fillable= [
    	'nome','url','acessos'
    ];
}
