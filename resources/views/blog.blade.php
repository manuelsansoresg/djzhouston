@extends('layouts.template')
<?php
$title      = traslate('title_');
$subtitle   = traslate('subtitle_');
$content    = traslate('content_');
$slug       = traslate('slug_');



$tit = traslate('title_');
$sub = traslate('subtitle_');

$sections        = get_sections();
$section_event   = $sections['event'];

?>
@section('title', $blog_section->$title.'-'.$blog->$title)

@section('content')


<section class="breadcumb-area bg-img bg-overlay" style="background-image: url('{{ $path.$blog_section->picture }}');">
    <div class="bradcumbContent">
        <p> {{ (isset($blog_section->$title ))? $blog_section->$title : '' }} </p>
        <h2>
            {{ $blog->$title }}
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
                        <a href="#"><img src="{{ $path.$blog->picture }}" alt=""></a>
                        <!-- Post Date -->
                        <div class="post-date">
                            <span>{{ date('d', strtotime($blog->created_at)) }}</span>
                            <span>{{ date('F', strtotime($blog->created_at)) }} ‘{{ date('y', strtotime($blog->created_at)) }}</span>
                        </div>
                    </div>

                    <div class="">

                        <div class="post-meta d-flex mb-30">


                        </div>
                        <p>
                            {!! $blog->$content !!}
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
                        <img src="{{ $path.'/thumb_'.$row->picture_video }}" alt="">

                        <div class="play-icon">
                            <a href="{{ $row->video }}" data-toggle="modal" data-target=".modal-video" class="video--play--btn"><span class="icon-play-button"></span></a>
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
                        <img src="{{ $path.'/thumb_'.$picture->picture }}" alt="">

                        <div class="play-icon">
                            <a href="{{ asset($path.'/'.$picture->picture) }}" class="image-popup-vertical-fit"><span class="icon-zoom-in"></span></a>
                        </div>
                    </div>

                </div>
            </div>


            @endforeach
        </div>
    </div>
</section>

@endsection