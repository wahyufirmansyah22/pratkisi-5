<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link href="<?php echo base_url();?>assets/bootswatch-5/dist/vapor/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="<?php echo base_url('assets/bootswatch-5/docs/_assets/img/logo.svg'); ?>" type="image/x-icon">
    <!-- Bootstrap CSS -->

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<div class="container">
    <a class="navbar-brand" >My Website</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item <?php echo ($active_menu == 'home') ? 'active' : ''; ?>">
                <a class="nav-link" href="<?php echo base_url('beranda'); ?>">Home</a>
            </li>
            <li class="nav-item <?php echo ($active_menu == 'data_barang') ? 'active' : ''; ?>">
                <a class="nav-link" href="<?php echo base_url('beranda/data_barang'); ?>">Data Barang</a>
            </li>
            <li class="nav-item <?php echo ($active_menu == 'tentang') ? 'active' : ''; ?>">
                <a class="nav-link" href="<?php echo base_url('beranda/tentang'); ?>">Tentang</a>
            </li>
        </ul>
    </div>
    <script
        src="<?= base_url('assets/bootswatch-5/docs/_vendor/bootstrap/dist/js/bootstrap.bundle.min.js') ?>"></script>
</div>
    </nav>
<div class="container mt-5">

