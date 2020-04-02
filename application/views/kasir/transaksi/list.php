<!DOCTYPE html>
<html lang="en">

<head>

    <?php $this->load->view("kasir/_partials/head.php") ?>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php $this->load->view("kasir/_partials/sidebar.php") ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar Navbar -->
                <?php $this->load->view("kasir/_partials/topbar.php") ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">List Transaksi</h1>
                    <p class="mb-4">This page using DataTables plugin. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <form class="form-inline">
                                <h6 class="m-0 font-weight-bold text-primary">Tabel List Transaksi Belum Lunas</h6>
                            </form>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered display" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID Transaksi</th>
                                            <th>Total Harga</th>
                                            <th>Total Bayar</th>
                                            <th>Kembalian</th>
                                            <th>Dibuat Pada</th>
                                            <th>Status Transaksi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID Transaksi</th>
                                            <th>Total Harga</th>
                                            <th>Total Bayar</th>
                                            <th>Kembalian</th>
                                            <th>Dibuat Pada</th>
                                            <th>Status Transaksi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php 
                                            foreach ($transaksiBelumLunas as $data) : ?>
                                            <tr>
                                                <td>
                                                    <?= $data->idTransaksi ?>
                                                </td>
                                                <td>
                                                    Rp. <script>document.write(number_format(<?= $data->totalHarga ?>))</script>
                                                </td>
                                                <td>
                                                    Rp. <script>document.write(number_format(<?= $data->totalBayar ?>))</script>
                                                </td>
                                                <td>
                                                    Rp. <script>document.write(number_format(<?= $data->totalKembalian ?>))</script>
                                                </td>
                                                <td>
                                                    <?= $data->created_at ?>
                                                </td>
                                                <td>
                                                    <?= $data->statusTransaksi ?>
                                                </td>
                                                <td>
                                                    <a href="<?= site_url('kasir/transaksi/bayar/' . $data->idTransaksi) ?>" class="btn btn-outline-dark btn-small">Bayar</a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <form class="form-inline">
                                <h6 class="m-0 font-weight-bold text-primary">Tabel History Transaksi</h6>
                            </form>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered display" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID Transaksi</th>
                                            <th>Total Harga</th>
                                            <th>Total Bayar</th>
                                            <th>Kembalian</th>
                                            <th>Dibuat Pada</th>
                                            <th>Status Transaksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID Transaksi</th>
                                            <th>Total Harga</th>
                                            <th>Total Bayar</th>
                                            <th>Kembalian</th>
                                            <th>Dibuat Pada</th>
                                            <th>Status Transaksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php foreach ($transaksiLunas as $data) : ?>
                                            <tr>
                                                <td>
                                                    <?= $data->idTransaksi ?>
                                                </td>
                                                <td>
                                                    Rp. <script>document.write(number_format(<?= $data->totalHarga ?>))</script>
                                                </td>
                                                <td>
                                                    Rp. <script>document.write(number_format(<?= $data->totalBayar ?>))</script>
                                                </td>
                                                <td>
                                                    Rp. <script>document.write(number_format(<?= $data->totalKembalian ?>))</script>
                                                </td>
                                                <td>
                                                    <?= $data->created_at ?>
                                                </td>
                                                <td>
                                                    <?= $data->statusTransaksi ?>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php $this->load->view("kasir/_partials/footer.php") ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <?php $this->load->view("kasir/_partials/scrolltop.php") ?>
    <?php $this->load->view("kasir/_partials/modal.php") ?>
    <?php $this->load->view("kasir/_partials/js.php") ?>

    <script>
        function deleteConfirm(url) {
            $('#btn-delete').attr('href', url);
            $('#deleteModal').modal();
        }
    </script>

</body>

</html>