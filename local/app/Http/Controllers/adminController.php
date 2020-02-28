<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;
use Session;

class adminController extends Controller
{
    public function indexAdmin()
    {
        $users = DB::table('user')->get();
        // return  Session::get('username');
        // return Session::get('role');
        return view('admin.homeAdmin', ['users' => $users]);
    }
    public function indexCourse()
    {
        $courses = DB::table('courses')->get();
        $category = DB::table('category')->get();
        // return  Session::get('username');
        // return Session::get('role');
        return view('admin.courseAdmin', ['courses' => $courses, 'category' => $category]);
    }
    public function insertCourse(Request $req)
    {
        // return $req;
        DB::table('courses')->insert(['title' => $req->title, 'img' => $req->image, 'price' => $req->price, 'categoryid' => $req->category, 'description' => $req->description, 'status' => 1]);
        return redirect()->back();
    }
    public function indexArticle()
    {
        $articles = DB::table('article')->get();
        // return  Session::get('username');
        // return Session::get('role');
        $category = DB::table('category')->get();
        return view('admin.articleAdmin', ['articles' => $articles, 'categories' => $category]);
    }
    public function insertArticle(Request $req)
    {
        DB::table('article')
        // return $req;
            ->insert(['title' => $req->title, 'body' => $req->description, 'createdby' => Session::get('username'), 'status' => 1, 'img' => $req->link, 'categoryid' => $req->category]);
        return redirect()->back();
    }
    public function indexCategory()
    {
        $category = DB::table('category')->get();
        // return  Session::get('username');
        // return Session::get('role');
        return view('admin.categoryAdmin', ['category' => $category]);
    }
    public function insertCategory(Request $req)
    {
        DB::table('category')->insert(['title' => $req->category]);
        return redirect()->back();
    }

    public function indexSection(Request $req, $id)
    {
        $section = DB::table('courselink')->where('courseid', $id)->get();
        return view('admin.sectionAdmin', ['section' => $section]);
    }
    public function insertSection(Request $req, $id){
        DB::table('courselink')->insert(['courseId'=>$id,'no'=>$req->no,'link'=>$req->link]);
        return redirect()->back();
    }
}
