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
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Página Principal</a></li>
                        <li class="breadcrumb-item active"><a href="{{ route('users.index') }}">Usuarios</a></li>
                        <li class="breadcrumb-item active">Editar usuario</li>
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

            {!! Form::model($usuario, ['route' => ['users.update', $usuario], 'method' => 'put']) !!}
            <div class="card-body">
                @php $editar = 1; @endphp
                @include('users.partials.form')
                {{--{!! Form::submit('Actualizar usuario', ['class' => 'btn btn-primary']) !!}--}}
                {{--{!! Form::close() !!}--}}
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">{{ __('Actualizar usuario') }}</button>

                <a class="btn btn-link" href="{{ url()->previous() }}">{{ __('Volver') }}</a>
            </div>
            {!! Form::close() !!}

        </div>
    </div>
@endsection




