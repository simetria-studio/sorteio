<?php

namespace App\Http\Controllers;

use App\Models\Number;
use App\Models\Sorteio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class NumberController extends Controller
{


    public function store(Request $request)
    {
        $numberExists = Number::where('number', $request->number)->exists();

        if ($numberExists) {
            $messages = [
                'number.required' => 'O campo número é obrigatório',
                'number.unique' => 'O número informado já está em uso!',
            ];

            $request->validate([
                'number' => 'required|unique:sorteios',
            ], $messages);



            $sorteio = Sorteio::create([
                'number' => $request->number,
                'user_id' => auth()->user()->id,
            ]);

            return response()->json([
                'message' => 'Número cadastrado com sucesso',
            ], 201);
        } else {
            return response()->json([
                'message' => 'Número não encontrado',
            ], 404);
        }
    }
    public function numberGet($number)
    {
        $numberExists = Number::where('number', $number)->exists();

        Cookie::queue(Cookie::make('numero', $number, 60));

        if ($numberExists) {
            $sorteioNum = Sorteio::where('number', $number)->first();
            if (!$sorteioNum) {
                $sorteio = Sorteio::create([
                    'number' => $number,
                    'user_id' => auth()->user()->id,
                ]);
                return redirect()->route('home')->with('success', 'Numero cadastrado com sucesso!');
            } else {
                return redirect()->route('home')->with('error', 'Numero já cadastrado!');
            }
        } else {
            return redirect()->route('home')->with('error', 'Numero não encontrado!');
        }
    }
}
