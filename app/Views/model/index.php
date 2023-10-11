<?= $this->extend('layout/templates') ?>

<!-- title -->
<?= $this->Section('title') ?>
<title>List Model &mdash; Team DPP</title>
<?= $this->endSection(); ?>

<!-- Content -->
<?= $this->Section('content') ?>
<!-- start list user -->
<section class="section mt-5">
    <div class="row gutters-sm">
        <div class="col-md-12 mb-3">
            <div class="row gutters-sm">
                <div class="col-sm-12 mb-3">
                    <div class="card">
                        <div class="card-body">

                            <div class="row justify-content-between m-2 mb-5">
                                <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2"></i>List Model</h6>
                                <div class="ml-3">
                                    <a href="<?= base_url('model/new'); ?>" class="btn btn-outline-dark">Add New Model</a>
                                </div>
                            </div>
                            <div class="table-responsive rounded">
                                <?php if (session()->getFlashdata('seccess')) : ?>
                                    <div class="alert alert-success alert-dismissible show fade m-3">
                                        <div class="alert-body">
                                            <button class="close" data-dismiss="alert">X</button>
                                            <b>Message !</b>
                                            <?= session()->getFlashdata('seccess'); ?>
                                        </div>
                                    </div>
                                <?php endif; ?>
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
                                    <table class="table table-sm table-striped table-hover text-center" id="table1">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>No</th>
                                                <th>Name</th>
                                                <th>Type</th>
                                                <th>Created at</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($models as $key => $value) : ?>
                                                <tr>
                                                    <td class="text-center"><?= $key + 1; ?></td>
                                                    <td><?= $value->name; ?></td>
                                                    <td><?= $value->type; ?></td>
                                                    <td><?= $value->created_at; ?></td>
                                                    <td>
                                                        <form action="<?= site_url('models/' . $value->id); ?>" method="post" class="d-inline" id="del-<?= $value->id; ?>">
                                                            <?= csrf_field() ?>
                                                            <input type="hidden" name="_method" value="DELETE">
                                                            <button class="btn btn-sm btn-danger" data-confirm="Delete Save Model!! | Are you sure!" data-confirm-yes="submitDel(<?= $value->id; ?>)">Delete</i></button>
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
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end list user -->
<?= $this->endSection() ?>
<!-- end content -->