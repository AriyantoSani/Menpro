<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Session;

class articleController extends Controller
{
    public function index()
    {
        $articles = DB::table('article')->join('admin', 'article.createdby', 'admin.username')->simplepaginate();
        $categories = DB::table('category')->get();
        return view('article', ['articles' => $articles, 'categories' => $categories]);
    }
    public function indexThread($id)
    {
        $articles = DB::table('article')->where('article.id', $id)->join('admin', 'article.createdby', 'admin.username')->get();
        $categories = DB::table('category')->paginate(5);
        $comment = DB::table('commentarticle')->where('articleid', $id)->where('commentarticle.status', 1)->join('user', 'commentarticle.createdby', 'user.username')->simplepaginate(5);
        return view('articleThread', ['articles' => $articles, 'categories' => $categories, 'comment' => $comment]);
    }
    public function insertComment(Request $req, $id)
    {
        DB::table('commentarticle')->insert(['body' => $req->comment, 'articleid' => $id, 'status' => 1, 'createdby' => Session::get('username')]);
        return redirect()->back();
    }
    public function deleteComment($id)
    {
        DB::table('commentarticle')->where('id', $id)->update(['status' => 0]);
        return redirect()->back();
    }
    public function filter($id)
    {
        $articles = DB::table('article')->where('categoryid',$id)->join('admin', 'article.createdby', 'admin.username')->simplepaginate(5);
        $categories = DB::table('category')->get();
        return view('article', ['articles' => $articles, 'categories' => $categories]);
    }
}
