<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Agency - Start Bootstrap Theme</title>
        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>files/assets/images/favicon.png?>">
        <title>Sistem Diagnosa</title>
        <!-- Font Awesome icons (free version)-->
        <!-- <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script> -->
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <title>Sistem Diagnosa</title>
        <!-- Custom CSS -->
        <link href="<?= base_url() ?>files/dist/css/style.min.css" rel="stylesheet">
        <link href="<?= base_url() ?>files/dist/css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#page-top"><img src="<?= base_url() ?>files/assets/images/favicon.png?>"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="<?= base_url('') ?>">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url('konsultasi') ?>">Konsultasi</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url('home/about') ?>">About</a></li>
                        <?php if(!empty($this->session->userdata['logged_in'])): ?>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url('home/logout') ?>">Logout</a></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>