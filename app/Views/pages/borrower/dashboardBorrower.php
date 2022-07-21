<?= $this->extend('layout/borrower/templateBorrower'); ?>

<?= $this->section('content'); ?>

<!-- ======= Breadcrumbs ======= -->
<?php foreach ($borrower as $br) : ?>
    <div class="breadcrumbs" data-aos="fade-in">
        <div class="container">
            <h2>Dashboard</h2>
            <p>Hai, selamat datang di dashboard kamu <?= $br['namaRek']; ?>!</p>
        </div>
    </div>
<?php endforeach; ?>
<!-- End Breadcrumbs -->

<?php foreach ($borrower as $br) : ?>
    <div class="container mt-4 mb-4">
        <div class="row">
            <div class="col-lg-3 pt-4 pt-lg-0 order-1 order-lg-1 content">
                <img src="assets/img/<?= $br['fotoUsaha']; ?>" class="img-thumbnail" alt="lender" width="200">
                <h4><b><?= $br['namaUsaha']; ?></b></h4>
                <h5><?= $br['emailBorrower']; ?></h5>
                <h5><?= $br['noHpBorrower']; ?></h5>
            </div>
            <div class="card col-lg-5 order-2 order-lg-2 border-dark mb-3" style="max-width: 50rem;">
                <div class="card-header">Ringkasan</div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card-body text-dark">
                            <h5 class="card-title">Total Dana Pengajuan</h5>
                            <p class="card-text">Rp <?= $br['totalDanaPengajuan']; ?></p>

                            <h5 class="card-title">Lunas</h5>
                            <p class="card-text">Rp <?= $br['lunas']; ?></p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card-body text-dark">
                            <h5 class="card-title">Total Dana Disetujui</h5>
                            <p class="card-text">Rp <?= $br['totalDanaDisetujui']; ?></p>

                            <h5 class="card-title">Belum Lunas</h5>
                            <p class="card-text">Rp <?= $br['belumLunas']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 pt-4 pt-lg-0 order-3 order-lg-3 content">
                <dl class="row">
                    <dt class="col-sm-6">Nama Pemilik Rek</dt>
                    <dd class="col-sm-6"><?= $br['namaRek']; ?></dd>

                    <dt class="col-sm-6">Saldo</dt>
                    <dd class="col-sm-6">Rp <?= $br['saldo']; ?></dd>

                    <dt class="col-sm-6">Nama Bank</dt>
                    <dd class="col-sm-6"><?= $br['namaBank']; ?></dd>

                    <dt class="col-sm-6">No. Rekening</dt>
                    <dd class="col-sm-6"><?= $br['noRek']; ?></dd>

                    <div class="col-12 mt-5">
                        <button class="get-started-btn">Tarik Saldo</button>
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
                            <th scope="col">Tanggal Jatuh Tempo</th>
                            <th scope="col">Rincian Lender/Pendana</th>
                            <th scope="col">Jumlah Pengembalian</th>
                            <th scope="col">Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td> <input type="checkbox" id="status">
                                <label for="status">
                                    Status
                                </label>
                            </td>
                            <td><?= $br['tglJatuhTempo']; ?></td>
                            <td><?= $br['rincianLender']; ?>
                            </td>
                            <td>Rp <?= $br['jumlahPengembalian']; ?></td>
                            <td><button class="btn btn-success">Belum Bayar</button></td>
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
                        Belum bayar
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