<?php
/**
 * Created by PhpStorm.
 * User: Starglob2
 * Date: 28/02/2022
 * Time: 10:39
 */
?>

<!-- Modal -->

<div class="modal fade" id="messageModal" tabindex="-1" role="dialog" aria-labelledby="messageModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header @php echo $color; @endphp">
                <h5 class="modal-title" id="messageModalLabel">Mensaje</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h5 style="text-align: center;">{{ $message }}</h5>
            </div>
            <!--<div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               <button type="button" class="btn btn-primary">Save changes</button>
            </div>-->
        </div>
    </div>
</div>
