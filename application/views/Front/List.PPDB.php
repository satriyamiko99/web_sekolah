<!doctype html>
<!--[if IE 9]> <html class="no-js ie9 fixed-layout" lang="en"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js " lang="en"> <!--<![endif]-->

<?php include 'Part/Head.php'; ?>

<body>

    <!-- LOADER -->
    <div id="preloader">
        <img class="preloader" src="images/loader.gif" alt="">
    </div><!-- end loader -->
    <!-- END LOADER -->

    <div id="wrapper">
        <!-- BEGIN # MODAL LOGIN -->
        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Begin # DIV Form -->
                    <div id="div-forms">
                        <form id="login-form">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span class="flaticon-add" aria-hidden="true"></span>
                            </button>
                            <div class="modal-body">
                                <input class="form-control" type="text" placeholder="What you are looking for?"
                                    required>
                            </div>
                        </form><!-- End # Login Form -->
                    </div><!-- End # DIV Form -->
                </div>
            </div>
        </div>
        <!-- END # MODAL LOGIN -->

        <?php include 'Part/Header.php'; ?>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="section-title text-center">
                    <h3>Contact Form</h3>
                    <p>FORMULIR PENDAFTARAN</p>

                </div><!-- end title -->

                <form class="big-contact-form" role="search">
                    <div class="row">
                        <div class="col-md-6">
                            <div clas="form-group">
                                <label>Nik </label>
                                <input type="text" class="form-control" required name="Nik">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div clas="form-group">
                                <label>Nisn </label>
                                <input type="text" class="form-control" required name="Nisn">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div clas="form-group">
                                <label>Nama Lengkap </label>
                                <input type="text" class="form-control" required name="nama_lengkap">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div clas="form-group">
                                <label>Nama Paangilan </label>
                                <input type="text" class="form-control" required name="nama_Pangilan">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div clas="form-group">
                                <label>jenis kelamin </label>
                                <select class="form-control" name="jenis_kelamin" required>
                                    <option value=""> Pilih </option>
                                    <option value="Laki-laki"> laki-laki </option>
                                    <option value="perempuan"> perempuan </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div clas="form-group">
                                <label>tempat lahir </label>
                                <input type="text" class="form-control" required name="tempat-lahir">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div clas="form-group">
                                <label>tanggal lahir </label>
                                <input type="text" class="form-control" required name="tanggal_lahir">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div clas="form-group">
                                <label>agama </label>
                                <select class="form-control" name="agama" required>
                                    <option value=""> Pilih </option>
                                    <option value="Islam"> Islam </option>
                                    <option value="K.Katolik"> K.Katolik</option>
                                    <option value="K.Prostestan"> K.Prostestan</option>
                                    <option value="Budha"> Budha</option>
                                    <option value="Hindu"> Hindu</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div clas="form-group">
                                <label>kewarganegaraan </label>
                                <select class="form-control" name="jenis_kelamin" required>
                                    <option value=""> Pilih </option>
                                    <option value="Indonesia"> Indonesia </option>
                                    <option value="Asing"> Asing </option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div clas="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control" required name="email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div clas="form-group">
                                <label>hobby / cita-cita </label>
                                <input type="text" class="form-control" required name="hobby_cita-cita">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div clas="form-group">
                                <label>Berat Badan</label>
                                <input type="text" class="form-control" required name="Berat_Badan">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div clas="form-group">
                                <label>Tinggi Badan </label>
                                <input type="text" class="form-control" required name="Tinggi Badan">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div clas="form-group">
                                <label>Nama Bapak</label>
                                <input type="text" class="form-control" required name="nama_ayah">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div clas="form-group">
                                <label> Nama Ibu</label>
                                <input type="text" class="form-control" required name="nama_ibu">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div clas="form-group">
                                <label>Perkerjaan Bapak</label>
                                <input type="text" class="form-control" required name="Pekerjaan_Bapak">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div clas="form-group">
                                <label>Perkerjaan Ibu</label>
                                <input type="text" class="form-control" required name="Pekerjaan_Ibu">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div clas="form-group">
                                <label>No.Telphone/Hp</label>
                                <input type="text" class="form-control" required name="No_Telphone_Hp">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div clas="form-group">
                                <label> Alamat </label>
                                <input type="text" class="form-control" required name="Alamat">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div><!-- end col -->
        </div><!-- end row -->
        <br>

        <footer class="section footer noover">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="widget clearfix">
                            <h3 class="widget-title">Subscribe Our Newsletter</h3>
                            <div class="newsletter-widget">
                                <p>You can opt out of our newsletters at any time.<br> See our <a href="#">privacy
                                        policy</a>.</p>
                                <form class="form-inline" role="search">
                                    <div class="form-1">
                                        <input type="text" class="form-control" placeholder="Enter email here..">
                                        <button type="submit" class="btn btn-primary"><i
                                                class="fa fa-paper-plane-o"></i></button>
                                    </div>
                                </form>
                                <img src="images/logoSMA.png" alt="" class="img-responsive">
                            </div><!-- end newsletter -->
                        </div><!-- end widget -->
                    </div><!-- end col -->

                    <div class="col-lg-3 col-md-3">
                        <div class="widget clearfix">
                            <h3 class="widget-title">Join us today</h3>
                            <p>Would you like to earn your profits by joining our team? Join us without losing time.</p>
                            <a href="#" class="readmore">Became a Teacher</a>
                        </div><!-- end widget -->
                    </div><!-- end col -->

                    <div class="col-lg-3 col-md-3">
                        <div class="widget clearfix">
                            <h3 class="widget-title">Popular Tags</h3>
                            <div class="tags-widget">
                                <ul class="list-inline">
                                    <li><a href="#">course</a></li>
                                    <li><a href="#">web design</a></li>
                                    <li><a href="#">development</a></li>
                                    <li><a href="#">language</a></li>
                                    <li><a href="#">teacher</a></li>
                                    <li><a href="#">speaking</a></li>
                                    <li><a href="#">material</a></li>
                                    <li><a href="#">css3</a></li>
                                    <li><a href="#">html</a></li>
                                    <li><a href="#">learning</a></li>
                                </ul>
                            </div><!-- end list-widget -->
                        </div><!-- end widget -->
                    </div><!-- end col -->

                    <div class="col-lg-2 col-md-2">
                        <div class="widget clearfix">
                            <h3 class="widget-title">Support</h3>
                            <div class="list-widget">
                                <ul>
                                    <li><a href="#">Terms of Use</a></li>
                                    <li><a href="#">Copyrights</a></li>
                                    <li><a href="#">Create a Ticket</a></li>
                                    <li><a href="#">Pricing & Plans</a></li>
                                    <li><a href="#">Carrier</a></li>
                                    <li><a href="#">Trademark</a></li>
                                </ul>
                            </div><!-- end list-widget -->
                        </div><!-- end widget -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </footer><!-- end footer -->

        <div class="copyrights">
            <div class="container">
                <div class="clearfix">
                    <div class="pull-left">
                        <div class="cop-logo">
                            <a href="#"><img src="images/logo.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div><!-- end container -->
        </div><!-- end copy -->
    </div><!-- end wrapper -->

    <?php include 'Part/Js.php'; ?>

</body>

</html>