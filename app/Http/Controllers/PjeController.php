<?php

namespace App\Http\Controllers;

use App\Services\PjeService;
use Illuminate\Http\Request;

class PjeController extends Controller
{
    protected $pjeService;

    public function __construct(PjeService $pjeService)
    {
        $this->pjeService = $pjeService;
    }

    public function consultarProcesso(Request $request)
    {
        $numeroProcesso = $request->input('numero_processo');
        $movimentacoes = $this->pjeService->consultarProcesso($numeroProcesso);

        return response()->json($movimentacoes);
    }
}
