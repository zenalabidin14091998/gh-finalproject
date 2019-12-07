<?php 
include_once 'view/admin/header.php';
include_once 'view/admin/topmenu.php';
include_once 'view/admin/footer.php';
 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php 
		//Biodata
		$nama_depan = $_POST['nama_depan'];
		$nama_belakang = $_POST['nama_belakang'];
		$handphone = $_POST['handphone'];
		$alamat = $_POST['alamat'];
		$email = $_POST['email'];
		$about = $_POST['about'];

		//Skill
		$kemampuan = $_POST['kemampuan'];
		$kemampuan_2 = $_POST['kemampuan_2'];
		$kemampuan_3 = $_POST['kemampuan_3'];
		$kemampuan_4 = $_POST['kemampuan_4'];

		//pengalaman
		$pengalaman = $_POST['pengalaman'];
		$judul = $_POST['judul'];
		$tanggal = $_POST['tanggal'];
		$keterangan = $_POST['keterangan'];

		//pengalaman kedua
		$pengalaman_2 = $_POST['pengalaman_2'];
		$judul_2 = $_POST['judul_2'];
		$tanggal_2 = $_POST['tanggal_2'];
		$keterangan_2 = $_POST['keterangan_2'];

		//riwayat sekolah
		$nama_sekolah = $_POST['nama_sekolah'];
		$gelar = $_POST['gelar'];
		$tanggal_tamat = $_POST['tanggal_tamat'];

		//penghargaan
		$penghargaan = $_POST['Penghargaan'];
		$penghargaan_2 = $_POST['penghargaan_2'];
		$penghargaan_3 = $_POST['penghargaan_3'];
		$penghargaan_4 = $_POST['penghargaan_4'];
	 ?>
</head>
<body>

	<div class="container-fluid">
		<h2><center> cek data </center></h2>
		<hr color="black">
	<table border="4">
		<tr>
			<td colspan="6"><h3><center> Biodata </center></h3></td>
		</tr>
		<tr>
			<td>Nama Depan</td>
			<td>Nama Belakang</td>
			<td>Handphone</td>
			<td>Alamat</td>
			<td>email</td>
			<td>About</td>
		</tr>
		<tr>
			<td><?php echo "<b>$nama_depan</b>" ?></td>
			<td><?php echo "<b>$nama_belakang</b>" ?></td>
			<td><?php echo "<b>$handphone</b>" ?></td>
			<td><?php echo "<b>$alamat</b>" ?></td>
			<td><?php echo "<b>$email</b>" ?></td>
			<td><?php echo "<b>$about</b>" ?></td>
		</tr>
	</table>
	</div><br>

	<div class="container-fluid">
		<table border="4">
			<tr>
				<td colspan="4"><h3><center> Skill </center></h3></td>
			</tr>
			<tr>
				<td>kemampuan 1</td>
				<td>kemampuan 2</td>
				<td>kemampuan 3</td>
				<td>kemampuan 4</td>
			</tr>
			<tr>
				<td><?php echo "<b>$kemampuan</b>" ?></td>
				<td><?php echo "<b>$kemampuan_2</b>" ?></td>
				<td><?php echo "<b>$kemampuan_3</b>" ?></td>
				<td><?php echo "<b>$kemampuan_4</b>" ?></td>
			</tr>
		</table>
	</div><br>

	<div class="container-fluid">
		<table border="4">
			<tr>
				<td colspan="4"><h3><center>Pengalaman</center></h3></td>
			</tr>
			<tr>
				<td>pengalaman</td>
				<td>jabatan</td>
				<td>masa pengalaman</td>
				<td>keterangan</td>
			</tr>
			<tr>
				<td><?php echo "<b>$pengalaman</b>" ?></td>
				<td><?php echo "<b>$judul</b>" ?></td>
				<td><?php echo "<b>$tanggal</b>" ?></td>
				<td><?php echo "<b>$keterangan</b>" ?></td>
			</tr>
			<tr>
				<td><?php echo "<b>$pengalaman_2</b>" ?></td>
				<td><?php echo "<b>$judul_2</b>" ?></td>
				<td><?php echo "<b>$tanggal_2</b>" ?></td>
				<td><?php echo "<b>$keterangan_2</b>" ?></td>
			</tr>
		</table>
	</div><br>

	<div class="container-fluid">
		<table border="4">
			<tr>
				<td colspan="3"><h3><center>Riwayat Sekolah</center></h3></td>
			</tr>
			<tr>
				<td>Unversity</td>
				<td>Title</td>
				<td>Tamatan</td>
			</tr>
			<tr>
				<td><?php echo "<b>$nama_sekolah</b>" ?></td>
				<td><?php echo "<b>$gelar</b>" ?></td>
				<td><?php echo "<b>$tanggal_tamat</b>" ?></td>
			</tr>
		</table>
	</div><br>

	<div class="container-fluid">
		<table border="4">
			<tr>
				<td colspan="4"><h3><center>Penghargaan</center></h3></td>
			</tr>
			<tr>
				<td>penghargaan 1</td>
				<td>penghargaan 2</td>
				<td>penghargaan 3</td>
				<td>penghargaan 4</td>
			</tr>
			<tr>
				<td><?php echo "<b>$penghargaan</b>" ?></td>
				<td><?php echo "<b>$penghargaan_2</b>" ?></td>
				<td><?php echo "<b>$penghargaan_3</b>" ?></td>
				<td><?php echo "<b>$penghargaan_4</b>" ?></td>
			</tr>
		</table>
	</div>
</body>
</html>


			