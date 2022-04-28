<?php
/**
 * Created by PhpStorm.
 * User: Starglob2
 * Date: 03/03/2022
 * Time: 10:05
 */
?>

@if(session()->has('status'))
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4><i class="icon fa fa-check"></i> OK!</h4>
        {{ session('status') }}
    </div>
@endif