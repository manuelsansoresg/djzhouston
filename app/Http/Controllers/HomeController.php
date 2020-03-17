<?php

namespace App\Http\Controllers;

use App\Event;
use App\Landing_picture;
use App\Section_event;
use App\Section_genre;
use App\Section_landing;
use App\Section_package;
use App\Slider_landing;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $sliders          = Slider_landing::all();
        $path_slider      = 'img/slider/';

        $service          = Section_landing::first();
        $service_contents = Landing_picture::all();
        $path_services    = 'img/servicios/';

        $genre            = Section_genre::first();

        $package          = Section_package::first();

        $event            = Section_event::first();

        return view('welcome', compact('sliders', 'path_slider', 'service', 'service_contents', 'path_services', 'genre', 'package', 'event'));
    }
}
