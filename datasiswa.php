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

	<title>Data Siswa</title>
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
						<a class="nav-link active" href="#"><i class="bi bi-card-checklist"></i> Data Siswa</a>
					</div>
				</div>
				<form class="d-flex">
					<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
					<button class="btn btn-outline-success" type="submit">Search</button>
				</form>
			</div>

		</nav>
	</div>




	<!-- Konten -->
	<div class="container mt-3">
		<div class="row">
			<div class="container bg-white radius">
				<table class="table text-center mt-3">
					<thead class="table-primary radius">
						<tr>
							<th scope="col">No</th>
							<th scope="col">Username</th>
							<th scope="col">Password</th>
							<th scope="col">Nama Lengkap</th>
							<th scope="col">Email</th>
							<th scope="col">Action</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<?php
							include 'koneksi.php';

							$no = 1;
							$sql = mysqli_query($koneksi, "SELECT * FROM data_siswa");
							while ($data = mysqli_fetch_array($sql)) {
							?>
						</tr>
						<tr>
							<td><?= $no++ ?></td>
							<td><?= $data['username_siswa']; ?></td>
							<td><?= $data['password_enk']; ?></td>
							<td><?= $data['nama_siswa']; ?></td>
							<td><?= $data['email_siswa']; ?></td>
							<td>
								<a href="edit.php?id= <?= $data['id_siswa']; ?>" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i> Edit</a>
								<a href="hapus.php?id= <?= $data['id_siswa']; ?>" class="btn btn-danger btn-sm"><i class="bi bi-trash3"></i> Hapus</a>
							</td>
						</tr>
					<?php } ?>
					</tbody>
				</table>
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