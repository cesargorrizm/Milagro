<?php
/**
 * Created by PhpStorm.
 * User: Starglob2
 * Date: 04/11/2021
 * Time: 12:08
 */
?>

@extends('layouts.admin')

@section('estilos')
    @parent

    <!-- Estilos personalizados -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

@endsection

@section('breadcrumb')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ $titlePage }}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin') }}">Página Principal</a></li>
                        <li class="breadcrumb-item active"><a href="{{ route('roles.index') }}">Roles</a></li>
                        <li class="breadcrumb-item active">Editar rol</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
@endsection

@section('content')
    <div class="col-lg-12">

        @include('includes.error')

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">{{ __($title) }}</h3>
            </div>
            <div class="card-body">
                {!! Form::model($role, ['route' => ['roles.update', $role['id']], 'method' => 'put']) !!}
                @include('roles.partials.form')
                {{--{!! Form::submit('Crear usuario', ['class' => 'btn btn-primary']) !!}--}}

                {{--{!! Form::close() !!}--}}
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">{{ __('Actualizar rol') }}</button>
                {!! Form::close() !!}
                <a class="btn btn-link" href="{{ url()->previous() }}">{{ __('Volver') }}</a>
            </div>

        </div>
    </div>
@endsection

