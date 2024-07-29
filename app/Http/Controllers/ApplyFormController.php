<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ApplyMail;
use Illuminate\Support\Facades\Mail;

class ApplyFormController extends Controller
{
    public function submit(Request $request)
    {
        $validatedData = $request->validate([
            'apply-first-name' => 'required|min:3|max:255',
            'apply-last-name' => 'required|min:3|max:255',
            'apply-email' => 'required|email',
            'apply-company' => 'required|min:3|max:255',
            'apply-position' => 'required|min:3|max:255',
            'apply-industry' => 'required|min:3|max:255',
        ]);

        // Capture the data
        $first_name = $request->input('apply-first-name');
        $last_name = $request->input('apply-last-name');
        $email = $request->input('apply-email');
        $phone = $request->input('apply-phone');
        $company = $request->input('apply-company');
        $position = $request->input('apply-position');
        $industry = $request->input('apply-industry');

        Mail::to('etienne.wansa@gmail.com')->send(new ApplyMail($validatedData));

        // Process the data (e.g., validation, sending email)
        return back()->with('success', 'Thank you for your application!');
    }
}
