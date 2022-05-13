<?php
/**
 * Created by PhpStorm.
 * User: Starglob2
 * Date: 31/01/2022
 * Time: 12:12
 */
?>

@extends('layouts.admin')

@section('estilos')
    @parent

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('adminZone/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
@endsection

@section('breadcrumb')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    {{-- <h1 class="m-0">@if (isset($titlePage)) {{ $titlePage }} @else {{ "Sección" }} @endif</h1> --}}
                    <h1>{{ $titlePage }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin') }}">Página Principal</a></li>
                        <li class="breadcrumb-item active">Imagenes</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
@endsection

@section('content')
    <div class="col-lg-12">
        @include('includes.message')

        @if (empty($sliderPrincipal))
            <div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="fas fa-exclamation-triangle"></i> Alert!</h4>
                No existen datos que mostrar
            </div>
            <br>
        @else
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="sliderPrincipal" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Url</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sliderPrincipal as $i)
                                <tr>
                                    <td>
                                        <img src="{{ asset($i->url) }}" class="img-fluid" width="300px">
                                    </td>
                                    <td>
                                        <a href="{{ route('sliderPrincipal.edit', $i) }}" class="btn btn-secondary btn-sm"
                                            title="Editar"><i class="fa fa-pen"></i></a>

                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Url</th>
                                <th>Acciones</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        @endif

    </div> <!-- /col-lg-12 -->

@endsection


@section('modalEliminar')
    <!-- Dialogo modal eliminar -->

    <div class="modal modal-danger fade" id="modalEliminar" name="modalEliminar" tabindex="-1" role="dialog"
        aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content bg-danger">
                <div class="modal-header" id="titl">
                    <h4 class="modal-title" id="titleModalEliminar">¡Eliminar imagen!</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <h5 style="font-family:Verdana; font-size: 14px;" id="bodyModalEliminar" class="debug-url">
                        ¿Está seguro de que desea eliminar al imagen?
                    </h5>
                    <form action="" class="form-modal" method="POST">
                        @method('DELETE')
                        @csrf
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-light" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-outline-light btn-ok">Eliminar</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    @parent

    <!-- DataTables -->
    <script src="{{ asset('adminZone/plugins/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('adminZone/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>

@endsection
