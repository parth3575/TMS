<?php

namespace App\Http\Controllers;

use App\Questions;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Languages;
use Illuminate\Http\Request;
use AuthenticatesUsers;

class Users extends Controller
{
    public function contact()
    {
        return view('contact');
    }

    public function tests()
    {
        // $test = DB::select('select * from languages');
        $test = Languages::all();
        // return view('tests', ['test'=>$test])->with('success','Welcome, this is your test list');
        return view('tests', ['test'=>$test])->with('success','Welcome, this is your test list');
        // return redirect('/tests', ['test'=>$test])->with('success','Welcome, this is your test list');
    }

    public function profile()
    {
        return view('profile');
    }

    protected function mcqs($id)
    {
        if(Auth::user())
        {
            // $que = DB::select('select * from questions');

            //change limit to 30 after inserting proper questions.
            $que = DB::select('SELECT * FROM `questions` WHERE `lang_id`= ? ORDER BY RAND() LIMIT 30',[$id]);
            $lang = DB::select('SELECT * FROM `languages` WHERE `id`= ?',[$id]);
            return view('mcqs', ['que'=>$que, 'lang'=>$lang]);
        }
        else
        {
            return view('auth.login');
        }
    }


}
