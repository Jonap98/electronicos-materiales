<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Responsivas extends Model
{
    use HasFactory;
    protected $table = 'ELECTRONICOS_responsivas';
    protected $fillable = [
        'usuario',
        'supervisor',
        'area',
        'asset_name',
        'quien_entrega',
        'comentarios',
        'firma',
        'fecha_entrega',
        'fecha_retiro',
        'motivo_retiro',
        'status',
    ];
}
