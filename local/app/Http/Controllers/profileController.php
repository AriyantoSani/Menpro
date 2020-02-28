<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;
use Session;

class profileController extends Controller
{
    public function Index()
    {
        $username = Session::get('username');
        $data = DB::table('user')->where('username', $username)->get();
        $name = Session::get('name');
        // return $data;
        return view('profile', ['data' => $data, 'name' => $name]);
    }
    public function Indexedit()
    {
        $username = Session::get('username');
        $data = DB::table('user')->where('username', $username)->get();
        // return $data;
        return view('editprofile', ['data' => $data]);
    }
    public function edit(Request $req)
    {
        if ($req->profilepict != null) {
            request()->validate([
                'profilepict' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            ]);
            $imageName = time() . '.' . request()->profilepict->getClientOriginalExtension();

            $file = $req->file('profilepict');
            $tujuan_upload = 'images/profile/';

            // upload file
            $file->move($tujuan_upload, $imageName);
        } else {
            $imageName = '';
        }
        // request()->profilepict->move(public_path('/images/profile/'), $imageName);

        DB::table('user')
            ->where('username', $req->username)
            ->update(['nama' => $req->name, 'birthday' => $req->birthday, 'gender' => $req->gender, 'email' => $req->email, 'notelepon' => $req->phonenumber, 'image' => $imageName]);
        $u = DB::table('user')
            ->where('username', $req->username)->get();
        // return $req;
        return redirect('profile');
    }
}
