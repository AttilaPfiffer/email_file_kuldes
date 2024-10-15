<?php

namespace App\Http\Controllers;

use App\Mail\DemoMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index()
   {
       $mailData = [
           'title' => 'Xd',
           'body' => 'dik'
       ];       
       Mail::to('tesztvmi7@gmailcom')
/* ->cc($moreUsers)
        ->bcc($evenMoreUsers) */
->send(new DemoMail($mailData));
       dd("Email küldése sikeres.");
   }

}
