<?php

$akses = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();

?>

<div class="row">
    <div class="col-lg-6">

        <?php

        if (isset($error_upload)) {
            echo '<div class="alert alert-warning">' . $error_upload . '</div>';
        }
        ?>


    </div>
</div>

<?= form_open_multipart('admin/pengajuan/detail'); ?>

<div class="row">

    <div class="col-md-4">

        <label>Full Name</label>
        <div class="card">
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><?= $user['name']; ?> </li>
            </ul>
        </div>

    </div>




    <div class="col-md-4">
        <div class="form-group">
            <label>NIK</label>
            <div class="card">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><?= $user['nik']; ?> </li>
                </ul>
            </div>
        </div>
    </div>

</div>


<div class="row">

    <div class="col-md-4">
        <div class="form-group">
            <label>Email</label>
            <div class="card">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><?= $user['email']; ?> </li>
                </ul>
            </div>
        </div>
    </div>


    <div class="col-md-4">
        <div class="form-group">
            <label>Alamat</label>
            <div class="card">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><?= $user['address']; ?> </li>
                </ul>
            </div>
        </div>
    </div>

</div>



<div class="row">
    <div class="col-md-4">


        <!-- <img src="<?= base_url('assets/image/pengajuan/') . $user['nama_berkas']; ?>" class="rounded img-thumbnail" style="width:24rem;height:16rem" alt="..."> -->

        <div class="form-group">
            <label>SKU</label>
            <div class="card">
                <ul class="list-group list-group-flush">
                    <img src="<?= base_url('assets/image/pengajuan/') . $user['image']; ?>" height="400px" class=""></a></l>
                </ul>
            </div>
        </div>
    </div>



    <div class="col-md-4">

        <div class="form-group">
            <label>No Telepon</label>
            <div class="card">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><?= $user['no_telp']; ?> </li>
                </ul>
            </div>
        </div>
    </div>

</div>






<!-- IMAGE2 -->


<div class="row">
    <div class="col-md-4">




        <div class="form-group">
            <label>KTP</label>
            <div class="card">
                <ul class="list-group list-group-flush">
                    <img src="<?= base_url('assets/image/pengajuan/') . $user['image2']; ?>" height="400px" class=""></a></l>
                </ul>
            </div>
        </div>
    </div>


    <div class="col-md-4">




        <div class="form-group">
            <label>KK</label>
            <div class="card">
                <ul class="list-group list-group-flush">
                    <img src="<?= base_url('assets/image/pengajuan/') . $user['image3']; ?>" height="400px" class=""></a></l>
                </ul>
            </div>
        </div>
    </div>





</div>


<!-- END IMAGE2 -->





<div class="row">

    <div class="col-md-4">

        <div class="form-group">
            <label>RW</label>
            <div class="card">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><?= $user['rt']; ?> </li>
                </ul>
            </div>
        </div>
    </div>


    <div class="col-md-4">

        <div class="form-group">
            <label>RW</label>
            <div class="card">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><?= $user['rw']; ?> </li>
                </ul>
            </div>
        </div>
    </div>

</div>





<div class="row mt-2">
    <div class="col-lg-8">
        <div class="form-group">
            <label>Deskripsi UMKM</label>
            <div class="card">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><?= $user['job_desc']; ?></li>
                </ul>
            </div>

        </div>
    </div>
</div>

<?php if ($user['komentar'] == true) { ?>

    <div class="row mt-2">
        <div class="col-lg-8">
            <div class="form-group">
                <label>Keterangan Ditolak</label>
                <div class="card">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><?= $user['komentar']; ?></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

<?php } ?>




<div class="form-group row justify-content-start">
    <div class="col-sm-10">

        <?php if ($akses['role_id'] == 1) { ?>

            <!-- Modal Accept -->

            <!-- Button trigger modal -->

            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModalCenter"> <i class="fa fa-check"></i>
                Accept
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content ">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Confirmation</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Are you sure to <span class="text-success font-weight-bold">accept</span> this user ?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>


                            <a href="<?= base_url('admin/pengajuan/verify/') . $user['id_pengajuan']; ?>" class="btn btn-success">Yes</a>


                        </div>
                    </div>
                </div>
            </div>

            <!-- End modal Accept-->






            <!-- Start Modal Reject -->


            <a href="<?= base_url('admin/pengajuan/komentar/') . $user['id_pengajuan']; ?>" class="btn btn-sm btn-danger">Reject</a>


            <!--End Modal reject  -->

        <?php } ?>
        <a href="<?= base_url('admin/pengajuan/akses'); ?> "><button type="button" class="btn btn-sm btn-warning">Back ...</button></a>
    </div>
</div>


</form>