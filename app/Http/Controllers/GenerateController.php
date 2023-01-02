<?php

namespace App\Http\Controllers;

use App\Models\Number;
use Illuminate\Http\Request;

class GenerateController extends Controller
{
    public function generate()
    {
        // Gera um número aleatório no intervalo de 1000 a 1999
        $randomNumber = random_int(1000, 1999);

        // Verifica se o número já existe no banco de dados
        $numberExists = Number::where('number', $randomNumber)->exists();

        // Se o número já existir, gera um novo número aleatório
        while ($numberExists) {
            $randomNumber = random_int(1000, 1999);
            $numberExists = Number::where('number', $randomNumber)->exists();
        }

        // Salva o número gerado no banco de dados
        $number = new Number;
        $number->number = $randomNumber;
        $number->save();

        return $randomNumber;
    }
}
