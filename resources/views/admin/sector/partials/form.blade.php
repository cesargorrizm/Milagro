<?php
/**
 * Created by PhpStorm.
 * User: Starglob2
 * Date: 24/02/2021
 * Time: 10:25
 */
?>

<div class="row">
    <div class="col-lg-6 form-group">
        {!! Form::label('titulo', 'Titulo', ['class' => 'is-required']) !!}
        {!! Form::text('titulo', null, ['class' => 'form-control', 'placeholder' => 'Introduzca el Titulo', 'autocomplete' => 'off', 'required']) !!}

        @error('titulo')
            <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong></span>
        @enderror

    </div>
    <div class="col-lg-6 form-group">
        {!! Form::label('descripcion', 'Descripcion', ['class' => 'is-required']) !!}
        {!! Form::textarea('descripcion', null, ['class' => 'form-control', 'placeholder' => 'Introduzca la descripción de la instancia', 'autocomplete' => 'off', 'required']) !!}
    
        @error('descripcion')
            <span class="text-danger">{{$message}}</span>
        @enderror
    
    </div>
</div>

<div class="row">

    <div class="col-lg-6 form-group">
        {!! Form::label('tipo_id', 'Tipo', ['class' => 'is-required']) !!}
        {!! Form::select('role', $tipos, [], ['class' => 'form-control', 'required']) !!}

        

        @error('tipo_id')
            <span class="text-danger">{{$message}}</span>
        @enderror

    </div>

    <div class="col-lg-6 form-group">
        {!! Form::label('capacidad_id', 'Capacidad', ['class' => 'is-required']) !!}
        {!! Form::number('capacidad_id', null, ['class' => 'form-control', 'placeholder' => 'Introduzca la capacidad', 'autocomplete' => 'off', 'required' ]) !!}

        

        @error('capacidad_id')
            <span class="text-danger">{{$message}}</span>
        @enderror
 
    </div>
</div>

</div>


