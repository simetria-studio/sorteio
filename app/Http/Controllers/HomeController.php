<?php

namespace App\Http\Controllers;

use App\Models\Sorteio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $numeros = Sorteio::where('user_id', auth()->user()->id)->get();

        $number = $_COOKIE['numero'] ?? null;

        if ($number) {
            $sorteio = Sorteio::where('number', $number)->first();
            if (!$sorteio) {
                $sorteio = Sorteio::create([
                    'number' => $number,
                    'user_id' => auth()->user()->id,
                ]);
            }
        }

        return view('home', get_defined_vars());
    }
}
