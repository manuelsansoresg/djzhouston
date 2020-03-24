@extends('layouts.template_admin')

@section('title', 'Alta Luz y Sonido')
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
                        <li class="breadcrumb-item"> <a href="/admin/sound-lighting">LUZ Y SONIDO</a> </li>
                        <li class="breadcrumb-item active"> NUEVO </li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">LUZ Y SONIDO</div>
                        <div class="card-body">
                            {{ Form::open(['route' => 'sound-lighting.store', 'files' =>true,  'method' => 'POST',  'class' => 'needs-validation', 'novalidate']) }}

                            <div class="row">
                                <div class="col-12 col-md-12">
                                    <div class="form-group mb-2">
                                        <label class="small">IMÁGEN 1920px ancho × 1280px alto  </label>
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
                                <div class="col-12 col-md-12">
                                    <div class="form-group mb-2">
                                        <label class="small">TITULO ESPAÑOL</label>
                                        <div class="w-100"></div>
                                        <input type="text" name="title_es"  class="form-control form-control-sm" required>
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

@section('js')
<script src="{{asset('vendor_assets/summernote/summernote.min.js')}}"></script>
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
