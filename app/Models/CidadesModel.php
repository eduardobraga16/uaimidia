<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CidadesModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table='cidade';
    protected $fillable= [
    	'id_estado','nome_cidade','ibge_cidade'
    ];
}
