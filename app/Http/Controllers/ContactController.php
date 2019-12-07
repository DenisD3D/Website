<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class ContactController extends Controller
{
    function index()
    {
        return view('contact');
    }

    public function send(Request $request)
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        );

        Mail::to('thedenisdd@gmail.com')->send(new SendMail($data));

        return back()->with('success', 'Your message have been send ! You will receive à response soon.');
    }
}
