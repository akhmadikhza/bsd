<div class="row">
    <div class="col-lg-6">

        <?php

        if (isset($error_upload)) {
            echo '<div class="alert alert-warning">' . $error_upload . '</div>';
        }
        ?>


    </div>
</div>


<?= form_open_multipart('admin/pengajuan/tambah'); ?>
<div class="row">

    <div class="col-md-4">
        <div class="form-group">
            <label>Full Name</label>
            <input type="text" name="name" class="form-control" value="<?= $user['name']; ?>" readonly>
            <?= form_error('name', '<small class="text-danger">', '</small>'); ?>
        </div>
    </div>


    <div class="col-md-4">
        <div class="form-group">
            <label>NIK</label>
            <input type="text" name="nik" class="form-control" value="<?= $user['nik']; ?>" readonly>
            <?= form_error('nik', '<small class="text-danger">', '</small>'); ?>
        </div>
    </div>

</div>


<div class="row">

    <div class="col-md-4">
        <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" class="form-control" value="<?= $user['email']; ?>" readonly>
            <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
        </div>
    </div>


    <div class="col-md-4">
        <div class="form-group">
            <label>Alamat</label>
            <input type="text" name="address" class="form-control" value="<?= set_value('address') ?>" autocomplete="off">
            <?= form_error('address', '<small class="text-danger">', '</small>'); ?>
        </div>
    </div>

</div>



<!-- Start RT / RW -->

<div class="row">
    <div class="col-lg-2">
        <div class="form-group form-group-lg">
            <label>RT</label>
            <input type="number" name="rt" class="form-control" placeholder="RT" value="<?= set_value('rt') ?>">
            <?= form_error('rt', '<small class="text-danger">', '</small>'); ?>
        </div>
    </div>


    <div class="col-lg-2">
        <div class="form-group form-group-lg">
            <label>RW</label>
            <input type="number" name="rw" class="form-control" placeholder="RW" value="<?= set_value('rw') ?>">
            <?= form_error('rw', '<small class="text-danger">', '</small>'); ?>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="form-group">
            <label>No Telepon</label>
            <input type="text" name="no_telp" class="form-control" value="<?= set_value('no_telp') ?>">
            <?= form_error('no_telp', '<small class="text-danger">', '</small>'); ?>
        </div>
    </div>




</div>


<!-- End RT /RW -->







<div class="row">


    <div class="col-md-4">
        <label>Upload SKU</label>
        <div class="custom-file">
            <input type="file" class="custom-file-input" name="userfile[]" multiple="multiple">
            <label class="custom-file-label">Choose file</label>
            <!-- <small class="text-danger">Ext jpeg /jpg</small> -->
        </div>
    </div>


    <div class="col-md-4">
        <label>Upload KTP</label>
        <div class="custom-file">
            <input type="file" class="custom-file-input" name="userfile[]" multiple="multiple">
            <label class="custom-file-label">Choose file</label>
            <!-- <small class="text-danger">Ext jpeg /jpg</small> -->
        </div>
    </div>



</div>

<div class="row">

    <div class="col-md-4">
        <label>Upload KK</label>
        <div class="custom-file">
            <input type="file" class="custom-file-input" name="userfile[]" multiple="multiple">
            <label class="custom-file-label">Choose file</label>
            <!-- <small class="text-danger">Ext jpeg /jpg</small> -->
        </div>
    </div>




</div>









<div class="row">
    <div class="col-lg-8">
        <div class="form-group">
            <label>Deskripsi UMK</label>
            <textarea id="editor1" class="form-control" name="job_desc" id="exampleFormControlTextarea1" rows="3"><?= set_value('job_desc') ?></textarea>

            <script>
                var config = {
                    extraPlugins: 'codesnippet,colorbutton,colordialog,liststyle,table,tableresize,font',
                    codeSnippet_languages: {
                        html: 'HTML',
                        javascript: 'JavaScript',
                        php: 'PHP'

                    },
                    codeSnippet_theme: 'monokai_sublime',
                    height: 356,
                    colorButton_colors: 'CF5D4E,454545,FFF,CCC,DDD,CCEAEE,66AB16',
                    colorButton_enableAutomatic: false

                };
                CKEDITOR.replace('editor1', config);
            </script>

            <?= form_error('job_desc', '<small class="text-danger">', '</small>'); ?>
        </div>
    </div>
</div>


<div class="form-group row justify-content-start">
    <div class="col-sm-10">
        <button type="submit" class="btn btn-success">Save</button>
        <a href="<?= base_url('admin/pengajuan'); ?> "><button type="button" class="btn btn-danger">Back</button></a>
    </div>
</div>


</form>