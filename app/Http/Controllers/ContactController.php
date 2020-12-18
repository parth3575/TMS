<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{
    //
    public function getContact() {

        return view('contact_us');
      }

       public function saveContact(Request $request) {

         $this->validate($request, [
             'fname' => 'required',
             'lname' => 'required',
             'email' => 'required|email',
             'message' => 'required'
         ]);

         $contact = new Contact;

         $contact->fname = $request->fname;
         $contact->lname = $request->lname;
         $contact->email = $request->email;
         $contact->message = $request->message;

         $contact->save();

         Mail::send('contact_email',
             array(
                 'fname' => $request->get('fname'),
                 'lname' => $request->get('lname'),
                 'email' => $request->get('email'),
                 'user_message' => $request->get('message'),
             ), function($message) use ($request)
               {
                  $message->from($request->email);
                  $message->to('admin@admin.com');
               });

         return back()->with('success', 'Thank you for contacting us!');

     }
}
