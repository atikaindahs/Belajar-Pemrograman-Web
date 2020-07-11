<!doctype html>
<html lang="en">

<head>
    <!-- Required Meta Tags -->
    <?php $this->load->view('_partials/layout/meta-tags'); ?>
    <!-- Bootstrap core CSS -->
    <?php $this->load->view('_partials/bootstrap-4/bootstrap-4-css') ?>
    <!-- Site Title -->
    <title>Registrasi</title>
    <style>
        .asup {
            background-image: url(<?= base_url('asset/kamera-mirrorless-murah-wp.jpg') ?>);
            background-size: cover;
        }
    </style>
</head>

<body class="asup">
    <div class="container mt-md-5 pt-md-5">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-12 col-md-6 col-lg-4">

                <div class="card bg-light shadow border-0">
                    <div class="card-body">
                        <h1 class="text-center my-4">PINJAM<b>.KUY</b></h1>
                        <form class="form-signin" method="POST" action="Registrasi/proses">
                            <div class="form-group">
                                <label for="nama" class="sr-only">Nama</label>
                                <input name="nama" type="text" id="nama" class="form-control my-4" placeholder="Nama" required autofocus>
                            </div>
                            <div class="form-group">
                                <label for="alamat" class="sr-only">Alamat</label>
                                <input name="alamat" type="text" id="Alamat" class="form-control my-4" placeholder="Alamat" required autofocus>
                            </div>
                            <div class="form-group">
                                <label for="no_hp" class="sr-only">Nomer HP</label>
                                <input name="no_hp" type="text" id="Alamat" class="form-control my-4" placeholder="08xxxxxxxxxx" required autofocus>
                            </div>
                            <div class="form-group">
                                <label for="username" class="sr-only">Email address</label>
                                <input name="username" type="text" id="username" class="form-control my-4" placeholder="Username" required autofocus>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword" class="sr-only">Password</label>
                                <input name="password" type="password" id="inputPassword" class="form-control my-4" placeholder="Password" required>
                            </div>
                            <div class="checkbox mb-3">

                            </div>
                            <div class="form-group">
                                <button class="btn btn-lg btn-primary btn-block shadow" type="submit">Daftar</button>
                            </div>
                        </form>
                    </div>
                </div>
                <p class="mt-5  text-light text-center">&copy; 2019 - 2020</p>
                <hr>
                <p class=" text-light text-center">Distributed By Diri Sendiri</a> </p>
            </div>
        </div>
    </div>
</body>

</html>