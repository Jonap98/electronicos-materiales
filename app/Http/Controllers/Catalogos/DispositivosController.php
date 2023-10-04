<?php

namespace App\Http\Controllers\Catalogos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Areas;
use App\Models\Dispositivos;
use App\Models\Procesos;
use App\Models\Tipos;

class DispositivosController extends Controller
{
    public function index() {

        $dispositivos = Dispositivos::select(
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
        )
        ->get();

        return response([
            'data' => $dispositivos
        ]);
    }

    public function store( Request $request ) {
        $dispositivo = Dispositivos::create([
            'tipo' => $request->tipo ?? '',
            'marca' => $request->marca ?? '',
            'modelo' => $request->modelo ?? '',
            'num_serie' => $request->num_serie ?? '',
            'asset_name' => $request->asset_name ?? '',
            'mac_address' => $request->mac_address ?? '',
            'ip_address' => $request->ip_address ?? '',
            'owner' => $request->owner ?? '',
            'ubicacion' => $request->ubicacion ?? '',
            'proceso' => $request->proceso ?? '',
            'fecha_compra' => $request->fecha_compra ?? '',
            'garantia_inicio' => $request->garantia_inicio ?? '',
            'garantia_fin' => $request->garantia_fin ?? '',
            'active' => 1,
        ]);

        if( !$dispositivo ) {
            return response([
                'msg' => 'No se registró dispositivo'
            ]);
        }

        return response([
            'msg' => '¡Dispositivo registrado exitosamente!',
            'data' => $dispositivo
        ]);

    }
}
