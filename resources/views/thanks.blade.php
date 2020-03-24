@extends('layouts.template')
<?php
$menu            = menuHeader();
$sections        = get_sections();
$section_contact = $sections['contact'];
$section_btn     = $sections['btn'];

$section_thanks     = $sections['thanks'];

?>
@section('title', 'Thanks')

@section('content')
    <section class="breadcumb-area bg-img bg-overlay" style="background-image: url('/img/bg-img/breadcumb.jpg');">
        <div class="bradcumbContent">
            <h2>{{ $section_thanks['title'] }}</h2>
        </div>
    </section>

    <section class="oneMusic-buy-now-area has-fluid bg-gray pb-3">
        <div class="container">
            <div class="row mt-5">
                <div class="col-12 text-center">
                    <i class="fas fa-envelope-open-text fa-3x"></i>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12  col-md-12 mt-5 text-center">
                    <p class="mb-4 h3">
                        {{  $section_thanks['content'] }}
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
