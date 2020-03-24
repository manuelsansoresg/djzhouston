@extends('layouts.template')
<?php
$title      = traslate('title_');
$subtitle   = traslate('subtitle_');
$content    = traslate('content_');
$slug       = traslate('slug_');

$buttons          = get_sections();
$section_button   = $buttons['btn'];

?>
@section('title',  $event->$subtitle)

<!-- ##### Breadcumb Area Start ##### -->
<section class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/breadcumb3.jpg);">
    <div class="bradcumbContent">
        <p>{{ $event->$title }}</p>
        <h2>{{ $event->$subtitle }}</h2>
    </div>
</section>
<!-- ##### Breadcumb Area End ##### -->
<!-- ##### Events Area Start ##### -->
<section class="events-area section-padding-100">
    <div class="container">
        <div class="row">
            <!-- Single Event Area -->
            @foreach($events as $event)
            <div class="col-12 col-md-6 col-lg-4">
                <div class="single-event-area mb-30">
                    <div class="event-thumbnail">
                        <img src="{{ $path_event.'thumb_'.$event->picture }}" alt="">
                    </div>
                    <div class="event-text">
                        <h4>{{ $event->$title }}</h4>
                        <div class="event-meta-data">
                            <a href="#" class="event-place">{{ $event->address }}</a>
                            <a href="#" class="event-date">{{ $event->date }}</a>
                        </div>
                        <a href="/event/{{ $event->$slug }}" class="btn see-more-btn">{{ $section_button['see_event'] }}</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@section('content')
@endsection
