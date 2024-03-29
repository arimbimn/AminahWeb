<?= $this->extend('layout/admin/templateAdmin'); ?>

<?= $this->section('content'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard Admin</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Info boxes -->
            <div class="row">
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-user-plus"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Jumlah Pengajuan Pendanaan Masuk</span>
                            <span class="info-box-number">
                                *10*
                                <small>berkas</small>
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-tasks"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Jumlah pendanaan</span>
                            <span class="info-box-number">*500*</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->

                <!-- fix for small devices only -->
                <div class="clearfix hidden-md-up"></div>

                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-success elevation-1"><i class="fas fa-users"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Jumlah Lender</span>
                            <span class="info-box-number">*50* lender</span>
                        </div>

                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->

                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Jumlah Mitra</span>
                            <span class="info-box-number">*100* Mitra</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>

                <!-- /.col -->
            </div>
            <!-- /.row -->

            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <div class="col-md-5">
                    <!-- TABLE: DATA LENDER -->
                    <div class="card">
                        <div class="card-header border-transparent">
                            <h3 class="card-title">Data Lender</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table m-0">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama Lender</th>
                                            <th>No. Rek</th>
                                            <th>No. Hp</th>
                                            <th>Email </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($lender as $len) : ?>
                                            <?php $i = 1 ?>
                                            <tr>
                                                <td><?= $i++; ?></td>
                                                <td><?= $len['namaLender']; ?></td>
                                                <td><?= $len['noRekLender']; ?></td>
                                                <td> <?= $len['noHpLender']; ?></td>
                                                <td><?= $len['emailLender']; ?></td>
                                            <?php endforeach; ?>
                                            </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->

                <div class="col-md-7">
                    <!-- TABLE: DATA MITRA -->
                    <div class="card">
                        <div class="card-header border-transparent">
                            <h3 class="card-title">Data Mitra</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table m-0">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama Usaha</th>
                                            <th>Nama Pemilik</th>
                                            <th>No. Rek</th>
                                            <th>No. Hp</th>
                                            <th>Email </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($borrower as $br) : ?>
                                            <?php $i = 1 ?>
                                            <tr>
                                                <td><?= $i++; ?></td>
                                                <td><?= $br['namaUsaha']; ?></td>
                                                <td><?= $br['namaRek']; ?></td>
                                                <td><?= $br['noRek']; ?></td>
                                                <td><?= $br['noHpBorrower']; ?></td>
                                                <td><?= $br['emailBorrower']; ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!--/. container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?= $this->endSection(); ?>