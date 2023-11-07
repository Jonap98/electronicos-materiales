<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checklist extends Model
{
    use HasFactory;
    protected $table = 'INVENTARIO_checklist';
    protected $fillable = [
        'asset_name',
        'status_enciende',
        'status_pantalla',
        'status_partes_funcionamiento',
        'status_partes_faltantes',
        'status_general',
        'descripcion_problema',
    ];
}
