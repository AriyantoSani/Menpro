<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Session;

class homeController extends Controller
{
    public function index()
    {
        // return  Session::get('username');
        $name = Session::get('name');
        $balance = Session::get('balance');
        return view('home', ['name' => $name,  'balance' => $balance]);
    }

    public function logout()
    {
        session()->forget(['username', 'password', 'name', 'email', 'birthday', 'gender', 'notelepon', 'login', 'balance', 'role']);
        session()->flush();
        return redirect('login');
    }
    public function topupindex()
    {
        $name = Session::get('name');
        $balance = Session::get('balance');
        return view('topup', ['name' => $name,  'balance' => $balance]);
    }
    public function topup(Request $req)
    {
        // return $req;
        $balance = Session::get('balance');
        $balance = $balance + $req->topup;
        // return $balance;
        $username = Session::get('username');
        $s = DB::table('user')->where('user.username', $username)->update(['balance' => $balance]);
        $s = DB::table('user')->where('user.username', $username)->first();
        // return $s->balance;
        Session::put('balance', $s->balance);
        $name = Session::get('name');
        return view('topup', ['name' => $name,  'balance' => $balance]);
    }
    public function indexAbout()
    {

        $name = Session::get('name');
        $balance = Session::get('balance');
        return view('about', ['name' => $name,  'balance' => $balance]);
    }
}
