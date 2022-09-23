<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

	<title>Beranda</title>
</head>

<body>
	<!-- Heading -->
	<div class=" heading pt-3 pb-1 mb-3">
		<div class="container">

			<h4 class=" text-white">
				Penerimaan Siswa Baru Online
			</h4>


			<h5 class=" text-white m-minus">
				SMK Negeri 2 Bogor - Jawa Barat
			</h5>



			<p class="text-white m-minus">
				Jl. Pangeran Sogiri No.404, Kota Bogor, Jawa Barat. email : smkn2bogor.sch.id 
			</p>


		</div>
	</div>

	<!-- Navbar -->
	<div class="">
		<nav class="container radius navbar navbar-expand-lg navbar-light " style="background-color: #ffffff;">
			<div class="container-fluid">
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<div class="navbar-nav">
						<a class="nav-link" aria-current="page" href="index.php"><i class="bi bi-house-door"></i> Beranda</a>
						<a class="nav-link " href="pendaftaran.php"><i class="bi bi-person-plus"></i> Buat Akun</a>
						<a class="nav-link " href="pengumuman.php"><i class="bi bi-bell"></i>Pengumuman</a>
					</div>
				</div>
				<form class="d-flex">
					<button type="button" class="btn btn-danger">Login</button>
				</form>
			</div>

		</nav>
	</div>




	<!-- Konten -->
	<div class="container my-5">
		<div class="row">
			<div class="col-6 rounded bg-white mt-0 radius offset-3 ">
				<form action="loginAct.php" method="POST">
					<small>
						<div class="form-group p-4 mb-1 pb-0">
							<label for="exampleInputEmail1"><b>Username</b>
							</label>
							<input type="text" class="form-control" id="username" placeholder="masukan username anda" name="username" placeholder="Enter Username">
						</div>


						<div class="form-group p-4 py-0">
							<label for="exampleInputPassword1"><b>Password</b></label>
							<input type="password" class="form-control" id="password" name="password" placeholder="Password" >
						</div>
					</small>

					<div class=" p-4 pt-2">
						<button type="submit" class="btn btn-success btn-sm	"><i class="bi bi-box-arrow-in-right"></i> Masuk</button>
						<a href="pendaftaran.php" class="btn btn-primary btn-sm"><i class="bi bi-person-plus"></i> Daftar Baru</a>
					</div>

				</form>
			</div>
		</div>
	</div>

	<!-- footer -->
	<div class="container-fluid my-3 text-center heading text-white">
		<p>Copyright @ 2022 <a href="index.php" class=" text-white">SMA NEGERI X MEDAN</a> </p>
	</div>



	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>