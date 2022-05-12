<?php
/**
 * Created by PhpStorm.
 * User: Starglob2
 * Date: 24/02/2021
 * Time: 10:25
 */
$descri = "";
if (isset($sector)) {
    $descri = $sector->descripcion;
    $capacidad_id = 0;
    $checkbox = false;
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
        {{-- {!! Form::select('tipo_id', $tipos, [$tipo_id], ['class' => 'form-control', 'required']) !!} --}}
        {!! Form::select('tipo_id', $tipos, [$tipo_id], ['class' => 'form-control', 'required','onchange'=>'mostrar(this.value)']) !!}
        {{-- <form action="index.php" method="post">
            <select id="status" name="status" onChange="mostrar(this.value);">
                <option value="sala">Salones</option>
                <option value="espacio">Espacios</option>
                <option value="evento">Evento</option>
                <option value="servicioIncluido">Servicios Incluidos</option>
                <option value="vuestrosInvitados">Para vuestros invitados</option>
             </select>
        </form> --}}
        
        
        @error('tipo_id')
        <span class="text-danger">{{$message}}</span>
        @enderror
        
    </div>
</div>
{{-- <div id="estudiante" style="display: none;">
    <h2>Si eres estudiante...</h2>
    <form action="index.php" method="post">
        <p>Nombre:<br/>
        <input type="text" name="nombre" /></p>
        <p>Centro:<br/>
        <input type="text" name="centro" /></p>
        <input type="submit" name="send" value="Enviar" />
    </form>
</div> --}}
    <div id="descripcion" class="col-lg-6 form-group">
        {!! Form::label('descripcion', 'Descripcion') !!}
        <textarea class="form-control" id="descripcion" name="summary-ckeditor">{{$descri}}</textarea>
        {{-- {!! Form::textarea('descripcion', null, ['class' => 'form-control', 'placeholder' => 'Introduzca la descripción de la instancia', 'autocomplete' => 'off']) !!} --}}
    
        @error('descripcion')
            <span class="text-danger">{{$message}}</span>
        @enderror
    
    </div>
</div>
{{-- <div class="row">
    {!! Form::label('Capacidades', 'Capacidades') !!}
    <input type="checkbox" name="checkbox" onclick="mostrarCapacidad();" id="checkboxLocate",>
</div> --}}





<div class="row">
    
    
    <div id="capacidad" class="col-lg-12 form-group"  id="bloqueCapacidad">
        {!! Form::label('mapaCapacidades', 'Tipo') !!}
         <select name="mapaCapacidades" class = 'form-control'>
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
{{-- <script type="text/javascript">
            function mostrarCapacidad() {
            if ( document.getElementById("checkboxLocate").checked) {
                document.getElementById("bloqueCapacidad").style.visibility = 'visible';
                
            } else {
                
                document.getElementById("bloqueCapacidad").style.visibility = 'hidden';
            }
            }
</script> --}}
{{-- <script type="text/javascript">
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
        
</script> --}}

<script type="text/javascript">
    function mostrar(id) {
        if(id=='4' || id=='5'){
            $("#descripcion").hide();
            $('#capacidad').hide();
        }else if(id=='3'){


            $("#descripcion").show();
            $("#capacidad").hide();
        } else{
            $("#descripcion").show();
            $("#capacidad").show();
        }
    }
    </script>
    	<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
        <script>
        CKEDITOR.replace( 'summary-ckeditor' );
        </script>
    
@push('js')
<script src="https://cdn.ckeditor.com/ckeditor5/26.0.0/classic/ckeditor.js"></script>
<script>ClassicEditor
             .create( document.querySelector( '#descripcion' ), {
                 language: 'es',

                 placeholder: 'Contenido del post',

                 plugins: [ 'Paragraph', 'Heading', 'Bold', 'Italic', 'Link', 'List', 'Table' ],

                 heading: {
                     options: [
                         { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                         { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                         { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
                         { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' }
                     ]
                 },

             } )
             .catch( error => {
                 console.error( error );
             } );
</script>
@endpush






