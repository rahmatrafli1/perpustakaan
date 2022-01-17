<!DOCTYPE html>
<html>

<head>
    <title>Petugas - Sistem Informasi Perpustakaan</title>
    <!-- css bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
    <!-- icon font awesome -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/awesome/css/font-awesome.css' ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/awesome/css/font-awesome.min.css' ?>">
    <!-- jquery dan bootstrap js -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <!-- js datatables -->
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo base_url() . 'petugas'; ?>">SI
                Perpustakaan</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" datatarget="#
navbarText" aria-controls="navbarText" aria-expanded="false" arialabel="
Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url() . 'petugas'; ?>"><i class="fa fa-home"></i> Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url() . 'petugas/anggota';
                                                    ?>"><i class="fa fa-users"></i> Anggota</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url() . 'petugas/buku'; ?>"><i class="fa fa-book"></i> Buku</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url() . 'petugas/peminjaman';
                                                    ?>"><i class="fa fa-book"></i> Peminjaman</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo
                                                    base_url() . 'petugas/peminjaman_laporan'; ?>"><i class="fa fa-book"></i> Laporan
                            Peminjaman</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url() . 'petugas/ganti_password' ?>" class="nav-link">
                            <i class="fa fa-lock"></i> Ganti Password
                        </a>
                    </li>
                </ul>
                <span class="navbar-text mr-3 text-center">
                    Halo, <?php echo $this->session->userdata('username'); ?> [Petugas]
                </span>
                <a href="<?php echo base_url() . 'petugas/logout' ?>" class="btn btn-outline-light
ml-1"><i class="fa fa-power-off"></i> KELUAR</a>
            </div>
        </div>
    </nav>
    <br />
    <br />