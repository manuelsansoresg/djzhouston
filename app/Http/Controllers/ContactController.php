<?php

namespace App\Http\Controllers;

use App\Event;
use App\Genres_content;
use App\Http\Requests\ContactFormRequest;
use App\Landing_picture;
use App\Mail\EmailContact;
use App\Package_content;
use App\Section_about;
use App\Section_contact;
use App\Section_event;
use App\Section_genre;
use App\Section_landing;
use App\Section_package;
use App\Slider_landing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use View;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $captcha = $_POST['g-recaptcha-response'];
        $error = 'Error captcha';
        if( $captcha == null){
            $sliders          = Slider_landing::all();
            $path_slider      = 'img/slider/';

            $service          = Section_landing::first();
            $service_contents = Landing_picture::all();
            $path_services    = 'img/servicios/';

            $genre            = Section_genre::first();
            $genres           = Genres_content::all();
            $path_genre       = 'img/genero/';


            $package          = Section_package::first();
            $packages         = Package_content::all();
            $path_package     = 'img/paquetes/';

            $event            = Section_event::first();
            $events           = Event::all();
            $path_event       = 'img/eventos/';

            $about            = Section_about::first();
            $path_about       = 'img/about/';

            $contact          = Section_contact::first();
            if($request->type_contact == 1){
                return View::make('welcome', compact('sliders', 'path_slider', 'service', 'service_contents', 'path_services', 'genre', 'package', 'event', 'genres', 'path_genre', 'packages', 'path_package', 'events', 'path_event', 'about', 'path_about', 'contact', 'error')); 
            }
            return View::make('contact', compact('sliders', 'path_slider', 'service', 'service_contents', 'path_services', 'genre', 'package', 'event', 'genres', 'path_genre', 'packages', 'path_package', 'events', 'path_event', 'about', 'path_about', 'contact', 'error')); 
        }else{
            Mail::to('dreams@djzhouston.com')->send(new EmailContact($request->all()));
            return redirect('thanks');
        }
        /* $rules = ['captcha' => 'required|captcha_api:' . request('key') . ',default'];
        $validator = validator()->make(request()->all(), $rules, ['captcha' => 'El captcha ingresado es incorrecto.']);

        if ($validator->fails()) {
            
        } else {
            Mail::to('dreams@djzhouston.com')->send(new EmailContact($request->all()));
            return redirect('thanks');
        } */

       

       /*  if ($validation->fails()) {

            return Redirect::to('anunciate')->withErrors($validation)->withInput();
        } else {

           
        } */
        
    }
}
