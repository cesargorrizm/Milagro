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
                        <li class="breadcrumb-item active">Contacto</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
@endsection

@section('content')
@include('includes.message')

@if($contactos->isEmpty())
    <div class="alert alert-warning alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4><i class="fas fa-exclamation-triangle"></i> Alert!</h4>
        No existen datos que mostrar
    </div>
    <br>

@else
    <div class="card">

        <div class="card-header">

            <div class="d-flex justify-content-between align-items-end">
                <h3 class="card-title pb-2">{{ __($titlePage) }}</h3>
            </div>
        </div>
        <!-- /.card-header -->

        <div class="card-body">
            <table id="roles" class="table table-bordered table-striped table-hover">
                <thead>
                <tr>
                    <th>Telefono</th>
                    <th>Email</th>
                    <th>Tripadvisor</th>
                    <th>Facebook</th>
                    {{--<th colspan="2">Acciones</th>--}}
                    <th>MiNube</th>
                </tr>
                </thead>
                <tbody>
                @foreach($contactos as $contacto)
                    <tr>
                        <td>{{$contacto->telefono}}</td>
                        <td>{{ $contacto->email }}</td>
                        <td>{{ $contacto->tripadvisor}}</td>
                        {{--<td width="10px">--}}
                        <td>{{ $contacto->facebook}}</td>
                        <td>{{ $contacto->miNube}}</td>

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




