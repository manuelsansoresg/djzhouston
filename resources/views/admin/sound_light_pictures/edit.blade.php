@extends('layouts.template_admin')

@section('title', 'Editar Fotos Luz y Sonido')
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
                        <li class="breadcrumb-item"><a href="/admin/sound-lighting-content">LUZ Y SONIDO</a></li>
                        <li class="breadcrumb-item"><a href="/admin/sound-lighting-picture/{{ $sound_light_id }}">CONTENIDO</a></li>
                        <li class="breadcrumb-item active"> NUEVO </li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">FOTO LUZ Y SONIDO</div>
                        <div class="card-body">
                            {{ Form::open(['route' => ['sound-lighting-picture.update', $query->id], 'files' => true,  'method' => 'PUT', 'class' => 'needs-validation', 'novalidate']) }}
                            <?php
                                $d_imagen = '';
                                $d_video  = 'display: none';
                                if($query->video != ''){
                                    $d_imagen = 'display: none';
                                    $d_video  = '';
                                }
                            ?>
                            <div class="col-12 col-md-12">
                                <div class="row">
                                    <div class="col-12 col-md-12">
                                        <div class="form-group mb-2">
                                            <label class="small">TIPO</label>
                                            <div class="w-100"></div>
                                            <select name="type" id="type" class="form-control">
                                                <option value="1" {{ ($query->type == 1)? 'selected' : '' }}>Imágen</option>
                                                <option value="2" {{ ($query->type == 2)? 'selected' : '' }}>Video</option>
                                            </select>
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

                                <div class="form-group mb-2" id="div-image" style="{{ $d_imagen }}">
                                    <label class="small">IMÁGEN </label>
                                    <div class="w-100"></div>
                                    <img src="{{ $path.'/thumb_'.$query->picture }}" alt="">
                                    <input type="hidden" name="sound_light_id" value="{{ $sound_light_id }}">
                                    <input type="file" name="picture" id="picture"  class="form-control form-control-sm">
                                    <div class="w-100"></div>
                                    <div class="invalid-feedback">
                                        El campo es obligatorio.
                                    </div>
                                    @if($errors)
                                        <span class="text-danger"> {{$errors->first('picture')}}</span>
                                    @endif
                                </div>

                                <div class="row" id="div-video" style="{{ $d_video }}">
                                    <div class="col-12 col-md-12">
                                        <label class="small">IMÁGEN VISTA PREVIA  VIDEO</label>
                                        <div class="w-100"></div>
                                        <img src="{{ $path.'/thumb_'.$query->picture_video }}" alt="">
                                        <input type="file" name="picture_video" id="picture_video"  class="form-control form-control-sm">
                                        <div class="w-100"></div>
                                        <div class="invalid-feedback">
                                            El campo es obligatorio.
                                        </div>
                                        @if($errors)
                                            <span class="text-danger"> {{$errors->first('picture')}}</span>
                                        @endif
                                    </div>
                                    <div class="col-12 col-md-12">
                                        <div class="form-group mb-2">
                                            <label class="small">CODIGO VIDEO</label>
                                            <div class="w-100"></div>
                                            <small>
                                                Colocar código de youtube

                                            </small>
                                            <div class="w-100"></div>
                                            <textarea name="video" class="form-control" id="video"  cols="30" rows="10">{{ $query->video }}</textarea>
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
