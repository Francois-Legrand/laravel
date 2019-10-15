<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact.create');
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required|min:20'
        ]);
        
        Mail::to('francois.legrand62800@gmail.com')->send(new ContactMail($data));

        return redirect('contact')->with('submitMail', 'Votre message à été envoyé avec succès !');
    }

}
