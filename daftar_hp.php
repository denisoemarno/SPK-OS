<?php 
session_start();
include('koneksi.php');
?>

<?php 
	if(isset($_POST["tambah_os"])){
		$nama_os      					= $_POST["nama_os"];
		$harga_os    				 	= $_POST["harga_os"];
		$tingkat_kemahiran_os      		= $_POST["tingkat_kemahiran_os"];
		$dapat_berjalan_os    			= $_POST["dapat_berjalan_os"];
		$platform_os 					= $_POST["platform_os"];
		$tingkat_kesulitan_os    		= $_POST["tingkat_kesulitan_os"];
		$stability_os    				= $_POST["stability_os"];

		
		$harga_angka = $tingkat_kemahiran_angka = $dapat_berjalan_angka = $platform_angka = $tingkat_kesulitan_angka = $stability_angka = 0;

		if($harga_os == 'Gratis'){
			$harga_angka = 5;
		} 
		elseif($harga_os == 'Berbayar'){
			$harga_angka = 1;
		}

		if($tingkat_kemahiran_os == "Tidak Mahir"){
			$tingkat_kemahiran_angka = 4;
		}
		elseif($tingkat_kemahiran_os == "Kurang Mahir"){
			$tingkat_kemahiran_angka = 5;
		}
		elseif($tingkat_kemahiran_os == "Sedang"){
			$tingkat_kemahiran_angka = 7;
		}
		elseif($tingkat_kemahiran_os == "Mahir"){
			$tingkat_kemahiran_angka = 9;
		}
		
		if($dapat_berjalan_os == 'Tidak'){
			$dapat_berjalan_angka = 5;
		}
		elseif($dapat_berjalan_os == 'Ya'){
			$dapat_berjalan_angka = 10;
		}

		if($platform_os == "Desktop"){
			$platform_angka = 10;
		}
		elseif($platform_os == "Server"){
			$platform_angka = 5;
		}

		if($tingkat_kesulitan_os == "Menggunakan antar muka command line"){
			$tingkat_kesulitan_angka = 10;
		}
		elseif($tingkat_kesulitan_os == "Mengunakan antar muka grafis"){
			$tingkat_kesulitan_angka = 15;
		}

		if($stability_os == "Bleeding"){
			$stability_angka = 6;
		}
		elseif($stability_os == "Stability"){
			$stability_angka = 9;
		}
		

		$sql = "INSERT INTO `data_os` (`id_os`, `nama_os`, `harga_os`, `tingkat_kemahiran_os`, `dapat_berjalan_os`, `platform_os`, `tingkat_kesulitan_os`, `stability_os`, `harga_angka`, `tingkat_kemahiran_angka`, `dapat_berjalan_angka`, `platform_os`, `tingkat_kesulitan_os`, `stability_angka`) 
				VALUES (NULL, :nama_os, :harga_os, :tingkat_kemahiran_os, :dapat_berjalan_os, :platform_os, :tingkat_kesulitan_os,:stability_os, :harga_angka, :tingkat_kemahiran_angka, :dapat_berjalan_angka, :platform_angka, :tingkat_kesulitan_angka, :stability_angka)";
		$stmt = $db->prepare($sql);
		$stmt->bindValue(':nama_os', $nama_os);
		$stmt->bindValue(':harga_os', $harga_os);
		$stmt->bindValue(':tingkat_kemahiran_os', $tingkat_kemahiran_os);
		$stmt->bindValue(':dapat_berjalan_os', $dapat_berjalan_os);	
		$stmt->bindValue(':platform_os', $platform_os);
		$stmt->bindValue(':tingkat_kesulitan_os', $tingkat_kesulitan_os);
		$stmt->bindValue(':stability_os', $stability_os);
		$stmt->bindValue(':harga_angka', $harga_angka);
		$stmt->bindValue(':tingkat_kemahiran_angka', $tingkat_kemahiran_angka);
		$stmt->bindValue(':dapat_berjalan_angka', $dapat_berjalan_angka);
		$stmt->bindValue(':platform_angka', $platform_angka);
		$stmt->bindValue(':tingkat_kesulitan_angka', $tingkat_kesulitan_angka);
		$stmt->bindValue(':stability_angka', $stability_angka);
		$stmt->execute();
	}

	if(isset($_POST["hapus_os"])){
		$id_hapus_hp = $_POST['id_hapus_os'];
		$sql_delete = "DELETE FROM `data_os` WHERE `id_os` = :id_hapus_os";
		$stmt_delete = $db->prepare($sql_delete);
		$stmt_delete->bindValue(':id_hapus_os', $id_hapus_hp);
		$stmt_delete->execute();
		$query_reorder_id=mysqli_query($selectdb,"ALTER TABLE data_os AUTO_INCREMENT = 1");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sistem Pendukung Keputusan Pemilihan Smartphone</title>
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="assets/css/materialize.css"  media="screen,projection"/>
	<link rel="stylesheet" href="assets/css/table.css">
	<link rel="stylesheet" href="assets/css/style.css">

	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<!--Import jQuery before materialize.js-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/materialize.js"></script>
	
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">

	<!-- Data Table -->
	<link rel="stylesheet" type="text/css" href="assets/dataTable/jquery.dataTables.min.css">
	<script type="text/javascript" charset="utf8" src="assets/dataTable/jquery.dataTables.min.js"></script>

</head>
<body>
	<div class="navbar-fixed">
	<nav>
    	<div class="container">
					
						<div class="nav-wrapper">
								<ul class="left" style="margin-left: -52px;">
									<li><a href="index.php">HOME</a></li>
									<li><a href="rekomendasi.php">REKOMENDASI</a></li>
									<li><a class="active" href="daftar_hp.php">DAFTAR SISTEM OPERASI</a></li>
									<li><a href="#about">TENTANG</a></li>
								</ul>
						</div>
					
        </div>
		</nav>
		</div>
		<!-- Body Start -->

		<!-- Daftar hp Start -->
	<div style="background-color: #efefef">
		<div class="container">
		    <div class="section-card" style="padding: 40px 0px 20px 0px;">
				<ul>
				    <li>
						<div class="row">
						<div class="card">
								<div class="card-content">
									<center><h4 style="margin-bottom: 0px; margin-top: -8px;">Daftar Sistem Operasi</h4></center>
									<table id="table_id" class="hover dataTablesCustom" style="width:100%">
											<thead style="border-top: 1px solid #d0d0d0;">
												<tr>
													<th><center>No </center></th>
													<th><center>Nama OS</center></th>
													<th><center>Harga OS</center></th>
													<th><center>Tingkat Kemahiran OS</center></th>
													<th><center>Dapat_berjalan OS</center></th>
													<th><center>Platform OS</center></th>
													<th><center>Tingkat Kesulitan OS</center></th>
													<th><center>Stabilitas OS</center></th>
													<th><center>Hapus</center></th>
												</tr>
											</thead>
											<tbody>
												<?php
												$query=mysqli_query($selectdb,"SELECT * FROM data_os");
												$no=1;
												while ($data=mysqli_fetch_array($query)) {
												?>
												<tr>
													<td><center><?php echo $no; ?></center></td>
													<td><center><?php echo $data['nama_os'] ?></center></td>
													<td><center><?php echo $data['harga_os'] ?></center></td>
													<td><center><?php echo $data['tingkat_kemahiran_os']?></center></td>
													<td><center><?php echo $data['dapat_berjalan_os']?></center></td>
													<td><center><?php echo $data['platform_os'] ?></center></td>
													<td><center><?php echo $data['tingkat_kesulitan_os']?></center></td>
													<td><center><?php echo $data['stability_os']?></center></td>
													<td>
														<center>
															<form method="POST">
																<input type="hidden" name="id_hapus_hp" value="<?php echo $data['id_os'] ?>">
																<button type="submit" name="hapus_hp" style="height: 32px; width: 32px;" class="btn-floating btn-small waves-effect waves-light red"><i style="line-height: 32px;" class="material-icons">remove</i></button>
															</form>
														</center>
													</td>
												</tr>
												<?php
														$no++;}
												?>
											</tbody>
									</table>
									</div>
									
							</div>
							<a href="#tambah" class="btn-floating btn-large waves-effect waves-light teal btn-float-custom"><i class=""></i></a>
						</div>
				    </li>
				</ul>	     
	    	</div>
		</div>
	</div>
	<!-- Daftar hp End -->

	<!-- Daftar hp Start -->
	<div style="background-color: #efefef">
		<div class="container">
		    <div class="section-card" style="padding: 1px 20% 24px 20%;">
				<ul>
				    <li>
						<div class="row">
							<div class="card">
								<div class="card-content" style="padding-top: 10px;">
									<center><h5 style="margin-bottom: 10px;">Analisa Sistem Operasi</h5></center>
									<table class="responsive-table">
									
											<thead style="border-top: 1px solid #d0d0d0;">
												<tr>
													<th><center>Alternatif</center></th>
													<th><center>C1 (Benefit)</center></th>
													<th><center>C2 (Cost)</center></th>
													<th><center>C3 (Benefit)</center></th>
													<th><center>C4 (Benefit)</center></th>
													<th><center>C5 (Benefit)</center></th>
													<th><center>C6 (Benefit)</center></th>
												</tr>
											</thead>
											<tbody>
												<?php
												$query=mysqli_query($selectdb,"SELECT * FROM data_os");
												$no=1;
												while ($data=mysqli_fetch_array($query)) {
												?>
												<tr>
													<td><center><?php echo "A",$no ?></center></td>
													<td><center><?php echo $data['harga_angka'] ?></center></td>
													<td><center><?php echo $data['tingkat_kemahiran_angka'] ?></center></td>
													<td><center><?php echo $data['dapat_berjalan_angka'] ?></center></td>
													<td><center><?php echo $data['platform_angka'] ?></center></td>
													<td><center><?php echo $data['tingkat_kesulitan_angka'] ?></center></td>
													<td><center><?php echo $data['stability_angka'] ?></center></td>
												</tr>
												<?php
														$no++;}
												?>
											</tbody>
									</table>
									</div>
							</div>
						</div>
				    </li>
				</ul>	     
	    	</div>
		</div>
	</div>
	<!-- Daftar hp End -->

	<!-- Modal Start -->
	<!-- <div id="tambah" class="modal" style="width: 40%; height: 100%;">
		<div class="modal-content">
			<div class="col s6">
					<div class="card-content">
						<div class="row">
							<center><h5 style="margin-top:-8px;">Masukan Smartphone</h5></center>
							<form method="POST" action="">
								<div class = "row">
									<div class="col s12">

										<div class="col s6" style="margin-top: 10px;">
											<b>Nama</b>
										</div>
										<div class="col s6">
											<input style="height: 2rem;" name="nama" type="text" required>
										</div>

										<div class="col s6" style="margin-top: 10px;">
											<b>Harga</b>
										</div>
										<div class="col s6">
											<input style="height: 2rem;" name="harga" type="number" required>
										</div>
										
										<div class="col s6" style="margin-top: 10px;">
										<b>RAM</b>
										</div>
										<div class="col s6">
											<select style="display: block; margin-bottom: 4px;" required name="ram">
												<option value = "" disabled selected>Kriteria RAM</option>
												<option value = "1">1 Gb</option>
												<option value = "2">2 Gb</option>
												<option value = "3">3 Gb</option>
												<option value = "4">4 Gb</option>
												<option value = "6">6 Gb</option>
											</select>
										</div>

										<div class="col s6" style="margin-top: 10px;">
											<b>Memori</b>
										</div>
										<div class="col s6">
											<select style="display: block; margin-bottom: 4px;" required name="memori">
												<option value = "" disabled selected>Kriteria Penyimpanan</option>
												<option value = "4">4 Gb</option>
												<option value = "8">8 Gb</option>
												<option value = "16">16 Gb</option>
												<option value = "32">32 Gb</option>
												<option value = "64">64 Gb</option>
											</select>
										</div>

										<div class="col s6" style="margin-top: 10px;">
											<b>Processor</b>
										</div>
										<div class="col s6">
											<select style="display: block; margin-bottom: 4px;" required name="processor">
												<option value = "Dualcore">Dualcore</option>
												<option value = "Quadcore">Quadcore</option>
												<option value = "Octacore">Octacore</option>
											</select>
										</div>

										<div class="col s6" style="margin-top: 10px;">
											<b>Kamera</b>
										</div>
										<div class="col s6">
											<select style="display: block; margin-bottom: 4px;" required name="kamera">
												<option value = "" disabled selected>Kriteria Kamera</option> 
												<option value = "8">8 Mp</option>
												<option value = "13">13 Mp</option>
												<option value = "16">16 Mp</option>
											</select>
										</div>

									</div>  
								</div> 
								<center><button name="tambah_hp" type="submit" class="waves-effect waves-light btn teal" style="margin-top: 0px;">Tambah</button></center>	
							</form>
						</div>
					</div>
				</div>
			</div>
		<div style="height: 0px; "class="modal-footer">
          <a style="margin-top: -30px;" class="modal-action modal-close waves-effect waves-green btn-flat">Tutup</a>
        </div>
	</div> -->
	<!-- Modal End -->

	<!-- Modal Start -->
	<div id="about" class="modal">
		<div class="modal-content">
			<h4>Tentang</h4>
			<p>Sistem Pendukung Keputusan Pemilihan Operating Sistem ini menggunakan metode TOPSIS yang dibangun menggunakan bahasa PHP.
				Sistem ini dibuat sebagai Ujian Akhir Semester Mata Kuliah Sistem Operasi Magister Ilmu Komputer Universitas Budi Luhur. <br>
				<br>
				NIM  : 2211601931<br>
				Nama : Deni Sumarno
				<br><a href=""> (Github)</a><br>
			</p>
		</div>
		<div class="modal-footer">
			<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Tutup</a>
		</div>
	</div>
	<!-- Modal End -->

    <!-- Body End -->

    <!-- Footer Start -->
	<div class="footer-copyright" style="padding: 0px 0px; background-color: white">
      <div class="container">
        <p align="center" style="color: #999">&copy; Sistem Pendukung Keputusan Pemilihan Operating System 2023.</p>
      </div>
    </div>
    <!-- Footer End -->
    <script type="text/javascript">
	  	$(document).ready(function(){
		$('.parallax').parallax();
		$('.modal').modal();
		$('#table_id').DataTable({
    		"paging": false
		});
	    });
	</script>
</body>
</html>