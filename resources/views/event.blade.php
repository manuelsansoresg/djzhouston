
@extends('layouts.template')
<?php
$title      = traslate('title_');
$subtitle   = traslate('subtitle_');
$content    = traslate('content_');
$slug       = traslate('slug_');

$title_event['title_event_es']     = 'EVENTO';
$subtitle_event['subtitle_event_es']  = 'EVENTO';
$title_event['title_event_eng']     = 'EVENTS';
$subtitle_event['subtitle_event_eng']  = 'EVENT';

$tit = traslate('title_event_');
$sub =traslate('subtitle_event_');

$sections        = get_sections();
$section_event   = $sections['event'];

?>
@section('title', $title_event[$tit].'-'.$event->$title)

@section('content')


    <section class="breadcumb-area bg-img bg-overlay" style="background-image: url('/img/bg-img/breadcumb3.jpg');">
        <div class="bradcumbContent">
            <p> {{ $title_event[$tit] }} </p>
            <h2>
                {{ $event->$title }}
            </h2>


        </div>
    </section>

   <div class="blog-area section-padding-100">
       <div class="container">
           <div class="row justify-content-center">
               <div class="col-12 col-md-10 ">

                   <!-- Single Post Start -->
                   <div class="single-blog-post mb-100 wow fadeInUp" data-wow-delay="100ms">
                       <!-- Post Thumb -->
                       <div class="blog-post-thumb mt-30">
                           <a href="#"><img src="{{ $path_event.$event->picture }}" alt=""></a>
                           <!-- Post Date -->
                           <div class="post-date">
                               <span>{{ date('d', strtotime($event->date)) }}</span>
                               <span>{{ date('F', strtotime($event->date)) }} ‘{{ date('y', strtotime($event->date)) }}</span>
                           </div>
                       </div>

                       <div class="">

                           <div class="post-meta d-flex mb-30">
                               <p class="post-author">
                                   {{ $event->address }}
                               </p>

                           </div>
                           <p>
                               {!! $event->$content !!}
                           </p>
                       </div>




                   </div>
               </div>

           </div>
       </div>
   </div>

   <section>
       <div class="container">
           <div class="row mt-5">
               @foreach($videos as $row)
                   <div class="col-12 col-sm-6 col-md-3">
                       <div class="single-album-area">
                           <div class="album-thumb">
                               <img src="{{ $path_event.'thumb_'.$row->picture_video }}" alt="">

                               <div class="play-icon">
                                   <a href="{{ $row->video }}" data-toggle="modal" data-target=".modal-video"  class="video--play--btn"><span class="icon-play-button"></span></a>
                               </div>
                           </div>

                       </div>
                   </div>
               @endforeach
           </div>
       </div>
   </section>

   <section class="oneMusic-buy-now-area has-fluid bg-gray pb-3">
       <div class="container">
           <div class="row mt-5">
                @foreach($pictures as $picture)
                   <div class="col-12 col-sm-6 col-md-3 mt-5">
                       <div class="single-album-area">
                           <div class="album-thumb">
                               <img src="{{ $path_event.'/thumb_'.$picture->picture }}" alt="">

                               <div class="play-icon">
                                   <a href="{{ asset($path_event.'/'.$picture->picture) }}" class="image-popup-vertical-fit"><span class="icon-zoom-in"></span></a>
                               </div>
                           </div>

                       </div>
                   </div>


                @endforeach
           </div>
       </div>
   </section>

@endsection
