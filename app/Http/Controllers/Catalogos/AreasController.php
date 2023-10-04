<?php

namespace App\Http\Controllers\Catalogos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Areas;

class AreasController extends Controller
{
    public function index() {
        $areas = Areas::select(
            'area'
        )
        ->get();

        return response([
            'data' => $areas
        ]);
    }

    public function store( Request $request ) {
        $area = Areas::create([
            'area' => $request->area
        ]);

        if( !$area ) {
            return response([
                'msg' => 'No se pudo registrar el área'
            ]);
        }

        return response([
            'msg' => 'Área registrada exitosamente',
            'data' => $area
        ]);
    }
}
