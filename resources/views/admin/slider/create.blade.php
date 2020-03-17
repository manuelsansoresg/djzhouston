@extends('layouts.template_admin')

@section('title', 'Alta slider')
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
                        <li class="breadcrumb-item"> <a href="/admin/slider">SLIDER</a> </li>
                        <li class="breadcrumb-item active"> NUEVO </li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">SLIDER</div>
                        <div class="card-body">
                            {{ Form::open(['route' => 'slider.store', 'files' => true, 'method' => 'POST',  'class' => 'needs-validation', 'novalidate']) }}
                            <div class="row ">
                                <div class="col-12 col-md-12">
                                    <div class="form-group mb-2">
                                        <label class="small">IMÁGEN </label>
                                        <div class="w-100"></div>
                                        <input type="file" name="picture" required class="form-control form-control-sm">
                                        <div class="w-100"></div>
                                        <div class="invalid-feedback">
                                            El campo es obligatorio.
                                        </div>
                                        @if($errors)
                                        <span class="text-danger"> {{$errors->first('picture')}}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-12">
                                    <div class="form-group mb-2">
                                        <label class="small">TITULO ESPAÑOL</label>
                                        <div class="w-100"></div>
                                        <input type="text" name="title_es" class="form-control form-control-sm" required>
                                        <div class="invalid-feedback">
                                            El campo es obligatorio.
                                        </div>
                                        <div class="w-100"></div>
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
                                        <input type="text" name="title_eng" class="form-control form-control-sm" required>
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
                            <div class="row">
                                <div class="col-12 col-md-12">
                                    <div class="form-group mb-2">
                                        <label class="small">SUBTITULO ESPAÑOL</label>
                                        <div class="w-100"></div>
                                        <input type="text" name="subtitle_es" class="form-control form-control-sm" >
                                        <div class="w-100"></div>
                                        <div class="invalid-feedback">
                                            El campo es obligatorio.
                                        </div>
                                        @if($errors)
                                        <span class="text-danger"> {{$errors->first('subtitle_es')}}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-12">
                                    <div class="form-group mb-2">
                                        <label class="small">SUBTITULO INGLES</label>
                                        <div class="w-100"></div>
                                        <input type="text" name="subtitle_eng" class="form-control form-control-sm" >
                                        <div class="w-100"></div>
                                        <div class="invalid-feedback">
                                            El campo es obligatorio.
                                        </div>
                                        @if($errors)
                                        <span class="text-danger"> {{$errors->first('subtitle_eng')}}</span>
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


