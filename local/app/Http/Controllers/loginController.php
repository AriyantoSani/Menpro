<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use DB;
use App\Quotation;
use App\User;

class loginController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function indexAdmin()
    {
        return view('admin.loginAdmin');
    }
    public function login(Request $req)
    {
        // return $req;
        $username = $req->username;
        $password = $req->pass;

        $data = DB::table('user')->where('username', $username)->first();
        // return $data->username;
        if ($data) { //apakah email tersebut ada atau tidak
            if (md5($password) == $data->password) {

                Session::put('username', $data->username);
                Session::put('name', $data->nama);
                Session::put('email', $data->email);
                Session::put('birthday', $data->birthday);
                Session::put('gender', $data->gender);
                Session::put('notelepon', $data->notelepon);
                Session::put('balance', $data->balance);
                Session::put('role', 'student');
                Session::put('login', TRUE);
                return redirect('home');
            } else {
                return redirect('login')->with('fail', 'Password atau Username, Salah !');
            }
        } else {
            return redirect('login')->with('fail', 'Password atau Email, Salah!');
        }
    }
    public function loginAdmin(Request $req)
    {
        // return $req;
        $username = $req->username;
        $password = $req->pass;

        $data = DB::table('admin')->where('username', $username)->first();
        // return $data->username;
        if ($data) { //apakah username tersebut ada atau tidak
            if (md5($password) == $data->password) {
                Session::put('username', $data->username);
                Session::put('name', $data->nama);
                Session::put('email', $data->email);
                Session::put('birthday', $data->birthday);
                Session::put('gender', $data->gender);
                Session::put('notelepon', $data->notelepon);
                Session::put('balance', $data->balance);
                Session::put('role', 'admin');
                Session::put('login', TRUE);
                return redirect('homeAdmin');
            } else {
                return redirect('loginAdmin')->with('fail', 'Password atau Email, Salah !');
            }
        } else {
            return redirect('loginAdmin')->with('fail', 'Password atau Email, Salah!');
        }
    }
    public function createaccountIndex()
    {
        return view('createaccount');
    }
    public function createaccount(Request $req)
    {
        // return $req->pass;
        $check = DB::table('user')->where('user.username', $req->username)->first();
        // return $check;
        $username = $check->username ?? '';
        // if ($check->username == null) {
        if($username != null ){
            return redirect()->back()->with('fail', 'Username Telah Terdaftar');
        }
            DB::table('user')->insert(
                [
                    'username' => $req->username,
                    'nama' => $req->name,
                    'password' => md5($req->pass),
                    'birthday' => $req->birthday,
                    'gender' => $req->gender,
                    'notelepon' => $req->phonenum,
                    'email' => $req->email,
                    'image' => '',
                ]

            );
            return redirect('login')->with('success', 'Account sudah berhasil dibuat');
        // }
        // return redirect()->back();
        // DB::table('users')->get();
    }

}
