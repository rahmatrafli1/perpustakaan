<!DOCTYPE html>
<html>

<head>
    <title>Login - Sistem Informasi Perpustakaan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>

<body class="bg-dark">
    <div class="container">
        <br /><br /><br /><br />
        <h3 class="font-weight-normal text-center text-white">SISTEM
            INFORMASI</h3>
        <h2 class="font-weight-normal text-center text-white mb-5"><b>PERPUSTAKAAN</b></h2>
        <div class="col-md-4 offset-md-4">
            <div class="card">
                <div class="card-body">
                    <?php
                    if (isset($_GET['alert'])) {
                        if ($_GET['alert'] == "gagal") {
                            echo "<div class='alert alert-danger font-weight-bold text-center'>LOGIN GAGAL!</div>";
                        } else if ($_GET['alert'] == "belum_login") {
                            echo "<div class='alert alert-danger font-weight-bold text-center'>SILAHKAN LOGIN TERLEBIH DULU!</div>";
                        } else if ($_GET['alert'] == "logout") {
                            echo "<div class='alert alert-success font-weight-bold text-center'>ANDA TELAH LOGOUT!</div>";
                        }
                    }
                    ?>
                    <h4 class="font-weight-bold text-center mb-3 mt-3">LOGIN</h4>
                    <!-- validasi error -->
                    <?php echo validation_errors(); ?>
                    <form method="post" action="<?php echo base_url() . 'login/login_aksi'; ?>">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input name="username" type="text" class="form-control" placeholder="Masukkan username">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input name="password" type="password" class="form-control" placeholder="Masukkan Password">
                        </div>
                        <div class="form-group">
                            <label for="sebagai">Login Sebagai :</label>
                            <select name="sebagai" class="form-control">
                                <option value="admin">Admin</option>
                                <option value="petugas">Petugas</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>