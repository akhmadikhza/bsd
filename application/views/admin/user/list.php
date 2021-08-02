<div class="row">
  <div class="col-lg-5">
    <?php
    if ($this->session->flashdata('sukses')) {
      echo '<div class="alert alert-success">';
      echo $this->session->flashdata('sukses');
      echo '</div>';
    }
    ?>
  </div>
</div>








<table id="example1" class="table table-bordered table-striped">
  <thead>
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Role ID </th>
      <th>Is Active </th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>

    <?php $i = 1;
    foreach ($user as $user) { ?>



      <tr>
        <td><?= $i ?></td>

        <td><?= $user['name']; ?></td>
        <td><?= $user['email']; ?></td>
        <!-- <td><span class="badge badge-success p-2"><?= $user['email']; ?></span></td> -->


        <td><?php if ($user['role_id'] == 1) { ?>
            <div class="badge badge-danger p-2" role="alert">Administrator</div>

        </td>

      <?php } else {
              echo '<div class="badge badge-success p-2" role="alert">User</div>';
            } ?>

      <td><?= $user['is_active']; ?></td>
      <td>


        <a href="<?= base_url('admin/user_list/edit/') . $user['id_user']; ?>" title="Edit User" class="btn btn-warning btn-sm">
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