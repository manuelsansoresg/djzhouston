@extends('layouts.template')

@section('title', 'DJ Z HOUSTON')
    
@section('content')
<!-- ##### Hero Area Start ##### -->
<section class="hero-area">
    <div class="hero-slides owl-carousel">
        <!-- Single Hero Slide -->
        <div class="single-hero-slide d-flex align-items-center justify-content-center">
            <!-- Slide Img -->
            <div class="slide-img bg-img" style="background-image: url(img/slider/party-2173187_1920.jpg);"></div>
            <!-- Slide Content -->
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="hero-slides-content text-center">
                            <h6 data-animation="fadeInUp" data-delay="100ms">SERVICIO DE DJ</h6>
                            <h2 data-animation="fadeInUp" data-delay="300ms">EVENTOS</h2>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Single Hero Slide -->
        <div class="single-hero-slide d-flex align-items-center justify-content-center">
            <!-- Slide Img -->
            <div class="slide-img bg-img" style="background-image: url(img/slider/party-629241_1920.jpg);"></div>
            <!-- Slide Content -->
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="hero-slides-content text-center">
                            <h6 data-animation="fadeInUp" data-delay="100ms"></h6>
                            <h2 data-animation="fadeInUp" data-delay="300ms"> ILUMINACIÓN </h2>
                            <a data-animation="fadeInUp" data-delay="500ms" href="#"
                                class="btn oneMusic-btn mt-50">Discover <i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Hero Area End ##### -->

<!-- ##### Latest Albums Area Start ##### -->
<section class="latest-albums-area section-padding-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading style-2 mb-15">

                    <h2>Música para todo tipo de eventos</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="ablums-text text-center mb-70">
                    <p>Contamos con equipos profesionales de iluminación , sonido , pantallas de video y muchas cosas
                        más.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="albums-slideshow owl-carousel">
                    <!-- Single Album -->
                    <div class="single-album">
                        <img src="img/servicios/equipo.jpg" alt="">
                        <div class="album-info">
                            <a href="#">
                                <h5>EQUIPO PROFESIONAL</h5>
                            </a>

                        </div>
                    </div>
                    <div class="single-album">
                        <img src="img/servicios/boda.jpg" alt="">
                        <div class="album-info">
                            <a href="#">
                                <h5>BODAS</h5>
                            </a>

                        </div>
                    </div>
                    <div class="single-album">
                        <img src="img/servicios/cumpleanos.jpg" alt="">
                        <div class="album-info">
                            <a href="#">
                                <h5>CUMPLEAÑOS</h5>
                            </a>

                        </div>
                    </div>
                    <div class="single-album">
                        <img src="img/servicios/bautizo.jpg" alt="">
                        <div class="album-info">
                            <a href="#">
                                <h5>BAUTIZO</h5>
                            </a>

                        </div>
                    </div>

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
                        <p>Escucha la variedad de generos que tenemos</p>
                        <h2>GENEROS</h2>
                    </div>

                    <!-- Single CUMBIA Item -->
                    <div class="row">
                        <div class="col-12 col-md-3 pb-3">
                            <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp"
                                data-wow-delay="100ms">
                                <div class="first-part d-flex align-items-center">
                                    <div class="thumbnail">
                                        <img src="img/genero/cumbias.jpg" alt="">
                                    </div>
                                    <div class="content-">

                                        <p>CUMBIA</p>
                                    </div>
                                </div>
                                <audio preload="auto" controls>
                                    <source src="audio/generos/cumbia.mp3">
                                </audio>
                            </div>
                        </div>


                        <!-- Single  NORTEÑO SAX Item -->
                        <div class="col-12 col-md-3 pb-3">
                            <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp"
                                data-wow-delay="150ms">
                                <div class="first-part d-flex align-items-center">
                                    <div class="thumbnail">
                                        <img src="img/genero/sax.jpg" alt="">
                                    </div>
                                    <div class="content-">
                                        <p>NORTEÑO SAX</p>

                                    </div>
                                </div>
                                <audio preload="auto" controls>
                                    <source src="audio/generos/nortenosax.mp3">
                                </audio>
                            </div>
                        </div>
                        <!-- Single  NORTEÑO MONTERREY Item -->
                        <div class="col-12 col-md-3 pb-3">
                            <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp"
                                data-wow-delay="150ms">
                                <div class="first-part d-flex align-items-center">
                                    <div class="thumbnail">
                                        <img src="img/genero/nortenio.jpg" alt="">
                                    </div>
                                    <div class="content-">
                                        <p>NORTEÑO MONTERREY</p>

                                    </div>
                                </div>
                                <audio preload="auto" controls>
                                    <source src="audio/generos/nortenamonterrey.mp3">
                                </audio>
                            </div>
                        </div>
                        <!-- Single  NORTEÑO MONTERREY Item -->
                        <div class="col-12 col-md-3 pb-3">
                            <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp"
                                data-wow-delay="150ms">
                                <div class="first-part d-flex align-items-center">
                                    <div class="thumbnail">
                                        <img src="img/genero/nortenio.jpg" alt="">
                                    </div>
                                    <div class="content-">
                                        <p>NORTEÑO MONTERREY</p>

                                    </div>
                                </div>
                                <audio preload="auto" controls>
                                    <source src="audio/generos/nortenamonterrey.mp3">
                                </audio>
                            </div>
                        </div>
                        <!-- Single  NORTEÑO MONTERREY Item -->
                        <div class="col-12 col-md-3 pb-3">
                            <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp"
                                data-wow-delay="150ms">
                                <div class="first-part d-flex align-items-center">
                                    <div class="thumbnail">
                                        <img src="img/genero/nortenio.jpg" alt="">
                                    </div>
                                    <div class="content-">
                                        <p>NORTEÑO MONTERREY</p>

                                    </div>
                                </div>
                                <audio preload="auto" controls>
                                    <source src="audio/generos/nortenamonterrey.mp3">
                                </audio>
                            </div>
                        </div>
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
                    <p>vive una experiencia inolvidable</p>
                    <h2>Paquetes</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-4 paquetes" style="background: url('img/paquetes/1.jpg')">
                <div class="paquetes__title text-center text-white">
                    <p class="h3">PAQUETE 1</p>
                </div>
                <div class="paquetes__content font-bold">

                    <ul class="mt-3">
                        <li>SETUP PARA 100 PERSONAS</li>
                        <li>SPEAKERS 2</li>
                        <li>SUBWOOFER 2</li>
                        <li>ROBOTIC MOVING 2</li>
                        <li>LIGHTS 2</li>
                    </ul>
                </div>
                <div class="text-center card-footer2 text-warning bg-black">
                    <span class="h1">$500</span>
                </div>
            </div>
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
                    <p>Conoce nuestros proximos eventos</p>
                    <h2>Eventos</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- evento -->
            <div class="col-12 col-md-6 pb-3">
                <div class="row">
                    <div class="col-1">
                        <span class="h3">20</span>
                        <small>MARZO</small>
                    </div>
                    <div class="col-11">

                        <h6><i class="fas fa-music"></i> CONCIERTO EN MTY</h6>
                        <p class="text-muted py-0 my-0">vie., 20 de mar. – sáb., 21 de mar.</p>
                        <p class="text-muted my-0 py-0">Entropía, Av Jose Diaz Bolio #107A, México Nte.</p>
                        <p class="text-dark">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officiis obcaecati hic, tempore
                            architecto unde modi nostrum voluptates corrupti accusamus vero?
                        </p>
                        <p class="text-right">
                            <a href="">VER MÁS </a>
                        </p>
                    </div>
                </div>
            </div>
            <!-- evento -->
            <!-- evento -->
            <div class="col-12 col-md-6 pb-3">
                <div class="row">
                    <div class="col-1">
                        <span class="h3">20</span>
                        <small>MARZO</small>
                    </div>
                    <div class="col-11">

                        <h6><i class="fas fa-music"></i> CONCIERTO EN MTY</h6>
                        <p class="text-muted py-0 my-0">vie., 20 de mar. – sáb., 21 de mar.</p>
                        <p class="text-muted my-0 py-0">Entropía, Av Jose Diaz Bolio #107A, México Nte.</p>
                        <p class="text-dark">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officiis obcaecati hic, tempore
                            architecto unde modi nostrum voluptates corrupti accusamus vero?
                        </p>
                        <p class="text-right">
                            <a href="">VER MÁS </a>
                        </p>
                    </div>
                </div>
            </div>
            <!-- evento -->
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
<section class="featured-artist-area section-padding-100 bg-img bg-overlay bg-fixed"
    style="background-image: url(img/about/about.jpg);">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-12 col-md-5 col-lg-4">
                <div class="featured-artist-thumb">
                    <img src="img/me.jpg" alt="">
                </div>
            </div>
            <div class="col-12 col-md-7 col-lg-8">
                <div class="featured-artist-content">
                    <!-- Section Heading -->
                    <div class="section-heading white text-left mb-30">
                        <p>DJ Z HOUSTON</p>
                        <h2>Acerca de mí</h2>
                    </div>
                    <p>
                        Disfruta de la mezcla de : Cumbia,norteña,Huapango,Banda, Tejano, Tierra Caliente
                        Siempre brindando la mejor calidad en cada evento, equipo profesional, efecto de luces y mucho
                        más.
                        <br>
                        Marca la diferencia y dale un toque distinto contratando alguno de nuestros paquetes

                    </p>
                    <div class="song-play-area">
                        <div class="song-name">
                            <p>01. Intro</p>
                        </div>
                        <audio preload="auto" controls>
                            <source src="audio/about.mp3">
                        </audio>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Featured Artist Area End ##### -->



<!-- ##### Contact Area Start ##### -->
<section class="contact-area section-padding-100 bg-img bg-overlay bg-fixed has-bg-img"
    style="background-image: url(img/contact/contact.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading white wow fadeInUp" data-wow-delay="100ms">
                    <p>¿PLANEAS YA TU PROXIMO EVENTO Y NO CUENTAS CON DJ? CONTACTA AL DJ 100% DE LA RAZZA</p>
                    <h2>CONTACTO</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <!-- Contact Form Area -->
                <div class="contact-form-area">
                    <form action="#" method="post">
                        <div class="row">
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group wow fadeInUp" data-wow-delay="100ms">
                                    <input type="text" class="form-control" id="name" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group wow fadeInUp" data-wow-delay="200ms">
                                    <input type="email" class="form-control" id="email" placeholder="E-mail">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group wow fadeInUp" data-wow-delay="300ms">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group wow fadeInUp" data-wow-delay="400ms">
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="10"
                                        placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="col-12 text-center wow fadeInUp" data-wow-delay="500ms">
                                <button class="btn oneMusic-btn mt-30" type="submit">Send <i
                                        class="fa fa-angle-double-right"></i></button>
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
