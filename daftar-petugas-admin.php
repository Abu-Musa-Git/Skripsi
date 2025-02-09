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
	<link rel="stylesheet" href="css/dataTables.dataTables.css">

	<link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.7.2/css/all.css">
	<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
	
	<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
	<script src="js/dataTables.js"></script>
	
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
		 .thov:hover {
            background-color: #f1f1f1;
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
				<div class="col-md-2 bg-dark mt-2 pl-5" >
				<div class="mt-3 ms-5"><span ><img src="img/logo.png" class="rounded-circle border" alt="logo"></span></div>
				<ul class="nav flex-column ms-3 me-3 mb-5">
					  <li class="nav-item"><hr class="bg-light">
						<a class="nav-link text-white fw-light"  href="index.php"><i class="fa-light fa-grid-dividers me-3 fs-5"></i></i>Dashboard</a><hr class="bg-light">
					  </li>
					  <li class="nav-item">
						<a class="nav-link text-white fw-bold" href="#"><i class="fa-light fa-user-police-tie me-3 fs-5"></i>Daftar Petugas</a><hr class="bg-light">
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
					  <a class="nav-link" href="#" data-bs-toggle="collapse" data-bs-target="#submenu" >
					  <span class="icon">
							<i class="fa-solid text-white fa-people-roof me-2 fs-5"></i>
					  </span>
					  <span class="description text-white fw-light">Riwayat <i class="fa-solid fa-caret-down ms-1"></i></span>
					  <div class="sub-menu collapse " id="submenu">
						  <a class="nav-link" href="#">
							<span class="icon">
								<i class="fa-solid fa-file-fragment text-white fs-5 ms-3"></i>
							</span>
							<span class="description text-white ms-2 fw-light">Data 1</span>
						  </a>
						  <a class="nav-link" href="#">
							<span class="icon">
								<i class="fa-solid fa-file-fragment text-white  ms-3 fs-5"></i>
							</span>
							<span class="description text-white ms-2 fw-light">Data 2</span>
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
				<div class="colom2 col-md-10">
				<div class="mt-4 ms-3 me-3 bg-light p-3 shadow">
								<table id="example" class="mt-2 ms-2 cell-border table-striped" style="width:100%">
						<thead>
							<tr>
								<th>Nama</th>
								<th>Nomor Induk</th>
								<th>Jabatan</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody >
							  <?php
								
								$sql = "SELECT * FROM tdatapetugas";
								$result = $conn->query($sql);
								
								if ($result->num_rows > 0) {
								  while($row = $result->fetch_assoc()) {  
									

							
								echo "<tr class=\"thov\">
									<td>".$row['nama']."</td>
									<td>".$row['nip']."</td>
									<td>".$row['jabatan']."</td>
									<td>
									<span  data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"Klik Untuk Lihat Detail\"><button type=\"button\" class=\"btn btn-sm btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#profileModal\"><i class=\"fa-regular fa-eye\"></i></button></span>
									<span  data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"Klik Untuk Edit\"><button type=\"button\" class=\"btn btn-sm btn-warning\" data-bs-toggle=\"modal\" data-bs-target=\"#profileModal2\"><i class=\"fa-regular fa-pen-to-square\"></i></button></span>
									<span  data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"Klik Untuk Hapus\"><button type=\"button\" class=\"btn btn-sm btn-danger\" data-bs-toggle=\"modal\" data-bs-target=\"#profileModal\"><i class=\"fa-regular fa-trash\"></i></button></span>
									</td>
								</tr>";
								  }
								} else {
								  echo "<tr>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										</tr>";
								}
								?>
							
						</tbody>
						<tfoot>
							<tr>
								<th>Nama</th>
								<th>Nomor Induk</th>
								<th>Jabatan</th>
								<th>Aksi</th>
							</tr>
						</tfoot>
					</table>
				</div>
				</div>
				<div class="colom2 col-md-3 bg-light">
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
					
					<
					<!-- Modal Selection Table-->
					<div class="modal fade" id="profileModal2" tabindex="-1" >
					  <div class="modal-dialog modal-lg">
						<div class="modal-content">
						  <div class="modal-header">
							<h5 class="modal-title" id="profileModal2Label"><i class="fa-solid fa-user"></i> Profil Petugas</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal" ></button>
						  </div>
						  <div class="modal-body">
							
							<!-- modal profile -->
					<div class="d-flex border " style="height: 60vh;">
					<div class="m-2 " style="text-align: center;">
					
					<img src="img/foto.jpg" class="rounded"  alt="logo" style="width:250px; height: auto;">
					
					<br>
				
					<span class="mt-2 text-dark" style="font-size: 1.2rem;">Abu Musa</span><br>
					
					<span class="border-top border-dark text-dark">NIP. 199102022017121002</span><br>
				 
					<button class="btn btn-primary mt-2 "  data-bs-toggle="tooltip" data-bs-placement="bottom" title="Klik Untuk Ganti Foto" type="button"><i class="fa-solid fa-arrow-up-from-bracket"></i></i> Ganti Foto</button>
					
					</div>
					<div class="keterangan border-end bg-success"></div>
					
					<div class="d-flex flex-column justify-content-between m-2 mt-2" style="height: 400px;">
					
					<div class=" mt-1">Nama Lengkap</div>
					<div class=" mt-1">Nomor Induk</div>
					<div class=" mt-1">Jabatan</div>
					<div class=" mt-1">Golongan</div>
					<div class=" mt-1">Divisi</div>
					<div class=" mt-1">Kontak Person</div>
					<div class=" mt-1">Password</div>
					<div class="mt-5 mb-5"></div>
					</div>
					
					<div class="d-flex flex-column justify-content-between m-2" style="height: 400px;">
					
					<div class=" fw-light"><input class="form-control" id="nama" type="text" value="Deby Pebriansyah"></div>
					<div class=" fw-light"><input class="form-control" id="nip" type="number" value="199102022017121002"></div>
					<div class=" fw-light">
					<select class="form-select" id="jabatan">
					<option selected>Petugas Jaga</option>
					<option>Staff Yantah</option>
					<option>Staff KPR</option>
					<option>Staff Pengelolaan</option>
					<option>Staff Lain</option>
					</select>
					</div>
					<div class=" fw-light">
					<select class="form-select" id="golongan">
					<option selected>IIb</option>
					<option>Ia</option>
					<option>Ib</option>
					<option>Ic</option>
					<option>Id</option>
					<option>IIa</option>
					<option>IIb</option>
					<option>IIc</option>
					<option>IId</option>
					<option>IIIa</option>
					<option>IIIb</option>
					<option>IIIc</option>
					<option>IIId</option>
					<option>IVa</option>
					<option>IVb</option>
					<option>IVc</option>
					<option>IVd</option>
					</select></div>
					<div class=" fw-light">
					<select class="form-select" id="divisi">
					<option selected>Kesatuan Pengamanan</option>
					<option>Pelayanan Tahanan</option>
					<option>Pengelolaan</option>
					<option>Kepala Rutan</option>
					</select>
					</div>
					<div class=" fw-light"><input class="form-control" id="kontakperson" type="number" value="081266664746"></div>
					<div class=" fw-light border" style="position: relative;"><input class="form-control" id="password" type="password" value="123456"><i class="fa-regular fa-eye-slash icon" id="eyeicon" style="position: absolute; right: 7px; top: 10px; cursor: pointer;"></i></div>
					<div class="mt-5 mb-5"></div>
					
					</div>
					
					
					
					</div>					
					<!-- end profile -->
							
							
						  </div>
						  <div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
							<button type="button" class="btn btn-primary">Simpan</button>
						  </div>
						</div>
					  </div>
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
		
		//------data table------
		new DataTable('#example', {
		scrollX: true
		});
		//------data table------
		
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
