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
        {!! Form::label('name', 'Nombre y apellidos', ['class' => 'is-required']) !!}
        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Introduzca el nombre y apellidos del usuario', 'autocomplete' => 'off', 'required']) !!}

        @error('name')
            <span class="text-danger">{{$message}}</span>
        @enderror

    </div>
</div>

<div class="row">
    <div class="col-lg-6 form-group">
        {!! Form::label('email', 'Email', ['class' => 'is-required']) !!}
        {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Introduzca el email del usuario', 'required']) !!}

        @error('email')
            <span class="text-danger">{{$message}}</span>
        @enderror

    </div>

    <div class="col-lg-6 form-group">
        {!! Form::label('password', 'Contraseña', ['class' => 'is-required']) !!}
        {{--<br>--}}
        {{--{!! Form::password('password', null, ['class' => 'form-control']) !!}--}}
        <input type="password" class="form-control" name="password" required>

        @error('password')
            <span class="text-danger">{{$message}}</span>
        @enderror

    </div>

</div>

<div class="row">
    <div class="col-lg-6 form-group">
        {!! Form::label('phone', 'Teléfono') !!}
        {!! Form::number('phone', null, ['class' => 'form-control', 'placeholder' => 'Ej. 963555222', 'autocomplete' => 'off' ]) !!}

        @error('phone')
        <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong></span>
        @enderror

    </div>

</div>

<div class="row">
    <div class="col-lg-6 form-group">
        {!! Form::label('roles', 'Rol', ['class' => 'is-required']) !!}
        {!! Form::select('role', $roles, [], ['class' => 'form-control', 'required']) !!}

        @error('role')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>


</div>








