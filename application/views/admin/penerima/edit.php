<?php
//form opeb
echo form_open(base_url('admin/penerima/edit/' . $penerima['id_penerima']));
?>


<div class="row">
    <div class="col-md-4">

        <div class="form-group">
            <label>No Kartu Keluarga/KK</label>
            <input type="text" name="kk" class="form-control" value="<?= $penerima['kk']; ?>">
            <?= form_error('kk', '<small class="text-danger">', '</small>'); ?>
        </div>
    </div>


    <div class="col-md-4">
        <div class="form-group">
            <label>NIK</label>
            <input type="text" name="nik" class="form-control" value="<?= $penerima['nik']; ?>">
            <?= form_error('nik', '<small class="text-danger">', '</small>'); ?>
        </div>
    </div>



</div>




<!-- Start KK & NIK -->
<div class="row">
    <div class="col-lg-4">
        <div class="form-group form-group-lg">
            <label>Nama Penerima</label>
            <input type="text" name="nama_penerima" class="form-control" placeholder="Nama Penerima" value="<?= $penerima['nama_penerima']; ?>">
            <?= form_error('nama_penerima', '<small class="text-danger">', '</small>'); ?>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="form-group form-group-lg">
            <label>Alamat</label>
            <input type="text" name="alamat" class="form-control" placeholder="Alamat" value="<?= $penerima['alamat']; ?>">
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
            <input type="text" name="jk" class="form-control" placeholder="Jenis Kelamin" value="<?= $penerima['jk']; ?>">
            <?= form_error('jk', '<small class="text-danger">', '</small>'); ?>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="form-group form-group-lg">
            <label>Pekerjaan</label>
            <input type="text" name="pekerjaan" class="form-control" placeholder="Pekerjaan" value="<?= $penerima['pekerjaan']; ?>">
            <?= form_error('pekerjaan', '<small class="text-danger">', '</small>'); ?>
        </div>
    </div>




</div>
<!-- End RT / RW -->



<!-- Start Jenis Bantuan & Status -->
<div class="row">
    <div class="col-lg-4">
        <div class="form-group">
            <label>Jenis Bantuan</label>
            <select name="id_bantuan" class="form-control">
                <?php foreach ($bantuan as $bantuan) {  ?>
                    <option value="<?= $bantuan['id_bantuan']; ?>" <?php if ($penerima['id_bantuan'] == $bantuan['id_bantuan']) {
                                                                        echo "selected";
                                                                    } ?>>
                        <?= $bantuan['nama_bantuan'] ?>
                    </option>

                <?php    } ?>

            </select>
        </div>

    </div>

    <div class="col-lg-4">




        <div class="form-group form-group-lg">
            <label>Tanggal Penerimaan</label>
            <div class="input-group date" id="tgl_penerima" data-target-input="nearest">
                <input type="text" name="tgl_penerima" class="form-control datetimepicker-input" value="<?= $penerima['tgl_penerima']; ?>" data-target="#tgl_penerima" data-toggle="datetimepicker" placeholder="DD/MM/YYYY" autocomplete="off" />
                <div class="input-group-append" data-target="#tgl_penerima" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                </div>
            </div>
            <?= form_error('tgl_penerima', '<small class="text-danger">', '</small>'); ?>
        </div>






    </div>
    <!-- END KK & Status -->
</div>


<div class="form-group mt-2">

    <input type="submit" name="submit" class="btn btn-success" value="Save">
    <a href="<?= base_url('admin/penerima'); ?>"> <button type="button" class="btn btn-danger ">Back </button>
    </a>
</div>






<?php
//form close

echo form_close();
?>