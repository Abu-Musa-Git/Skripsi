	<?php
	
		include 'config.php';
		session_start();
		$statuslogin=0;
		if(isset($_SESSION['access'] )){
		if($_SESSION['access'] =="login")
		{
			$statuslogin=1;
			$session_name=$_SESSION['user'];
			$session_nip=$_SESSION['nip'];
			$session_role=$_SESSION['userrole'];
			$sql = "SELECT * FROM tfotopetugas WHERE nip='$session_nip'";
			$result = $conn->query($sql);
			
			if ($result->num_rows > 0) {
			  while($row = $result->fetch_assoc()) {  
				
			$foto=$row['foto1'];
			
			  }
			} else {
			  header("location:login.php");
			}
			
		}
		}
		else 
		{
			  header("location:login.php");
			}
		
	?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	
	<link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.7.2/css/all.css">

	<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
	<style>
	.nav-link:hover{
	background-color: orange;
	}
	.nav-link:hover{
	background-color: orange;
	}
	
	.sub-menu{
	background-color: rgba(0,0,0,0.3);
	}
	
	.colom2{
	background-color: rgba(0,0,0,0.1);
	}
	
	.scroll-div{
    height: 100vh;
    overflow: hidden;
    overflow-y: scroll;
    }
    
    .card{
    transition: all 0.3s;
    font-family: Arial, Helvetica, sans-serif;
    }
    
    .card:hover{
    transform: scale(1.05);
    
    
    }
	.login-avatar{
    transition: all 0.3s;
    }
	.login-avatar:hover{
    transform: scale(1.05);
      
    }
    .card-body-icon{
		position: absolute;
        z-index: 0;
        right: 5px;
        opacity: 0.3;
        font-size: 120px;
    }
	.display-5{
	font-weight: bold;
	}
	img {

	 width:60%;
	 height:60%;
	 
	 }
	 
	    .dropdown-content a:hover {
            background-color: orange;
        }

        .dropdown:hover .dropdown-content {
            max-height: 500px; 
			
            opacity: 1;
        }
		  .dropdown-content {
       
            position: absolute;
            min-width: 160px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
            border-radius: 4px;
            overflow: hidden;
			max-height: 0;
            opacity: 0;
            transition: max-height 0.8s ease-in-out, opacity 0.3s ease-in-out;
        }

        .dropdown-content a {
            color: black;
            padding: 10px 16px;
            text-decoration: none;
            display: block;
        }
		.dropdown{
		cursor: pointer;
		}
	
	</style>
  
  <title>Rutan Karimun</title>
  </head>
  <body>
  
			<nav class="navbar  navbar-light bg-warning fixed-top shadow">
		  <div class="container-fluid ">
				  
				
			<a class="navbar-brand" href="#" style="font-variant: small-caps;"><i class="fa-solid fa-building-columns"></i> Dashboard Information | <b>Rutan Kelas IIB Karimun</b></a>
 
				
				
				
				<?php
				if($statuslogin==1)
				{
				
				echo "
				  <div class=\"dropdown login-avatar d-flex align-items-center border border-dark bg-dark shadow-sm\" style=\" position: absolute; height: 45px; right: 0; border-radius: 5px 0 0 5px;\">
				
				<span class=\"text-light fw-light ms-2\" >$session_name
               <img src=\"data:image/jpeg;base64,".base64_encode($foto)."\" alt=\"User Avatar\" class=\"rounded-circle\" style=\"width: 40px; height: 40px;\">
				
				<i class=\"fa-solid fa-caret-down ms-1 me-2\"></i>
				
								
					
				<div class=\" dropdown-content bg-dark mt-1\" style=\"right :12px;\">

					<a class=\"dropdown_menu-1 text-white fw-light\" data-bs-toggle=\"modal\" data-bs-target=\"#profileModal\" href=\"#\"><i class=\"fa-regular fa-address-card me-2\"></i> Profile</a>
					<a  class=\"dropdown_menu-1 text-white fw-light\" href=\"logout.php\"><i class=\"fa-solid fa-arrow-right-from-bracket me-2\"></i> Logout</a>
					
				</div>
				</span>
				</div>";
			   }
			   else{
				echo "<button class=\"btn btn-outline-dark\" onclick=\"location.href='login.php'\" data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"Klik Untuk Login\" type=\"button\"><i class=\"fa fa-sign-in\"></i>&nbsp&nbsp Login</button>";				
				   
			   }
				?>
				
		  </div>
		
		
		</nav>
			
			<div class="row g-0 mt-5">
				<div class="col-md-2 bg-dark mt-2 pl-5 ">
				<div class="mt-3 ms-5"><span ><img src="img/logo.png" class="rounded-circle border" alt="logo"></span></div>
				<ul class="nav flex-column ms-3 me-3 mb-5">
					  <li class="nav-item"><hr class="bg-light">
						<a class="nav-link text-white  fw-bold"  href="#"><i class="fa-light fa-grid-dividers me-3 fs-5"></i></i>Dashboard</a><hr class="bg-light">
					  </li>
					  <li class="nav-item">
						<a class="nav-link text-white fw-light" href="daftar-petugas-admin.php"><i class="fa-light fa-user-police-tie me-3 fs-5"></i>Daftar Petugas</a><hr class="bg-light">
					  </li>
					  <li class="nav-item">
						<a class="nav-link text-white fw-light" href="#"><i class="fa-regular fa-people-group me-2 fs-5"></i>Daftar WBP</a><hr class="bg-light">
					  </li>
					  <li class="nav-item">
						<a class="nav-link text-white fw-light" href="#"><i class="fa-solid fa-people-roof me-2 fs-5"></i>Blok Hunian</a><hr class="bg-light">
					  </li>
					 <li class="nav-item">
						<a class="nav-link text-white fw-light" href="#"><i class="fa-solid fa-clock-rotate-left me-2 fs-5"></i></i>Riwayat</a><hr class="bg-light">
					  </li>
					
					  
					  <li class="nav-item"   href="#">
					  <a class="nav-link" href="#" data-bs-toggle="collapse" data-bs-target="#submenu">
					  <span class="icon">
							<i class="fa-solid text-white fa-people-roof me-2 fs-5"></i>
					  </span>
					  <span class="description text-white fw-light">Riwayat <i class="fa-solid fa-caret-down ms-1"></i></span>
					  <div class="sub-menu collapse " id="submenu">
						  <a class="nav-link" href="#">
							<span class="icon">
								<i class="fa-solid fa-file-fragment text-white fs-5 ms-3"></i>
							</span>
							<span class="description text-white ms-2  fw-light">Data 1</span>
						  </a>
						  <a class="nav-link" href="#">
							<span class="icon">
								<i class="fa-solid fa-file-fragment text-white  ms-3 fs-5"></i>
							</span>
							<span class="description text-white ms-2  fw-light">Data 2</span>
						  </a>
						  <a class="nav-link" href="#">
							<span class="icon">
								<i class="fa-solid fa-file-fragment text-white  ms-3 fs-5"></i>
							</span>
							<span class="description text-white ms-2 fw-light">Data 3</span>
						  </a>
					  </div>
					  </a>
						<hr class="bg-light">
					  </li>
					 
					</ul>
					
				</div>
				<div class="colom2 col-md-7">
				    <ul class="nav nav-tabs ps-1 border-secondary mt-3">
                      <li class="nav-item">
                        <a class="nav-link active text-dark border-secondary"  aria-current="page" href="#">Harian</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-secondary  border-secondary" href="#">Mingguan</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-secondary border-secondary" href="#">Bulanan</a>
                      </li>
                      
                    </ul>
				    
				    <div class="scroll-div ms-2">
					

                    <!-- Card Informasi Berlangsung -->
					<div class="card ms-4 me-4 mt-3 shadow border-success" style="width: 100℅;">
					<div class="card-header text-light bg-primary border-success">
    					  <div class="container">
                          <div class="row">
                            <div class="col">
                              Lalu-Lintas Keluar
                            </div>
                            <div class="col text-end">
                              Hari ini
                            </div>
                          </div>
                        </div>
					  </div>
					  <div class="card-body">
					    <p class="card-text"><cite>Pada Hari Senin Tanggal 2 Maret 2025, Pukul 09:30 Wib, Rupam 1 Mengeluarkan <b>5 Warga Binaan</b> guna Izin Keluar Asimilasi yang di Kawal oleh <b>Daeng Antarestu</b>. </cite></p>
					    <div class="text-end">
					    <a href="#" class="btn btn-primary btn-sm"  data-bs-toggle="tooltip" data-bs-placement="top" title="Klik Untuk Melihat Informasi Lebih Lanjut"><i class="fa-solid fa-square-info"></i> Detail</a>
					    <a href="#" class="btn btn-success btn-sm ms-2"  data-bs-toggle="tooltip" data-bs-placement="top" title="Klik Untuk Menyelesaikan Kegiatan ini"><i class="fa-solid fa-square-check"></i> Selesai</a>
					    </div>
					  </div>
					</div>
					
					<!-- Card Informasi Berlangsung -->
					<div class="card ms-4 me-4 mt-3 shadow border-success" style="width: 100℅;">
					<div class="card-header text-light bg-primary border-success">
    					  <div class="container">
                          <div class="row">
                            <div class="col">
                              Lalu-Lintas Keluar
                            </div>
                            <div class="col text-end">
                              Hari ini
                            </div>
                          </div>
                        </div>
					  </div>
					  <div class="card-body">
					    <p class="card-text"><cite>Pada Hari Senin Tanggal 2 Maret 2025, Pukul 08:30 Wib, Rupam 1 Mengeluarkan <b>10 Warga Binaan</b> guna Izin Keluar Asimilasi yang di Kawal oleh <b>Herwansyah</b>. </cite></p>
					    <div class="text-end">
						<a href="#" class="btn btn-primary btn-sm"  data-bs-toggle="tooltip" data-bs-placement="top" title="Klik Untuk Melihat Informasi Lebih Lanjut"><i class="fa-solid fa-square-info"></i> Detail</a>
					    <a href="#" class="btn btn-success btn-sm ms-2"  data-bs-toggle="tooltip" data-bs-placement="top" title="Klik Untuk Menyelesaikan Kegiatan ini"><i class="fa-solid fa-square-check"></i> Selesai</a>
					    </div>
					  </div>
					</div>
					
					 <!-- Card Informasi Berlalu -->
					<div class="card ms-4 me-4 mt-3 shadow border-success" style="width: 100℅;">
					<div class="card-header text-dark bg-warning border-success">
    					  <div class="container">
                          <div class="row">
                            <div class="col">
                             Lalu-Lintas Keluar
                            </div>
                            <div class="col text-end">
                              2 Hari yang lalu
                            </div>
                          </div>
                        </div>
					  </div>
					  <div class="card-body">
					    <p class="card-text"><cite>Pada Hari Sabtu Tanggal 28 Februari 2025, Pukul 08:30 Wib, Rupam 3 Mengeluarkan <b>1 Warga Binaan</b> guna Izin Keluar ke Rumah Sakit yang di Kawal oleh <b>Ferdiansyah</b>. </cite></p>
					    <div class="text-end">
					    <a href="#" class="btn btn-primary btn-sm"  data-bs-toggle="tooltip" data-bs-placement="top" title="Klik Untuk Melihat Informasi Lebih Lanjut"><i class="fa-solid fa-square-info"></i> Detail</a>
					    <a href="#" class="btn btn-success btn-sm ms-2"  data-bs-toggle="tooltip" data-bs-placement="top" title="Klik Untuk Menyelesaikan Kegiatan ini"><i class="fa-solid fa-square-check"></i> Selesai</a>
					    </div>
					  </div>
					</div>

                    <!-- Card Informasi Selesai -->
					<div class="card ms-4 me-4 mt-3 shadow border-success" style="width: 100℅;">
					<div class="card-header text-light bg-secondary border-success">
    					  <div class="container">
                          <div class="row">
                            <div class="col">
                              Lalu-Lintas Keluar - Masuk
                            </div>
                            <div class="col text-end">
                              Hari ini
                            </div>
                          </div>
                        </div>
					  </div>
					  <div class="card-body">
						
					    <p class="card-text text-muted"><cite>Pada Hari Senin Tanggal 2 Maret 2025, Pukul 08:30 Wib, Rupam 1 Mengeluarkan <b>10 Warga Binaan</b> guna Izin Keluar Asimilasi yang di Kawal oleh <b>Herwansyah</b>. </cite></p>
					    <h6 class="card-subtitle ">Kegiatan Telah Selesai pada Tanggal 2 Maret 2025, Pukul 08:30 Wib</h6>
						<div class="text-end">
						<a href="#" class="btn btn-primary btn-sm"  data-bs-toggle="tooltip" data-bs-placement="top" title="Klik Untuk Melihat Informasi Lebih Lanjut"><i class="fa-solid fa-square-info"></i> Detail</a>
					    </div>
					  </div>
					</div>
					
					<!-- Card Informasi Selesai -->
					<div class="card ms-4 me-4 mt-3 shadow border-success" style="width: 100℅;">
					<div class="card-header text-light bg-secondary border-success">
    					  <div class="container">
                          <div class="row">
                            <div class="col">
                              Lalu-Lintas Keluar - Masuk
                            </div>
                            <div class="col text-end">
                              Hari ini
                            </div>
                          </div>
                        </div>
					  </div>
					  <div class="card-body">
						
					    <p class="card-text text-muted"><cite>Pada Hari Senin Tanggal 2 Maret 2025, Pukul 08:30 Wib, Rupam 1 Mengeluarkan <b>10 Warga Binaan</b> guna Izin Keluar Asimilasi yang di Kawal oleh <b>Herwansyah</b>. </cite></p>
					    <h6 class="card-subtitle ">Kegiatan Telah Selesai pada Tanggal 2 Maret 2025, Pukul 08:30 Wib</h6>
						<div class="text-end">
						<a href="#" class="btn btn-primary btn-sm"  data-bs-toggle="tooltip" data-bs-placement="top" title="Klik Untuk Melihat Informasi Lebih Lanjut"><i class="fa-solid fa-square-info"></i> Detail</a>
					    </div>
					  </div>
					</div>
				
					</div>
				</div>
				
				<div class="colom2 col-md-3 bg-light">
				<div class="row mt-3 ms-2">
				
				 
				 <div class="card border-dark bg-success shadow mt-2 text-white" style="width: 95%;">
				  <div class="card-body">
				  <div class="card-body-icon">
				  <i class="fa-regular fa-people-group"></i>
				  </div>
					<h5 class="card-title" style="font-variant: small-caps;">Jumlah Warga Binaan</h5>
					<div class="display-3"><b>582</b></div>
					<p class="card-text"><cite><b>560 di Dalam - 45 di Luar</b></cite></p>
					<hr class="bg-light">
					
					
					<p class="card-text"><b>Keterangan 40 di Luar</b></p>
					<p class="card-text ms-2">&#x2022; 1 Rumah Sakit<br> &#x2022; 20 Asimilasi<br> &#x2022; 7 Sidang<br> &#x2022; 6 Bon Polisi<br> &#x2022; 3 Bon DJBC</p>
					<hr class="bg-light">
					<p class="card-text"><b>Tahanan 30 Orang</b></p>
					<p class="card-text ms-2">&#x2022; 10 Wanita<br> &#x2022; 20 Pria</p>
					<hr class="bg-light">
					<p class="card-text"><b>Narapidana 30 Orang</b></p>
					<p class="card-text ms-2">&#x2022; 10 Wanita<br> &#x2022; 20 Pria</p>
					<hr class="bg-light">
					<div class="text-end">
					<a href="#" class="btn btn-outline-light"  data-bs-toggle="tooltip" data-bs-placement="top" title="Klik Untuk Melihat Informasi Lebih Lanjut"><i class="fa-solid fa-square-info"></i> Detail</a>
					 </div>
				  </div>
				 </div>
				 
				 
				 <div class="card border-dark bg-warning shadow mt-2" style="width: 18rem;">
				  <div class="card-body">
				  <div class="card-body-icon">
				  <i class="fa-regular fa-people-group"></i>
				  </div>
					<h5 class="card-title">Jumlah Warga Binaan</h5>
					<div class="display-4"><cite>582</cite></div>
					<hr class="bg-dark">
					<p class="card-text"><b>Tahanan 30 Orang</b></p>
					<p class="card-text ms-2">&#x2022; 10 Wanita<br> &#x2022; 20 Pria</p>
					<hr class="bg-dark">
					<p class="card-text"><b>Narapidana 30 Orang</b></p>
					<p class="card-text ms-2">&#x2022; 10 Wanita<br> &#x2022; 20 Pria</p>
					<hr class="bg-dark">
					<div class="text-end">
					<a href="#" class="btn btn-outline-dark"  data-bs-toggle="tooltip" data-bs-placement="top" title="Klik Untuk Melihat Informasi Lebih Lanjut"><i class="fa-solid fa-square-info"></i> Detail</a>
					 </div>
				  </div>
				 </div>
				 
				 
				</div>
				</div>
				
				<!-- Modal Profile -->
					<div class="modal fade" id="profileModal" tabindex="-1" >
					<form action="simpanprofile.php" method="post" enctype="multipart/form-data">
					  <div class="modal-dialog modal-lg">
						<div class="modal-content">
						  <div class="modal-header">
							<h5 class="modal-title" id="profileModalLabel"><i class="fa-solid fa-user"></i> Profil Petugas</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal" ></button>
						  </div>
						  <div class="modal-body">
							<?php
							
							if($statuslogin==1)
							{
								
								
								$sql = "SELECT * FROM tdatapetugas WHERE nip='$session_nip'";
								$result = $conn->query($sql);
								
								if ($result->num_rows > 0) {
								  while($row = $result->fetch_assoc()) {  
									
								$qnama=$row['nama'];
								$qnip=$row['nip'];
								$qdivisi=$row['divisi'];
								$qjabatan=$row['jabatan'];
								$qgolongan=$row['golongan'];
								$qpangkat=$row['pangkat'];
								$qkontak_person=$row['kontak_person'];
								$qjenis_kelamin=$row['jenis_kelamin'];
								$qtglmasuk=$row['tglmasuk'];
								$qtglkeluar=$row['tglkeluar'];
								$qpassword=$row['password'];
								$qrole=$row['role'];
								  }
								} else {
								  header("location:login.php");
								}
								
							}
							?>
							
							<!-- modal profile -->
					<div class="d-flex border ">
					
					<div class="m-2 " style="text-align: center;">
					
					<img src=<?php echo "\"data:image/jpeg;base64,".base64_encode($foto)."\"";?> class="rounded"  alt="logo" style="width:250px; height: auto;">
					
					<br>
				
					<span class="mt-2 text-dark" style="font-size: 1.2rem;"><?php echo"$session_name";?></span><br>
					
					<span class="border-top border-dark text-dark">NIP. <?php echo"$session_nip";?></span><br>
			
			
					
					<div class="mt-3">
					
					  <input class="form-control form-control-sm" id="foto" type="file" name="foto" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Klik Untuk Ganti Foto" hidden="hidden">
					  <button class="btn btn-primary mt-2 " id="buttonUploadcustom"  data-bs-toggle="tooltip" data-bs-placement="bottom" title="Klik Untuk Ganti Foto" type="button"><i class="fa-solid fa-arrow-up-from-bracket"></i></i> Ganti Foto</button>
					  <br><span id="text-upload"></span>
					</div>
					</div>
					<div class="keterangan border-end bg-success"></div>
		
					<div class="container m-2">
				
					<div class="row mb-1">
						<label for="nama" class="col-sm-4 col-form-label">Nama Lengkap</label>
						<div class="col-sm-8">
							<input class="form-control" id="nama" name="nama" type="text" value="<?php echo"$qnama";?>">
						</div>
					</div>
					<div class="row mb-1">
						<label for="nip" class="col-sm-4 col-form-label">Nomor Induk</label>
						<div class="col-sm-8">
							<input class="form-control" id="nip" name="nip" type="number" value="<?php echo"$qnip";?>">
						</div>
					</div>
					<div class="row mb-1">
						<label for="jabatan" class="col-sm-4 col-form-label">Jabatan</label>
						<div class="col-sm-8">
							<input class="form-control" id="jabatan" name="jabatan" type="text" value="<?php echo"$qjabatan";?>">
						</div>
					</div>
					<div class="row mb-1">
						<label for="golongan" class="col-sm-4 col-form-label">Golongan</label>
						<div class="col-sm-8">
							<div class="fw-light">
							<select class="form-select" id="sgolongan" name="golongan">
							<option selected><?php echo"$qgolongan";?></option>
							<option>I/a</option>
							<option>I/b</option>
							<option>I/c</option>
							<option>I/d</option>
							<option>II/a</option>
							<option>II/b</option>
							<option>II/c</option>
							<option>II/d</option>
							<option>III/a</option>
							<option>III/b</option>
							<option>III/c</option>
							<option>III/d</option>
							<option>IV/a</option>
							<option>IV/b</option>
							<option>IV/c</option>
							<option>IV/d</option>
							</select></div>
						</div>
					</div>
					<div class="row mb-1">
						<label for="pangkat" class="col-sm-4 col-form-label">Pangkat</label>
						<div class="col-sm-8">
							
							<input class="form-control" id="spangkat" name="spangkat" type="text" value="<?php echo"$qpangkat";?>" readonly>
							<!-- Nama Pangkat
							Juru Muda
							Juru Muda Tingkat I
							Juru
							Juru Tingkat I
							Pengatur muda
							Pengatur Muda Tingkat I
							Pengatur
							Pengatur tingkat I
							Penata Muda
							Penata Muda Tingkat 1
							Penata
							Penata Tingkat I
							Pembina
							Pembina Tingkat I
							Pembina Muda
							Pembina Madya
							Pembina Utama
							-->
						</div>
					</div>
					<div class="row mb-1">
						<label for="divisi" class="col-sm-4 col-form-label">Divisi</label>
						<div class="col-sm-8">
							<div class=" fw-light">
							<select class="form-select" id="divisi" name="divisi">
							<option selected><?php echo"$qdivisi";?></option>
							<option>Pelayanan Tahanan</option>
							<option>Pengelolaan</option>
							<option>Kepala Rutan</option>
							</select>
							</div>
						</div>
					</div>
					<div class="row mb-1">
						<label for="kontakperson" class="col-sm-4 col-form-label">Kontak Person</label>
						<div class="col-sm-8">
							<div class=" fw-light"><input class="form-control" id="kontakperson" name="kontakperson" type="number" value="<?php echo"$qkontak_person";?>"></div>
						</div>
					</div>
					<div class="row mb-1">
						<label for="jeniskelamin" class="col-sm-4 col-form-label">Jenis Kelamin</label>
						<div class="col-sm-8">
							<select class="form-select" id="jeniskelamin" name="jeniskelamin">
							<option selected><?php echo"$qjenis_kelamin";?></option>
							<option>Pria</option>
							<option>Wanita</option>
							</select>
						</div>
					</div>
					<div class="row mb-1">
						<label for="tanggalmasuk" class="col-sm-4 col-form-label">Tanggal Masuk</label>
						<div class="col-sm-8">
							<div class=" fw-light"><input class="form-control" id="tanggalmasuk" name="tanggalmasuk" type="date" value="<?php echo"$qtglmasuk";?>"></div>
						</div>
					</div>
					<div class="row mb-1">
						<label for="tanggalkeluar" class="col-sm-4 col-form-label">Tanggal Keluar</label>
						<div class="col-sm-8">
							<div class=" fw-light"><input class="form-control" id="tanggalkeluar" name="tanggalkeluar" type="date" value="<?php echo"$qtglkeluar";?>"></div>
						</div>
					</div>
					<div class="row mb-1">
						<label for="role" class="col-sm-4 col-form-label">Role</label>
						<div class="col-sm-8">
							<select class="form-select" id="role" name="role">
							<option selected><?php echo"$qrole";?></option>
							<option>user</option>
							<option>admin</option>
							</select>
						</div>
					</div>
					<div class="row mb-1">
						<label for="password" class="col-sm-4 col-form-label">Password</label>
						<div class="col-sm-8">
							<div class=" fw-light" style="position: relative;"><input class="form-control" id="password" name="password" type="password" value="<?php echo"$qpassword";?>"><i class="fa-regular fa-eye-slash icon" id="eyeicon" style="position: absolute; right: 7px; top: 10px; cursor: pointer;"></i></div>
						</div>
					</div>
				</div>
					
					</div>					
					<!-- end profile -->
							
							
						  </div>
						  <div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
							<button type="submit" class="btn btn-primary">Simpan</button>
						  </div>
						</div>
					  </div>
					  </form>
					</div>
					<!-- end Modal -->
			

  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script>
		//------tooltip------
		var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
		var tooltipList = tooltipTriggerList.map( function(tooltipTriggerEl) {
		  return new bootstrap.Tooltip(tooltipTriggerEl, {
		  trigger : 'hover'
		  });
		});
		//------tooltip------
		
		//------password hide---
		let password= document.getElementById("password");
		document.getElementById('eyeicon').addEventListener('click',function(){ const icon=this;
		if(icon.classList.contains('fa-eye')){
		icon.classList.remove('fa-eye');
		icon.classList.add('fa-eye-slash');
		password.type="password";
		}
		else
		{
		icon.classList.remove('fa-eye-slash');
		icon.classList.add('fa-eye');
		password.type="text";
		}
		});
		//------password hide---
		
		//------pangkat select---
		document.addEventListener("DOMContentLoaded", function() {
		const golonganSelect = document.getElementById("sgolongan");
		const pangkatInput = document.getElementById("spangkat");

		const pangkatMapping = {
			"I/a": "Juru Muda",
			"I/b": "Juru Muda Tingkat I",
			"I/c": "Juru",
			"I/d": "Juru Tingkat I",
			"II/a": "Pengatur muda",
			"II/b": "Pengatur Muda Tingkat I",
			"II/c": "Pengatur",
			"II/d": "Pengatur tingkat I",
			"III/a": "Penata Muda",
			"III/b": "Penata Muda Tingkat 1",
			"III/c": "Penata",
			"III/d": "Penata Tingkat I",
			"IV/a": "Pembina",
			"IV/b": "Pembina Tingkat I",
			"IV/c": "Pembina Muda",
			"IV/d": "Pembina Madya",
			"IV/e": "Pembina Utama"
		};

		golonganSelect.addEventListener("change", function() {
			const selectedGolongan = golonganSelect.value;
			pangkatInput.value = pangkatMapping[selectedGolongan] || "";
		});
		});
		//------pangkat select---
		
		//------upload button---	
		const fileUpload=document.getElementById("foto");
		const fileUploadcustom=document.getElementById("buttonUploadcustom");
		const textUploadcustom=document.getElementById("text-upload");
		fileUploadcustom.addEventListener("click",function(){
			fileUpload.click();
		});
		fileUpload.addEventListener("change",function(){
			if(fileUpload.value)
			{textUploadcustom.innerHTML=fileUpload.value;}
			else{
				textUploadcustom.innerHTML="";
			}
		});
		//------upload button---
		</script>
		
	</body>
	

</html>
