@extends('layouts.template_admin')

@section('title', 'Editar Contenido Genero')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6"></div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/home">INICIO</a></li>
                        <li class="breadcrumb-item"> <a href="/admin/service-content">CONTENIDO SERVICIOS</a> </li>
                        <li class="breadcrumb-item active"> NUEVO </li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">CONTENIDO SERVICIOS</div>
                        <div class="card-body">
                            {{ Form::open(['route' => ['genre-content.update', $query->id], 'method' => 'PUT', 'files' => true, 'class' => 'needs-validation', 'novalidate']) }}
                            <div class="row ">
                                <div class="col-12 col-md-12">
                                    <div class="form-group mb-2">
                                        <label class="small">IMÁGEN </label>
                                        <div class="w-100"></div>
                                        <img src="{{ $path.'/thumb_'.$query->picture }}" alt="">
                                        <input type="file" name="picture" class="form-control form-control-sm">
                                        <div class="w-100"></div>
                                        @if($errors)
                                            <span class="text-danger"> {{$errors->first('picture')}}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col-12 col-md-12">
                                    <div class="form-group mb-2">
                                        <label class="small">MÚSICA </label>
                                        <div class="w-100"></div>
                                        <audio controls>
                                            <source src="{{ $path.'/'.$query->music }}" type="audio/mp3">

                                            Your browser does not support the audio element.
                                        </audio>
                                        <input type="file" name="music" class="form-control form-control-sm">
                                        <div class="w-100"></div>
                                        <div class="invalid-feedback">
                                            El campo es obligatorio.
                                        </div>
                                        @if($errors)
                                            <span class="text-danger"> {{$errors->first('music')}}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-12">
                                    <div class="form-group mb-2">
                                        <label class="small">TITULO ESPAÑOL</label>
                                        <div class="w-100"></div>
                                        <input type="text" name="title_es" value="{{ $query->title_es }}" class="form-control form-control-sm" required>
                                        <div class="w-100"></div>
                                        <div class="invalid-feedback">
                                            El campo es obligatorio.
                                        </div>
                                        @if($errors)
                                        <span class="text-danger"> {{$errors->first('title_es')}}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-12">
                                    <div class="form-group mb-2">
                                        <label class="small">TITULO INGLES</label>
                                        <div class="w-100"></div>
                                        <input type="text" name="title_eng" value="{{ $query->title_eng }}" class="form-control form-control-sm" required>
                                        <div class="w-100"></div>
                                        <div class="invalid-feedback">
                                            El campo es obligatorio.
                                        </div>
                                        @if($errors)
                                        <span class="text-danger"> {{$errors->first('title_eng')}}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-12 text-right pb-4">
                                    <button class="btn btn-primary">ACEPTAR</button>
                                </div>
                            </div>
                            {{ Form::close() }}
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
</div>
@endsection

@section('js')
<script src="{{asset('vendor/summernote/summernote.min.js')}}"></script>
<script>
    $(document).ready(function() {
            $('.note').summernote(
                {
                    height: 200,
                    fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New', 'Campton-Medium', 'Campton-Light' , 'Campton-Book', 'Campton-ExtraBold', 'Campton-SemiBoldItalic'],
                    fontNamesIgnoreCheck: ["Campton-Medium", "Campton-Light", 'Campton-Book', 'Campton-ExtraBold', 'Campton-SemiBoldItalic']
                }
            );
        });

</script>
@endsection
