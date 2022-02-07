<?php

namespace App\Http\Controllers;

use App\Mail\ConfirmEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmailConfirmAcc($request){
        $details = [
            'title' => $request->title,
            'body' => $request->body,
        ];

        Mail::to($request->mail)->send(new ConfirmEmail($details));
        
    }
}
