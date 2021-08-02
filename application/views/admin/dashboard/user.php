<div class="row">
    <div class="col-lg-6">

        <?= $this->session->flashdata('sukses'); ?>

        <div class="alert font-weight-bold" style="background-color: #07de92;; color:white" role="alert">Welcome, <?= $user['name']; ?> !</div>

        <div class="card mb-3">
            <div class="row no-gutters">
                <div class="col-md-4 col-4">
                    <img src="<?= base_url('assets/image/profile/thumbs/') . $user['image']; ?>" class="img-thumbnail" alt="..." style="width: 150px;">
                </div>
                <div class="col-md-8 col-8">
                    <div class="card-body">
                        <h5 class="card-title text-success"><?= $user['nik']; ?></h5>
                        <p class="card-text"><?= $user['email']; ?></p>
                        <p class="card-text"><small class="text-muted">Created on <?= date('d F Y,H:i T', strtotime($user['date_created'])); ?></small></p>
                    </div>
                </div>
            </div>
        </div>



    </div>
</div>