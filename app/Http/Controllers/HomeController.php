<?php

namespace App\Http\Controllers;

use App\Album;
use App\Blog;
use App\Blog_picture;
use App\Event;
use App\Event_picture;
use App\Genres_content;
use App\Landing_picture;
use App\Package_content;
use App\Section_about;
use App\Section_blog;
use App\Section_contact;
use App\Section_event;
use App\Section_genre;
use App\Section_landing;
use App\Section_package;
use App\Section_sound_lights;
use App\Slider_landing;
use App\Sound_lights;
use App\Sound_lights_pictures;
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

        return view('welcome', compact('sliders', 'path_slider', 'service', 'service_contents', 'path_services', 'genre', 'package', 'event', 'genres', 'path_genre', 'packages', 'path_package', 'events', 'path_event', 'about', 'path_about', 'contact'));
    }

    public function events()
    {
        $event            = Section_event::first();
        $events           = Event::all();
        $path_event       = 'img/eventos/';
        return view('events', compact('event', 'events', 'path_event'));
    }

    public function event($title_slug)
    {
        $slug                              = traslate('slug_');
        $events                            = Event::where($slug, '!=', $title_slug)->orderBy('date', 'desc')->limit(20)->get();
        $event                             = Event::where($slug, $title_slug)->first();
        $path_event                        = '/img/eventos/';
        $pictures                          = Event_picture::where('event_id', $event->id)->where('type', 1)->orderBy('id', 'desc')->get();
        $videos                            = Event_picture::where('event_id', $event->id)->where('type', 2)->orderBy('id', 'desc')->get();



        return view('event', compact('event', 'path_event', 'events', 'pictures', 'videos'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function sound_lighting()
    {
        $sound = Section_sound_lights::first();
        $sounds = Sound_lights::orderBy('id', 'desc')->get();
        $path = 'img/soundlight';
        $pictures  = Sound_lights_pictures::where('sound_light_id', $sound->id)->where('type', 1)->orderBy('id', 'desc')->get();
        $videos  = Sound_lights_pictures::where('sound_light_id', $sound->id)->where('type', 2)->orderBy('id', 'desc')->get();
        return view('sound_lighting', compact('sound', 'path', 'sounds', 'pictures', 'videos'));
    }

    public function albums()
    {
        $albums     = Album::all();
        $path_album = '/img/album/';
        return view('albums', compact('albums', 'path_album'));
    }

    public function thanks()
    {
        return view('thanks');
    }

    public function blogs()
    {
        $blog           = Section_blog::first();
        $blogs          = Blog::all();
        $path           = 'img/blog/';
        return view('blogs', compact('blogs', 'blog', 'path'));
    }

    public function blog($title_slug)
    {
        $slug                              = traslate('slug_');
        $blog                              = Blog::where($slug, $title_slug)->first();
        $blog_section                      = Section_blog::first();
        $path                              = '/img/blog/';
        $pictures                          = Blog_picture::where('blog_id', $blog->id)->where('type', 1)->orderBy('id', 'desc')->get();
        $videos                            = Blog_picture::where('blog_id', $blog->id)->where('type', 2)->orderBy('id', 'desc')->get();



        return view('blog', compact('blog', 'path',  'pictures', 'videos', 'blog_section'));
    }

}
