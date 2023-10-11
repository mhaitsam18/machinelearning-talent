<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">

    <!-- title -->
    <?= $this->renderSection('title'); ?>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="<?= base_url() ?>/template/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/template/node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/template/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/template/node_modules/bootstrap-social/bootstrap-social.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2.0/dist/css/adminlte.min.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/template/assets/css/style.css">
    <!-- <link rel="stylesheet" href="<?= base_url() ?>/template/assets/css/custom.css"> -->
    <link rel="stylesheet" href="<?= base_url() ?>/template/assets/css/components.css">
    <!-- 
    <style>
        #load {
            width: 30%;
            height: 50%;
            position: fixed;
            text-indent: 100%;
            background: #Fff url('/assets/loading2.gif') no-repeat center;
            /* margin-top: -1%; */
            box-shadow: -1px 2px 20px 4px #888888;
            margin: 5px 5px 5px 280px;
            border-radius: 10%;
            z-index: 1;
            /* opacity: 0.5; */
        }
    </style> -->
</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                    </ul>
                </form>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown"><a href="/" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="<?= base_url('/assets/image/' . userLogin()->profile); ?>" class="rounded-circle mr-1">
                            <div class="d-sm-none d-lg-inline-block ">Hi, <?= userLogin()->username ?></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-title">Online</div>

                            <a href="<?= base_url('profile') ?>" class="dropdown-item has-icon" required>
                                <i class="far fa-user"></i> Profile
                            </a>

                            <div class="dropdown-divider"></div>
                            <a href="<?= site_url('logout'); ?>" class="dropdown-item has-icon text-danger" id="logout" data-confirm="Logout!! | Are you sure?" data-confirm-yes="returnLogout()">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <!-- end Narbar -->

            <!-- Sidebar -->
            <div class="main-sidebar sidebar-style-2 " id="sidebar">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand mt-4 mb-4">
                        <a href="<?= base_url('/pages') ?>"><img src="<?= base_url('/template/assets/img/logo.png') ?>" alt="" width="180"></a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="<?= base_url('/pages') ?>"><img src="<?= base_url('/template/assets/img/ll.png') ?>" alt="" width="36"></a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">Menu</li>
                        <li class="dropdown">
                            <a href="<?= base_url('/dashboard') ?>" class="nav-link"><i class="fas fa-palette"></i><span>Dashboard</span></a>
                        </li>

                        <li class="dropdown">
                            <a href="<?= base_url('/predict') ?>" class="nav-link"><i class="fas fa-barcode"></i> <span>Predict</span></a>
                        </li>

                        <li class="dropdown">
                            <a href="/" class="nav-link has-dropdown"><i class="fas fa-columns"></i> <span>Data Test</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="<?= base_url('/templates') ?>">Template</a></li>
                                <li><a class="nav-link" href="<?= base_url('/dataset') ?>">Data Test</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="<?= base_url('history') ?>" class="nav-link"><i class="fas fa-ellipsis-h"></i> <span>History Predict</span></a>
                        </li>
                        <!-- can access by admin -->
                        <?php if (userLogin()->role == 'admin') : ?>
                            <li class="menu-header">Admin</li>
                            <li class="dropdown">
                                <a href="<?= base_url('models') ?>" class="nav-link"><i class="fas fa-file"></i> <span>Models</span></a>
                            </li>
                            <li class="dropdown">
                                <a href="<?= base_url('admin') ?>" class="nav-link"><i class="fas fa-users"></i> <span>User</span></a>
                            </li>
                        <?php endif; ?>
                        <!-- book -->
                        <li class="menu-header">Book</li>
                        <li><a class="nav-link" href="<?= base_url('/pages/documentation') ?>"><i class="fas fa-pencil-ruler"></i> <span>Documentation</span></a></li>
                    </ul>
                </aside>
            </div>
            <!-- end Sidebar -->

            <!-- Main Content -->
            <div class="main-content">
                <?= $this->renderSection('content'); ?>
            </div>
            <!-- end Content -->

            <!-- Footer -->
            <footer class="main-footer">
                <div class="footer text-center  ">
                    &copy; <?= date('Y') ?> SDM Telkom University
                </div>
            </footer>
            <!-- end Footer -->
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="<?= base_url() ?>/template/node_modules/jquery/dist/jquery.min.js"></script>
    <script src="<?= base_url() ?>/template/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>/template/node_modules/jquery.nicescroll/dist/jquery.nicescroll.min.js"></script>
    <script src="<?= base_url() ?>/template/node_modules/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>/template/node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>/template/node_modules/chart.js/dist/Chart.bundle.min.js"></script>

    <!-- Template JS File -->
    <script src="<?= base_url() ?>/template/assets/js/stisla.js"></script>
    <script src="<?= base_url() ?>/template/assets/js/scripts.js"></script>
    <script src="<?= base_url() ?>/template/assets/js/custom.js"></script>
    <!-- <script>
        $(document).ready(function() {
            $("#load").fadeOut();
        });
    </script> -->
</body>

</html>