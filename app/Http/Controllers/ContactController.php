<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

    /**
     * Send contact mail.
     */
    public function mail(Request $request)
    {
        $inputs = $request->validate([
            'name' => ['required', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['required', 'max:255'],
            'service' => ['required', 'max:255'],
            'message' => ['required', 'max:5000'],
        ]);

        try {
            Mail::send(new ContactMail($inputs));
            return redirect()->route('contact.index')->with('success', 'Thank you! Your message has been sent. We will contact you soon.');
        } catch (\Exception $e) {
            return redirect()->route('contact.index')->with('error', 'Oops! Something went wrong. Please try again later.');
        }
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('app.contact.index');
    }
}
