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
        {!! Form::label('telefono', 'Telefono', ['class' => 'is-required']) !!}
        {!! Form::number('telefono', null, ['class' => 'form-control', 'placeholder' => 'Introduzca numero de telefono', 'autocomplete' => 'off', 'required']) !!}

        @error('telefono')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong></span>
        @enderror

    </div>
    <div class="col-lg-6 form-group">
        {!! Form::label('email', 'Email', ['class' => 'is-required']) !!}
        {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Introduzca el email del usuario', 'autocomplete' => 'off', 'required']) !!}
    
        @error('email')
            <span class="text-danger">{{$message}}</span>
        @enderror
    
    </div>
</div>

<div class="row">

    <div class="col-lg-6 form-group">
        {!! Form::label('tripadvisor', 'Tripadvisor', ['class' => 'is-required']) !!}
        {!! Form::textarea('tripadvisor', null, ['class' => 'form-control', 'placeholder' => 'Introduzca el nombre del rol', 'autocomplete' => 'off', 'required' ]) !!}

        

        @error('tripadvisor')
            <span class="text-danger">{{$message}}</span>
        @enderror

    </div>

    <div class="col-lg-6 form-group">
        {!! Form::label('facebook', 'Facebook', ['class' => 'is-required']) !!}
        {!! Form::textarea('facebook', null, ['class' => 'form-control', 'placeholder' => 'Introduzca el nombre del rol', 'autocomplete' => 'off', 'required' ]) !!}

        

        @error('facebook')
            <span class="text-danger">{{$message}}</span>
        @enderror

    </div>
    <div class="col-lg-6 form-group">
        {!! Form::label('miNube', 'MiNube', ['class' => 'is-required']) !!}
        {!! Form::textarea('miNube', null, ['class' => 'form-control', 'placeholder' => 'Introduzca el nombre del rol', 'autocomplete' => 'off', 'required' ]) !!}

        

        @error('miNube')
            <span class="text-danger">{{$message}}</span>
        @enderror

    </div>
</div>

</div>


