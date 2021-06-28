<?php
$this->load->view('header');
?>
<div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Kelompok <sup>3</sup></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="dashboard">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - About Us -->
        <li class="nav-item">
            <a class="nav-link" href="aboutus">
                <i class="fas fa-fw fa-cog"></i>
                <span>About Us</span></a>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <form class="form-inline">
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                </form>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Nav Item - Logout -->
                    <li>
                        <a href="Dashboard/logout">Logout</a>
                    </li>
                </ul>

            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">
                <div class="content-wrapper">
                    <section class="content-header">
                        <h1>
                            Data Dosen
                        </h1>
                    </section>

                    <section class="content">
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#tambah"><i class="fa fa-plus"></i>Tambah Data</button>

                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr align="center">
                                    <th>No</th>
                                    <th>NIP</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Nomor HP</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($Dosen as $dsn) { ?>
                                    <tr align="center">
                                        <td><?= $no++; ?></td>
                                        <td><?= $dsn['NIP']; ?></td>
                                        <td><?= $dsn['Nama']; ?></td>
                                        <td><?= $dsn['Alamat']; ?></td>
                                        <td><?= $dsn['TanggalLahir']; ?></td>
                                        <td><?= $dsn['NomorHP']; ?></td>
                                        <td align="center">
                                            <button class="btn btn-warning btn-edit"><i class="fa fa-pen"></i></button>
                                            <a href="#modalDelete" class="btn btn-danger" data-target="#modalDelete" data-toggle="modal" onclick="$('#modalDelete #formDelete').attr('action', '<?= site_url('Dosen/hapusDosen/' . $dsn['NIP']); ?>'); $('#idDeleteText').text(<?= $dsn['NIP']; ?>)"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                <?php } ?>
                        </table>
                    </section>

                    <!-- modal add data -->
                    <div class="modal fade" id="tambah" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="dataDosen">Form Tambah Data Dosen</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" id="insert_form" action="<?= base_url(); ?>Dosen/addDosen" enctype='multipart/form-data'>
                                        <div class="form-group">
                                            <label class="control-label" for="nip">NIP</label>
                                            <input type="text" name="nip" class="form-control" id="nip" required>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label" for="name">Nama</label>
                                            <input type="text" name="name" class="form-control" id="name" required>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label" for="alamat">Alamat</label>
                                            <input type="text" name="alamat" class="form-control" id="alamat" required>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label" for="tgllahir">Tanggal Lahir</label>
                                            <input type="date" name="tgllahir" class="form-control" id="tgllahir" required>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label" for="nohp">Nomor HP</label>
                                            <input type="text" name="nohp" class="form-control" id="nohp" required>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="reset" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-success"> Simpan </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- modal hapus  -->
                    <div class="modal fade" id="modalDelete" tabindex="-1" aria-labelledby="dataDosen" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="dataDosen">Warning!</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <h6 class="modal-title" id="databarang">Apakah anda yakin akan menghapus data ini <span id="idDeleteText"></span> </h6>
                                </div>
                                <div class="modal-footer">
                                    <form id="formDelete" action="" method="POST">
                                        <button type="reset" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
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
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; by KELOMPOK 3</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->
    </div>
    <!-- End of Content Wrapper -->
</div>
<!-- End of Page Wrapper
<!-- Bootstrap core JavaScript -->
<script src="vendor/sbadmin2/vendor/jquery/jquery.min.js"></script>
<script src="vendor/sbadmin2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/sbadmin2/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="vendor/sbadmin2/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="vendor/sbadmin2/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/sbadmin2/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="vendor/sbadmin2/js/demo/datatables-demo.js"></script> -->

<?php
$this->load->view('footer');
?>