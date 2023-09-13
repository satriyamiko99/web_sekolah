<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/logo.png" rel="icon">
  <title>RuangAdmin - DataTables</title>
  <link href="<?php echo base_url('assets/admin/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet"
    type="text/css">
  <link href="<?php echo base_url('assets/admin/'); ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"
    type="text/css">
  <link href="<?php echo base_url('assets/admin/'); ?>css/ruang-admin.min.css" rel="stylesheet">
  <link href="<?php echo base_url('assets/admin/'); ?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
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
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data User</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item">Tables</li>
              <li class="breadcrumb-item active" aria-current="page">DataTables</li>
            </ol>
          </div>

          <!-- Row -->
          <div class="row">
            <!-- Datatables -->

            <!-- DataTable with Hover -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">DataTables with Hover</h6>


                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Tambah Data
                  </button>
                  <!-- modal -->

                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Tambah Data User</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form action="<?php echo base_url('/Admin/User/Add'); ?>" method="POST">
                            <div class="row mt-4">
                              <div class="col-md-12">
                                <label>Nama User </label>
                                <input type="text" name="nama_user" class="form-control" required>
                              </div>
                            </div>
                            <div class="row mt-4">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label>Username</label>
                                  <input type="text" name="username" class="form-control" required>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label>Password</label>
                                  <input type="password" name="password" class="form-control" required>
                                </div>
                              </div>
                            </div>
                            <div class="row mt-2">
                              <div class="col-md-12">
                                <label>Hak Akses</label>
                                <select class="form-control" name="hak_akses" required>
                                  <option value=""> Pilih </option>
                                  <option value="admin"> Admin </option>
                                  <option value="kepsek"> Kepsek </option>
                                </select>
                              </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  <!-- end -->
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                    <thead class="thead-light">
                      <tr>
                        <th>No</th>
                        <th>Nama User</th>
                        <th>Username</th>
                        <th>Hak Akses</th>
                        <th>Action</th>
                      </tr>
                    </thead>

                    <tbody>
                      <?php
                      $no = 1;
                      foreach ($user as $u) {
                        ?>
                        <tr>
                          <td>
                            <?php echo $no++ ?>
                          </td>
                          <td>
                            <?php echo $u->nama_user ?>
                          </td>
                          <td>
                            <?php echo $u->username ?>
                          </td>
                          <td>
                            <?php echo $u->hak_akses ?>
                          </td>
                          <td>
                            <a class="btn btn-link btn-warning btn-lg" data-toggle="modal"
                              data-target="#ModalEdit<?php echo $u->id_user; ?>"><i class=" fa fa-pen"
                                data-original-title="Edit Task" style="color:white;"></i></a>
                            <a class="btn btn-link btn-danger btn-lg" data-toggle="modal"
                              data-target="#ModalHapus<?php echo $u->id_user; ?>"><i class=" fa fa-times"
                                data-original-title="Edit Task" style="color:white;"></i></a>
                          </td>
                        </tr>
                      <?php } ?>

                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!--Row-->

          <!-- modal hapus -->
          <?php foreach ($user as $row):
            $id_user = $row->id_user;
            $username = $row->username;
            ?>
            <div class="modal fade" id="ModalHapus<?php echo $id_user; ?>" tabindex="-1" role="dialog" aria-labelledby="">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <!--    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button> -->
                    <h4 class="modal-title" id="myModalLabel">Hapus User</h4>
                  </div>
                  <form class="form-horizontal" action="<?php echo base_url() . 'Admin/User/delete' ?>" method="post">
                    <div class="modal-body">
                      <input type="hidden" name="id_user" value="<?php echo $id_user; ?>" />

                      <p>Apakah Anda yakin mau menghapus <b>
                          <?php echo $username; ?>
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
          <!-- end modal hapus -->




          <!-- modal edit -->
          <?php foreach ($user as $row):
            $id_user = $row->id_user;
            $nama_user = $row->nama_user;
            $username = $row->username;
            $hak_akses = $row->hak_akses;
            ?>
            <div class="modal fade" id="ModalEdit<?php echo $id_user; ?>" tabindex="-1" role="dialog" aria-labelledby="">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <!--    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button> -->
                    <h4 class="modal-title" id="myModalLabel">Edit User</h4>
                  </div>
                  <form class="form-horizontal" action="<?php echo base_url() . 'Admin/User/Update' ?>" method="post">
                    <div class="modal-body">
                      <div class="row mt-4">
                        <div class="col-md-12">
                          <label>Nama User </label>
                          <input type="text" name="nama_user" class="form-control" required value="<?= $nama_user; ?>">
                          <input type="hidden" name="id_user" value="<?= $id_user; ?>">
                        </div>
                      </div>
                      <div class="row mt-4">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" required value="<?= $username; ?>">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" required>
                          </div>
                        </div>
                      </div>
                      <div class="row mt-2">
                        <div class="col-md-12">
                          <label>Hak Akses</label>
                          <select class="form-control" name="hak_akses" required>
                            <option value="<?php echo $hak_akses; ?>"> <?php echo $hak_akses; ?> </option>
                            <option value="admin"> Admin </option>
                            <option value="kepsek"> Kepsek </option>
                          </select>
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
                  </form>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
          <!-- end modal hapus -->
          <!-- Documentation Link -->
          <!-- Modal Logout -->
          <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
            aria-hidden="true">
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
                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                  <a href="login.html" class="btn btn-primary">Logout</a>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!---Container Fluid-->
      </div>

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