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
            'apply_first_name' => 'required|min:3|max:255',
            'apply_last_name' => 'required|min:3|max:255',
            'apply_email' => 'required|email',
            'apply_company' => 'required|min:3|max:255',
            'apply_position' => 'required|min:3|max:255',
            'apply_industry' => 'required|min:3|max:255',
        ]);

        // if ($validatedData->fails()) {
        //     return response()->json(['errors' => $validatedData->errors()]);
        // }

        // Capture the data
        $first_name = $request->input('apply_first_name');
        $last_name = $request->input('apply_last_name');
        $email = $request->input('apply_email');
        $phone = $request->input('apply_phone');
        $company = $request->input('apply_company');
        $position = $request->input('apply_position');
        $industry = $request->input('apply_industry');

        Mail::to('etienne.wansa@gmail.com')->send(new ApplyMail($validatedData));

        // Process the data (e.g., validation, sending email)
        return back()->with('success', 'Thank you for your application!');
    }
}
