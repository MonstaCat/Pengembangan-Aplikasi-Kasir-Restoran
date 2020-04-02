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
                        <h1 class="h3 mb-2 text-gray-800">List Menu</h1>
                        <p class="mb-4">This page using DataTables plugin. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <form class="form-inline">
                                    <h6 class="m-0 font-weight-bold text-primary">Tabel List Menu</h6>
                                    <a class="ml-auto" href="<?= site_url('admin/menu/add') ?>"><i class="fas fa-plus"></i> Add New</a>
                                </form>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="card mb-4">
                                            <div class="card-header py-3">
                                                <div class="form-inline">
                                                    <h6 class="m-0 font-weight-bold text-primary">Menu Makanan</h6>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <table class="table table-bordered display" id="dataTable" width="100%" cellspacing="0">
                                                    <thead>
                                                        <tr>
                                                            <th>Nama menu</th>
                                                            <th>Harga</th>
                                                            <th>Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tfoot>
                                                        <tr>
                                                            <th>Nama menu</th>
                                                            <th>Harga</th>
                                                            <th>Aksi</th>
                                                        </tr>
                                                    </tfoot>
                                                    <tbody>
                                                        <?php foreach ($makanan as $data) : ?>
                                                            <tr>
                                                                <td>
                                                                    <?= $data->namaMenu ?>
                                                                </td>
                                                                <td>
                                                                    Rp. <script>document.write(number_format(<?= $data->hargaMenu ?>))</script>
                                                                </td>
                                                                <td>
                                                                    <a href="<?= site_url('admin/menu/edit/' . $data->idMenu) ?>" class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
                                                                    <a onclick="deleteConfirm('<?= site_url('admin/menu/delete/' . $data->idMenu) ?>')" href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
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
                                                <table class="table table-bordered display" id="dataTable" width="100%" cellspacing="0">
                                                    <thead>
                                                        <tr>
                                                            <th>Nama menu</th>
                                                            <th>Harga</th>
                                                            <th>Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tfoot>
                                                        <tr>
                                                            <th>Nama menu</th>
                                                            <th>Harga</th>
                                                            <th>Aksi</th>
                                                        </tr>
                                                    </tfoot>
                                                    <tbody>
                                                        <?php foreach ($minuman as $data) : ?>
                                                            <tr>
                                                                <td>
                                                                    <?= $data->namaMenu ?>
                                                                </td>
                                                                <td>
                                                                    Rp. <script>document.write(number_format(<?= $data->hargaMenu ?>))</script>
                                                                </td>
                                                                <td>
                                                                    <a href="<?= site_url('admin/menu/edit/' . $data->idMenu) ?>" class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
                                                                    <a onclick="deleteConfirm('<?= site_url('admin/menu/delete/' . $data->idMenu) ?>')" href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
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