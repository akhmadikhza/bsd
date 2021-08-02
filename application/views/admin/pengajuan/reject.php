<?php


echo form_open(base_url('admin/pengajuan/komentar/') . $user['id_pengajuan']);
?>



<div class="row">
    <div class="col-12 col-lg-6">
        <div class="form-group">
            <label for="name">Comment Reject</label>
            <input type="text" name="komentar" class="form-control" id="komentar" value="<?= $user['komentar'] ?>">
            <small class="form-text text-danger"><?= form_error('komentar'); ?></small>
        </div>




    </div>
</div>
<button type="submit" class="btn btn-sm btn-success">Save!</button>
<a href="<?= base_url('admin/pengajuan/akses'); ?> "><button type="button" class="btn btn-sm btn-warning">Back ...</button></a>
<?php
echo form_close();
?>