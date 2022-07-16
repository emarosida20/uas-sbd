<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css" />
    <script src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="fontawesome/fontawesome/css/all.css" />
    <title>Menampilkan data dari database</title>
	<style>
		.hero {
			background-color: #0a516b;
			border-radius: 5px;
			padding: 10px 23px;
			margin-bottom: 20px;

        }
        table,tr,td {
            border: 1px solid black;
        }
        thead {
            background-color: #cccddd;
        }
	
	</style>
</head>
<body>
<div class="container shadow p-3">
	<header>
	<h2 align="center" class="hero text-white">Tabel Obat</h2>
	</header>
	<hr>
	<div class="btn-toolbar mb-2 mb-md-10">
		<a class="btn btn-primary me-3" href="dashboard.php" role="button">Kembali</a>
        <a class="btn btn-primary " href="log_obat.php" role="button S">Tambah</a>
	</div> 
	<div class="table-responsive">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <td>No</td>
				<td>Id Log</td>
                <td>Id Obat</td>
                <td>Nama Obat Lama</td>      
                <td>Nama Obat Baru</td>  
                <td>Waktu</td>        
            </tr>
        </thead>
        <?php
        include "koneksi.php";
        $no = 1;
        $query = mysqli_query($conn, 'SELECT * FROM obat');
        while ($data = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
				<td><?php echo $data['id_log'] ?></td>
                <td><?php echo $data['id_obat'] ?></td>
                <td><?php echo $data['nama_obat_lama'] ?></td>
                <td><?php echo $data['nama_obat_baru'] ?></td>
                <td><?php echo $data['waktu'] ?></td>
                <td>
                    <a class="btn btn-success" href="obat_ubah.php?id=<?= $data['id_log'];?>" role="button"><i class="fa-solid fa-pen-to-square"></i>Edit</a>
					<a class="btn btn-danger" href="obat_hapus.php?id=<?= $data['id_log'];?>" role="button"><i class="fa-solid fa-trash-can"></i>Hapus</a>
                </td>
            </tr>
        <?php } ?>
    </table>
	</div>
	<?php require "footer.php";?>
</div>
</body>
</html>