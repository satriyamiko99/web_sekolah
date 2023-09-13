<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/logo.png" rel="icon">
  <title>RuangAdmin - data siswa</title>
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
            <!-- Data siswa -->

            <!-- DataTable with Hover -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Data siswa</h6>

                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Tambah Data
                  </button>
                </div>

                <!--modal-->

                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                  aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Data siswa</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form action="<?php echo base_url('Admin/siswa/Add'); ?>" method="post">
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
                              <label>tempat/tanggal lahir </label>
                              <input type="text" name="tempat_tanggal_lahir" class="form-control" required>
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
                              <label>asal sekolah </label>
                              <input type="text" name="asal_sekolah" class="form-control" required>
                            </div>
                          </div>
                          <div class="row mt-2">
                            <div class="col-md-12">
                              <label>no.telphone </label>
                              <input type="text" name="no_telphone" class="form-control" required>
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
                <!--endmodal-->
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                    <thead class="thead-light">
                      <tr>
                        <th>No</th>
                        <th>Nisn</th>
                        <th>nama</th>
                        <th>tempat,Tanggal lahir</th>
                        <th>jenis kelamin</th>
                        <th>asal Sekolah</th>
                        <th>no.Telphone</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <?php
                    $no = 1;
                    foreach ($siswa as $u) {
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
                          <?php echo $u->tempat_tanggal_lahir ?>
                        </td>
                        <td>
                          <?php echo $u->jenis_kelamin ?>
                        </td>
                        <td>
                          <?php echo $u->asal_sekolah ?>
                        </td>

                        <td>
                          <?php echo $u->no_telphone ?>
                        </td>
                        <td>
                          <a class="btn btn-link btn-warning btn-lg" data-toggle="modal"
                            data-target="#ModalEdit<?php echo $u->id_siswa; ?>"><i class=" fa fa-pen"
                              data-original-title="Edit Task" style="color:white;"></i></a>
                          <a class="btn btn-link btn-danger btn-lg" data-toggle="modal"
                            data-target="#ModalHapus<?php echo $u->id_siswa; ?>"><i class=" fa fa-times"
                              data-original-title="Edit Task" style="color:white;"></i></a>
                        </td>
                      </tr>
                    <?php } ?>
                  </table>
                </div>
              </div>
            </div>
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
      <?php foreach ($siswa as $row):
        $id_siswa = $row->id_siswa;
        $Nisn = $row->Nisn;
        ?>
        <div class="modal fade" id="ModalHapus<?php echo $id_siswa; ?>" tabindex="-1" role="dialog" aria-labelledby="">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <!--    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button> -->
                <h4 class="modal-title" id="myModalLabel">Hapus User</h4>
              </div>
              <form class="form-horizontal" action="<?php echo base_url() . 'Admin/User/delete' ?>" method="post">
                <div class="modal-body">
                  <input type="hidden" name="id_siswa" value="<?php echo $id_siswa; ?>" />

                  <p>Apakah Anda yakin mau menghapus <b>
                      <?php echo $Nisn; ?>
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
      <?php foreach ($siswa as $row):
        $id_siswa = $row->id_siswa;
        $Nisn = $row->Nisn;
        $nama = $row->nama;
        $tempat_tanggal_lahir = $row->tempat_tanggal_lahir;
        $jenis_kelamin = $row->jenis_kelamin;
        $asal_sekolah = $row->asal_sekolah;
        $no_telphone = $row->no_telphone;
        ?>
        <div class="modal fade" id="ModalEdit<?php echo $id_siswa; ?>" tabindex="-1" role="dialog" aria-labelledby="">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <!--    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button> -->
                <h4 class="modal-title" id="myModalLabel">update siswa</h4>
              </div>
              <form class="form-horizontal" action="<?php echo base_url() . 'Admin/siswa/Update' ?>" method="post">
                <div class="modal-body">
                  <div class="row mt-2">
                    <div class="col-md-12">
                      <label>Nisn </label>
                      <input type="text" name="Nisn" class="form-control" required value="<?= $Nisn; ?>">
                      <input type="hidden" name="id_siswa" value="<?= $id_siswa; ?>">
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
                      <label>tempat/tanggal lahir </label>
                      <input type="text" name="tempat_tanggal_lahir" class="form-control" required
                        value="<?= $tempat_tanggal_lahir; ?>">
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
                      <label>asal sekolah </label>
                      <input type="text" name="asal_sekolah" class="form-control" required value="<?= $asal_sekolah; ?>">
                    </div>
                  </div>
                  <div class="row mt-2">
                    <div class="col-md-12">
                      <label>no.telphone </label>
                      <input type="text" name="no_telphone" class="form-control" required value="<?= $no_telphone; ?>">
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