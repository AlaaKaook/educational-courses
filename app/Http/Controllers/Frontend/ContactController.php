<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use App\Models\Message;
use App\Models\User;
use App\Notifications\MessageReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact()
    {
        return view('frontend.contact.contact');
    }

    public function send_email(Request $request)
    {
        // dd('fghjk');
        $mailData  = $request->validate([
            'name' => 'required',
            'from_email' => 'required|email',
            'content' => 'required',
        ]);
        Mail::to($request->from_email)->send(new ContactMail($mailData));
        User::where('email', 'admin@gmail.com')->first()->notify(new MessageReceived);

        $mailData['sender'] =('user');
        $mailData['to_email'] =('admin@gmail.com');
        Message::create($mailData);

        return redirect()->route('home.front')->with('send_mail' , 'Send Message Successfully');;
    }
}
