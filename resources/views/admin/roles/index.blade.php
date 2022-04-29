<?php
/**
 * Created by PhpStorm.
 * User: Starglob2
 * Date: 04/11/2021
 * Time: 11:03
 */
?>

@extends('layouts.admin')

@section('estilos')
    @parent

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">

@endsection

@section('breadcrumb')

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    {{--<h1 class="m-0">@if (isset($titlePage)) {{ $titlePage }} @else {{ "Sección" }} @endif</h1>--}}
                    {{--<h1>Gestión de Roles</h1>--}}
                    <h1>{{ $titlePage }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin') }}">Página Principal</a></li>
                        <li class="breadcrumb-item active">Roles</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
@endsection

@section('content')
    <div class="col-lg-12">
        {{--@if(session()->has('status'))--}}
            {{--<div class="alert alert-success alert-dismissible">--}}
                {{--<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>--}}
                {{--<h4><i class="icon fa fa-check"></i> OK!</h4>--}}
                {{--{{ session('status') }}--}}
            {{--</div>--}}
        {{--@endif--}}
        @include('includes.message')

        @if($roles->isEmpty())
            <div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="fas fa-exclamation-triangle"></i> Alert!</h4>
                No existen datos que mostrar
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <a href="{{ route('roles.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> {{ __('Nuevo Rol') }}</a>
                </div>
            </div>
            <br>

        @else
            <div class="card">

                <div class="card-header">

                    <div class="d-flex justify-content-between align-items-end">
                        <h3 class="card-title pb-2">{{ __($title) }}</h3>
                        <a href="{{ route('roles.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> {{ __('Nuevo Rol') }}</a>
                    </div>
                </div>
                <!-- /.card-header -->

                <div class="card-body">
                    <table id="roles" class="table table-bordered table-striped table-hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Permisos</th>
                            {{--<th colspan="2">Acciones</th>--}}
                            <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($roles as $rol)
                            <tr>
                                <td>{{ $rol->id }}</td>
                                <td>{{ $rol->name }}</td>
                                <td>
                                    @if(!empty($rol->getPermissionNames()))
                                        @foreach($rol->getPermissionNames() as $permission)
                                            {{--<label class="@if($rol == "Admin") badge badge-success @else badge badge-warning @endif">{{ $rol }}</label>--}}
                                            <label class="badge badge-info">{{ $permission }}</label>
                                        @endforeach
                                    @endif
                                </td>
                                {{--<td width="10px">--}}
                                <td>

                                    <a href="{{ route('roles.edit', $rol['id']) }}" class="btn btn-secondary btn-sm" title="Editar"><i class="fa fa-pen"></i></a>
                                    {{--<a href="{{ route('roles.edit', $rol) }}" class="btn btn-secondary btn-sm" title="Editar"><i class="fa fa-pen"></i></a>--}}

                                    @can('roles.destroy')
                                        <a class="btn btn-danger btn-sm" title="Eliminar" data-toggle="modal"
                                           data-target="#modalEliminar" data-href="{{ route('roles.destroy', $rol['id']) }}"
                                           href='#'><i class='fa fa-trash'></i></a>
                                        {{--<a class="btn btn-danger btn-sm" title="Eliminar" data-toggle="modal"--}}
                                           {{--data-target="#modalEliminar" data-href="{{ route('roles.destroy', $rol) }}"--}}
                                           {{--href='#'><i class='fa fa-trash'></i></a>--}}
                                    @endcan
                                </td>

                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Permisos</th>
                            {{--<th colspan="2">Acciones</th>--}}
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
                    <h4 class="modal-title" id="titleModalEliminar">¡Eliminar Rol!</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <h5 style="font-family:Verdana; font-size: 14px;" id="bodyModalEliminar" class="debug-url">
                        ¿Está seguro de que desea eliminar el rol?
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
    <script src="{{ asset('plugins/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>

    <!-- page script -->
    <script>
        $(function () {
            $('#roles').DataTable({
                "language": {
                    "decimal": "",
                    "emptyTable": "No hay registros",
                    "info": "Mostrando _START_ a _END_ de _TOTAL_ entradas",
                    "infoEmpty": "Mostrando 0 de 0 de las 0 entradas",
                    "infoFiltered": "(Filtrado del total de _MAX_ entradas)",
                    "infoPostFix": "",
                    "thousands": ",",
                    "lengthMenu": "Mostrar _MENU_ entradas",
                    "loadingRecords": "Cargando...",
                    "processing": "Procesando...",
                    "search": "Buscar:",
                    "zeroRecords": "Sin resultados encontrados",
                    "paginate": {
                        "first": "Primero",
                        "last": "Ultimo",
                        "next": "Siguiente",
                        "previous": "Anterior"
                    }
                }
            });
        });
    </script>

    <!-- Modal Eliminar -->
    <script>
        $('#modalEliminar').on('show.bs.modal', function (e) {
            $(this).find('.form-modal').attr('action', $(e.relatedTarget).data('href'));
            $(this).find('.btn-ok').click(function () {
                $("form").submit();
            });
        });
    </script>

@endsection



