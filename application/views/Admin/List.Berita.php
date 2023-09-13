<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="img/logo/logo.png" rel="icon">
    <title>RuangAdmin - Data Berita</title>
    <link href="<?php echo base_url('assets/admin/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet"
        type="text/css">
    <link href="<?php echo base_url('assets/admin/'); ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"
        type="text/css">
    <link href="<?php echo base_url('assets/admin/'); ?>css/ruang-admin.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/admin/'); ?>vendor/datatables/dataTables.bootstrap4.min.css"
        rel="stylesheet">
</head>

<body id="page-top">
    <div id="wrapper">
        <!-- Sidebar -->
        <?php include 'parts/Sidebar.php'; ?>
        <!-- Sidebar -->
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <!-- TopBar -->
                <?php include 'parts/Topbar.php'; ?>
                <!-- Topbar -->
                <!-- Container Fluid-->
                <div class="container-fluid" id="container-wrapper">
                    <div class="d-sm-flex align-items-center justify-content-between mb-2">
                        <h1 class="h3 mb-0 text-gray-800">Data Berita</h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="./">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">DataTables</li>
                        </ol>
                    </div>

                    <!-- Row -->
                    <div class="row">
                        <!-- Data Guru -->
                        <div class="col-lg-12">
                            <div class="card mb-2">
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">

                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#exampleModal">
                                        Tambah Data
                                    </button>
                                </div>
                                <!-- Data Guru -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Berita</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="<?php echo base_url('/Admin/Berita/Add'); ?>"
                                                    method="POST">
                                                    <div class="row mt-2">
                                                        <div class="col-md-12">
                                                            <label>gambar</label>
                                                            <input type="file" name="gambar" class="form-control"
                                                                required>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-2">
                                                        <div class="col-md-12">
                                                            <label>judul</label>
                                                            <input type="text" name="judul" class="form-control"
                                                                required>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-2">
                                                        <div class="col-md-12">
                                                            <label>tanggal</label>
                                                            <input type="date" name="tanggal" class="form-control"
                                                                required>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-2">
                                                        <div class="col-md-12">
                                                            <label>deskripsi</label>
                                                            <input type="text" name="deskripsi" class="form-control"
                                                                required>
                                                        </div>
                                                    </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Batal</button>
                                                <button type="sumbit" class="btn btn-primary">Simpan</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <!-- End -->

                                <style>
                                    .gambar {
                                        width: 100px;
                                    }
                                </style>
                                <div class="table-responsive p-3">
                                    <table class="table align-items-center table-flush" id="dataTable">
                                        <thead class="thead-light">

                                            <tr>
                                                <th>no</th>
                                                <th>gambar</th>
                                                <th>judul</th>
                                                <th>tanggal</th>
                                                <th>deskripsi</th>
                                                <th>action</th>
                                            </tr>
                                        </thead>
                                        <?php
                                        $no = 1;
                                        foreach ($Berita as $u) {
                                            ?>
                                            <tr>
                                                <td>
                                                    <?php echo $no++ ?>
                                                </td>
                                                <td>
                                                    <img class="gambar"
                                                        src="<?php echo base_url('assets/upload/'); ?><?php echo $u->gambar; ?>">
                                                </td>
                                                <td>
                                                    <?php echo $u->judul ?>
                                                </td>

                                                <td>
                                                    <?php echo $u->tanggal ?>
                                                </td>
                                                <td>
                                                    <?php echo $u->deskripsi ?>
                                                </td>
                                                <td>
                                                    <a class="btn btn-link btn-warning btn-lg" data-toggle="modal"
                                                        data-target="#ModalEdit<?php echo $u->id_Berita; ?>"><i
                                                            class=" fa fa-pen" data-original-title="Edit Task"
                                                            style="color:white;"></i></a>
                                                    <a class="btn btn-link btn-danger btn-lg" data-toggle="modal"
                                                        data-target="#ModalHapus<?php echo $u->id_Berita; ?>"><i
                                                            class=" fa fa-times" data-original-title="Edit Task"
                                                            style="color:white;"></i></a>
                                                </td>
                                            </tr>
                                        <?php } ?>

                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- DataTable with Hover -->

                    </div>
                    <!--Row-->

                    <!-- Documentation Link -->

                    <!-- Modal Logout -->
                    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabelLogout" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Are you sure you want to logout?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-primary"
                                        data-dismiss="modal">Cancel</button>
                                    <a href="login.html" class="btn btn-primary">Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!---Container Fluid-->
            </div>
            <!-- modal hapus -->
            <?php foreach ($Berita as $row):
                $id_Berita = $row->id_Berita;
                $gambar = $row->gambar;
                ?>
                <div class="modal fade" id="ModalHapus<?php echo $id_Berita; ?>" tabindex="-1" role="dialog"
                    aria-labelledby="">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <!--    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button> -->
                                <h4 class="modal-title" id="myModalLabel">Hapus gambar</h4>
                            </div>
                            <form class="form-horizontal" action="<?php echo base_url() . 'Admin/berita/delete' ?>"
                                method="post">
                                <div class="modal-body">
                                    <input type="hidden" name="id_Berita" value="<?php echo $id_Berita; ?>" />

                                    <p>Apakah Anda yakin mau menghapus <b>
                                            <?php echo $gambar; ?>
                                        </b> ?</p>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn" data-dismiss="modal">
                                        <i class="bx bx-x d-block d-sm-none"></i>
                                        <span class="d-none d-sm-block">Batal</span>
                                    </button>
                                    <button type="submit" class="btn btn-primary btn-flat" id="simpan">Hapus</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

            <!-- modal edit -->
            <?php foreach ($Berita as $row):
                $id_Berita = $row->id_Berita;
                $gambar = $row->gambar;
                $judul = $row->judul;
                $tanggal = $row->tanggal;
                $deskripsi = $row->deskripsi;
                ?>
                <div class="modal fade" id="ModalEdit<?php echo $id_Berita; ?>" tabindex="-1" role="dialog"
                    aria-labelledby="">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <!--    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button> -->
                                <h4 class="modal-title" id="myModalLabel">update Berita</h4>
                            </div>
                            <form class="form-horizontal" action="<?php echo base_url() . 'Admin/Berita/Update' ?>"
                                method="post">
                                <div class="modal-body">
                                    <div class="row mt-2">
                                        <div class="col-md-12">
                                            <label>gambar</label>
                                            <input type="file" name="gambar" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-md-12">
                                            <label>judul</label>
                                            <input type="text" name="judul" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-md-12">
                                            <label>tanggal</label>
                                            <input type="date" name="tanggal" class="form-control" required>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-md-12">
                                                <label>deskripsi</label>
                                                <input type="text" name="deskripsi" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn" data-dismiss="modal">
                                            <i class="bx bx-x d-block d-sm-none"></i>
                                            <span class="d-none d-sm-block">Batal</span>
                                        </button>
                                        <button type="submit" class="btn btn-primary btn-flat" id="simpan">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <!-- end modal hapus -->
            <!-- Footer -->
            <!-- Footer -->
        </div>
    </div>

    <!-- Scroll to top -->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <script src="<?php echo base_url('assets/admin/'); ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url('assets/admin/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url('assets/admin/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="<?php echo base_url('assets/admin/'); ?>js/ruang-admin.min.js"></script>
    <!-- Page level plugins -->
    <script src="<?php echo base_url('assets/admin/'); ?>vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url('assets/admin/'); ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script>
        $(document).ready(function () {
            $('#dataTable').DataTable(); // ID From dataTable 
            $('#dataTableHover').DataTable(); // ID From dataTable with Hover
        });
    </script>

</body>

</html>