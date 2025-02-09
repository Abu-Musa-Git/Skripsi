<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
    
<head>
	<title>Portal Informasi Rukazam</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.7.2/css/all.css">
	<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
	
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
<style>

	/* Coded with love by Mutiullah Samim */
		body,
		html {
			margin: 0;
			padding: 0;
			height: 100%;
		 background: linear-gradient(to right, 
		  #0a0b0c 0%, 
		  #343a40 30%, 
		  #343a40 50%, 
		  #343a40 70%, 
		  #0a0b0c 100%
			  );
		}
		.user_card {
			height: 400px;
			width: 350px;
			margin-top: auto;
			margin-bottom: auto;
			background: orange;
			position: relative;
			display: flex;
			justify-content: center;
			flex-direction: column;
			padding: 10px;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			-webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			-moz-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			border-radius: 5px;

		}
		.brand_logo_container {
			position: absolute;
			height: 170px;
			width: 170px;
			top: -75px;
			border-radius: 50%;
			
			padding: 10px;
			text-align: center;
		}
		.brand_logo {
			height: 150px;
			width: 150px;
			border-radius: 50%;
			border: 2px solid white;
		}
		.form_container {
			margin-top: 100px;
		}
		.login_btn {
			width: 100%;

			color: white !important;
		}
		.login_btn:focus {
			box-shadow: none !important;
			outline: 0px !important;
		}
		.login_container {
			padding: 0 2rem;
		}
		.input-group-text {
		
			color: white !important;
			border: 0 !important;
			border-radius: 0.25rem 0 0 0.25rem !important;
		}
		
		.custom-checkbox .custom-control-input:checked~.custom-control-label::before {
			background-color: #c0392b !important;
		}
</style>

</head>
<!--Coded with love by Mutiullah Samim-->
<body >
	<div class="container h-100 ">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container bg-dark">
						<img src="img/logo.png" class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
					<form action="login-check.php" method="post" id="loginForm">
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text  bg-dark"><i class="fas fa-user "></i></span>
							</div>
							<input type="text" name="nip" id="nip" class="form-control input_user" value="" placeholder="username"  data-bs-toggle="tooltip" data-bs-placement="bottom" title="Masukan NIP" required>
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text bg-dark"><i class="fas fa-key  "></i></span>
							</div>
							<input type="password" id="password" name="password" class="form-control input_pass" value="" placeholder="password"  data-bs-toggle="tooltip" data-bs-placement="bottom" title="Masukan Password" required>
							<i class="fa-regular fa-eye-slash icon" id="eyeicon" style="position: absolute; right: 7px; top: 10px; cursor: pointer; z-index:3;"></i>
						</div>
						<div class="form-group">
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="rememberMe">
								<label class="custom-control-label" for="rememberMe">Saya Pikun</label>
							</div>
						</div>
							<div class="d-flex justify-content-center mt-3 login_container">
				 	<button type="submit" name="button" class="btn login_btn bg-dark">Login</button>
				   </div>
					</form>
				</div>
		
				<div class="mt-4">
					<div class="d-flex justify-content-center links">
						
						 <p style="font-family:verdana;font-size:12px;"><strong> Copyright &#169; 2025 Rukazam Inovation </strong></p>
					</div>
					<div class="d-flex justify-content-center links">
					<p style="font-family:verdana;font-size:12px;"><cite>Developed by Deby Pebriansyah </cite></p>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script>
		var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
		var tooltipList = tooltipTriggerList.map( function(tooltipTriggerEl) {
		  return new bootstrap.Tooltip(tooltipTriggerEl, {
		  trigger : 'hover'
		  });
		});
		
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
	
	
		document.addEventListener("DOMContentLoaded", function() {
        // Cek apakah data NIP tersimpan di localStorage
        if (localStorage.getItem("rememberMe") === "true") {
            document.getElementById("rememberMe").checked = true;
            document.getElementById("nip").value = localStorage.getItem("nip");
        }

        // Simpan NIP ke localStorage saat form dikirim
        document.getElementById("loginForm").addEventListener("submit", function() {
            const rememberMe = document.getElementById("rememberMe").checked;
            const nip = document.getElementById("nip").value;

            if (rememberMe) {
                localStorage.setItem("rememberMe", "true");
                localStorage.setItem("nip", nip);
            } else {
                localStorage.removeItem("rememberMe");
                localStorage.removeItem("nip");
            }
        });
		});

		</script>
		
		<?php
		if(isset($_GET['denied']))
		{
			$denied=$_GET['denied'];
			if($denied==1){echo "<script type=\"text/javascript\">alert('NIP atau Password yang anda masukan salah!');</script>";}
			
		}
		?>
</body>
</html>
