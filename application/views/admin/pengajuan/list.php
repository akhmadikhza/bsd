<div class="row">
    <div class="col-lg-5">


        <?= $this->session->flashdata('sukses'); ?>


    </div>
</div>



<p>
    <a href="<?= base_url('admin/pengajuan/tambah') ?>" title="Add Bantuan" class="btn btn-success">
        <i class="fa fa-plus"></i>Add New</a>
</p>




<table id="example2" class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>Nama</th>
            <!-- <th>Image</th> -->
            <th>NIK</th>
            <th>Email </th>
            <th>Alamat</th>
            <th>Rt</th>
            <th>Rw</th>
            <th>Status</th>
            <th width="20%">Action</th>
        </tr>
    </thead>
    <tbody>



        <?php
        foreach ($user as $user) { ?>
            <?php if ($this->session->userdata('id_user') == $user['id_user']) { ?>
                <tr>


                    <td><?= $user['name']; ?></td>
                    <!-- <td><img src="<?= base_url('assets/image/pengajuan/') . $user['image']; ?>" width="60" class="img img-thumbnail"></td> -->
                    <td><?= $user['nik']; ?></td>
                    <td><?= $user['email']; ?></td>
                    <td><?= $user['address']; ?></td>
                    <td><?= $user['rt']; ?></td>
                    <td><?= $user['rw']; ?></td>

                    <td><?php if ($user['status'] == "Accepted") : ?>

                            <div class="badge badge-success p-2" role="alert">Accepted</div>
                    </td>

                <?php elseif ($user['status'] == "Pending") : ?>
                    <div class="badge badge-warning p-2" role="alert">Pending</div>

                <?php elseif ($user['status'] == "Process") : ?>
                    <div class="badge badge-primary p-2" role="alert">Process</div>

                <?php else : ?>

                    <div class="badge badge-danger p-2" role="alert">Rejected</div>



                <?php endif ?>


                <td>

                    <form action="<?= base_url('hapus/') . $user['id_pengajuan']; ?>" method="post">

                        <a href="<?= base_url('admin/pengajuan/detail/') . $user['id_pengajuan']; ?>" title="Detail User" class="btn btn-success btn-sm">
                            <i class="fa fa-edit"></i> Detail</a>

                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item?');">
                            <i class="fa fa-trash"></i>Delete</button>
                    </form>




                </td>
                </tr>



            <?php } ?>

        <?php } ?>
    </tbody>

</table>