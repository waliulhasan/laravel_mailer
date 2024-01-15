<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Jobs\MailJob;
use Illuminate\Support\Facades\Mail;

class MailSendController extends Controller
{
     public function sendEmail()
    {
        MailJob::dispatch();
        return "Email sent successfully!";
    }
}
