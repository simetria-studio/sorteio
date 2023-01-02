<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register()
    {
        return view('auth.register-custom');
    }

    public function registerStore(Request $request)
    {
        $messages = [
            'cpf.required' => 'O campo CPF é obrigatório',
            'name.required' => 'O campo nome é obrigatório!',
            'telefone.required' => 'O campo estado é obrigatório!',
            'cidade.required' => 'O campo cidade é obrigatório!',
            'estado.required' => 'O campo estado é obrigatório!',
            'email.required' => 'O campo email é obrigatório!',
            'email.email' => 'O campo email deve ser um email válido!',
            'email.unique' => 'O email informado já está em uso!',
            'password.required' => 'O campo senha é obrigatório!',
            'password.confirmed' => 'As senhas não conferem!',
        ];

        $request->validate([
            'cpf' => 'required',
            'name' => 'required',
            'telefone' => 'required',
            'cidade' => 'required',
            'estado' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
        ], $messages);



        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'cpf' => $request->cpf,
            'telefone' => $request->telefone,
            'cidade' => $request->cidade,
            'estado' => $request->estado,
            'password' => Hash::make($request->password),
        ]);

        auth()->login($user);

        return redirect()->route('home');
    }
    public function login()
    {
        return view('auth.login-custom');
    }
}
