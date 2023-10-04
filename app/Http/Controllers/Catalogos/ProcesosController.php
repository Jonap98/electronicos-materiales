<?php

namespace App\Http\Controllers\Catalogos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Procesos;

class ProcesosController extends Controller
{
    public function index() {
        $procesos = Procesos::select(
            'proceso'
        )
        ->get();

        return response([
            'data' => $procesos
        ]);
    }
}
