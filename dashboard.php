<?php
	require "koneksi.php";

    $querydokter = mysqli_query($conn, "SELECT * FROM dokter");
	$jumlahdokter = mysqli_num_rows($querydokter);

    $querypasien = mysqli_query($conn, "SELECT * FROM pasien");
	$jumlahpasien = mysqli_num_rows($querypasien);

    $queryobat = mysqli_query($conn, "SELECT * FROM obat");
	$jumlahobat = mysqli_num_rows($queryobat);

    $queryberobat = mysqli_query($conn, "SELECT * FROM berobat");
	$jumlahberobat = mysqli_num_rows($queryberobat);

    $queryresep = mysqli_query($conn, "SELECT * FROM resep_obat");
	$jumlahresep = mysqli_num_rows($queryresep);
    
    $queryuser = mysqli_query($conn, "SELECT * FROM user");
	$jumlahuser = mysqli_num_rows($queryuser);
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>Ema Rosida</title>
  </head>
  <body>
   
  <nav class="navbar navbar-expand-lg navbar-light bg-success fixed-top">
    <a class="navbar-brand" href="#">SELAMAT DATANG ADMIN | <b>KLINIK NCTZen</b></a>
    
        <form class="form-inline my-2 my-lg-0 ml-auto">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0 text-white" type="submit">Search</button>
        </form>
    </nav>

<div class="row no-gutters mt-5">
    <div class="col-md2 bg-dark mt-2 pr-3 pt-4">
           <ul class="nav flex-column ml-3 mb-5">
            <li class="nav-item">
                <a class="nav-link active text-white" href="dashboard.php"><i class="fa-solid fa-house-chimney mr-2"></i>Dashboard</a><hr class="bg-secondary">
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="dokter.php"><i class="fa-solid fa-user-doctor mr-2"></i>Dokter</a><hr class="bg-secondary">
            </li>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="pasien.php"><i class="fa-solid fa-bed-pulse mr-2"></i>Pasien</a><hr class="bg-secondary">
            </li>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="obat.php"><i class="fa-solid fa-capsules mr-2"></i>Obat</a><hr class="bg-secondary">
            </li>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="berobat.php"><i class="fa-solid fa-syringe mr-2"></i>Berobat</a><hr class="bg-secondary">
            </li>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="resep_obat.php"><i class="fa-solid fa-tablets mr-2"></i>Resep Obat</a><hr class="bg-secondary">
            </li>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="user.php"><i class="fa-solid fa-users mr-2"></i>User</a><hr class="bg-secondary">
            </li>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="logout.php"><i class="fa-solid fa-right-from-bracket mr-2"></i>Logout</a><hr class="bg-secondary">
            </li>
            </li>
            </li>
            </li>
            </ul>
    </div>
    <div class="col-md-10 p-5 pt-2">
    <h3><i class="fa-solid fa-house-chimney mr-2"></i>KLINIK NCTZen</h3><hr>

    <div class="row text-white">
        <div class="card bg-info ml-3" style="width: 18rem;">
            <div class="card-body">
                <div class="card-body-icon">
                <i class="fa-solid fa-user-doctor mr-2"></i>
                </div>
                    
                    <h5 class="card-title">DOKTER</h5>
					<p class="fs-4"><?php echo $jumlahdokter; ?> Dokter</p>
                    <a href="dokter.php"><p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>
        </div>
    </div>

    <div class="row text-white">
        <div class="card bg-success ml-5" style="width: 18rem;">
            <div class="card-body">
                <div class="card-body-icon">
                <i class="fa-solid fa-bed-pulse mr-2"></i>
                </div>
                    
                    <h5 class="card-title">PASIEN</h5>
					<p class="fs-4"><?php echo $jumlahpasien; ?> Pasien</p>
                    <a href="pasien.php"><p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>
        </div>
    </div>

    <div class="row text-white">
        <div class="card bg-danger ml-5" style="width: 18rem;">
            <div class="card-body">
                <div class="card-body-icon">
                <i class="fa-solid fa-capsules mr-2"></i>
                </div>
                    
                    <h5 class="card-title">OBAT</h5>
					<p class="fs-4"><?php echo $jumlahobat; ?> Obat</p>
                    <a href="obat.php"><p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>
        </div>
    </div>
    </div>
</div>

    <div class="row text-white p-3">
        <div class="card bg-warning ml-3" style="width: 18rem;">
            <div class="card-body">
                <div class="card-body-icon">
                <i class="fa-solid fa-syringe mr-2"></i>
                </div>
                    
                    <h5 class="card-title">BEROBAT</h5>
					<p class="fs-4"><?php echo $jumlahberobat; ?> Berobat</p>
                    <a href="berobat.php"><p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>
        </div>
    </div>
    
    <div class="row text-white">
        <div class="card bg-secondary ml-5" style="width: 18rem;">
            <div class="card-body">
                <div class="card-body-icon">
                <i class="fa-solid fa-tablets mr-2"></i>
                </div>
                    
                    <h5 class="card-title">RESEP OBAT</h5>
					<p class="fs-4"><?php echo $jumlahresep; ?> Resep Obat</p>
                    <a href="resep.php"><p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>
        </div>
    </div>
  
    <div class="row text-white">
        <div class="card bg-primary ml-5" style="width: 18rem;">
            <div class="card-body">
                <div class="card-body-icon">
                <i class="fa-solid fa-users mr-2"></i>
                </div>
                    
                    <h5 class="card-title">USER</h5>
					<p class="fs-4"><?php echo $jumlahuser; ?> User</p>
                    <a href="user.php"><p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>
        </div>
    </div>
</div>
</div>

<div class="card" style="margin-top:2rem;">
				<div class="card-body text-dark">
					<h4>Data Berobat Laki-Laki</h4>
					<div class="container mt-4">
						<table class="table" style="margin-top:1rem;">
							<thead>
								<tr>
									<td>No.</td>
									<td>Nama Pasien</td>
									<td>Jenis Kelamin</td>
									<td>Umur</td>
									<td>Keluhan</td>
									<td>Hasil Diagnosa</td>
									<td>Nama Dokter</td>
								</tr>
							</thead>
							<?php
								$no = 1;
								$query = mysqli_query($conn, 'SELECT * FROM viewPenyakit');
								while ($data = mysqli_fetch_array($query)) {
							?>
							<tr>
								<td><?= $no++ ?></td>
								<td><?= $data['nama_pasien'] ?></td>
								<td><?= $data['jenis_kelamin'] ?></td>
								<td><?= $data['umur'] ?></td>
								<td><?= $data['keluhan_pasien'] ?></td>
								<td><?= $data['hasil_diagnosa'] ?></td>
								<td><?= $data['nama_dokter'] ?></td>
							</tr>
							<?php } ?>
						</table>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>
	
	<?php require "footer.php";?>
</div>
</body>
</html>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" src="admin.js"></script>

    
  </body>
</html>