<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Results;

class ResultController extends Controller
{
    //
    public function add_marks(Request $request)
    {

        $result = new Results;
        $result->user_id =$request->input('user_id');
        $result->user_name =$request->input('user_name');
        $result->enrollment_no =$request->input('enrollment_no');
        $result->lang_id =$request->input('lang_id');
        $result->lang_name =$request->input('lang_name');
        $result->marks =$request->input('marks_submit');

        $result->save();
        return redirect('/tests');
    }

    public function result()
    {
        $result = Results::orderBy('id','desc')->paginate(10);
        return view('result',['result'=>$result]);
    }
}
