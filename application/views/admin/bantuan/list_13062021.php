<div class="row">
    <div class="col-lg-6">
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
        <?php


        // if ($this->session->flashdata('sukses')) {

        //     echo $this->session->flashdata('sukses');
        // }


        echo validation_errors('<div class="alert alert-warning">', '</div>');

        include('tambah.php');
        ?>

    </div>
</div>

<hr>



<table id="example1" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Bantuan</th>

            <th>Slug Bantuan</th>
            <th>Urutan</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>

        <?php $i = 1;
        foreach ($bantuan as $bantuan) { ?>



            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $bantuan['nama_bantuan'] ?></td>

                <td><?php echo $bantuan['slug_bantuan'] ?></td>
                <td><?php echo $bantuan['urutan'] ?></td>


                <td>

                    <a href="<?= base_url('admin/bantuan/edit/') . $bantuan['id_bantuan']; ?>" title="Edit User" class="btn btn-warning btn-sm">
                        <i class="fa fa-edit"></i>Edit</a>

                    <?php
                    include 'delete.php'
                    ?>


                </td>
            </tr>



        <?php $i++;
        } ?>
    </tbody>

</table>