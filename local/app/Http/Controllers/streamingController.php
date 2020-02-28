<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Session;

class streamingController extends Controller
{
    public function index(request $req, $id)
    {
        $data = DB::table('courses')->where('status', 1)->where('courseId', $id)->get();
        // return $data;
        // return  Session::get('username');
        $name = Session::get('name');
        $balance = Session::get('balance');
        $link = DB::table('courselink')->where('courseid', $id)->get();
        // return $link;
        return view('streamingPage', ['name' => $name,  'balance' => $balance, 'data' => $data, 'link' => $link, 'id' => $id]);
    }
    public function indexStream(request $req, $id, $streamid)
    {
        $data = DB::table('courselink')->where('courseid', $id)->where('id', $streamid)->get();
        // return $data;
        // return  Session::get('username');
        $name = Session::get('name');
        $balance = Session::get('balance');
        $link = DB::table('courselink')->where('courseid', $id)->get();
        // return $link;
        $comment = DB::table('courselink')
            ->where('courseid', $id)
            ->where('courselink.id', $streamid)
            ->join('commentcourses', 'courselink.id', 'commentcourses.coursepage')
            ->where('commentcourses.status', 1)
            ->join('user', 'commentcourses.createdby', 'user.username')
            ->simplepaginate(5);
        return view('stream', ['name' => $name,  'balance' => $balance, 'data' => $data, 'link' => $link, 'id' => $id, 'comment' => $comment]);
    }
    public function insertComment(request $req, $id, $streamid)
    {
        DB::table('commentcourses')->insert(['body' => $req->comment, 'coursepage' => $streamid, 'status' => 1, 'createdby' => Session::get('username')]);
        return redirect()->back();
    }
    public function deleteComment($id){
        DB::table('commentcourses')->where('id',$id)->update(['status' => 0]);
        return redirect()->back();
    }
}
