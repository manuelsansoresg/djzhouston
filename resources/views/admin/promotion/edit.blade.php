@extends('layouts.template_admin')

@section('title', 'PROMOCION')
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
                        <li class="breadcrumb-item"> <a href="/admin/promotion">PROMOCION</a> </li>
                        <li class="breadcrumb-item active"> EDITAR </li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">PROMOCION</div>
                        <div class="card-body">
                            {{ Form::open(['route' => ['promotion.update', $promotion->id], 'method' => 'PUT', 'files' => true, 'class' => 'needs-validation', 'novalidate']) }}
                            <div class="row ">
                                <div class="col-12 col-md-12">
                                    <div class="form-group mb-2">
                                        <label class="small">IMÁGEN </label>
                                        <div class="w-100"></div>
                                        <input type="file" name="picture" required class="form-control form-control-sm" required>
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