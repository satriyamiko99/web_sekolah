<!doctype html>
<html lang="en">

<head>
	<title>Login 08</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="<?php echo base_url('assets/login/'); ?>css/style.css">

</head>

<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<!-- <h2 class="heading-section">Silahkan Mela</h2> -->
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
						<img src="<?php echo base_url('assets/'); ?>images/logoSMA.png" alt="" with="80" height="80">
						<h3 class="text-center mb-4">Silahkan Melakukan Login. </h3>
						<p>
							<?php echo $this->session->flashdata('msg'); ?>
						</p>
						<form action="<?php echo base_url('Login/Auth'); ?>" method="post" class="login-form">
							<div class="form-group">
								<input name="username" type="text" class="form-control rounded-left"
									placeholder="Username" required>
							</div>
							<div class="form-group d-flex">
								<input name="password" type="password" class="form-control rounded-left"
									placeholder="Password" required>
							</div>

							<div class="form-group">
								<button type="submit" class="btn btn-primary rounded submit p-3 px-5">Get
									Started</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="<?php echo base_url('assets/login/'); ?>js/jquery.min.js"></script>
	<script src="<?php echo base_url('assets/login/'); ?>js/popper.js"></script>
	<script src="<?php echo base_url('assets/login/'); ?>js/bootstrap.min.js"></script>
	<script src="<?php echo base_url('assets/login/'); ?>js/main.js"></script>

</body>

</html>