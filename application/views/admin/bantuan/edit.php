<?php


echo form_open(base_url('admin/bantuan/edit/') . $bantuan['id_bantuan']);
?>



<div class="row">
    <div class="col-12 col-lg-6">
        <div class="form-group">
            <label for="name">Nama Bantuan</label>
            <input type="text" name="nama_bantuan" class="form-control" id="name" value="<?= $bantuan['nama_bantuan'] ?>">
            <small class="form-text text-danger"><?= form_error('nama_bantuan'); ?></small>
        </div>




    </div>
</div>
<button type="submit" class="btn btn-success">Save changes !</button>
<?php
echo form_close();
?>