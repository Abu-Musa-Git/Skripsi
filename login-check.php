<?php 


include 'config.php';

$username = htmlspecialchars($_POST['nip'], ENT_QUOTES, 'UTF-8');
$password = htmlspecialchars($_POST['password'], ENT_QUOTES, 'UTF-8');



$login = mysqli_query($conn,"select * from tdatapetugas where nip='$username' and password='$password'");
$cek = mysqli_num_rows($login);

$sql = "SELECT * FROM tdatapetugas WHERE nip='$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
	$name=$row["nama"];
	$nip=$row["nip"];
	$role=$row["role"];
	echo "$name $nip";
  }
} else {
  echo "Data Tidak Ditemukan";
}



	
if($cek > 0){
	session_start();
	
	$_SESSION['user'] = $name;
	$_SESSION['nip'] = $nip;
	$_SESSION['userrole'] = $role;
	$_SESSION['access'] = "login";


		if($role="admin"){
		header("location:index.php");
		}
		else if($role="user"){
		header("location:index.php");
		}
		
}

else{
	header("location:login.php?denied=1");

}


?>