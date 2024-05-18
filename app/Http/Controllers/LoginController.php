<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{   
    public function register(Request $request)
    {
        //Validar los datos

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        Auth::login($user);

        return redirect(route('pagina-inicio.convalidar-cursos'));
    }

    public function login(Request $request)
    {
        //Validacion

        $credentials = [
            "email" => $request->email,
            "password" =>$request->password,
        ];

        $remember = $request->filled('remember'); // verify checkbox name

        // Imprime el valor de $remember
        //dd($remember);

        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();
            return redirect()->intended(route('pagina-inicio.convalidar-cursos'));
        } else {
            // Autenticación fallida
            //return redirect('login');
            return redirect('login')->withInput()->withErrors(['email' => 'Credenciales incorrectas']);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('login'));
    }
}
