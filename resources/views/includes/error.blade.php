<?php
/**
 * Created by PhpStorm.
 * User: Starglob2
 * Date: 22/03/2022
 * Time: 12:25
 */
?>

@if($errors->any())

    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h5><i class="icon fas fa-ban"></i> Alert!</h5>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </div>

@endif