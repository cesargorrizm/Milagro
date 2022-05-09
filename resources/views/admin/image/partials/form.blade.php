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
        {{-- <form action="index.php" method="POST" enctype="multipart/form-data"> --}}
            Añadir imagen: <input name="archivo" id="archivo" type="file" />
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
        {!! Form::label('principal', 'Principal', ['class' => 'is-required']) !!}
        <input type="checkbox" name="principal" id="fotoPrincipal" class="form-control" value="1"
            {{ old('principal') ? 'checked="checked"' : '0' }} />

        @error('principal')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>
</div>
