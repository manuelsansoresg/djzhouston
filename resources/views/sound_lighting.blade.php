@extends('layouts.template')
<?php
$menu            = menuHeader();
$sections        = get_sections();
$title      = traslate('title_');
$subtitle   = traslate('subtitle_');
$content   = traslate('content_');
$section_btn     = $sections['btn'];

?>
@section('title', $menu[2])

@section('content')
    <section class="breadcumb-area bg-img bg-overlay" style="background-image: url('{{ $path.'/'.$sound->picture }}');">
        <div class="bradcumbContent">
            <p>{{ $sound->$subtitle }}</p>
            <h2>{{ $sound->$title }}</h2>
        </div>
    </section>

    <div class="container-fluid">
        @foreach($sounds as $row)
        <div class="row  pb-5 sound-content">
            <div class="col-12 col-md-5 sound-cover" style="background-image: url('{{ $path.'/'.$row->picture  }}')">

            </div>
            <div class="col-12 col-md-7">
              <div class="row mt-5 mt-md-0">
                  <div class="col-11">
                      <h5 class="text-center"> {{  $row->$title }} </h5>
                      <p>
                          {!! $row->$content !!}
                      </p>
                  </div>
              </div>
            </div>
        </div>
        @endforeach
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
