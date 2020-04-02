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
                        <h1 class="h3 mb-2 text-gray-800">Edit Data Pesanan</h1>
                        <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

                        <?php if ($this->session->flashdata('success')) : ?>
                            <div class="alert alert-success" role="alert">
                                <?php echo $this->session->flashdata('success'); ?>
                            </div>
                        <?php endif; ?>

                        <div class="card shadow mb-4">
                            <div class="card-header">
                                <a href="<?php echo site_url('admin/pesanan/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
                            </div>
                            <div class="card-body">

                                <form action="<?php echo site_url('admin/pesanan/editPesanan') ?>" method="post" enctype="multipart/form-data">

                                    <input type="hidden" name="id" value="<?= $pesanan->idPesanan ?>" />
                                    <input type="hidden" name="idMenu" value="<?= $pesanan->idMenu ?>" />
                                    <input type="hidden" name="idCustomer" value="<?= $pesanan->idCustomer ?>" />

                                    <div class="form-group">
                                        <label for="idPesanan">ID Pesanan</label>
                                        <input readonly class="form-control" type="text" name="idPesanan" value="<?= $view_pesanan->idPesanan ?>" />
                                    </div>

                                    <div class="form-group">
                                        <label for="kodePesanan">Kode Pesanan</label>
                                        <input readonly class="form-control" type="text" name="kodePesanan" value="<?= $view_pesanan->kodePesanan ?>" />
                                    </div>

                                    <div class="form-group">
                                        <label for="namaCustomer">Nama Customer</label>
                                        <input readonly class="form-control" type="text" name="namaCustomer" value="<?= $view_pesanan->namaCustomer ?>" />
                                    </div>

                                    <div class="form-group">
                                        <label for="namaMenu">Nama Menu</label>
                                        <input readonly class="form-control" type="text" name="namaMenu" value="<?= $view_pesanan->namaMenu ?>" />
                                    </div>

                                    <div class="form-group">
                                        <label for="jumlahPesanan">Qty</label>
                                        <input class="form-control" type="text" name="jumlahPesanan" value="<?= $pesanan->jumlahPesanan ?>" />
                                    </div>

                                    <div class="form-group">
                                        <label for="totalHarga">Total Harga</label>
                                        <input readonly class="form-control" type="text" name="totalHarga" value="<?= $view_pesanan->totalHarga ?>" />
                                    </div>

                                    <div class="form-group">
                                        <label for="nomorMeja">Nomor Meja</label>
                                        <input class="form-control" type="text" name="nomorMeja" value="<?= $pesanan->nomorMeja ?>" />
                                    </div>

                                    <div class="form-group">
                                        <label for="created_at">Dibuat Pada</label>
                                        <input readonly class="form-control" type="text" name="created_at" value="<?= $view_pesanan->created_at ?>" />
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