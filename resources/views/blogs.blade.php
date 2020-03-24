
@extends('layouts.template')
<?php
$title      = traslate('title_');
$subtitle   = traslate('subtitle_');
$content    = traslate('content_');
$slug       = traslate('slug_');

$buttons          = get_sections();
$section_button   = $buttons['btn'];

?>
@section('title',  $blog->$subtitle)

<!-- ##### Breadcumb Area Start ##### -->
<section class="breadcumb-area bg-img bg-overlay" style="background-image: url('{{ $path.$blog->picture }}');">
    <div class="bradcumbContent">
        <p>{{ $blog->$title }}</p>
        <h2>{{ $blog->$subtitle }}</h2>
    </div>
</section>
<!-- ##### Breadcumb Area End ##### -->
<!-- ##### Events Area Start ##### -->
<section class="events-area section-padding-100">
    <div class="container">
        <div class="row">
            <!-- Single Event Area -->
            @foreach($blogs as $row)
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-event-area mb-30">
                        <div class="event-thumbnail">
                            <img src="{{ $path.'thumb_'.$row->picture }}" alt="">
                        </div>
                        <div class="event-text">
                            <h4>{{ $row->$title }}</h4>
                            <div class="event-meta-data">
                                <a href="#" class="event-place">{{ $row->address }}</a>
                                <a href="#" class="event-date">{{ $row->date }}</a>
                            </div>
                            <a href="/blog/{{ $row->$slug }}" class="btn see-more-btn">{{ $section_button['see_blog'] }}</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@section('content')
@endsection
