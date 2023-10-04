<?php

namespace App\Http\Controllers\Catalogos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tipos;

class TiposController extends Controller
{
    public function index() {
        $tipos = Tipos::select(
            'tipos'
        )
        ->get();

        return response([
            'data' => $tipo
        ]);
    }
}
