<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        return view('home');
    }

    //ログイン者情報
    public function app(){
        $auths = Auth::user();
        return view('app', [ 'auths' => $auths ]);
    }

    //ログアウト
    public function logout(){
        $login_inf=Auth::logout();
        return view('home',compact('login_inf'));
    }
}
