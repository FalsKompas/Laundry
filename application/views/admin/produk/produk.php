<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>LaundryBARBAR</title>

    <!-- Fontfaces CSS-->
    <link href="<?php echo base_url(); ?>assets/css/font-face.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>assets/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?php echo base_url(); ?>assets/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?php echo base_url(); ?>assets/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>assets/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>assets/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>assets/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>assets/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>assets/vendor/vector-map/jqvmap.min.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?php echo base_url(); ?>assets/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar2">
            <div class="logo">
                <a href="#">
                    <img src="<?php echo base_url(); ?>assets/images/icon/logo-white.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar2__content js-scrollbar1">
                <div class="account2">
                    <div class="image img-cir img-120">
                        <img align="center" src="<?php echo base_url() ?>assets/images/<?php echo $this->session->userdata('gambar'); ?>" width="150" height="50">
                    </div>
                    <h4 class="name" style="font-size: 20px;" align="center"><?php echo $this->session->userdata('nama'); ?></h4>
                    <a style="color: black;" href="<?= site_url('C_login/logout'); ?>">Sign out</a>
                    <div style="margin-top: 30px;">
                    <i style="color: black;"><?php echo date('D, d M Y'); ?></i>
                </div>
                </div>
                <nav class="navbar-sidebar2">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a href="<?= site_url('C_login/admin'); ?>">
                                <i class="fas fa-tachometer-alt"></i>Dashboard
                            </a>
                        </li>
                        <li>
                            <a href="<?= site_url('admin/pindah/order'); ?>">
                                <i class="fas fa-dollar"></i>Order
                            </a>
                        </li>
                        <li>
                            <a href="<?= site_url('admin/pindah/transaksi'); ?>">
                                <i class="fas fa-dollar"></i>Transaksi
                            </a>
                        </li>
                        <li>
                            <a href="<?= site_url('admin/pindah/Produkcucian'); ?>">
                                <i class="fas fa-shopping-basket"></i>Produk/Paket Cucian</a>
                        </li>
                        <li>
                            <a href="<?= site_url('admin/pindah/outlet'); ?>">
                                <i class="fas fa-building"></i>Outlet
                            </a>
                        </li>
                        <li>
                            <a href="<?= site_url('admin/pindah/member'); ?>">
                                <i class="fas fa-users"></i>Member
                            </a>
                        </li>
                        <li>
                            <a href="<?= site_url('admin/pindah/pengguna'); ?>">
                                <i class="fas fa-users"></i>Pengguna
                            </a>
                        </li>
                        <li>
                            <a href="<?= site_url('admin/pindah/laporan'); ?>">
                                <i class="fas fa-copy"></i>Management Laporan
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container2">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop2">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap2">
                            <div class="logo d-block d-lg-none">
                                <a href="#">
                                    <img src="<?php echo base_url(); ?>assets/images/icon/logo-white.png" alt="CoolAdmin" />
                                </a>
                            </div>
                            <div class="header-button2">
                                <div class="header-button-item js-item-menu">
                                    <i class="zmdi zmdi-search"></i>
                                    <div class="search-dropdown js-dropdown">
                                        <form action="">
                                            <input class="au-input au-input--full au-input--h65" type="text" placeholder="Search for datas &amp; reports..." />
                                            <span class="search-dropdown__icon">
                                                <i class="zmdi zmdi-search"></i>
                                            </span>
                                        </form>
                                    </div>
                                </div>
                                <div class="header-button-item has-noti js-item-menu">
                                    <i class="zmdi zmdi-notifications"></i>
                                    <div class="notifi-dropdown js-dropdown">
                                        <div class="notifi__title">
                                            <p>You have 3 Notifications</p>
                                        </div>
                                        <div class="notifi__item">
                                            <div class="bg-c1 img-cir img-40">
                                                <i class="zmdi zmdi-email-open"></i>
                                            </div>
                                            <div class="content">
                                                <p>You got a email notification</p>
                                                <span class="date">April 12, 2018 06:50</span>
                                            </div>
                                        </div>
                                        <div class="notifi__item">
                                            <div class="bg-c2 img-cir img-40">
                                                <i class="zmdi zmdi-account-box"></i>
                                            </div>
                                            <div class="content">
                                                <p>Your account has been blocked</p>
                                                <span class="date">April 12, 2018 06:50</span>
                                            </div>
                                        </div>
                                        <div class="notifi__item">
                                            <div class="bg-c3 img-cir img-40">
                                                <i class="zmdi zmdi-file-text"></i>
                                            </div>
                                            <div class="content">
                                                <p>You got a new file</p>
                                                <span class="date">April 12, 2018 06:50</span>
                                            </div>
                                        </div>
                                        <div class="notifi__footer">
                                            <a href="#">All notifications</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="header-button-item mr-0 js-sidebar-btn">
                                    <i class="zmdi zmdi-menu"></i>
                                </div>
                                <div class="setting-menu js-right-sidebar d-none d-lg-block">
                                    <div class="account-dropdown__body">
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-account"></i>Account</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-settings"></i>Setting</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-money-box"></i>Billing</a>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__body">
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-globe"></i>Language</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-pin"></i>Location</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-email"></i>Email</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-notifications"></i>Notifications</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- END HEADER DESKTOP-->

            <!-- BREADCRUMB-->
            <section class="au-breadcrumb m-t-75">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <?php echo $this->session->flashdata('flash'); ?>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="au-breadcrumb-content">
                                    <div class="au-breadcrumb-left">
                                        <span class="au-breadcrumb-span">You are here:</span>
                                        <ul class="list-unstyled list-inline au-breadcrumb__list">
                                            <li class="list-inline-item active">
                                                <a href="<?= site_url('C_login/admin'); ?>">Home</a>
                                            </li>
                                            <li class="list-inline-item seprate">
                                                <span>/</span>
                                            </li>
                                            <li class="list-inline-item">Dashboard</li>
                                        </ul>
                                    </div>
                                    <a href="<?= site_url('admin/pindah/addproduk') ?>">
                                        <button class="btn btn-success">
                                            <i class="zmdi zmdi-plus"></i>
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END BREADCRUMB-->

            <!-- STATISTIC-->
            <!-- MAIN CONTENT-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive table--no-card m-b-30" style="margin-top: 10px;">
                            <table class="table table-borderless table-striped" style="background-color: #4272d7;">
                                        <thead style="color: white;">
                                            <tr>
                                                <th>No</th>
                                                <th>Id Paket</th>
                                                <th>Id Outlet</th>
                                                <th>Jenis</th>
                                                <th>Nama Paket</th>
                                                <th>Harga Paket</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                $no = 1;
                                                foreach ($getproduk as $get) { ?>
                                                    <tr>
                                                        <td><?php echo $no++ ?></td>
                                                        <td><?php echo $get->id_paket ?></td>
                                                        <td><?php echo $get->id_outlet ?></td>
                                                        <td><?php echo $get->jenis ?></td>
                                                        <td><?php echo $get->nama_paket ?></td>
                                                        <td>Rp.<?php echo $get->harga ?></td>
                                                        <td>
                                                            <a href="<?= site_url('admin/pindah/editproduk/'.$get->id_paket) ?>" class="btn btn-success"><i class="fa fa-edit"></i></a>
                                                            <a href="<?= site_url('admin/crud/hapus_produk/'.$get->id_paket) ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                                        </td>
                                                    </tr>
                                            <?php
                                                }
                                             ?>
                                        </tbody>
                                    </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END STATISTIC-->

            <section>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="<?php echo base_url(); ?>assets/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="<?php echo base_url(); ?>assets/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="<?php echo base_url(); ?>assets/vendor/slick/slick.min.js">
    </script>
    <script src="<?php echo base_url(); ?>assets/vendor/wow/wow.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/animsition/animsition.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="<?php echo base_url(); ?>assets/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="<?php echo base_url(); ?>assets/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/select2/select2.min.js">
    </script>
    <script src="<?php echo base_url(); ?>assets/vendor/vector-map/jquery.vmap.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/vector-map/jquery.vmap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/vector-map/jquery.vmap.world.js"></script>
    <script scr="<?php echo base_url(); ?>assets/js/sweetalert2.all.min.js"></script>
    <script src="<?= base_url() ?>assets/js/myscript.js"></script>
    <!-- Main JS-->
    <script src="<?php echo base_url(); ?>assets/js/main.js"></script>

</body>

</html>