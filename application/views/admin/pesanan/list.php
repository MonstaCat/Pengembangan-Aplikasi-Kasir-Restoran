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
                        <h1 class="h3 mb-2 text-gray-800">List Pesanan</h1>
                        <p class="mb-4">This page using DataTables plugin. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <form class="form-inline">
                                    <h6 class="m-0 font-weight-bold text-primary">Tabel List Pesanan</h6>
                                    <a class="ml-auto" href="<?= site_url('admin/menu/add') ?>"><i class="fas fa-plus"></i> Add New</a>
                                </form>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>ID Pesanan</th>
                                                <th>Kode Pesanan</th>
                                                <th>Nama Customer</th>
                                                <th>Nama Menu</th>
                                                <th>Harga</th>
                                                <th>Qty</th>
                                                <th>Total Harga</th>
                                                <th>Nomor Meja</th>
                                                <th>Dibuat Pada</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>ID Pesanan</th>
                                                <th>Kode Pesanan</th>
                                                <th>Nama Customer</th>
                                                <th>Nama Menu</th>
                                                <th>Harga</th>
                                                <th>Qty</th>
                                                <th>Total Harga</th>
                                                <th>Nomor Meja</th>
                                                <th>Dibuat Pada</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php foreach ($pesanan as $data) : ?>
                                                <tr>
                                                    <td>
                                                        <?= $data->idPesanan ?>
                                                    </td>
                                                    <td>
                                                        <?= $data->kodePesanan ?>
                                                    </td>
                                                    <td>
                                                        <?= $data->namaCustomer ?>
                                                    </td>
                                                    <td>
                                                        <?= $data->namaMenu ?>
                                                    </td>
                                                    <td>
                                                        Rp. <script>document.write(number_format(<?= $data->hargaMenu ?>))</script>
                                                    </td>
                                                    <td>
                                                        <?= $data->jumlahPesanan ?>
                                                    </td>
                                                    <td>
                                                        Rp. <script>document.write(number_format(<?= $data->totalHarga ?>))</script>
                                                    </td>
                                                    <td>
                                                        <?= $data->nomorMeja ?>
                                                    </td>
                                                    <td>
                                                        <?= $data->created_at ?>
                                                    </td>
                                                    <td>
                                                        <a href="<?= site_url('admin/pesanan/edit/' . $data->idPesanan) ?>" class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
                                                        <a onclick="deleteConfirm('<?= site_url('admin/pesanan/delete/' . $data->idPesanan) ?>')" href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
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

    <script>
        function deleteConfirm(url) {
            $('#btn-delete').attr('href', url);
            $('#deleteModal').modal();
        }
    </script>

</body>

</html>