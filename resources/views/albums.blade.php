@extends('layouts.template')

@section('title', 'EVENTS')
<?php
$title      = traslate('title_');
$subtitle   = traslate('subtitle_');
$content    = traslate('content_');
$slug       = traslate('slug_');

$title_event['title_event_es']     = 'Album';
$subtitle_event['subtitle_event_es']  = 'Album';

$tit = traslate('title_event_');
$sub =traslate('subtitle_event_');


?>

@section('content')
    <section class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/breadcumb3.jpg);">
        <div class="bradcumbContent">
            <h2>{{ $title_event[$tit] }}</h2>

        </div>
    </section>

    <section class="album-catagory section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="oneMusic-buy-now-area mb-100">
                    <div class="container">
                        <div class="row">
                            @foreach($albums as $album)
                                <div class="col-12 col-sm-6 col-md-3">
                                    <div class="single-album-area">
                                        <div class="album-thumb">
                                            <img src="{{ $path_album.$album->picture }}" alt="">
                                        </div>
                                        <div class="album-info">
                                            <a href="#">
                                                <h5>{{ $album->$title }}</h5>
                                            </a>

                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            <!-- Single Album Area -->

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
