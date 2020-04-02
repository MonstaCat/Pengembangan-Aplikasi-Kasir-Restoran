<!DOCTYPE html>
<html lang="en">

<head>

    <?php $this->load->view("waiter/_partials/head.php") ?>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php $this->load->view("waiter/_partials/sidebar.php") ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">                

                    <!-- Topbar Navbar -->
                    <?php $this->load->view("waiter/_partials/topbar.php") ?>
                    <!-- End of Topbar -->

                    <!-- Begin Page Content -->
                    <div class="container-fluid">

                        <!-- Page Heading -->
                        <h1 class="h3 mb-2 text-gray-800">Tambah Pesanan</h1>
                        <p class="mb-4">This page using DataTables plugin. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

                        <?php if ($this->session->flashdata('success')) : ?>
                            <div class="alert alert-success" role="alert">
                                <?php echo $this->session->flashdata('success'); ?>
                            </div>
                        <?php endif; ?>

                        <div class="card shadow mb-4">
                            <form action="<?php echo site_url('waiter/customer/add') ?>" method="post" enctype="multipart/form-data">
                                <div class="card-header py-3">
                                    <div class="form-inline">
                                        <h6 class="m-0 font-weight-bold text-primary">Form Tambah Pesanan</h6>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group form-inline">
                                                <div class="col-9 form-group">
                                                    <label for="namaCustomer">Input Nama Customer:</label>
                                                    <input type="text" class="col-12 form-control" name="namaCustomer" id="namaCustomer" placeholder="Nama customer">
                                                </div>

                                                <div class="col-3 form-group">
                                                    <label for="nomorMeja">Input Nomor Meja:</label>
                                                    <input type="number" class="col-12 form-control" name="nomorMeja" id="nomorMeja" placeholder="Nomor meja">
                                                </div>
                                                <?php foreach ($customer as $data) : ?>
                                                    <input type="hidden" name="id" value="<?= $data->idCustomer ?>" />
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="card mb-4">
                                                <div class="card-header py-3">
                                                    <div class="form-inline">
                                                        <h6 class="m-0 font-weight-bold text-primary">Menu Makanan</h6>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <table class="table table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">Nama Menu</th>
                                                                <th scope="col">Harga</th>
                                                                <th scope="col">Qty</th>
                                                                <th scope="col">Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php foreach ($menuM as $data) : ?>
                                                                <tr>
                                                                    <td scope="row">
                                                                        <?= $data->namaMenu ?>
                                                                    </td>
                                                                    <td>
                                                                        Rp. <script>document.write(number_format(<?= $data->hargaMenu ?>))</script>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-inline input-group-sm">
                                                                            <input type="number" class="form-control" name="jumlahPesanan[]">
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <input class="form-check-input" type="checkbox" name="idMenu[]" value="<?= $data->idMenu ?>">
                                                                        <label class="form-check-label" for="idMenu">Pesan!</label>
                                                                    </td>
                                                                </tr>
                                                            <?php endforeach; ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="card mb-4">
                                                <div class="card-header py-3">
                                                    <div class="form-inline">
                                                        <h6 class="m-0 font-weight-bold text-primary">Menu Minuman</h6>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <table class="table table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">Nama Menu</th>
                                                                <th scope="col">Harga</th>
                                                                <th scope="col">Qty</th>
                                                                <th scope="col">Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php foreach ($menuMi as $data) : ?>
                                                                <tr>
                                                                    <td scope="row">
                                                                        <?= $data->namaMenu ?>
                                                                    </td>
                                                                    <td>
                                                                        Rp. <?= $data->hargaMenu ?>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-inline input-group-sm">
                                                                            <input type="number" class="form-control" name="jumlahPesanan[]">
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <input class="form-check-input" type="checkbox" name="idMenu[]" value="<?= $data->idMenu ?>">
                                                                        <label class="form-check-label" for="idMenu">Pesan!</label>
                                                                    </td>
                                                                </tr>
                                                            <?php endforeach; ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-footer">
                                    <input type="submit" class="col-12 btn btn-success" name="submit" value="Submit">
                                </div>
                            </form>
                        </div>

                    </div>
                    <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php $this->load->view("waiter/_partials/footer.php") ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <?php $this->load->view("waiter/_partials/scrolltop.php") ?>
    <?php $this->load->view("waiter/_partials/modal.php") ?>
    <?php $this->load->view("waiter/_partials/js.php") ?>

    <script>
        function deleteConfirm(url) {
            $('#btn-delete').attr('href', url);
            $('#deleteModal').modal();
        }
    </script>

</body>

</html>