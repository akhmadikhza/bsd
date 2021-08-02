<div class="row">
    <div class="col-lg-6">

        <?php

        // echo validation_errors('<div class="alert alert-warning">','</div');
        $user = $this->penerima_model->listing();
        //error upload
        if (isset($error_upload)) {
            echo '<div class="alert alert-warning">' . $error_upload . '</div>';
        }
        echo form_open_multipart(base_url('admin/penerima/tambah'));
        ?>

    </div>
</div>




<!-- Start KK & NIK -->
<div class="row">
    <div class="col-lg-4">
        <div class="form-group form-group-lg">
            <label>No KK</label>
            <input type="text" name="kk" class="form-control" placeholder="KK" value="<?= set_value('kk') ?>">
            <?= form_error('kk', '<small class="text-danger">', '</small>'); ?>
        </div>
    </div>


    <div class="col-lg-4">
        <div class="form-group form-group-lg">
            <label>NIK</label>
            <input type="text" name="nik" class="form-control" placeholder="NIK" value="<?= set_value('nik') ?>">
            <?= form_error('nik', '<small class="text-danger">', '</small>'); ?>
        </div>
    </div>

</div>
<!-- END KK & NIK -->

<!-- Start KK & NIK -->
<div class="row">
    <div class="col-lg-4">
        <div class="form-group form-group-lg">
            <label>Nama Penerima</label>
            <input type="text" name="nama_penerima" class="form-control" placeholder="Nama Penerima" value="<?= set_value('nama_penerima') ?>">
            <?= form_error('nama_penerima', '<small class="text-danger">', '</small>'); ?>
        </div>
    </div>


    <div class="col-lg-4">
        <div class="form-group form-group-lg">
            <label>Alamat</label>
            <input type="text" name="alamat" class="form-control" placeholder="Alamat" value="<?= set_value('alamat') ?>">
            <?= form_error('alamat', '<small class="text-danger">', '</small>'); ?>
        </div>
    </div>

</div>
<!-- END KK & NIK -->


<!-- Start RT / RW -->

<div class="row">
    <div class="col-lg-4">
        <div class="form-group form-group-lg">
            <label>Jenis Kelamin</label>
            <input type="text" name="jk" class="form-control" placeholder="Jenis Kelamin" value="<?= set_value('jk') ?>">
            <?= form_error('jk', '<small class="text-danger">', '</small>'); ?>
        </div>
    </div>


    <div class="col-lg-4">
        <div class="form-group form-group-lg">
            <label>Pekerjaan</label>
            <input type="text" name="pekerjaan" class="form-control" placeholder="Pekerjaan" value="<?= set_value('pekerjaan') ?>">
            <?= form_error('pekerjaan', '<small class="text-danger">', '</small>'); ?>
        </div>
    </div>




</div>
<!-- End RT /RW -->


<div class="row mb-3">
    <div class="col-lg-4">
        <label>Jenis Bantuan</label>
        <select name="id_bantuan" class="custom-select custom-select-md">
            <option value="">--Pilih--</option>
            <?php foreach ($bantuan as $bantuan) {  ?>
                <option value="<?= $bantuan['id_bantuan']; ?>" <?= set_value('id_bantuan') == $bantuan['id_bantuan'] ? "selected" : null ?>>


                    <?= $bantuan['nama_bantuan']; ?>
                </option>
            <?php    } ?>
        </select>
        <?= form_error('id_bantuan', '<small class="text-danger">', '</small>'); ?>
    </div>




    <div class="col-lg-4">

        <div class="form-group form-group-lg">
            <label>Tanggal Penerimaan</label>
            <div class="input-group date" id="tgl_penerima" data-target-input="nearest">
                <input type="text" name="tgl_penerima" class="form-control datetimepicker-input" value="<?= set_value('tgl_penerima') ?>" data-target="#tgl_penerima" data-toggle="datetimepicker" placeholder="DD/MM/YYYY" autocomplete="off" />
                <div class="input-group-append" data-target="#tgl_penerima" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                </div>
            </div>
            <?= form_error('tgl_penerima', '<small class="text-danger">', '</small>'); ?>
        </div>

    </div>





</div>





<div class="form-group">
    <button type="submit" name="submit" class="btn btn-success">
        <i class="fa fa-save mr-1"></i>Save !
    </button>
    <a href="<?= base_url('admin/penerima'); ?> "><button type="button" class="btn btn-danger">Back</button></a>

</div>


<?php
//form close

echo form_close();
?>