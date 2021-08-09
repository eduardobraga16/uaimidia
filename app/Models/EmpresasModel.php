<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpresasModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table='empresas';
    protected $fillable= [
    	'nome','endereco','latitude','longitude','url','categoria','id_estado','id_cidade'
    ];
}
