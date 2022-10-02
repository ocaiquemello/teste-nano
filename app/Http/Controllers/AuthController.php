<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        $user = auth()->user();

        if($user)
        {
            return redirect()->route('admin.index');
        }

        return redirect()->route('index');
    }

    public function auth(Request $request)
    {
        $request->validate([
            'login' => 'required',
            'password' => 'required',
        ]);

        try
        {
            $credentials = $request->only('login', 'password');

            if (Auth::attempt($credentials))
            {
                return redirect()->route('admin.index');
            }

            return redirect()->route('index')->with('error', "Login inválido! Consulte o administrador do sistema.");
        } catch (Exception $e)
        {
            return redirect()->route('index')->with('error', $e->getMessage());
        }
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();

        return redirect()->route('index')->with('success', 'Deslogado com sucesso!');
    }
}
