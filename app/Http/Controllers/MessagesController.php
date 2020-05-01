<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function submit(Request $request)
    {
        //Validating the form
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
        ]);

        //Create New Message
        $message = new Message;
        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->message = $request->input('message');

        //Save the message
        $message->save();

        //redirect after saving
        return redirect('/')->with('success', 'Message sent successfully');
    }

    public function getMessages()
    {
        //get messages from database
        $message = Message::all();

        //passing the messages to the view
        return view('messages')->with('messages', $message);

    }
}