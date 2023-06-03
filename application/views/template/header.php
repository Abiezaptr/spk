<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title><?= $title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="<?= base_url('assets') ?>/images/favicon.ico">

    <!-- Daterangepicker css -->
    <link rel="stylesheet" href="<?= base_url('assets') ?>/vendor/daterangepicker/daterangepicker.css">

    <!-- Vector Map css -->
    <link rel="stylesheet" href="<?= base_url('assets') ?>/vendor/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css">

    <!-- Theme Config Js -->
    <script src="<?= base_url('assets') ?>/js/hyper-config.js"></script>

    <!-- App css -->
    <link href="<?= base_url('assets') ?>/css/app-saas.min.css" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="<?= base_url('assets') ?>/css/icons.min.css" rel="stylesheet" type="text/css" />

    <!-- Datatables css -->
    <link href="<?= base_url('assets') ?>/vendor/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assets') ?>/vendor/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assets') ?>/vendor/datatables.net-fixedcolumns-bs5/css/fixedColumns.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assets') ?>/vendor/datatables.net-fixedheader-bs5/css/fixedHeader.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assets') ?>/vendor/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assets') ?>/vendor/datatables.net-select-bs5/css/select.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <!-- Chart.js -->
    <script src="<?= base_url('assets') ?>/vendor/chart.js/chart.min.js"></script>

    <!-- Chart.js Bar Demo js -->
    <script src="<?= base_url('assets') ?>/js/pages/demo.chartjs-bar.js"></script>
</head>

<style>
    .table-responsive {
        overflow-x: auto;
    }
</style>


<body>
    <!-- Begin page -->
    <div class="wrapper">


        <!-- ========== Topbar Start ========== -->
        <div class="navbar-custom">
            <div class="topbar container-fluid">
                <div class="d-flex align-items-center gap-lg-2 gap-1">

                    <!-- Topbar Brand Logo -->
                    <div class="logo-topbar">
                        <!-- Logo light -->
                        <a href="index.html" class="logo-light">
                            <span class="logo-lg">
                                <img src="<?= base_url('assets') ?>/images/logo.png" alt="logo">
                            </span>
                            <span class="logo-sm">
                                <img src="<?= base_url('assets') ?>/images/logo-sm.png" alt="small logo">
                            </span>
                        </a>

                        <!-- Logo Dark -->
                        <a href="index.html" class="logo-dark">
                            <span class="logo-lg">
                                <img src="<?= base_url('assets') ?>/images/logo-dark.png" alt="dark logo">
                            </span>
                            <span class="logo-sm">
                                <img src="<?= base_url('assets') ?>/images/logo-dark-sm.png" alt="small logo">
                            </span>
                        </a>
                    </div>

                    <!-- Sidebar Menu Toggle Button -->
                    <button class="button-toggle-menu">
                        <i class="mdi mdi-menu"></i>
                    </button>

                    <!-- Horizontal Menu Toggle Button -->
                    <button class="navbar-toggle" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </button>
                </div>

                <ul class="topbar-menu d-flex align-items-center gap-3">

                    <li class="d-none d-sm-inline-block">
                        <a class="nav-link" data-bs-toggle="offcanvas" href="#theme-settings-offcanvas">
                            <i class="ri-settings-3-line font-22"></i>
                        </a>
                    </li>

                    <li class="d-none d-sm-inline-block">
                        <div class="nav-link" id="light-dark-mode" data-bs-toggle="tooltip" data-bs-placement="left" title="Theme Mode">
                            <i class="ri-moon-line font-22"></i>
                        </div>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link dropdown-toggle arrow-none nav-user px-2" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <span class="account-user-avatar">
                                <img src="<?= base_url('assets/prof.svg') ?>" alt="user-image" width="32" class="rounded-circle">
                            </span>
                            <span class="d-lg-flex flex-column gap-1 d-none">
                                <h5 class="my-0"><?= $admin['nama']; ?></h5>
                                <h6 class="my-0 fw-normal"><?= $admin['email']; ?></h6>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated profile-dropdown">


                            <!-- item-->
                            <a href="<?= site_url('auth/logout') ?>" class="dropdown-item">
                                <i class="mdi mdi-logout me-1"></i>
                                <span>Logout</span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- ========== Topbar End ========== -->

        <!-- ========== Left Sidebar Start ========== -->
        <div class="leftside-menu">

            <!-- Brand Logo Light -->
            <a href="index.html" class="logo logo-light">
                <span class="logo-lg">
                    <img src="<?= base_url('assets') ?>/images/logo.png" alt="logo">
                </span>
                <span class="logo-sm">
                    <img src="<?= base_url('assets') ?>/images/logo-sm.png" alt="small logo">
                </span>
            </a>

            <!-- Brand Logo Dark -->
            <a href="index.html" class="logo logo-dark">
                <span class="logo-lg">
                    <img src="<?= base_url('assets') ?>/images/logo-dark.png" alt="dark logo">
                </span>
                <span class="logo-sm">
                    <img src="<?= base_url('assets') ?>/images/logo-dark-sm.png" alt="small logo">
                </span>
            </a>

            <!-- Sidebar Hover Menu Toggle Button -->
            <div class="button-sm-hover" data-bs-toggle="tooltip" data-bs-placement="right" title="Show Full Sidebar">
                <i class="ri-checkbox-blank-circle-line align-middle"></i>
            </div>

            <!-- Full Sidebar Menu Close Button -->
            <div class="button-close-fullsidebar">
                <i class="ri-close-fill align-middle"></i>
            </div>

            <!-- Sidebar -left -->
            <div class="h-100" id="leftside-menu-container" data-simplebar>
                <!-- Leftbar User -->
                <div class="leftbar-user">
                    <a href="pages-profile.html">
                        <img src="<?= base_url('assets') ?>/images/users/avatar-1.jpg" alt="user-image" height="42" class="rounded-circle shadow-sm">
                        <span class="leftbar-user-name mt-2">Dominic Keller</span>
                    </a>
                </div>

                <!--- Sidemenu -->
                <ul class="side-nav">

                    <li class="side-nav-title">Main Navigation</li>

                    <li class="side-nav-item <?php if ($position == 'Halaman Utama') { ?> active <?php } ?>">
                        <a href="<?= base_url('admin') ?>" aria-expanded="false" class="side-nav-link">
                            <i class="uil uil-tachometer-fast"></i>
                            <span class="badge bg-danger text-white float-end">New</span>
                            <span> Dashboards </span>
                        </a>
                    </li>

                    <li class="side-nav-item <?php if ($position == 'Karyawan') { ?> active <?php } ?>">
                        <a href="<?= base_url('karyawan') ?>" class="side-nav-link">
                            <i class="uil-user"></i>
                            <span> Employment List </span>
                        </a>
                    </li>

                    <?php if ($admin['akses'] == "Administrator") { ?>
                        <li class="side-nav-item <?php if ($position == 'Pengguna') { ?> active <?php } ?>">
                            <a href="<?= base_url('admin/pengguna') ?>" class="side-nav-link">
                                <i class="uil-comments-alt"></i>
                                <span> User Management </span>
                            </a>
                        </li>

                        <li class="side-nav-item <?php if ($position == 'Periode') { ?> active <?php } ?>">
                            <a href="<?= base_url('periode') ?>" class="side-nav-link">
                                <i class="uil-rss"></i>
                                <span> Appraisal Period </span>
                            </a>
                        </li>

                        <li class="side-nav-item <?php if ($position == 'Kriteria') { ?> active <?php } ?>">
                            <a href="<?= base_url('kriteria') ?>" class="side-nav-link">
                                <i class="uil-folder-plus"></i>
                                <span> Assessment Criteria </span>
                            </a>
                        </li>

                        <li class="side-nav-item <?php if ($position == 'Alternatif') { ?> active <?php } ?>">
                            <a href="<?= base_url('alternatif') ?>" class="side-nav-link">
                                <i class="uil-globe"></i>
                                <span> Alternative Assessment </span>
                            </a>
                        </li>

                    <?php } ?>

                    <li class="side-nav-item <?php if ($position == 'Nilai') { ?> active <?php } ?>">
                        <a href="<?= base_url('nilai') ?>" class="side-nav-link">
                            <i class="uil-clipboard-alt"></i>
                            <span> Employee Assessment </span>
                        </a>
                    </li>



                </ul>
                <!--- End Sidemenu -->

                <div class="clearfix"></div>
            </div>
        </div>
        <!-- ========== Left Sidebar End ========== -->