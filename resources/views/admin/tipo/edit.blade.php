<?php
/**
 * Created by PhpStorm.
 * User: Starglob2
 * Date: 02/02/2021
 * Time: 13:03
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
                        <li class="breadcrumb-item active"><a href="{{ route('tipo.index') }}">Tipo</a></li>
                        <li class="breadcrumb-item active">Editar tipo</li>
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

            {!! Form::model($tipo, ['route' => ['tipo.update', $tipo], 'method' => 'put']) !!}
            <div class="card-body">
                @include('admin.tipo.partials.form')
                {{--{!! Form::submit('Actualizar tipo', ['class' => 'btn btn-primary']) !!}--}}
                {{--{!! Form::close() !!}--}}
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">{{ __('Actualizar tipo') }}</button>

                <a class="btn btn-link" href="{{ url()->previous() }}">{{ __('Volver') }}</a>
            </div>
            {!! Form::close() !!}

        </div>
    </div>
@endsection




