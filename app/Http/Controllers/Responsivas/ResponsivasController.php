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
            'usuario',
            'area',
            'asset_name',
            'fecha_entrega',
        )
        ->get();

        $areas = Areas::select(
            'area'
        )
        ->get();

        $tipos = Tipos::select(
            'tipo'
        )
        ->get();

        $procesos = Procesos::select(
            'proceso'
        )
        ->get();

        return response([
            'data' => $responsivas,
            'areas' => $areas,
            'tipos' => $tipos,
            'procesos' => $procesos,
        ]);
    }
}
