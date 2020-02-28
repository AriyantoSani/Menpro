<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;
use Session;

class coursesController extends Controller
{
    public function index()
    {
        $username = Session::get('username');
        $courses = DB::table('courses')
            ->whereNotIn('courseId', function ($query) use ($username) {
                $query->select('course_id')
                    ->from('takingcourses')
                    ->where('user_id', $username);
            })->simplepaginate(5);
        // return $courses;
        $categories = DB::table('category')->get();
        return view('courses', ['course' => $courses, 'categories' => $categories]);
    }
    public function filter($id)
    {
        $username = Session::get('username');
        $courses = DB::table('courses')
            ->whereNotIn('courseId', function ($query) use ($username) {
                $query->select('course_id')
                    ->from('takingcourses')
                    ->where('user_id', $username);
            })->where('courses.categoryid', $id)->simplepaginate(5);
        // return $courses;
        $categories = DB::table('category')->get();
        return view('courses', ['course' => $courses, 'categories' => $categories]);
    }
    public function indextaken()
    {
        // return  Session::get('username');
        $username = Session::get('username');
        $courses = DB::table('courses')
            ->join('takingcourses', 'courses.courseId', 'takingcourses.course_id')->where('user_id', '=', $username)->simplepaginate(5);
        // return $courses;

        $categories = DB::table('category')->get();
        return view('coursestaken', ['course' => $courses, 'categories' => $categories]);
    }
    public function filtertaken($id)
    {
        // return  Session::get('username');
        $username = Session::get('username');
        $courses = DB::table('courses')
            ->join('takingcourses', 'courses.courseId', 'takingcourses.course_id')->where('user_id', '=', $username)->where('courses.categoryid', $id)->simplepaginate(5);
        $categories = DB::table('category')->get();
        return view('coursestaken', ['course' => $courses, 'categories' => $categories]);
    }
    public function takecourses(Request $request, $id)
    {
        $username = Session::get('username');
        $balance = Session::get('balance');
        $courses = DB::table('courses')
            ->where('courseId', $id)
            ->first();
        $ci = $courses->courseId;
        if ($balance >= $courses->price) {
            $balance = $balance - $courses->price;
            $student = DB::table('user')->where('username', $username)->update(['balance' => $balance]);
            Session::put('balance', $balance);
            $takecourse = DB::table('takingcourses')->insert(
                [
                    'user_id' => $username,
                    'course_id' => $ci,
                ],
            );

            return redirect()->back()->with('success', 'Thank You For Purchasing');
        }
        return redirect()->back()->with('fail', 'Insufficient Balance');
    }
}
