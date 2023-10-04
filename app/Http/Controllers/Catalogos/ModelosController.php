<?php

namespace App\Http\Controllers\Catalogos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Modelos;

class ModelosController extends Controller
{
    public function index() {
        $modelos = Modelos::select(
            'tipo',
            'marca',
            'modelo',
        )
        ->orderBy('tipo')
        ->orderBy('modelo')
        ->get();

        return response([
            'data' => $modelos
        ]);
    }

    public function store( Request $request ) {
        $modelo = Modelos::create([
            'tipo' => $request->tipo ?? '',
            'marca' => $request->marca ?? '',
            'modelo' => $request->modelo ?? '',
        ]);

        if( !$modelo ) {
            return response([
                'msg' => 'No se registró dispositivo'
            ]);
        }

        return response([
            'msg' => 'Modelo registrado exitosamente',
            'data' => $modelo
        ]);
    }
}
