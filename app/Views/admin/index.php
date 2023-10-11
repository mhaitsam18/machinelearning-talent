<?= $this->extend('layout/templates') ?>

<!-- title -->
<?= $this->Section('title') ?>
<title>User List &mdash; Team DPP</title>
<?= $this->endSection(); ?>

<!-- Content -->
<?= $this->Section('content') ?>
<!-- start list user -->
<section class="section mt-5">
    <div class="row gutters-sm">
        <div class="col-md-12 mb-3">
            <div class="row gutters-sm">
                <div class="col-sm-12 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <!-- <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2"></i>User List</h6> -->
                            <div class="row justify-content-between m-2 mb-5">
                                <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2"></i>List Pegawai</h6>
                                <div class="ml-3">
                                    <a href="<?= base_url('admin/create'); ?>" class="btn btn-outline-dark">Tambah Pegawai </a>
                                </div>
                            </div>
                            <!-- flashData -->
                            <?php if (session()->getFlashdata('success')) : ?>
                                <div class="alert alert-success alert-dismissible show fade m-3">
                                    <div class="alert-body">
                                        <button class="close" data-dismiss="alert">X</button>
                                        <b>Success !</b>
                                        <?= session()->getFlashdata('success'); ?>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <!-- csfr -->
                            <?php if (session()->getFlashdata('error')) : ?>
                                <div class="alert alert-danger alert-dismissible show fade m-3">
                                    <div class="alert-body">
                                        <button class="close" data-dismiss="alert">X</button>
                                        <b>Error !</b>
                                        <?= session()->getFlashdata('error'); ?>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <!-- csfr -->
                            <?php if (session()->getFlashdata('message')) : ?>
                                <div class="alert alert-warning alert-dismissible show fade m-3">
                                    <div class="alert-body">
                                        <button class="close" data-dismiss="alert">X</button>
                                        <b>Message !</b>
                                        <?= session()->getFlashdata('message'); ?>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <!-- table -->
                            <div class="table-responsive rounded">
                                <table class="table table-sm table-striped table-hover text-center" id="table1">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Status</th>
                                            <!-- <th>Action</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($user as $key => $users) : ?>
                                            <?php if ($users['role'] == 'user') : ?>
                                                <tr>
                                                    <td class="text-center"><?= $key; ?></td>
                                                    <td><?= $users['name']; ?></td>
                                                    <td><?= $users['username']; ?></td>
                                                    <td><?= $users['email']; ?></td>
                                                    <!-- <td><?php if ($users['deleted_at'] == null) : ?>
                                                            <div class="badge badge-info">Active</div>
                                                        <?php else : ?>
                                                            <div class="badge badge-warning">Not Active</div>
                                                        <?php endif; ?>
                                                    </td> -->
                                                    <td>
                                                        <?php if ($users['deleted_at'] == null) : ?>
                                                            <form action="<?= site_url('admin/delete/' . $users['id']); ?>" method="post" class="d-inline" id="del-<?= $users['id']; ?>">
                                                                <?= csrf_field() ?>
                                                                <input type="hidden" name="_method" value="DELETE">
                                                                <button class="btn btn-sm btn-info" data-confirm="Non Active User!! | Are you sure?" data-confirm-yes="submitDel(<?= $users['id']; ?>)">
                                                                    Active
                                                                </button>
                                                            </form>
                                                        <?php else : ?>
                                                            <a href="<?= base_url('admin/restore/' . $users['id']); ?>" class="btn btn-sm btn-success">Non avtive</a>
                                                        <?php endif; ?>
                                                    </td>
                                                </tr>
                                            <?php endif; ?>
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
</section>
<!-- end list user -->
<?= $this->endSection() ?>
<!-- end content -->