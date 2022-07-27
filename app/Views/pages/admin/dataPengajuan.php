<?= $this->extend('layout/admin/templateAdmin'); ?>

<?= $this->section('content'); ?>
<div class="content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>
                    <br> Daftar Pengajuan Pendanaan UMKM Baru
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col mt-4">
                <div class="card">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Nama Usaha</th>
                                <th scope="col">Nama Pemilik</th>
                                <th scope="col">Detail</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($borrower as $br) : ?>
                                <?php $i = 1 ?>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td><?= $br['namaUsaha']; ?></td>
                                    <td><?= $br['namaRek']; ?></td>
                                    <td><a href="/detailDataPengajuan" class="btn btn-info">Detail Usaha</a></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>