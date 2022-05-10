<?php
/**
 * Created by PhpStorm.
 * User: Starglob2
 * Date: 24/02/2021
 * Time: 10:25
 */
if (isset($sector)) {
    $tipo_id = $sector->tipo_id;
    if ($sector->capacidad_id != null) {
        $checkbox = true;
        $capacidad_id = $sector->capacidad_id;
    } 
} else {
    
    $checkbox = false;
    $capacidad_id=0;
    $tipo_id = 0;
}
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
        {!! Form::select('tipo_id', $tipos, [$tipo_id], ['class' => 'form-control', 'required']) !!}
    
        
    
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
    {!! Form::label('Capacidades', 'Capacidades') !!}
    <input type="checkbox" name="checkbox" onclick="mostrarCapacidad();" id="checkboxLocate",>
</div>





<div class="row">
    
    
    <div class="col-lg-12 form-group"  id="bloqueCapacidad">
        {!! Form::label('mapaCapacidades', 'Tipo') !!}
         <select name="mapaCapacidades" class = 'form-control' d>
        @foreach($capacidades as $capacidad)
            
        <option value='{{$capacidad->id}}' @if ( $capacidad_id ==$capacidad->id)
            selected
        @endif>
            Banquete Sin Baile: {{$capacidad->banqueteSinBaile}} Banquete Con Baile: {{$capacidad->banqueteConBaile}} Cocktail: {{$capacidad ->cocktail}} Actos: {{$capacidad ->actos}}
        </option>
        
        @endforeach
         </select>

        @error('mapaCapacidades')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

</div>
<div></div>
</div>
<script type="text/javascript">
            function mostrarCapacidad() {
            if ( document.getElementById("checkboxLocate").checked) {
                document.getElementById("bloqueCapacidad").style.visibility = 'visible';
                
            } else {
                
                document.getElementById("bloqueCapacidad").style.visibility = 'hidden';
            }
            }
</script>
<script type="text/javascript">
            window.onload = function() {

            var check = '<?=$checkbox?>';
            if(check== true){
                document.getElementById("checkboxLocate").checked = 1;
            } else {
                document.getElementById("checkboxLocate").checked = 0;
            }

            if ( document.getElementById("checkboxLocate").checked) {
                document.getElementById("bloqueCapacidad").style.visibility = 'visible';
                
            } else {
                
                document.getElementById("bloqueCapacidad").style.visibility = 'hidden';
            }
        }
</script>






