<?php


?>


<!-- Start Modal Delete -->

<a href="<?= base_url('admin/penerima/delete/') . $user['id_penerima']; ?>" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleDeletePenerima"> <i class="fa fa-trash"></i>
    Delete
</a>
<!-- Modal -->
<div class="modal fade" id="exampleDeletePenerima" tabindex="-1" role="dialog" aria-labelledby="exampleDeletePenerimaTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content ">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Confirmation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                Are you sure to <span class="text-danger font-weight-bold">delete</span> user ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                <form method="post" action="<?= base_url('admin/penerima/delete/') . $user['id_penerima']; ?>">
                    <button type="submit" class="btn btn-success">Yes</button>

                </form>


            </div>
        </div>
    </div>
</div>


<!--End Modal reject  -->