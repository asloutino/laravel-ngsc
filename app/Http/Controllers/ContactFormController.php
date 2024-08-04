<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use App\Mail\ThankYou;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function submit(Request $request)
    {
        $validatedData = $request->validate([
            'contact_first_name' => 'required|min:3|max:255',
            'contact_last_name' => 'required|min:3|max:255',
            'contact_email' => 'required|email',
            'contact_phone' => 'required',
            'contact_subject' => 'required',
            'contact_company' => 'required|min:3|max:255',
            'contact_position' => 'required|min:3|max:255',
            'contact_industry' => 'required|min:3|max:255',
            'contact_message' => 'required|min:10',
        ]);

        // if ($validatedData->fails()) {
        //     return response()->json(['errors' => $validator->errors()]);
        // }

        // Capture the data
        $first_name = $request->input('contact_first_name');
        $last_name = $request->input('contact_last_name');
        $email = $request->input('contact_email');
        $phone = $request->input('contact_phone');
        $inquiry = $request->input('contact_subject');
        $company = $request->input('contact_company');
        $position = $request->input('contact_position');
        $industry = $request->input('contact_industry');
        $message = $request->input('contact_message');

        // if ($subject == "Delegate Application") {
        //     Mail::to('prejeesh.pushparajan@fischerappelt.com')->send(new ContactMail($validatedData));
        // } else if ($subject == "Partnership Opportunity") {
        //     Mail::to('emma.phillips@fischerappelt.com')->send(new ContactMail($validatedData));
        // } else if ($subject == "Speaker Application") {
        //     Mail::to('sau.noddings@fischerappelt.com')->send(new ContactMail($validatedData));
        // } else if ($subject == "General Inquiries") {
        //     Mail::to('paula.jensch@fischerappelt.com')->send(new ContactMail($validatedData));
        // } else if ($subject == "Media Accreditation & Inquiries") {
        //     Mail::to('dareen.aldeweik@fischerappelt.com')->send(new ContactMail($validatedData));
        // }
        Mail::to('etienne.wansa@gmail.com')->send(new ContactMail($validatedData));

        Mail::to($email)->send(new ThankYou($validatedData));

        // Process the data (e.g., validation, sending email)
        return back()->with('success', 'Thank you for your message!');
    }
}
