<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

        <h1 class="logo me-auto"><a href="/berandaLender">Aminah</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="<?php echo (isset($active) && $active == 'berandaLender') ? 'active' : '' ?>" href="/berandaLender">Beranda</a></li>
                <li><a class="<?php echo (isset($active) && $active == 'mitraLender') ? 'active' : '' ?>" href="/mitraLender">Mitra</a></li>
                <li><a class="<?php echo (isset($active) && $active == 'dashboardLender') ? 'active' : '' ?>" href="/dashboardLender">Dashboard</a></li>

                <a href="#" class="notification"><i class="bx bxs-bell"></i></a>
                <a href="#" class="cart"><i class="bx bxs-cart"></i></a>

        </nav><!-- .navbar -->

        <a href="/" class="get-started-btn">Keluar</a>

    </div>
</header><!-- End Header -->