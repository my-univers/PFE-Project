<?php

namespace App\Http\Controllers;

use App\Mail\ReplyEmail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

    public function showMessages(Request $request)
{
    $filter = $request->messagesFilter;
    $messages = Contact::query();

    if ($filter == 'Lus') {
        $messages->where('is_read', true);
    } elseif ($filter == 'Non Lus') {
        $messages->where('is_read', false);
    }
    
    $messages = $messages->paginate(10);

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

    public function sendEmail(Request $request)
{
    $userEmail = $request->email; 
    $prenom = Contact::where('email', $userEmail)->value('prenom');

    $data = [
        'body' => $request->body,
        'prenom' => $prenom
    ];

    Mail::to($userEmail)->send(new ReplyEmail($data));

    $contact = Contact::findOrFail($request->message_id);
    $contact->is_read = 1;
    $contact->save();
    
    return back()->with('msg sent successfully');
}




}
