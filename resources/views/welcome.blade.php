@extends('layouts.template')

@section('title', 'DJ Z HOUSTON the best dj entertainment')

@section('content')
<!-- ##### Hero Area Start ##### -->
<?php
$title       = traslate('title_');
$subtitle    = traslate('subtitle_');
$content     = traslate('content_');

$sections    = get_sections();
$section_btn = $sections['btn'];
$slug        = traslate('slug_');

?>

<section class="hero-area">
    <div class="hero-slides owl-carousel">
        <!-- Single Hero Slide -->
        @foreach($sliders as $slider)
        <div class="single-hero-slide d-flex align-items-center justify-content-center">
            <!-- Slide Img -->
            <div class="slide-img bg-img" style="background-image: url({{ $path_slider.$slider->picture }});"></div>
            <!-- Slide Content -->
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="hero-slides-content text-center">

                            <h6 data-animation="fadeInUp" data-delay="100ms">{{ $slider->$title }}</h6>
                            <h2 data-animation="fadeInUp" data-delay="300ms">{{ $slider->$subtitle }}</h2>
                            <a data-animation="fadeInUp" data-delay="500ms" href="tel:+8322290610" class="btn oneMusic-btn mt-50">
                                {{ $section_btn['schedule'] }} 
                                <i class="fa fa-angle-double-right"></i>
                            </a>
                            <a data-animation="fadeInUp" data-delay="500ms" href="/contact" class="btn oneMusic-btn mt-50">
                                {{ $section_btn['contact'] }}
                                <i class="fa fa-angle-double-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</section>
<!-- ##### Hero Area End ##### -->

<!-- ##### Latest Albums Area Start ##### -->
<section class="latest-albums-area section-padding-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading style-2 mb-15">

                    <h2>{{ $service->$title }}</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="ablums-text text-center mb-70">
                    <p>{{ $service->$subtitle }}</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="albums-slideshow owl-carousel">
                    <!-- Single Album -->
                    @foreach($service_contents as $service_content)
                    <div class="single-album">
                        <img src="{{ $path_services.'thumb_'.$service_content->picture }}" alt="">
                        <div class="album-info">
                            <a href="#">
                                <h5>{{ $service_content->$title }}</h5>
                            </a>

                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>


<!-- ##### Miscellaneous Area Start ##### -->
<section class="miscellaneous-area section-padding-100-0">
    <div class="container">
        <div class="row">

            <!-- ***** New Hits Songs ***** -->
            <div class="col-12 col-md-12">
                <div class="new-hits-area mb-100">
                    <div class="section-heading text-left mb-50 wow fadeInUp" data-wow-delay="50ms">
                        <p>{{ $genre->$title }}</p>
                        <h2>{{ $genre->$subtitle }}</h2>
                    </div>

                    <!-- Single CUMBIA Item -->
                    <div class="row">
                        @foreach($genres as $genre)
                        <div class="col-12 col-md-3 pb-3">
                            <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="100ms">
                                <div class="first-part d-flex align-items-center">
                                    <div class="thumbnail">
                                        <img src="{{ $path_genre.'thumb_'.$genre->picture }}" alt="">
                                    </div>
                                    <div class="content-">

                                        <p>{{ $genre->$title }}</p>
                                    </div>
                                </div>
                                <audio preload="auto" controls>
                                    <source src="{{ $path_genre.$genre->music }}">
                                </audio>
                            </div>
                        </div>
                        @endforeach



                    </div>

                </div>
            </div>



        </div>
    </div>
</section>
<!-- ##### Miscellaneous Area End ##### -->

<!-- paquetes -->
<section class="oneMusic-buy-now-area has-fluid bg-gray section-padding-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="text-center style-2">
                    <p>{{ $package->$title }}</p>
                    <h2>{{ $package->$subtitle }}</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-3">
            @foreach($packages as $package)
            <div class="col-12 col-md-4">
                <div class="single-event-area mb-30">
                    <div class="event-thumbnail">
                        <img class="img-package" src="{{ $path_package.$package->picture }}" alt="">
                    </div>
                    <div class="event-text event-text-packate">
                        <h4>{{ $package->$title }}</h4>
                        <div class="event-meta-data">
                            <div class="row">
                                <div class="col-12 text-white">
                                    <span class="event-place"> {!! $package->$content !!}</span>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="event-text">
                        <h4>${{ $package->price }}</h4>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
    </div>
</section>
<!-- paquetes -->

<!-- ##### Latest Albums Area End ##### -->

<!-- ##### Buy Now Area Start ##### -->
<section class="oneMusic-buy-now-area has-fluid bg-gray section-padding-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="section-heading style-2">
                    <p>{{ $event->$title }}</p>
                    <h2>{{ $event->$subtitle }}</h2>
                </div>
            </div>
        </div>
        <div class="row">
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
                        <a href="/event/{{ $event->$slug }}" class="btn see-more-btn">{{ $section_btn['see_event'] }}</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="row d-none">

            <!-- Single Album Area -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                <div class="single-album-area wow fadeInUp" data-wow-delay="100ms">
                    <div class="album-thumb">
                        <img src="img/bg-img/b1.jpg" alt="">
                        <!-- Album Price -->
                        <div class="album-price">
                            <p>$0.90</p>
                        </div>
                        <!-- Play Icon -->
                        <div class="play-icon">
                            <a href="#" class="video--play--btn"><span class="icon-play-button"></span></a>
                        </div>
                    </div>
                    <div class="album-info">
                        <a href="#">
                            <h5>Garage Band</h5>
                        </a>
                        <p>Radio Station</p>
                    </div>
                </div>
            </div>

            <!-- Single Album Area -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                <div class="single-album-area wow fadeInUp" data-wow-delay="200ms">
                    <div class="album-thumb">
                        <img src="img/bg-img/b2.jpg" alt="">
                    </div>
                    <div class="album-info">
                        <a href="#">
                            <h5>Noises</h5>
                        </a>
                        <p>Buble Gum</p>
                    </div>
                </div>
            </div>

            <!-- Single Album Area -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                <div class="single-album-area wow fadeInUp" data-wow-delay="300ms">
                    <div class="album-thumb">
                        <img src="img/bg-img/b3.jpg" alt="">
                    </div>
                    <div class="album-info">
                        <a href="#">
                            <h5>Jess Parker</h5>
                        </a>
                        <p>The Album</p>
                    </div>
                </div>
            </div>

            <!-- Single Album Area -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                <div class="single-album-area wow fadeInUp" data-wow-delay="400ms">
                    <div class="album-thumb">
                        <img src="img/bg-img/b4.jpg" alt="">
                    </div>
                    <div class="album-info">
                        <a href="#">
                            <h5>Noises</h5>
                        </a>
                        <p>Buble Gum</p>
                    </div>
                </div>
            </div>

            <!-- Single Album Area -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                <div class="single-album-area wow fadeInUp" data-wow-delay="500ms">
                    <div class="album-thumb">
                        <img src="img/bg-img/b1.jpg" alt="">
                        <!-- Album Price -->
                        <div class="album-price">
                            <p>$0.90</p>
                        </div>
                        <!-- Play Icon -->
                        <div class="play-icon">
                            <a href="#" class="video--play--btn"><span class="icon-play-button"></span></a>
                        </div>
                    </div>
                    <div class="album-info">
                        <a href="#">
                            <h5>Garage Band</h5>
                        </a>
                        <p>Radio Station</p>
                    </div>
                </div>
            </div>

            <!-- Single Album Area -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                <div class="single-album-area wow fadeInUp" data-wow-delay="600ms">
                    <div class="album-thumb">
                        <img src="img/bg-img/b2.jpg" alt="">
                    </div>
                    <div class="album-info">
                        <a href="#">
                            <h5>Noises</h5>
                        </a>
                        <p>Buble Gum</p>
                    </div>
                </div>
            </div>

            <!-- Single Album Area -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                <div class="single-album-area wow fadeInUp" data-wow-delay="100ms">
                    <div class="album-thumb">
                        <img src="img/bg-img/b3.jpg" alt="">
                    </div>
                    <div class="album-info">
                        <a href="#">
                            <h5>Jess Parker</h5>
                        </a>
                        <p>The Album</p>
                    </div>
                </div>
            </div>

            <!-- Single Album Area -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                <div class="single-album-area wow fadeInUp" data-wow-delay="200ms">
                    <div class="album-thumb">
                        <img src="img/bg-img/b4.jpg" alt="">
                    </div>
                    <div class="album-info">
                        <a href="#">
                            <h5>Noises</h5>
                        </a>
                        <p>Buble Gum</p>
                    </div>
                </div>
            </div>

            <!-- Single Album Area -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                <div class="single-album-area wow fadeInUp" data-wow-delay="300ms">
                    <div class="album-thumb">
                        <img src="img/bg-img/b1.jpg" alt="">
                        <!-- Album Price -->
                        <div class="album-price">
                            <p>$0.90</p>
                        </div>
                        <!-- Play Icon -->
                        <div class="play-icon">
                            <a href="#" class="video--play--btn"><span class="icon-play-button"></span></a>
                        </div>
                    </div>
                    <div class="album-info">
                        <a href="#">
                            <h5>Garage Band</h5>
                        </a>
                        <p>Radio Station</p>
                    </div>
                </div>
            </div>

            <!-- Single Album Area -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                <div class="single-album-area wow fadeInUp" data-wow-delay="400ms">
                    <div class="album-thumb">
                        <img src="img/bg-img/b2.jpg" alt="">
                    </div>
                    <div class="album-info">
                        <a href="#">
                            <h5>Noises</h5>
                        </a>
                        <p>Buble Gum</p>
                    </div>
                </div>
            </div>

            <!-- Single Album Area -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                <div class="single-album-area wow fadeInUp" data-wow-delay="500ms">
                    <div class="album-thumb">
                        <img src="img/bg-img/b3.jpg" alt="">
                    </div>
                    <div class="album-info">
                        <a href="#">
                            <h5>Jess Parker</h5>
                        </a>
                        <p>The Album</p>
                    </div>
                </div>
            </div>

            <!-- Single Album Area -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                <div class="single-album-area wow fadeInUp" data-wow-delay="600ms">
                    <div class="album-thumb">
                        <img src="img/bg-img/b4.jpg" alt="">
                    </div>
                    <div class="album-info">
                        <a href="#">
                            <h5>Noises</h5>
                        </a>
                        <p>Buble Gum</p>
                    </div>
                </div>
            </div>

        </div>

        <div class="row d-none">
            <div class="col-12">
                <div class="load-more-btn text-center wow fadeInUp" data-wow-delay="300ms">
                    <a href="#" class="btn oneMusic-btn">Load More <i class="fa fa-angle-double-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Buy Now Area End ##### -->

<!-- ##### Featured Artist Area Start ##### -->
<section class="featured-artist-area section-padding-100 bg-img bg-overlay bg-fixed" style="background-image: url('img/about/about.jpg');">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-12 col-md-5 col-lg-4">
                <div class="featured-artist-thumb">
                    <img src="/img/me.jpg" alt="">
                </div>
            </div>
            <div class="col-12 col-md-7 col-lg-8">
                <div class="featured-artist-content">
                    <!-- Section Heading -->
                    <div class="section-heading white text-left mb-30">
                        <p>{{ $about->$title }}</p>
                        <h2>{{ $about->$subtitle }}</h2>
                    </div>
                    <p>
                        {!! $about->$content !!}

                    </p>
                    <div class="song-play-area">
                        <div class="song-name">

                        </div>
                        <audio preload="auto" controls>
                            <source src="{{ $path_about.$about->music }}">
                        </audio>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Featured Artist Area End ##### -->



<!-- ##### Contact Area Start ##### -->
<section class="contact-area section-padding-100 bg-img bg-overlay bg-fixed has-bg-img" style="background-image: url('img/about/about.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading white wow fadeInUp" data-wow-delay="100ms">
                    <p>{{ $contact->$title }}</p>
                    <h2>{{ $contact->$subtitle }}</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <!-- Contact Form Area -->
                <div class="contact-form-area">
                    <form action="send-contact" id="form-contact" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group wow fadeInUp" data-wow-delay="100ms">
                                    <input type="text" class="form-control" name="name" id="name" required placeholder="Name">
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group wow fadeInUp" data-wow-delay="200ms">
                                    <input type="email" class="form-control" name="email" id="email" required placeholder="E-mail">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group wow fadeInUp" data-wow-delay="300ms">
                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group wow fadeInUp" data-wow-delay="400ms">
                                    <textarea name="message" class="form-control" id="message" required cols="30" rows="10" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="col-12 text-center" id="spinner" style="display: none">
                                <i class="fas fa-spinner fa-spin fa-2x text-white"></i>
                            </div>

                            <div class="col-12 text-center wow fadeInUp" data-wow-delay="500ms">
                                <button class="btn oneMusic-btn mt-30" type="submit">{{ $section_btn['send'] }} <i class="fa fa-angle-double-right"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Contact Area End ##### -->

@endsection