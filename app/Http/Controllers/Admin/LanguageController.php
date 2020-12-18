<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Response;
use Image;
use App\Languages;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class LanguageController extends Controller
{
    public function add_lang()
    {
        return view('admin.add_lang');
    }

    public function update_language($id)
    {
        $lang = Languages::findOrFail($id);
        return view('admin.update_language')->with('lang',$lang);
    }

    //insert
    public function store_lang(Request $request)
    {
        request()->validate([
            'lang_logo' => 'required|image|mimes:png,jpg,jpeg'
        ]);
        if($file = $request->file('lang_logo'))
        {
            $path = public_path('/lang_logos/');

            $logo_image = date('YmdHis').".".$file->getClientOriginalExtension();

            $file->move($path, $logo_image);

            $insert['image'] = '$logo_image';

            $language = new Languages;
            $language->l_name =$request->input('l_name');
            $language->lang_logo =$logo_image;
            // $language->lang_logo =$request->input('lang_logo');
            $language->save();
        }
        return redirect('/language')->with('success','Subject addeed successfully');
    }

    //update
    public function update_lang_done(Request $request,$id)
    {
        request()->validate([
            'lang_logo' => 'required|image|mimes:png,jpg,jpeg'
        ]);

        if($file = $request->file('lang_logo'))
        {
            $path = public_path('/lang_logos/');

            $logo_image = date('YmdHis').".".$file->getClientOriginalExtension();

            $file->move($path, $logo_image);

            $insert['image'] = '$logo_image';

            $l_update = Languages::findOrFail($id);
            $l_update->l_name =$request->input('l_name');
            $l_update->lang_logo =$logo_image;
            $l_update->update();
        }
        return redirect('/language')->with('status','Subject Updated successfully');
    }

    //delete
    public function lang_delete($id)
    {
        $lang_del = Languages::findOrFail($id);
        $lang_del->delete();
        return redirect('/language')->with('status','Subject Deleted successfully');
    }
}
