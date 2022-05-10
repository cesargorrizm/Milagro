<?php
/**
 * Created by PhpStorm.
 * User: Starglob2
 * Date: 24/02/2021
 * Time: 10:25
 */
if (isset($image)) {
    $valor = $image->sector_id;
    if ($image->principal == 1) {
        $checkbox = true;
    } else {
        $checkbox = false;
    }
} else {
    $checkbox = false;
    $valor = 0;
}

?>

<div class="row">

    <div class="col-lg-6 form-group">
        {{-- <form action="index.php" method="POST" enctype="multipart/form-data"> --}}
        {!! Form::label('imagen', 'Añadir imagen:') !!}
        <input name="archivo" class="form-control" id="archivo" type="file" />
        {{-- <input type="submit" name="subir" value="Subir imagen" /> --}}
        {{-- </form> --}}
        {{-- {!! Form::label('url', 'Url', ['class' => 'is-required']) !!}
        {!! Form::file('url', ['class' => 'form-control-file', 'accept' => 'image/png, image/jpeg']) !!} --}}
        @error('archivo')
            <span class="text-danger">{{ $message }}</span>
        @enderror

    </div>


</div>
<div class="row">
    <div class="col-lg-6 form-group">
        {!! Form::label('principal', 'Principal') !!}
        <input type="checkbox" name="principal" id="fotoPrincipal" class="form-control"/>
        {{-- <input type="checkbox" name="principal" id="fotoPrincipal" class="form-control" value="0" checked="checked" 
            {{ old('principal') ? 'checked="checked"' : '0' }} /> --}}




        @error('principal')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="col-lg-6 form-group">
        {!! Form::label('sector', 'Sector', ['class' => 'is-required']) !!}
        {{-- <input type="{!! Form::select($name, $list, $selected, [$options]) !!}" --}}
        {!! Form::select('sector', $sector, [$valor], ['class' => 'form-control', 'id' => '2', 'required']) !!}



        @error('sector')
            <span class="text-danger">{{ $message }}</span>
        @enderror

    </div>
</div>
</div>
<script type="text/javascript">
var check = '<?=$checkbox?>';
if(check== true){
    document.getElementById("fotoPrincipal").checked = 1;
} else {
    document.getElementById("fotoPrincipal").checked = 0;
}
	
</script>
