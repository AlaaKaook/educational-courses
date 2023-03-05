<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\AdminMail;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    // message from user
    public function index()
    {
        $messages = Message::where('sender','user')->get();
        return view('admin.message.index', ['messages' => $messages]);
    }

    //message from admin
    public function messages_admin()
    {
        $messages = Message::where('sender','admin')->get();
        return view('admin.message.index', ['messages' => $messages]);
    }

    public function form_message_replay(Message $message)
    {
       return view('admin.message.create' , ['message' => $message]);
    }

    public function message_replay(Request $request , Message $message)
    {
        $mailData = $request->validate([
            'to_email' => 'required|email',
            'content' => 'required',
        ]);

        $mailData['name'] =(Auth::user()->username);
        $mailData['from_email'] =(Auth::user()->email);
        $mailData['sender'] =('admin');
        $mailData['is_replay'] = 1 ;

         Mail::to(Auth::user()->email)->send(new AdminMail($mailData));

        Message::create($mailData);

        $message->is_replay = 1 ;
        $message->update();

        return redirect()->route('admin.messages.index')->with('send_mail','Send Message Replay Successfully');
    }

    public function show(Message $message)
    {
        return view('admin.message.show' , ['message' => $message]);
    }

    public function destroy(Message $message)
    {
        $message->delete();

        return redirect()->route('messages.index')->with('status', 'Delete Message Successfully');
    }
}
