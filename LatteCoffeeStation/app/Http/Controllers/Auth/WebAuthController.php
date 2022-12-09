<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
/**
 * Controle do Login
*/
class LoginController extends Controller
{
    //

    /*
    *função que retorna a visao do login
    */
    public function login(){
        return view('form');
    }

    /*
    *valida o login e exibe mensagem de erro ou sucesso
    */
    public function loginDO(Request $request){

        if(!filter_var($request->email, FILTER_VALIDATE_EMAIL)){
            $login['success'] = false;
            $login['message'] = "O E-mail Informado não é valido!";
            echo json_encode($login);
            return;
        }

            $credentials = [
                'email' => $request -> email,
                'password' => $request -> password

            ];

        if(Auth::attempt($credentials)){
            $login['success'] = true;
            echo json_encode($login);

            return redirect()->route("user.home");
        } else{

            $login['success'] = false;
            $login['message'] = "Os dados Informados estão Incorretos!";
            echo json_encode($login);

        }
    }

    public function authenticate(Request $request)
    {
        $credencial = $request->only('email', 'password');

        if (Auth::attempt($credencial)) {
            $request->session()->regenerate();

            return redirect()->intended('home');

        }

        return back()->withErrors([
            'email' => 'Email ou Senha Incorretos!',
        ]);
    }




    /*
    *Função de Logout
    */
    public function logout(){
        Auth::logout();

        //dd(auth()->user());
        return view('form');
    }
}
