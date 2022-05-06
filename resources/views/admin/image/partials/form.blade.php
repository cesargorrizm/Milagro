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
        {!! Form::label('url', 'Url', ['class' => 'is-required']) !!}
        {!! Form::file('url', ['class' => 'form-control-file', 'accept' => 'image/png, image/jpeg']) !!}
        @error('url')
            <span class="text-danger">{{$message}}</span>
        @enderror
       
    </div>
    

</div>
<div class="row">
    <div class="col-lg-6 form-group">
        {!! Form::label('principal', 'Principal', ['class' => 'is-required']) !!}
        <input type="checkbox" name="principal" class="form-control" value="1" {{ old('principal') ? 'checked="checked"' : '0' }}/>

        @error('principal')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    </div>
</div>


