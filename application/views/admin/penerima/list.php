<div class="container">
    <!-- <div class="col-lg-5"> -->




    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <?php if ($this->session->flashdata('flash')) : ?>

    <?php endif; ?>




    <!-- </div> -->
</div>



<p>
    <a href="<?= base_url('admin/penerima/tambah') ?>" title="Add User" class="btn btn-success">
        <i class="fa fa-plus"></i>Tambah New</a>
</p>




<table id="example1" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>KK</th>
            <th>NIK</th>
            <th>Nama </th>

            <th>Bantuan</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Pekerjaan</th>
            <th>Tgl Penerima</th>
            <th width="20%">Action</th>
        </tr>
    </thead>
    <tbody>

        <?php $i = 1;
        foreach ($user as $user) { ?>



            <tr>
                <td><?= $i ?></td>

                <td><?= $user['kk']; ?></td>
                <td><?= $user['nik']; ?></td>
                <td><?= $user['nama_penerima']; ?></td>
                <td><?= $user['nama_bantuan']; ?></td>
                <td><?= $user['alamat']; ?></td>
                <td><?= $user['jk']; ?></td>
                <td><?= $user['pekerjaan']; ?></td>
                <td><?= $user['tgl_penerima']; ?></td>





                <td>


                    <a href="<?= base_url('admin/penerima/edit/') . $user['id_penerima']; ?>" title="Edit User" class="btn btn-warning btn-sm">
                        <i class="fa fa-edit"></i>Edit</a>

                    <a href="<?= base_url('admin/penerima/delete/') . $user['id_penerima']; ?>" class="btn btn-danger btn-sm tombol-hapus">
                        <i class="fa fa-trash"></i> Delete</a>







                </td>
            </tr>



        <?php $i++;
        } ?>
    </tbody>

</table>