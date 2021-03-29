@extends('layouts.template')
<?php
$menu            = menuHeader();
$sections        = get_sections();
$section_contact = $sections['contact'];
$section_btn     = $sections['btn'];

?>
@section('title', $menu[4])

@section('content')


<section class="breadcumb-area bg-img bg-overlay" style="background-image: url('/img/bg-img/breadcumb.jpg');">
    <div class="bradcumbContent">
        <h2>{{ $menu[4] }}</h2>
    </div>
</section>

<section class="contact-area section-padding-100-0">
    <div class="container">
        <div class="row">

            <div class="col-12 col-lg-3">
                <div class="contact-content mb-100">
                    <!-- Title -->
                    <div class="contact-title mb-50">
                        <h5>{{ $section_contact['info'] }}</h5>
                    </div>

                    <!-- Single Contact Info -->
                    <div class="single-contact-info d-flex align-items-center">
                        <div class="icon mr-30">
                            <span class="icon-placeholder"></span>
                        </div>
                        <p> Cypress,tx</p>
                    </div>

                    <!-- Single Contact Info -->
                    <div class="single-contact-info d-flex align-items-center">
                        <div class="icon mr-30">
                            <span class="icon-smartphone"></span>
                        </div>
                        <p> 832229-0610 </p>
                    </div>

                    <!-- Single Contact Info -->
                    <div class="single-contact-info d-flex align-items-center">
                        <div class="icon mr-30">
                            <span class="icon-mail"></span>
                        </div>
                        <p>dreams@djzhouston.com</p>
                    </div>

                    <!-- Contact Social Info -->
                    <div class="contact-social-info mt-50">
                        <a href="https://www.facebook.com/karlozamora04/" target="_blank" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/djzmixxlive/?hl=es-la" target="_blank" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="https://soundcloud.com/karlos-zamora" target="_blank" data-toggle="tooltip" data-placement="top" title="Sound Cloud"><i class="fab fa-soundcloud"></i></a>
                        <a href="https://www.youtube.com/channel/UCr7337Wez1nxVBfDfgpc45Q/videos" target="_blank" data-toggle="tooltip" data-placement="top" title="Youtube"><i class="fab fa-youtube"></i></a>
                    </div>

                </div>
            </div>

            <div class="col-12 col-lg-9 py-3">
                <div class="contact-form-area">
                    <form action="send-contact" id="form-contact" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="{{ $section_contact['name'] }}" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="{{ $section_contact['email'] }}" required>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="subject" name="subject" placeholder="{{ $section_contact['subject'] }}">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea name="message" class="form-control" required id="message" cols="30" rows="10" placeholder="{{ $section_contact['message'] }}"></textarea>
                                </div>
                            </div>
                            <div class="col-12 text-center" id="spinner" style="display: none">
                                <i class="fas fa-spinner fa-spin fa-2x"></i>
                            </div>
                            <input type="hidden" name="type_contact" value="2">
                            <div class="g-recaptcha" data-sitekey="6LeTOJIaAAAAACaw3Q1yIN9T0nKhWMNNennZ-PNM"></div>
                            <div class="col-12 text-center">

                                @if( isset($error) && $error !== '')
                                <div class="text-danger">{{ $error }}</div>
                                @endif
                            </div>

                            <div class="col-12 text-center">
                                <button class="btn oneMusic-btn mt-30" type="submit">{{ $section_btn['send'] }} <i class="fa fa-angle-double-right"></i></button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </div>
</section>
@endsection