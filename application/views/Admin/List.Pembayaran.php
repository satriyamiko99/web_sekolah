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

          <!-- Row -->
          <div class="row">
            <!-- Data Guru -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Data Pembayaran</h6>

                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Tambah Data
                  </button>
                </div>
                <!-- Data Guru -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                  aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Data pembayaran</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form action="<?php echo base_url('Admin/pembayaran/Add'); ?>" method="post">
                          <div class="row mt-2">
                            <div class="col-md-12">
                              <label>Nisn </label>
                              <input type="text" name="Nisn" class="form-control" required>
                            </div>
                          </div>
                          <div class="row mt-2">
                            <div class="col-md-12">
                              <label>nama</label>
                              <input type="text" name="nama" class="form-control" required>
                            </div>
                          </div>
                          <div class="row mt-2">
                            <div class="col-md-12">
                              <label>kelas </label>
                              <input type="text" name="kelas" class="form-control" required>
                            </div>
                          </div>
                          <div class="row mt-2">
                            <div class="col-md-12">
                              <label>jenis kelamin</label>
                              <select class="form-control" name="jenis_kelamin" required>
                                <option value=""> Pilih </option>
                                <option value="Laki-laki"> laki-laki </option>
                                <option value="perempuan"> perempuan </option>
                              </select>
                            </div>
                          </div>
                          <div class="row mt-2">
                            <div class="col-md-12">
                              <label>struk </label>
                              <input type="file" name="struk" class="form-control" required>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Simpan </button>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- End -->
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush" id="dataTable">
                    <thead class="thead-light">
                      <tr>
                        <th>No</th>
                        <th>Nisn</th>
                        <th>Nama</th>
                        <th>kelas</th>
                        <th>jenis kelamin</th>
                        <th>struk</th>
                        <th>Action</th>
                      </tr>
                    </thead>

                    <?php
                    $no = 1;
                    foreach ($pembayaran as $u) {
                      ?>
                      <tr>
                        <td>
                          <?php echo $no++ ?>
                        </td>
                        <td>
                          <?php echo $u->Nisn ?>
                        </td>
                        <td>
                          <?php echo $u->nama ?>
                        </td>
                        <td>
                          <?php echo $u->kelas ?>
                        </td>
                        <td>
                          <?php echo $u->jenis_kelamin ?>
                        </td>
                        <td>
                          <a href="<?php echo base_url('assets/upload/'); ?><?php echo $u->struk; ?>" target="_blank">
                            <img style="width:20px" src="<?php echo base_url('assets/images/file.jpg'); ?>">
                          </a>
                        </td>
                        <?php echo $u->struk ?>
                        </td>
                        <td>
                          <a class="btn btn-link btn-warning btn-lg" data-toggle="modal"
                            data-target="#ModalEdit<?php echo $u->id_pembayaran; ?>"><i class=" fa fa-pen"
                              data-original-title="Edit Task" style="color:white;"></i></a>
                          <a class="btn btn-link btn-danger btn-lg" data-toggle="modal"
                            data-target="#ModalHapus<?php echo $u->id_pembayaran; ?>"><i class=" fa fa-times"
                              data-original-title="Edit Task" style="color:white;"></i></a>
                        </td>
                      </tr>
                    <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!-- DataTable with Hover -->

          </div>
          <!--Row-->
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

      <!-- modal hapus -->
      <?php foreach ($pembayaran as $row):
        $id_pembayaran = $row->id_pembayaran;
        $nama = $row->nama;
        ?>
        <div class="modal fade" id="ModalHapus<?php echo $id_pembayaran; ?>" tabindex="-1" role="dialog"
          aria-labelledby="">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <!--    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button> -->
                <h4 class="modal-title" id="myModalLabel">Hapus data</h4>
              </div>
              <form class="form-horizontal" action="<?php echo base_url() . 'Admin/pembayaran/delete' ?>" method="post">
                <div class="modal-body">
                  <input type="hidden" name="id_pembayaran" value="<?php echo $id_pembayaran; ?>" />

                  <p>Apakah Anda yakin mau menghapus <b>
                      <?php echo $nama; ?>
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
      <?php foreach ($pembayaran as $row):
        $id_pembayaran = $row->id_pembayaran;
        $Nisn = $row->Nisn;
        $nama = $row->nama;
        $kelas = $row->kelas;
        $jenis_kelamin = $row->jenis_kelamin;
        $struk = $row->struk;

        ?>
        <div class="modal fade" id="ModalEdit<?php echo $id_pembayaran; ?>" tabindex="-1" role="dialog"
          aria-labelledby="">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <!--    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button> -->
                <h4 class="modal-title" id="myModalLabel">update pembayaran</h4>
              </div>
              <form class="form-horizontal" action="<?php echo base_url() . 'Admin/pembayaran/Update' ?>" method="post">
                <div class="modal-body">
                  <div class="row mt-2">
                    <div class="col-md-12">
                      <label>Nisn </label>
                      <input type="text" name="Nisn" class="form-control" required value="<?= $Nisn; ?>">
                      <input type="hidden" name="id_pembayaran" value="<?= $id_pembayaran; ?>">
                    </div>
                  </div>
                  <div class="row mt-2">
                    <div class="col-md-12">
                      <label>nama</label>
                      <input type="text" name="nama" class="form-control" required value="<?= $nama; ?>">
                    </div>
                  </div>
                  <div class="row mt-2">
                    <div class="col-md-12">
                      <label>kelas </label>
                      <input type="text" name="kelas" class="form-control" required value="<?= $kelas; ?>">
                    </div>
                  </div>
                  <div class="row mt-2">
                    <div class="col-md-12">
                      <label>jenis kelamin</label>
                      <select class="form-control" name="jenis_kelamin" required value="<?= $jenis_kelamin; ?>">
                        <option value=""> Pilih </option>
                        <option value="Laki-laki"> laki-laki </option>
                        <option value="perempuan"> perempuan </option>
                      </select>
                    </div>
                  </div>
                  <div class="row mt-2">
                    <div class="col-md-12">
                      <label>struk </label>
                      <input type="file" name="struk" class="form-control" required value="<?= $struk; ?>">
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan </button>
                  </div>
                </div>
            </div>
          </div>
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