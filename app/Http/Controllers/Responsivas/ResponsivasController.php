<?php

namespace App\Http\Controllers\Responsivas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Responsivas;
use App\Models\Areas;
use App\Models\Procesos;
use App\Models\Tipos;

class ResponsivasController extends Controller
{
    public function index() {
        $responsivas = Responsivas::select(
            'id',
            'usuario',
            'area',
            'asset_name',
            'fecha_entrega',
        )
        ->get();

        return response([
            'data' => $responsivas,
        ]);
    }

    public function edit($id) {
        $responsiva = Responsivas::select(
            'id',
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
            'created_at',
            'updated_at',
        )
        ->where('id', $id)
        ->get();

        return response([
            'data' => $responsiva
        ]);
    }

    public function store(Request $request) {
        $responsiva = Responsiva::create([
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
        ]);

        if( !$responsiva ) {
            return response([
                'msg' => 'No se pudo crear la responsiva, por favor valida los datos'
            ]);
        }

        return response([
            'msg' => 'Responsiva creada exitosamente!',
            'data' => $responsiva
        ]);
    }
}
