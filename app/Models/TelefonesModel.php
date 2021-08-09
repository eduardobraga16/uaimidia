<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TelefonesModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table='telefones';
    protected $fillable= [
    	'numero_telefone','empresa'
    ];
}
