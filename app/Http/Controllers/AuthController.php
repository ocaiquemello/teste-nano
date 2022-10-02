<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        $user = auth()->user();

        if($user)
        {
            return redirect()->route('admin.dashboard');
        }

        return view('index');
    }

    public function auth(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        try
        {
            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials))
            {
                $user = auth()->user();

                return redirect()->route('admin.dashboard');
            }

            return redirect('index')->with('error', "Login inválido! Consulte o administrador do sistema.");
        } catch (Exception $e)
        {
            return redirect('index')->with('error', $e->getMessage());
        }
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();

        return redirect('login')->with('success', 'Deslogado com sucesso!');
    }
}
