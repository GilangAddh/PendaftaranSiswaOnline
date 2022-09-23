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

	<title>Pendaftaran</title>
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
						<a class="nav-link " href="index.php"><i class="bi bi-house-door"></i> Beranda</a>
						<a class="nav-link active" href="pendaftaran.php"><i class="bi bi-person-plus"></i> Pendaftaran</a>
						<a class="nav-link " href="pengumuman.php"><i class="bi bi-bell"></i>Pengumuman</a>
					</div>
				</div>
				<form class="d-flex">
					<a href="login.php" class="btn btn-outline-danger">Login</a>
				</form>
			</div>

		</nav>
	</div>



 
	<!-- Konten -->
	<div class="container mt-3">
		<div class="row">
			<!-- Konten kiri -->
			<div class=" col bg-white radius">
				<p class="h6 pt-3">INPUT DATA SISWA</p>
				<form action="pendaftaranAct.php" method="POST">
					<div class="container-fluid bg-abu radius">
						<div class="mb-3 pt-1">
							<label for="username" class="form-label">Username</label>
							<input type="text" class="form-control" id="username" placeholder="masukan username anda" name="username">
						</div>
						<div class="mb-3">
							<label for="password" class="form-label">Password</label>
							<input type="password" class="form-control" id="password" name="password" placeholder="masukan password anda">
						</div>
						<div class="mb-3">
							<label for="name" class="form-label">Nama Lengkap</label>
							<input type="text" class="form-control" id="name" placeholder="masukan nama lengkap anda" name="name">
						</div>
						<div class="mb-3">
							<label for="email" class="form-label">Email</label>
							<input type="email" class="form-control" id="email" placeholder="masukan email anda" name="email">
						</div>
						<div class="mb-4 pb-2">
							<button type="submit" class="btn btn-primary btn-sm"><i class="bi bi-save2"></i> Submit</button>
							<button type="reset" class="btn btn-danger btn-sm"><i class="bi bi-trash3"></i> Hapus</button>
						</div>
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