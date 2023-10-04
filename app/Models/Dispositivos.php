<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dispositivos extends Model
{
    use HasFactory;
    protected $table = 'ELECTRONICOS_dispositivos';
    protected $fillable = [
        'tipo',
        'marca',
        'modelo',
        'num_serie',
        'asset_name',
        'mac_address',
        'ip_address',
        'owner',
        'ubicacion',
        'proceso',
        'fecha_compra',
        'garantia_inicio',
        'garantia_fin',
        'active',
    ];
}
