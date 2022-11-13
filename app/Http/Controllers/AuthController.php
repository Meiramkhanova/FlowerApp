<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\AuthorizeRequest;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class AuthController extends Controller
{
    public function auth(){
        return view('auth.login');
    }
    public function register(){
        return view('auth.register');
    }

    public  function login(AuthorizeRequest $request){
        $credentials = [
            'email' => $request ->get('email'),
            'password' => $request ->get('password')
        ];

        if(Auth:: attempt($credentials)){
            return view('index')->with('status','Вы успешно зашли в аккаунт');
        }

        return view('auth.login')->with('status','Ваши данные не корректны');

    }

    public function create(ReqisterRequest $request){

        User::create($request->all());



        return view('auth.login')->with('status','Вы успешно зарегистрировались');

    }

}
