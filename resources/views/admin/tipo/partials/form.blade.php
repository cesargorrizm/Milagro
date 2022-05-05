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
        {!! Form::label('nombre', 'Nombre del Tipo', ['class' => 'is-required']) !!}
        {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Introduzca el nombre del tipo', 'autocomplete' => 'off', 'required']) !!}

        @error('nombre')
            <span class="text-danger">{{$message}}</span>
        @enderror

    </div>
</div>







