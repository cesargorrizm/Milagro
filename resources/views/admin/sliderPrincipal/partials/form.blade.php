<?php
/**
 * Created by PhpStorm.
 * User: Starglob2
 * Date: 24/02/2021
 * Time: 10:25
 */
// if (isset($sliderPrincipal)) {
//     $valor = $sliderPrincipal->sector_id;
//     if ($sliderPrincipal->principal == 1) {
//         $checkbox = true;
//     } else {
//         $checkbox = false;
//     }
// } else {
//     $checkbox = false;
//     $valor = 0;
// }

?>

<div class="row">

    <div class="col-lg-6 form-group">
        {!! Form::label('url', 'Añadir imagen Principal:', ['class' => 'is-required']) !!}
        <input name="archivo" class="form-control" id="url" type="file" />
        @error('url')
            <span class="text-danger">{{ $message }}</span>
        @enderror

    </div>
</div>
</div>

