<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Mail\EmailContact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function store(ContactFormRequest $request)
    {
        Validator::extend('honey_pot', function ($attribute, $value, $parameters) {

            return $value == '';
        });
        $rules = array(

            'name' => 'required',
            'honey_pot' => 'honey_pot'

        );

        $messages = array('honey_pot' => 'Nothing Here');

        $validation = Validator::make($request->all(), $rules, $messages);

        if ($validation->fails()) {

            return Redirect::to('anunciate')->withErrors($validation)->withInput();
        } else {

            Mail::to('dreams@djzhouston.com')->send(new EmailContact($request->all()));
            return response()->json(200);
        }
        
    }
}
