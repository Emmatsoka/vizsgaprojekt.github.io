<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function sendWelcomeEmail()
    {
        $title = 'Üdv a wesoc oldalán';
        $body = 'KÖszi a részvét!';

        Mail::to('wesoc93@gmail.com')->send(new WelcomeMail($title, $body));

        return "Sikeresen elküldve!";
    }
}