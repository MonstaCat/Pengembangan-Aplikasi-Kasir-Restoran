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
                        <h1 class="h3 mb-2 text-gray-800">Tambah Data Menu</h1>
                        <p class="mb-4"></p>

                        <?php if ($this->session->flashdata('success')) : ?>
                            <div class="alert alert-success" role="alert">
                                <?php echo $this->session->flashdata('success'); ?>
                            </div>
                        <?php endif; ?>

                        <div class="card shadow mb-4">
                            <div class="card-header">
                                <a href="<?php echo site_url('admin/menu/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
                            </div>
                            <div class="card-body">

                                <form action="<?php echo site_url('admin/menu/add') ?>" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="namaMenu">Nama Menu*</label>
                                        <input class="form-control <?php echo form_error('namaMenu') ? 'is-invalid' : '' ?>" type="text" name="namaMenu" placeholder="Nama menu" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('namaMenu') ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="hargaMenu">Harga*</label>
                                        <input class="form-control <?php echo form_error('hargaMenu') ? 'is-invalid' : '' ?>" type="text" name="hargaMenu" min="0" placeholder="Harga menu" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('hargaMenu') ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="kategoriMenu">Kategori*</label>
                                        <select name="kategoriMenu" id="inputKategori" class="form-control">
                                            <option selected>Kategori menu...</option>
                                            <option value="Makanan">Makanan</option>
                                            <option value="Minuman">Minuman</option>
                                        </select>
                                    </div>

                                    <input class="btn btn-success" type="submit" name="btn" value="Save" />
                                </form>

                            </div>

                            <div class="card-footer small text-muted">
                                * required fields
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