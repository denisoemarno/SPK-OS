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

	<link rel="apple-touch-icon" sizes="76x76" href="assets/image/apple-icon.png"> 	<link rel="icon" type="image/png" sizes="96x96" href="assets/image/favicon.png">

	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<!--Import jQuery before materialize.js-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/materialize.js"></script>
	
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<body>
	<div class="navbar-fixed">
	<nav>
    	<div class="container">
					
						<div class="nav-wrapper">

								<ul class="left" style="margin-left: -52px;">
									<li><a href="index.php">HOME</a></li>
									<li><a class="active" href="rekomendasi.php">REKOMENDASI</a></li>
                                    <li><a href="daftar_hp.php">DAFTAR SISTEM OPERASI</a></li>
                                    <li><a href="#about">TENTANG</a></li>
								</ul>
						</div>
					
        </div>
		</nav>
		</div>
		<!-- Body Start -->

		<!-- Daftar Laptop Start -->
        <div style="background-color: #efefef">
            <div class="container">
                <div class="section-card" style="padding: 32px 0px 20px 0px">
                    <ul>
                        <li>
                            <div class="row">
                                <div class="col s3">
                                </div>
                                <div class="col s6">      
                                    <div class="card">
                                        <div class="card-content">
                                            <div class="row">
                                                <center><h4>Masukan Bobot</h4></center>
                                                <br>
                                                <form class = "col s12" method="POST" action="hasil.php">
                                                    <div class = "row">
                                                        <div class="col s12">

                                                            <div class="col s6" style="margin-top: 10px;">
                                                                <b>Kriteria Harga Sistem Operasi</b>
                                                            </div>
                                                            <div class="col s6">
                                                                <select required name="harga_os">
                                                                    <option value = "" disabled selected style="color: #eceff1;"><i>Kriteria Harga Sistem Operasi</i></option>
                                                                    <option value = "5">Gratis</option>
                                                                    <option value = "1">Berbayar</option>
                                                                    <!-- <option value = "3">3.000.000 - 4.000.000</option>
                                                                    <option value = "2">4.000.000 - 5.000.000</option>
                                                                    <option value = "1">> 5.000.000</option> -->
                                                                </select>
                                                            </div>

                                                            <div class="col s6" style="margin-top: 10px;">
                                                            <b>Tingkat kemahiran</b>
                                                            </div>
                                                            <div class="col s6">
                                                                <select required name="tingkat_kemahiran_os">
                                                                    <option value = "" disabled selected>Kriteria Tingkat kemahiran</option> 
                                                                    <option value = "4">Tidak Mahir</option>
                                                                    <option value = "5">Kurang Mahir</option>
                                                                    <option value = "7">Sedang</option>
                                                                    <option value = "9">Mahir</option>
                                                                </select>
                                                            </div>

                                                            <div class="col s6" style="margin-top: 10px;">
                                                                <b>Dapat berjalan dikomputer tua</b>
                                                            </div>
                                                            <div class="col s6">
                                                                <select required name="dapat_berjalan_os">
                                                                    <option value = "" disabled selected>Kriteria Dapat berjalan dikomputer tua</option>
                                                                    <option value = "5">Tidak</option>
                                                                    <option value = "10">Ya</option>
                                                                    <!-- <option value = "3">16 Gb</option>
                                                                    <option value = "4">32 Gb</option>
                                                                    <option value = "5">> 32 Gb</option> -->
                                                                </select>
                                                            </div>

                                                            <div class="col s6" style="margin-top: 10px;">
                                                                <b>Platform</b>
                                                            </div>
                                                            <div class="col s6">
                                                                <select required name="platform_os">
                                                                    <option value = "" disabled selected>Kriteria Platform</option>
                                                                    <option value = "10">Desktop</option>
                                                                    <option value = "5">Server</option>
                                                                </select>
                                                            </div>

                                                            <div class="col s6" style="margin-top: 10px;">
                                                                <b>Tingkat kesulitan </b>
                                                            </div>
                                                            <div class="col s6">
                                                                <select required name="tingkat_kesulitan_os">
                                                                    <option value = "" disabled selected>Kriteria Tingkat_kesulitan</option>
                                                                    <option value = "10">Menggunakan antar muka command line</option>
                                                                    <option value = "15">Mengunakan antar muka grafis</option>
                                                                    
                                                                </select>
                                                            </div>

                                                            <div class="col s6" style="margin-top: 10px;">
                                                                <b>Tingkat Stabilitas </b>
                                                            </div>
                                                            <div class="col s6">
                                                                <select required name="stability_os">
                                                                    <option value = "" disabled selected>Kriteria Stabilitas</option>
                                                                    <option value = "6">Bleeding</option>
                                                                    <option value = "9">Stability</option>
                                                                    
                                                                </select>
                                                            </div>
                                                            
                                                            
                                                        </div>  
                                                    <center><button type="submit" class="waves-effect waves-light btn" style="margin-bottom:-46px;">Hitung</button></center>	
                                                </form>       
                                            </div>
                                        </div>
                                    </div>                    
                                </div>
                                <div class="col s3">
                                </div>
                            </div>
                        </li>
                    </ul>	     
                </div>
            </div>
        </div>
        <!-- Rekomendasi Laptop End -->

    <!-- Modal Start -->
	<div id="about" class="modal">
        <div class="modal-content">
          <h4>Tentang</h4>
          <p>Sistem Pendukung Keputusan Pemilihan Operating Sistem ini menggunakan metode Simple Additive Weighting (S.A.W) yang dibangun menggunakan bahasa PHP.
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
        <p align="center" style="color: #999">&copy; Sistem Pendukung Keputusan Pemilihan Sistem Operasi 2023.</p>
      </div>
    </div>
    <!-- Footer End -->
    <script type="text/javascript">
	  $(document).ready(function(){
	      $('.parallax').parallax();
          $('select').material_select();
          $('.modal').modal();
	    });
    </script>
</body>
</html>