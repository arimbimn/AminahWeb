<?php foreach ($admin as $ad) : ?>
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-dark">
        <h4>Selamat Datang, <?= $ad['nama_admin']; ?> !</h4>
        <!-- Right navbar links -->
        <!-- <ul class="navbar-nav ml-auto">
            <a href="/loginAdmin" class="btn btn-primary">Keluar</a>
        </ul> -->
    </nav>
    <!-- /.navbar -->
<?php endforeach; ?>