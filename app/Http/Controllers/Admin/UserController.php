<?php

namespace App\Http\Controllers\Admin;
use app\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Users;

class UserController extends Controller
{

    public function add_user()
    {
        return view('admin.add_user');
    }

    public function update_user($id)
    {
        $user = User::findOrFail($id);
        return view('admin.update_user')->with('user',$user);
    }

    public function update_user_done(Request $request,$id)
    {
        $u_update = User::findOrFail($id);
        $u_update->fname =$request->input('fname');
        $u_update->mname =$request->input('mname');
        $u_update->lname =$request->input('lname');
        $u_update->enrollment_no =$request->input('enrollment_no');
        $u_update->roll_no =$request->input('roll_no');
        $u_update->gender =$request->input('gender');
        $u_update->dob =$request->input('dob');
        $u_update->contact_no =$request->input('contact_no');
        $u_update->usertype =$request->input('admin');
        $u_update->email =$request->input('email');
        $u_update->update();
        return redirect('/user_table')->with('status','User Updated Successfully');
    }

    public function store_user(Request $request)
    {

        $user = new User;
        $user->fname =$request->input('fname');
        $user->mname =$request->input('mname');
        $user->lname =$request->input('lname');
        $user->enrollment_no =$request->input('enrollment_no');
        $user->roll_no =$request->input('roll_no');
        $user->gender =$request->input('gender');
        $user->dob =$request->input('dob');
        $user->contact_no =$request->input('contact_no');
        $user->usertype =$request->input('admin');
        $user->email =$request->input('email');
        $password = $request->input('password');
        $user->password =bcrypt($password);
        // $user->password =$request->input('password');

        $user->save();
        return redirect('/user_table')->with('status','User Added Successfully');
    }

    public function user_delete($id)
    {
        $user_del = User::findOrFail($id);
        $user_del->delete();
        return redirect('/user_table')->with('status','User Deleted Successfully');
    }
}
