<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Sorteio;
use App\Models\Sorteado;
use Illuminate\Http\Request;

class SorteioController extends Controller
{
    public function index()
    {
        return view('painel.sorteio');
    }
    public function sorteados()
    {
        $sorteados = Sorteado::all();
        return view('painel.sorteado', get_defined_vars());
    }

    public function sorteio(Request $request)
    {
        $numeroSorteado = Sorteio::where('status', 0)->inRandomOrder()->first();
        $numeroSorteado->update([
            'status' => 1,
        ]);

        $user = User::find($numeroSorteado->user_id);

        Sorteado::create([
            'number' => $numeroSorteado->number,
            'status' => $numeroSorteado->status,
            'user_id' => $numeroSorteado->user_id,
            'sorteio_id' => $numeroSorteado->id,
            'user_name' => $user->name,
            'user_email' => $user->email,
            'user_cpf' => $user->cpf,
            'user_telefone' => $user->telefone,
        ]);

        return response()->json($numeroSorteado);
    }
}
