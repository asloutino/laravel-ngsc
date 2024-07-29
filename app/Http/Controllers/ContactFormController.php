<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function submit(Request $request)
    {
        $validatedData = $request->validate([
            'contact-first-name' => 'required|min:3|max:255',
            'contact-last-name' => 'required|min:3|max:255',
            'contact-email' => 'required|email',
            'contact-phone' => 'required',
            'contact-subject' => 'required',
            'contact-company' => 'required|min:3|max:255',
            'contact-position' => 'required|min:3|max:255',
            'contact-industry' => 'required|min:3|max:255',
            'contact-message' => 'required|min:10',
        ]);

        // Capture the data
        $first_name = $request->input('contact-first-name');
        $last_name = $request->input('contact-last-name');
        $email = $request->input('contact-email');
        $phone = $request->input('contact-phone');
        $inquiry = $request->input('contact-subject');
        $company = $request->input('contact-company');
        $position = $request->input('contact-position');
        $industry = $request->input('contact-industry');
        $message = $request->input('contact-message');

        Mail::to('etienne.wansa@gmail.com')->send(new ContactMail($validatedData));

        // Process the data (e.g., validation, sending email)
        return back()->with('success', 'Thank you for your message!');
    }
}
