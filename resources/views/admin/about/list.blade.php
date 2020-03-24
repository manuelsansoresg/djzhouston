@extends('layouts.template_admin')

@section('title', 'Acerca de Mí')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6"></div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">INICIO</a></li>
                        <li class="breadcrumb-item active">ACERCA DE MI</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <h3 class="mr-auto">SECCIÓN ACERCA DE MI</h3>
                                <div>
                                    <a href="/admin/about/create" class="btn btn-block btn-primary btn-sm"><i class="far fa-file"></i> AGREGAR</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row mt-3">
                                <div class="col-12">
                                    <table class="table-default table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                                        <thead>
                                            <tr>
                                                <th class="small font-weight-bold">IMÁGEN</th>
                                                <th class="small font-weight-bold">MÚSICA</th>
                                                <th class="small font-weight-bold">TÍTULO ES</th>
                                                <th class="small font-weight-bold">TÍTULO ENG</th>
                                                <th class="small font-weight-bold">SUBTÍTULO ES</th>
                                                <th class="small font-weight-bold">SUBTÍTULO ENG</th>
                                                <th style="width: 90px"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($query as $row)
                                                <tr>
                                                    <td><img src="{{ $path.'/thumb_'.$row->picture }}" alt=""></td>
                                                    <td>
                                                        <audio controls="">
                                                            <source src="{{ $path.'/'.$row->music }}" type="audio/mp3">

                                                            Your browser does not support the audio element.
                                                        </audio>
                                                    </td>
                                                    <td>{{ $row->title_es }}</td>
                                                    <td>{{ $row->title_eng }}</td>
                                                    <td>{{ $row->subtitle_es }}</td>
                                                    <td>{{ $row->subtitle_eng }}</td>
                                                    <td>
                                                        {{ Form::open(['route' => ['about.destroy', $row->id ],'class' => 'form-inline', 'method' => 'DELETE' ])}}
                                                        <a href="{{route('about.edit', $row->id)}}" class="btn btn-sm btn-primary">
                                                            <i class="far fa-edit"></i>
                                                        </a>
                                                        <button onclick="return confirm('¿Deseas eliminar el elemento?')" class="btn btn-sm btn-danger ml-md-2">
                                                            <i class="far fa-trash-alt"></i>
                                                        </button>
                                                        {{ Form::close() }}
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
</div>
@endsection
