<?php
/**
 * Created by PhpStorm.
 * User: Starglob2
 * Date: 24/02/2021
 * Time: 10:25
 */
?>
<div class="row">
    
    <div class="col-lg-4 form-group">
        {!! Form::label('banqueteSinBaile', 'Banquete Sin Baile') !!}
        {!! Form::number('banqueteSinBaile', null, ['class' => 'form-control', 'placeholder' => 'Ej. 400', 'autocomplete' => 'off' ]) !!}

        @error('banqueteSinBaile')
        <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong></span>
        @enderror
    </div>
    <div class="col-lg-4 form-group">
        {!! Form::label('banqueteConBaile', 'Banquete Con Baile') !!}
        {!! Form::number('banqueteConBaile', null, ['class' => 'form-control', 'placeholder' => 'Ej. 350', 'autocomplete' => 'off' ]) !!}

        @error('banqueteConBaile')
        <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong></span>
        @enderror
    </div>
    <div class="col-lg-4 form-group">
        {!! Form::label('cocktail', 'Cocktail') !!}
        {!! Form::number('cocktail', null, ['class' => 'form-control', 'placeholder' => 'Ej. 400', 'autocomplete' => 'off' ]) !!}

        @error('cocktail')
        <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong></span>
        @enderror
    </div>
</div>
<br>
<div class="row">
    <div class="col-lg-4 form-group">
        {!! Form::label('actos', 'Actos') !!}
        {!! Form::number('actos', null, ['class' => 'form-control', 'placeholder' => 'Ej. 500', 'autocomplete' => 'off' ]) !!}

        @error('actos')
        <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong></span>
        @enderror
    </div>
    <div class="col-lg-4 form-group">
        {!! Form::label('buffet', 'Buffet') !!}
        {!! Form::number('buffet', null, ['class' => 'form-control', 'placeholder' => 'Ej. 460', 'autocomplete' => 'off' ]) !!}

        @error('buffet')
        <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong></span>
        @enderror
    </div>
</div>




</div>








