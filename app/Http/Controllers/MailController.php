<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\sendMail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
     public function send()
    {
   
    
    $details = [
        'title' => 'Mail from BSB.com',
        'body' => 'This is for testing email'
    ];
   
    Mail::to('shaheedkhan336@gmail.com')->send(new \App\Mail\sendMail($details));
   
    dd("Email is Sent.");
        }

  
}
