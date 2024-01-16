<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Jobs\ImageUploadJob;
use App\Jobs\MailJob;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class MailSendController extends Controller
{
     public function sendEmail()
    {
        MailJob::dispatch();
        return "Email sent successfully!";
    }


    public function showForm(){
        return view('email.user_form');
    }


    public function processImage(Request $request)
    {
        // Validate and get the image data
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust validation rules as needed
        ]);

        $imageData = $request->file('image');

        // Dispatch the job
        ImageUploadJob::dispatch($imageData);

        return redirect()->back()->with('success', 'Image processing started. Check logs for completion.');
    }
}
