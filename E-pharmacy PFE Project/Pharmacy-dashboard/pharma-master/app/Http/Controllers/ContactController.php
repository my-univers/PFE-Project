<?php

namespace App\Http\Controllers;

use App\Mail\ReplyEmail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function showMessages(){
        $messages = Contact::all();
        return view('contacts.messages', ['messages' => $messages]);
    }

    public function deleteMessages($id){
        $c = Contact::find($id);
        $c->delete();
        return redirect('/messages');
    }

    public function showForm($id){
        $message = Contact::find($id);
        return view('contacts.responses', ['message' => $message]);
    }

    public function showMail(){
        return view('contacts.mail');
    }

    public function sendEmail(Request $request){

        $userEmail = $request->email; 
        $prenom =  Contact::where('email', $userEmail)->value('prenom');

        $data = [
            'body' => $request->body,
            'prenom' => $prenom
        ];

            Mail::to($userEmail)->send(new ReplyEmail($data));


        return back()->with('msg sent successfully');

    }
    


}
