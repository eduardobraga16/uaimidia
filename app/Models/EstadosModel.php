<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstadosModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table='estado';
    protected $fillable= [
    	'nome_estado','uf_cidade','codigo_estado'
    ];
}
