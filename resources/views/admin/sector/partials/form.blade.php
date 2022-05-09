<?php
/**
 * Created by PhpStorm.
 * User: Starglob2
 * Date: 24/02/2021
 * Time: 10:25
 */
?>

<div class="row">
    <div class="column col-lg-6 form-group">
    <div class="col-lg-6 form-group">
        {!! Form::label('titulo', 'Titulo', ['class' => 'is-required']) !!}
        {!! Form::text('titulo', null, ['class' => 'form-control', 'placeholder' => 'Introduzca el Titulo', 'autocomplete' => 'off', 'required']) !!}

        @error('titulo')
            <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong></span>
        @enderror

    </div>
    <div class="col-lg-6 form-group">
        {!! Form::label('tipo_id', 'Tipo', ['class' => 'is-required']) !!}
        {!! Form::select('tipo_id', $tipos, [], ['class' => 'form-control', 'required']) !!}
    
        
    
        @error('tipo_id')
            <span class="text-danger">{{$message}}</span>
        @enderror
    
    </div>
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
    {!! Form::label('localizacion', 'Localizacion') !!}
    <input type="checkbox" onclick="mostrarCapacidad();" id="checkboxLocate">
</div>



<div class="row" id="bloqueCapacidad">
    
    
    <div class="col-lg-12 form-group">
        {!! Form::label('mapaCapacidades', 'Tipo') !!}
        {{-- {!! Form::select('mapaCapacidades', $fruits, [], ['class' => 'form-control', 'required']) !!} --}}
        <select name="mapaCapacidades" class = 'form-control'>
        @foreach($capacidades as $capacidad)
            
        <option value='{{$capacidad->id}}'>
            Banquete Sin Baile: {{$capacidad->banqueteSinBaile}} Banquete Con Baile: {{$capacidad->banqueteConBaile}} Cocktail: {{$capacidad ->cocktail}} Actos: {{$capacidad ->actos}}
        </option>
        
        @endforeach

        @error('mapaCapacidades')
            <span class="text-danger">{{$message}}</span>
        @enderror
        
    </div>
</div>


</div>
<script type="text/javascript">
    function mostrarCapacidad() {
    if ( document.getElementById("checkboxLocate").checked) {
        document.getElementById("bloqueCapacidad").style.display = 'block';
        
    } else {
        
        document.getElementById("bloqueCapacidad").style.display = 'none';
    }
    }
</script>


