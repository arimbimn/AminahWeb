<?= $this->extend('layout/admin/templateAdmin'); ?>

<?= $this->section('content'); ?>
<?php foreach ($borrower as $br) : ?>
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2>
                        <br> <?= $br['namaUsaha']; ?>
                    </h2>
                </div>
            </div>
            <div class="card">
                <div class="col mt-4">
                    <dl class="row">
                        <dt class="col-sm-5">Identitas UMKM</dt>
                        <dt class="col-sm-7">Keterangan</dt>

                        <dt class="col-sm-5 mt-3">Nama UMKM</dt>
                        <dd class="col-sm-7 mt-3"><?= $br['namaUsaha']; ?></dd>

                        <dt class="col-sm-5">Nama Pemilik UMKM</dt>
                        <dd class="col-sm-7"><?= $br['namaRek']; ?></dd>

                        <dt class="col-sm-5">NIK Pemilik UMKM</dt>
                        <dd class="col-sm-7"><?= $br['nik']; ?></dd>

                        <dt class="col-sm-5">Alamat Tempat Tinggal</dt>
                        <dd class="col-sm-7"><?= $br['alamat_tinggal']; ?></dd>

                        <dt class="col-sm-5">Nomor Rekening Pemilik UMKM</dt>
                        <dd class="col-sm-7"><?= $br['noRek']; ?></dd>

                        <dt class="col-sm-5">Nomor Telepon/HP Pemilik UMKM</dt>
                        <dd class="col-sm-7"><?= $br['noHpBorrower']; ?></dd>

                        <dt class="col-sm-5">Email Pemilik UMKM</dt>
                        <dd class="col-sm-7"><?= $br['emailBorrower']; ?></dd>

                        <dt class="col-sm-5">Pendapatan per bulan UMKM</dt>
                        <dd class="col-sm-7"><?= $br['pendapatan_perbulan']; ?></dd>

                        <dt class="col-sm-5">Jumlah Pengajuan Pendanaan</dt>
                        <dd class="col-sm-7"><?= $br['totalDanaPengajuan']; ?></dd>

                        <dt class="col-sm-5">Foto KTP Pemilik UMKM</dt>
                        <dd class="col-sm-7"><?= $br['foto_ktp']; ?></dd>

                        <dt class="col-sm-5">Foto Surat Izin Usaha (SIU)</dt>
                        <dd class="col-sm-7"><?= $br['foto_siu']; ?></dd>

                        <dt class="col-sm-5">Foto UMKM</dt>
                        <dd class="col-sm-7"><img src="assets/img/<?= $br['fotoUsaha']; ?>" alt="<?= $br['fotoUsaha']; ?>" style="width:600px;"></dd>
                    </dl>
                </div>
            </div>
            <div class="row">
                <div class="col mb-4">
                    <a href="#" class="btn btn-danger col-lg-12">Tolak</a>
                </div>
                <div class="col mb-4">
                    <a href="#" class="btn btn-success col-lg-12">Terima</a>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<?= $this->endSection(); ?>