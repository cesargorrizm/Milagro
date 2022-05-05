<?php
/**
 * Created by PhpStorm.
 * User: Starglob2
 * Date: 24/02/2021
 * Time: 10:25
 */
?>

<!-- , 'autocomplete' => 'off' -->
<div class="form-group">
    {!! Form::label('name', 'Nombre', ['class' => 'is-required']) !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Introduzca el nombre del rol', 'autocomplete' => 'off', 'required' ]) !!}

    @error('name')
        <span class="text-danger">{{$message}}</span>
    @enderror

</div>

{{--<div class="form-group col-md-8">--}} <!-- quitar para que muestre mas de una columna -->
<div class="form-group">
    <p>{!! Form::label('permissions', 'Permisos', ['class' => 'is-required']) !!}</p>

    @foreach ($permissions as $permission)
        {{--<div><!-- quitar para que muestre mas de una columna -->--}}
            <label class="col-md-3">
                {!! Form::checkbox('permissions[]', $permission->id, null, ['required']) !!}
                {{ $permission->description }}
            </label>
        {{--</div>--}}

    @endforeach 

    @error('permissions')
        <br>
        <span class="text-danger">{{$message}}</span>
    @enderror

</div>

