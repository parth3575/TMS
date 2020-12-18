<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Results;
use App\Questions;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function dashboard()
    {
        // $count = DB::select('select count(id) from users WHERE usertype != 1');
        $count = DB::select('select count(*) from users');
        $users = User::all();
        // return view('admin.dashboard')->with($registered);
        return view('admin.dashboard',['count' => $count, 'users'=> $users]);
    }


    public function getuserdata()
    {
        $users = User::all();
        return view('admin.user_table')->with('users',$users);
    }

    public function getquestions()
    {
        // $questions = DB::select('select * from questions');
        // $questions = Questions::orderBy('id','desc')->paginate(10);
        $questions = Questions::paginate(10);
        return view('admin.questions', ['questions'=>$questions]);
    }

    public function useredit($fname)
    {
        $fname = User::findorFail($fname);
        return view('admin.user_edit');
    }



    public function getlanguages()
    {
        $language = DB::select('select * from languages');
        return view('admin.language', ['language'=>$language]);
    }





    public function getprofile()
    {
        return view('admin.admin_profile');
    }


    public function getresults()
    {
        // $result = Results::all();
        $result = Results::orderBy('id','desc')->paginate(10);
        return view('admin.results_view',['result'=>$result]);
    }


    // public function imageUploadPost()
    // {
    //     request()->validate([
    //         'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    //     ]);
    //     $imageName = time().'.'.request()->image->getClientOriginalExtension();
    //     request()->image->move(public_path('images'), $imageName);
    //     return back()
    //         ->with('success','You have successfully upload image.')
    //         ->with('image',$imageName);
    // }

}
