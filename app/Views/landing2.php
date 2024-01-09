<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layout Default - Mazer Admin Dashboard</title>
    
    <link rel="stylesheet" href="<?php echo base_url('assets/css/main/app.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/main/app-dark.css') ?>">
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header position-relative">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="theme-toggle d-flex gap-2  align-items-center mt-2">
                            <div class="form-check form-switch fs-6">
                                <input class="form-check-input  me-0" id="toggle-dark" type="hidden">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-item"><a href="<?php echo base_url('') ?>" class='sidebar-link'><i class="bi bi-grid-fill"></i><span>Dashboard</span></a>
                        </li>

                        <li class="sidebar-item has-sub"><a href="#" class='sidebar-link'><i class="bi bi-cloud-arrow-up-fill"></i><span>Peminjaman</span></a>
                            <ul class="submenu ">
                                <li class="submenu-item "><a href="<?php echo base_url('') ?>">Verifikasi</a></li>
                                <li class="submenu-item "><a href="<?php echo base_url('') ?>">Laporan</a></li>
                            </ul>
                        </li>

                        <li class="sidebar-item has-sub"><a href="#" class='sidebar-link'><i class="bi bi-pen-fill"></i><span>Pengaturan</span></a>
                            <ul class="submenu ">
                                <li class="submenu-item "><a href="<?php echo base_url('') ?>">Profil</a></li>
                                <li class="submenu-item "><a href="<?php echo base_url('') ?>">Akun</a></li>
                                <li class="submenu-item "><a href="<?php echo base_url('logout') ?>">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="main">
            <!--<div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Layout Default</h3>
                            <p class="text-subtitle text-muted">The default layout </p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Layout Default</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Default Layout</h4>
                        </div>
                        <div class="card-body">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, commodi? Ullam quaerat similique iusto
                            temporibus, vero aliquam praesentium, odit deserunt eaque nihil saepe hic deleniti? Placeat delectus
                            quibusdam ratione ullam!
                        </div>
                    </div>
                </section>
            </div>-->
        </div>
    </div>
    <script src="<?php echo base_url('assets/js/app.js') ?>"></script>
</body>
</html>