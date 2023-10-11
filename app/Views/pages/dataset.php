<?= $this->extend('layout/templates') ?>

<!-- title -->
<?= $this->Section('title') ?>
<title>Dataset &mdash; Team DPP</title>
<?= $this->endSection(); ?>

<!-- content -->
<?= $this->Section('content') ?>
<section class="section mt-5">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <!-- title -->
                    <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2"></i>Dataset</h6>
                    <p>Halaman ini berisi tentang data yang telah diunggah.</p>
                    <!-- flash data -->
                    <?php if (session()->getFlashdata('message')) : ?>
                        <div class="alert alert-warning alert-dismissible show fade m-3">
                            <div class="alert-body">
                                <button class="close" data-dismiss="alert">X</button>
                                <b>Message !</b>
                                <?= session()->getFlashdata('message'); ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover text-center" id="table1">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama File</th>
                                    <th scope="col">Unggah oleh</th>
                                    <th scope="col">Dibuat tanggal</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($berkas as $key => $value) : ?>
                                    <tr>
                                        <td class="text-center"><?= $key + 1; ?></td>
                                        <td><?= $value->file ?></td>
                                        <td><?= $value->user; ?></td>
                                        <td><?= $value->create; ?></td>
                                        <td>
                                            <a href="<?= base_url('dataset/download/' . $value->idp); ?>" class="btn btn-sm btn-success"><i class="fas fa-download"></i></a>
                                            <form action="<?= site_url('dataset/delete/' . $value->idp); ?>" method="post" class="d-inline" id="del-<?= $value->idp; ?>">
                                                <?= csrf_field() ?>
                                                <input type="hidden" name="_method" value="DELETE">
                                                <button class="btn btn-sm btn-danger" data-confirm="Delete Data!! | Are you sure!" data-confirm-yes="submitDel(<?= $value->idp; ?>)"><i class="fas fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
</section>
<?= $this->endSection() ?>
<!-- end Content -->