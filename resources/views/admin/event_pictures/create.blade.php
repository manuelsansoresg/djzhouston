@extends('layouts.template_admin')

@section('title', 'Alta Fotos Eventos')
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
                        <li class="breadcrumb-item"><a href="/admin/event-content">EVENTO</a></li>
                        <li class="breadcrumb-item"><a href="/admin/event-picture/{{ $event_id }}">CONTENIDO</a></li>
                        <li class="breadcrumb-item active"> NUEVO </li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">FOTO EVENTO</div>
                        <div class="card-body">
                            {{ Form::open(['route' => 'event-picture.store',  'method' => 'POST', 'files' => true,  'class' => 'needs-validation', 'novalidate']) }}
                            <div class="col-12 col-md-12">
                                <div class="row">
                                    <div class="col-12 col-md-12">
                                        <div class="form-group mb-2">
                                            <label class="small">TIPO</label>
                                            <div class="w-100"></div>
                                            <select name="type" id="type" class="form-control">
                                                <option value="1">Imágen</option>
                                                <option value="2">Video</option>
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

                                <div class="form-group mb-2" id="div-image">
                                    <label class="small">IMÁGEN </label>
                                    <div class="w-100"></div>
                                    <input type="hidden" name="event_id" value="{{ $event_id }}">
                                    <input type="file" name="picture" id="picture"  class="form-control form-control-sm">
                                    <div class="w-100"></div>
                                    <div class="invalid-feedback">
                                        El campo es obligatorio.
                                    </div>
                                    @if($errors)
                                        <span class="text-danger"> {{$errors->first('picture')}}</span>
                                    @endif
                                </div>

                                <div class="row" id="div-video" style="display: none">
                                    <div class="col-12 col-md-12">
                                        <label class="small">IMÁGEN VISTA PREVIA  VIDEO</label>
                                        <div class="w-100"></div>

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
                                            <textarea name="video" class="form-control" id="video"  cols="30" rows="10"></textarea>
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
