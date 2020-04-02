<!DOCTYPE html>
<html lang="en">

<head>

    <?php $this->load->view("admin/_partials/head.php") ?>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php $this->load->view("admin/_partials/sidebar.php") ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                    <!-- Topbar Navbar -->
                    <?php $this->load->view("admin/_partials/topbar.php") ?>
                    <!-- End of Topbar -->

                    <!-- Begin Page Content -->
                    <div class="container-fluid">

                        <!-- Page Heading -->
                        <h1 class="h3 mb-2 text-gray-800">Bayar Transaksi</h1>
                        <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

                        <?php if ($this->session->flashdata('success')) : ?>
                            <div class="alert alert-success" role="alert">
                                <?php echo $this->session->flashdata('success'); ?>
                            </div>
                        <?php endif; ?>

                        <div class="card shadow mb-4">
                            <div class="card-header">
                                <a href="<?php echo site_url('admin/transaksi/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
                            </div>
                            <div class="card-body">

                                <form action="<?php echo site_url('admin/transaksi/bayarTransaksi') ?>" method="post" enctype="multipart/form-data">

                                    <input type="hidden" name="totalKembalian" value="<?= $transaksi->totalKembalian ?>" />
                                    <input type="hidden" name="created_at" value="<?= $transaksi->created_at ?>" />
                                    <input type="hidden" name="statusTransaksi" value="<?= $transaksi->statusTransaksi ?>" />

                                    <div class="form-group">
                                        <label for="idTransaksi">ID Transaksi</label>
                                        <input readonly class="form-control" type="text" name="id" value="<?= $transaksi->idTransaksi ?>" />
                                    </div>

                                    <div class="form-group">
                                        <label for="namaCustomer">Nama Customer</label>
                                        <input readonly class="form-control" type="text" name="namaCustomer" value="<?= $view_pesanan->namaCustomer ?>" />
                                    </div>

                                    <div class="form-group">
                                        <label for="nomorMeja">Nomor Meja</label>
                                        <input readonly class="form-control" type="text" name="nomorMeja" value="<?= $view_pesanan->nomorMeja ?>" />
                                    </div>

                                    <div class="form-group">
                                        <label for="totalHarga">Total Harga</label>
                                        <input readonly class="form-control" type="text" name="totalHarga" value="<?= $transaksi->totalHarga ?>" />
                                    </div>

                                    <div class="form-group">
                                        <label for="totalBayar">Total Bayar</label>
                                        <input class="form-control" type="number" name="totalBayar" value="<?= $transaksi->totalBayar ?>" />
                                    </div>

                                    <input class="btn btn-success" type="submit" name="btn" value="Save" />
                                </form>

                            </div>

                            <div class="card-footer small text-muted">
                            </div>
                        </div>

                    </div>
                    <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php $this->load->view("admin/_partials/footer.php") ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <?php $this->load->view("admin/_partials/scrolltop.php") ?>
    <?php $this->load->view("admin/_partials/modal.php") ?>
    <?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>