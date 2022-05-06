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
                        <li class="breadcrumb-item active">Sector</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
@endsection

@section('content')
@include('includes.message')

@if($sectores->isEmpty())
    <div class="alert alert-warning alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4><i class="fas fa-exclamation-triangle"></i> Alert!</h4>
        No existen datos que mostrar
    </div>
    <br>

@else
    <div class="card"  class="col-sm-12">

        <div class="card-header">

            <div class="d-flex justify-content-between align-items-end">
                <h3 class="card-title pb-2">{{ __($titlePage) }}</h3>
            </div>
        </div>
        <!-- /.card-header -->

        <div class="card-body">
          
                <table id="sector" class="table table-bordered table-striped table-hover">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Titulo</th>
                        <th>Descripcion</th>
                        <th>Tipo</th>
                        <th>Capcidad</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($sectores as $sector)
                        <tr>
                            <td>{{$sector->id}}</td>
                            <td>{{ $sector->titulo }}</td>
                            <td>{{ $sector->descripcion}}</td>
                            
                            {{--<td width="10px">--}}
                            @foreach($tipos as $tipo)
                                @if($tipo->id == $sector->tipo_id)
                            <td>{{ $tipo->nombre}}</td>
                                 @else
                                 @endif
                            @endforeach
                            <td>{{ $sector->capacidad_id}}</td>
                            <td>
                                <a href="{{ route('sector.edit', $sector) }}" 
                                class="btn btn-secondary btn-sm" title="Editar">
                                <i class="fa fa-pen"></i></a>
                            </td>
    
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Titulo</th>
                        <th>Descripcion</th>
                        <th>Tipo</th>
                        <th>Capcidad</th>
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
@section('scripts')
    @parent

    <!-- DataTables -->
    <script src="{{ asset('adminZone/plugins/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('adminZone/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>

    <!-- page script -->
    <script>
        $(function () {
            // $('#sector').DataTable({
        //         columnDefs: [ {
        // targets: [2,3,4],
        // render: function ( data, type, row ) {
        //     return data.substr( 0, 20 )+'…';}
        //  } ],
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
    

@endsection



