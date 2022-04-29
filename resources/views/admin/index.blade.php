<?php
/**
 * Created by PhpStorm.
 * User: Starglob2
 * Date: 28/04/2022
 * Time: 19:10
 */
?>

@extends('layouts.admin')

@section('contenido')
    @parent

    <!-- Info boxes -->
    <div class="row">

        <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-success elevation-1"><i class="nav-icon fas fa-user"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Usuarios</span>
                    <span class="info-box-number">{{ $numUsuarios }}</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>







    </div>

    <div class="row">

    </div>

@endsection