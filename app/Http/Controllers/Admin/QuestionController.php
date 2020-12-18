<?php

namespace App\Http\Controllers\Admin;
use App\Questions;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use Excel;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;

class QuestionController extends Controller
{
    //
    public function add_questions()
    {
        return view('admin.add_questions');
    }

    public function update_questions($id)
    {
        $que = Questions::findOrFail($id);
        return view('admin.update_questions')->with('que',$que);
    }

    public function update_que_done(Request $request,$id)
    {
        $q_update = Questions::findOrFail($id);
        $q_update->question = $request->input('question');
        $q_update->o1 =$request->input('o1');
        $q_update->o2 =$request->input('o2');
        $q_update->o3 =$request->input('o3');
        $q_update->o4 =$request->input('o4');
        $q_update->correct_ans =$request->input('o4');
        $q_update->lang_id =$request->input('lang_id');
        $q_update->update();
        return redirect('/questions')->with('status','Question Updated successfully');
    }

    public function store_que(Request $request)
    {

        $questions = new Questions;
        $questions->question =$request->input('question');
        $questions->o1 =$request->input('o1');
        $questions->o2 =$request->input('o2');
        $questions->o3 =$request->input('o3');
        $questions->o4 =$request->input('o4');
        $questions->correct_ans =$request->input('o4');
        $questions->lang_id =$request->input('lang_id');

        $questions->save();
        return redirect('/questions')->with('status','Question added successfully');
    }

    public function que_delete($id)
    {
        $que_del = Questions::findOrFail($id);
        $que_del->delete();
        return redirect('/questions')->with('status','Question Deleted successfully');
    }



    public function upload_excel()
    {
        return view('admin.upload_excel');
    }


    public function import(Request $request)
    {
        $this->validate($request,[
            'file'  => 'required|mimes:xml,xlsx'
        ]);
        $path = $request->file('file')->getRealPath();

        $data = Excel::load($path)->get();

        if($data->count() > 0)
        {
            foreach($data->toArray() as $key => $value)
            {
                foreach($value as $row)
                {
                    $insert_data[] = array(
                        'question' => $row['question'],
                        'o1' => $row['o1'],
                        'o2' => $row['o2'],
                        'o3' => $row['o3'],
                        'o4' => $row['o4'],
                        'correct_ans' => $row['correct_ans'],
                        'lang_id' => $row['lang_id'],
                    );
                }
            }

            if(!empty($insert_data))
            {
                DB::table('questions')->insert($insert_data);
            }
        }
        // return back();
        return view('admin.questions');
    }
}
