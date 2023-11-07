<?php

namespace App\Http\Controllers\Checklist;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

use App\Models\Checklist;
use App\Models\Dispositivos;

class ChecklistController extends Controller
{
    public function index() {
        $checklists = Checklist::select(
            'asset_name',
            'status_enciende',
            'status_pantalla',
            'status_partes_funcionamiento',
            'status_partes_faltantes',
            'status_general',
            'descripcion_problema'
        )
        ->orderBy('id', 'desc')
        ->take(100)
        ->get();

        return response([
            'data' => $checklists
        ]);
    }

    public function store(Request $request) {
        $checklist = Checklist::create([
            'asset_name' => $request->asset_name,
            'status_enciende' => $request->status_enciende,
            'status_pantalla' => $request->status_pantalla,
            'status_partes_funcionamiento' => $request->status_partes_funcionamiento,
            'status_partes_faltantes' => $request->status_partes_faltantes,
            'status_general' => $request->status_general,
            'descripcion_problema' => $request->descripcion_problema,
        ]);

        Dispositivos::where(
            'asset_name', $request->asset_name
        )
        ->update([
            'ultimo_check' => Carbon::now()
        ]);

        if( !$checklist ) {
            return response([
                'msg' => 'Ocurrió un error, intente de nuevo'
            ]);
        }

        return response([
            'msg' => '¡Checklist registrado exitosamente!',
            'data' => $checklist
        ]);
    }
}
