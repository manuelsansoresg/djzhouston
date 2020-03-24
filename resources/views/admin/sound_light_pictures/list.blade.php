@extends('layouts.template_admin')

@section('title', 'Fotos Eventos')

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
                            <li class="breadcrumb-item"><a href="/admin/sound-lighting-content">CONTENIDO LUZ Y SONIDO</a></li>
                            <li class="breadcrumb-item active">FOTOS LUZ Y SONIDO</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex align-items-center">
                                    <h3 class="mr-auto">SECCIÓN FOTOS LUZ Y SONIDO</h3>
                                    <div>
                                        <a href="/admin/sound-lighting-picture/create/{{ $id }}" class="btn btn-block btn-primary btn-sm"><i class="far fa-file"></i> AGREGAR</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row mt-3">
                                  @foreach($pictures as $row)
                                      <div class="col-md-4">
                                          <div class="card" style="">
                                              @if($row->type == 1)
                                                <img src="{{ $path.'/thumb_'.$row->picture }}" class="card-img-top" alt="...">
                                                  @else
                                                  <img src="{{ $path.'/thumb_'.$row->picture_video }}" class="card-img-top" alt="...">
                                              @endif
                                              <div class="card-body">
                                                  {{ Form::open(['route' => ['sound-lighting-picture.destroy', $row->id ],'class' => 'form-inline', 'method' => 'DELETE' ])}}
                                                  <button onclick="return confirm('¿Deseas eliminar el elemento?')" class="btn btn-sm btn-danger btn-block">
                                                      <i class="far fa-trash-alt"></i>
                                                  </button>
                                                  <a href="/admin/sound-lighting-picture/{{ $row->id }}/edit/{{ $id }}" class="btn btn-primary btn-block">
                                                      <i class="far fa-edit"></i>
                                                  </a>
                                                  {{ Form::close() }}
                                              </div>
                                          </div>
                                      </div>
                                  @endforeach
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
