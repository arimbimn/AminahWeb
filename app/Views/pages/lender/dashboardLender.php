<?= $this->extend('layout/lender/templateLender'); ?>

<?= $this->section('content'); ?>

<!-- ======= Breadcrumbs ======= -->
<?php foreach ($lender as $len) : ?>
    <div class="breadcrumbs" data-aos="fade-in">
        <div class="container">
            <h2>Dashboard</h2>
            <p>Hai, selamat datang di dashboard kamu <?= $len['namaLender']; ?>!</p>
        </div>
    </div>
<?php endforeach; ?>
<!-- End Breadcrumbs -->

<?php foreach ($lender as $len) : ?>
    <div class="container mt-4 mb-4">
        <div class="row">
            <div class="col-lg-3 pt-4 pt-lg-0 order-1 order-lg-1 content">
                <img src="assets/img/<?= $len['fotoLender']; ?>" class="img-thumbnail" alt="lender" width="200">
                <h4><b><?= $len['namaLender']; ?></b></h4>
                <h5><?= $len['emailLender']; ?></h5>
                <h5><?= $len['noHpLender']; ?></h5>
            </div>
            <div class="card col-lg-5 order-2 order-lg-2 border-dark mb-3" style="max-width: 50rem;">
                <div class="card-header">Ringkasan</div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card-body text-dark">
                            <h5 class="card-title">Est. Bagi Hasil</h5>
                            <p class="card-text">Rp <?= $len['estBagiHasil']; ?></p>

                            <h5 class="card-title">Lunas</h5>
                            <p class="card-text">Rp <?= $len['lunas']; ?></p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card-body text-dark">
                            <h5 class="card-title">Total Pendanaan</h5>
                            <p class="card-text">Rp <?= $len['totalPendanaan']; ?></p>

                            <h5 class="card-title">Gagal Bayar</h5>
                            <p class="card-text">Rp <?= $len['gagalBayar']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 pt-4 pt-lg-0 order-3 order-lg-3 content">
                <dl class="row">
                    <dt class="col-sm-6">Nama Pemilik Rek</dt>
                    <dd class="col-sm-6"><?= $len['namaRekLender']; ?></dd>

                    <dt class="col-sm-6">Saldo</dt>
                    <dd class="col-sm-6">Rp <?= $len['jumlahSaldoLender']; ?></dd>

                    <dt class="col-sm-6">Nama Bank</dt>
                    <dd class="col-sm-6"><?= $len['namaBankLender']; ?></dd>

                    <dt class="col-sm-6">No. Rekening</dt>
                    <dd class="col-sm-6"><?= $len['noRekLender']; ?></dd>

                    <div class="col-6 mt-5">
                        <button class="get-started-btn">Tarik Saldo</button>
                    </div>
                    <div class="col-6 mt-5">
                        <button class="get-started-btn">Isi Saldo</button>
                    </div>
                </dl>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Status</th>
                            <th scope="col">Tanggal pendanaan</th>
                            <th scope="col">Rincian Mitra</th>
                            <th scope="col">Tanggal Jatuh Tempo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1 ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td> <input type="checkbox" id="status">
                                <label for="status">
                                    Status
                                </label>
                            </td>
                            <td><?= $len['tglPendanaan']; ?> </td>
                            <td><?= $len['rincianMitra']; ?>
                            </td>
                            <td><?= $len['tglJatuhTempo']; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="belum-lunas" disabled>
                    <label class="form-check-label" for="belum-lunas">
                        Belum lunas
                    </label>
                </div>
            </div>
            <div class="col-2">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="lunas" checked disabled>
                    <label class="form-check-label" for="lunas">
                        Lunas
                    </label>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<?= $this->endSection(); ?>