<?php

namespace Murprakoso\Contactform\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Murprakoso\Contactform\Models\ContactForm;

class ContactFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        return view('contactform::contact');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function sendMail(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:50',
            'email' => 'required|max:255|email',
            'message' => 'required',
        ]);

        if ($validated) {
            ContactForm::create($request->all());
        }

        return redirect(route('contact'))
            ->with(['message' => 'Thank you, your mail has been sent successfully.']);
    }
}
