<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
        <h1>AMINAH</h1>
        <h2>Aman, Terjamin, dan Berbasis Syariah</h2>
        <a href="/login" class="btn-get-started">Ayo Mulai Danai</a>
    </div>
</section><!-- End Hero -->

<main>
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Tentang Kami</h2>
                <p>Apa itu Aminah?</p>
            </div>
            <div class="row">
                <div class="col-lg-4 pt-4 pt-lg-0 order-1 order-lg-1 content">
                    <h2> Aminah</h2>
                    <p>Aminah merupakan sebuah platform yang memfasilitasi bertemunya
                        antara pemilik dana dengan para pemilik UMKM yang mencari dana</p>
                </div>
                <div class="col-lg-3 order-2 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                    <img src="assets/img/Aminah1.png" width="250" class="img-fluid" alt="">
                </div>
                <div class="col-lg-5 pt-4 pt-lg-0 order-3 order-lg-3 content">
                    <ul>
                        <li><i class="bi bi-check-circle"></i> Dengan menjadi sobat aminah, anda dapat membantu dalam memajukan UMKM dan membantu sesama.</li>
                        <li><i class="bi bi-check-circle"></i> Dengan menjadi Mitra Aminah, anda dapat mendapatkan tambahan modal dengan syarat mudah dan tanpa ada bunga.</li>
                    </ul>
                    <h2>Ingin jadi Mitra Aminah?</h2>
                    <a href="/registerBorrower" class="get-started-btn">Daftar Jadi Mitra</a>
                </div>
            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->

    <section id="why-us" class="why-us">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Cara Kerja</h2>
                <p>CARA KERJA AMINAH</p>
            </div>
            <div class="row">
                <div class="icon-boxes d-flex flex-column justify-content-center">
                    <div class="row">
                        <div class="col-xl-3 d-flex align-items-stretch">
                            <div class="icon-box mt-4 mt-xl-0">
                                <i class="bx bx-receipt"></i>
                                <h4>Daftar/Masuk</h4>
                                <p>Lender dapat melakukan login apabila telah memiliki akun dan dapar mendaftar apabila belum memiliki akun</p>
                            </div>
                        </div>
                        <div class="col-xl-3 d-flex align-items-stretch">
                            <div class="icon-box mt-4 mt-xl-0">
                                <i class="bx bx-cube-alt"></i>
                                <h4>Pilih Mitra</h4>
                                <p>Apabila lender telah mmasuk kedalam akun miliknya, maka lender dapat memilih mitra mana yang akan didanai</p>
                            </div>
                        </div>
                        <div class="col-xl-3 d-flex align-items-stretch">
                            <div class="icon-box mt-4 mt-xl-0">
                                <i class="bx bx-images"></i>
                                <h4>Lakukan Pembayaran</h4>
                                <p>Setelah lender memilih mitra, maka lender diminta untuk melakukan pembayaran sehingga dana dapat tersalurkan apabila jumlah telah sesuai</p>
                            </div>
                        </div>
                        <div class="col-xl-3 d-flex align-items-stretch">
                            <div class="icon-box mt-4 mt-xl-0">
                                <i class="bx bx-images"></i>
                                <h4>Raih Imbal Hasil</h4>
                                <p>Lender akan mendapatkan imbal hasil apabila borrower telah melakukan pengembalian hasil</p>
                            </div>
                        </div>
                    </div>
                </div><!-- End .content-->
            </div>
        </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Popular Courses Section ======= -->
    <section id="popular-courses" class="courses">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Mitra</h2>
                <p>MITRA KAMI</p>
            </div>

            <div class="row" data-aos="zoom-in" data-aos-delay="100">

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="course-item">
                        <img src="assets/img/aminahImg.jpg" class="img-fluid" alt="SilkySip">
                        <div class="course-content">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4>Toko Minuman</h4>
                                <p class="price">12 Bulan</p>
                            </div>
                            <h3><a href="/login">SilkySip</a></h3>
                            <div class="row">
                                <dl>
                                    <dt class="col-sm-6">Harga</dt>
                                    <dd class="col-sm-6"> xx.xxx.xxx</dd>

                                    <dt class="col-sm-6">Terkumpul</dt>
                                    <dd class="col-sm-6">x.xxx.xxx</dd>
                                </dl>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="course-item">
                        <img src="assets/img/aminahImg4.jpg" class="img-fluid" alt="SilkySip">
                        <div class="course-content">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4>Toko Alat Tulis</h4>
                                <p class="price">12 Bulan</p>
                            </div>
                            <h3><a href="/login">Toko Alif</a></h3>
                            <div class="row">
                                <dl>
                                    <dt class="col-sm-6">Harga</dt>
                                    <dd class="col-sm-6"> xx.xxx.xxx</dd>

                                    <dt class="col-sm-6">Terkumpul</dt>
                                    <dd class="col-sm-6">x.xxx.xxx</dd>
                                </dl>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="course-item">
                        <img src="assets/img/aminahImg2.jpg" class="img-fluid" alt="SilkySip">
                        <div class="course-content">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4>Jasa Foto Copy</h4>
                                <p class="price">12 Bulan</p>
                            </div>
                            <h3><a href="/login">Toko Abadi</a></h3>
                            <div class="row">
                                <dl>
                                    <dt class="col-sm-6">Harga</dt>
                                    <dd class="col-sm-6"> xx.xxx.xxx</dd>

                                    <dt class="col-sm-6">Terkumpul</dt>
                                    <dd class="col-sm-6">x.xxx.xxx</dd>
                                </dl>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 10%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End Course Item-->
            </div>
        </div>
    </section>

</main>

<?= $this->endSection(); ?>