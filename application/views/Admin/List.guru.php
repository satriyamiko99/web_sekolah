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
          <div class="d-sm-flex align-items-center justify-content-between mb-1">
            <h1 class="h3 mb-0 text-gray-800">Data Guru</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item">guru</li>
              <li class="breadcrumb-item active" aria-current="page">DataTables</li>
            </ol>
          </div>

          <!-- Row -->
          <div class="row">
            <!-- Data Guru -->
            <div class="col-lg-12">
              <div class="card mb-2">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">


                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Tambah Data
                  </button>
                </div>
                <!-- Data Guru -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                  aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Guru</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form action="<?php echo base_url('Admin/guru/Add'); ?>" method="post">
                          <div class="row mt-4">
                            <div class="col-md-12">
                              <label>nip </label>
                              <input type="text" name="nip" class="form-control" required>
                            </div>
                          </div>
                          <div class="row mt-2">
                            <div class="col-md-12">
                              <label>Nama</label>
                              <input type="text" name="nama_guru" class="form-control" required>
                            </div>
                          </div>
                          <div class="row mt-2">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>tempat Lahir</label>
                                <input type="text" name="tempat_lahir" class="form-control" required>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>tanggal lahir</label>
                                <input type="date" name="tanggal_lahir" class="form-control" required>
                              </div>
                            </div>
                          </div>
                          <div class="row mt-2">
                            <div class="col-md-12">
                              <label>jenis kelamin</label>
                              <select class="form-control" name="jenis_kelamin" required>
                                <option value=""> Pilih </option>
                                <option value="Laki-laki"> Laki-laki </option>
                                <option value="Perempuan"> Perempuan </option>
                              </select>
                            </div>
                          </div>
                          <div class="row mt-2">
                            <div class="col-md-12">
                              <label>mata pelajaran</label>
                              <select class="form-control" name="mata_pelajaran" required>
                                <option value=""> Pilih </option>
                                <option value="Matematika"> Matematika </option>
                                <option value="Ipa"> Ipa </option>
                                <option value="Kimia"> Kimia </option>
                                <option value="Bahasa inggris"> Bahasa Inggris</option>
                                <option value="biologi"> Biologi </option>
                                <option value="Fisika"> Fisika</option>
                              </select>
                            </div>
                          </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- End -->
                <div class="table-responsive p-2">
                  <table class="table align-items-center table-flush" id="dataTable">
                    <thead class="thead-light">
                      <tr>
                        <th>No</th>
                        <th>NIP</th>
                        <th>Nama</th>
                        <th>Tempat lahir</th>
                        <th>Tanggal lahir</th>
                        <th>L/P</th>
                        <th>Mata Pelajaran</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $no = 1;
                      foreach ($guru as $u) {
                        ?>
                        <tr>
                          <td>
                            <?php echo $no++ ?>
                          </td>
                          <td>
                            <?php echo $u->nip ?>
                          </td>
                          <td>
                            <?php echo $u->nama_guru ?>
                          </td>
                          <td>
                            <?php echo $u->tempat_lahir ?>
                          </td>
                          <td>
                            <?php echo $u->tanggal_lahir ?>
                          </td>
                          <td>
                            <?php echo $u->jenis_kelamin ?>
                          </td>
                          <td>
                            <?php echo $u->mata_pelajaran ?>
                          </td>
                          <td>
                            <a class="btn btn-link btn-warning btn-lg" data-toggle="modal"
                              data-target="#ModalEdit<?php echo $u->id_guru; ?>"><i class=" fa fa-pen"
                                data-original-title="Edit Task" style="color:white;"></i></a>
                            <a class="btn btn-link btn-danger btn-lg" data-toggle="modal"
                              data-target="#ModalHapus<?php echo $u->id_guru; ?>"><i class=" fa fa-times"
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
      <?php foreach ($guru as $row):
        $id_guru = $row->id_guru;
        $nama_guru = $row->nama_guru;
        ?>
        <div class="modal fade" id="ModalHapus<?php echo $id_guru; ?>" tabindex="-1" role="dialog" aria-labelledby="">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <!--    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button> -->
                <h4 class="modal-title" id="myModalLabel">Hapus data</h4>
              </div>
              <form class="form-horizontal" action="<?php echo base_url() . 'Admin/guru/delete' ?>" method="post">
                <div class="modal-body">
                  <input type="hidden" name="id_guru" value="<?php echo $id_guru; ?>" />

                  <p>Apakah Anda yakin mau menghapus <b>
                      <?php echo $nama_guru; ?>
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
      <?php foreach ($guru as $row):
        $id_guru = $row->id_guru;
        $nip = $row->nip;
        $nama_guru = $row->nama_guru;
        $tempat_lahir = $row->tempat_lahir;
        $tanggal_lahir = $row->tanggal_lahir;
        $jenis_kelamin = $row->jenis_kelamin;
        $mata_pelajaran = $row->mata_pelajaran;

        ?>
        <div class="modal fade" id="ModalEdit<?php echo $id_guru; ?>" tabindex="-1" role="dialog" aria-labelledby="">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <!--    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button> -->
                <h4 class="modal-title" id="myModalLabel">update guru</h4>
              </div>
              <form class="form-horizontal" action="<?php echo base_url() . 'Admin/guru/Update' ?>" method="post">
                <div class="modal-body">
                  <div class="row mt-4">
                    <div class="col-md-12">
                      <label>nip </label>
                      <input type="text" name="nip" class="form-control" required value="<?= $nip; ?>">
                      <input type="hidden" name="id_guru" value="<?= $id_guru; ?>">
                    </div>
                  </div>
                  <div class="row mt-2">
                    <div class="col-md-12">
                      <label>Nama</label>
                      <input type="text" name="nama_guru" class="form-control" required value="<?= $nama_guru; ?>">
                    </div>
                  </div>
                  <div class="row mt-2">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>tempat Lahir</label>
                        <input type="text" name="tempat_lahir" class="form-control" required
                          value="<?= $tempat_lahir; ?>">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>tanggal lahir</label>
                        <input type="date" name="tanggal_lahir" class="form-control" required
                          value="<?= $tanggal_lahir; ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row mt-2">
                    <div class="col-md-12">
                      <label>jenis kelamin</label>
                      <select class="form-control" name="jenis_kelamin" required value="<?= $jenis_kelamin; ?>">
                        <option value=""> Pilih </option>
                        <option value="Laki-laki"> Laki-laki </option>
                        <option value="Perempuan"> Perempuan </option>
                      </select>
                    </div>
                  </div>
                  <div class="row mt-2">
                    <div class="col-md-12">
                      <label>mata pelajaran</label>
                      <select class="form-control" name="mata_pelajaran" required value="<?= $mata_pelajaran; ?>">
                        <option value=""> Pilih </option>
                        <option value="Matematika"> Matematika </option>
                        <option value="Ipa"> Ipa </option>
                        <option value="Kimia"> Kimia </option>
                        <option value="Bahasa inggris"> Bahasa Inggris</option>
                        <option value="biologi"> Biologi </option>
                        <option value="Fisika"> Fisika</option>
                      </select>
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