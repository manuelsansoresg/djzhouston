<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Mail\EmailContact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(ContactFormRequest $request)
    {
        Mail::to('dreams@djzhouston.com')->send(new EmailContact($request->all()));
        return response()->json(200);
    }
}
