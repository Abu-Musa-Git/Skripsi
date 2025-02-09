<?php
include 'config.php';


		
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //$nama = $conn->real_escape_string($_POST['nama']);

	
	$qnama=$conn->real_escape_string($_POST['nama']);
	$qnip=$conn->real_escape_string($_POST['nip']);
	$qdivisi=$conn->real_escape_string($_POST['divisi']);
	$qjabatan=$conn->real_escape_string($_POST['jabatan']);
	$qgolongan=$conn->real_escape_string($_POST['golongan']);
	$qpangkat=$conn->real_escape_string($_POST['spangkat']);
	$qkontak_person=$conn->real_escape_string($_POST['kontakperson']);
	$qjenis_kelamin=$conn->real_escape_string($_POST['jeniskelamin']);
	$qtglmasuk=$conn->real_escape_string($_POST['tanggalmasuk']);
	$qtglkeluar=$conn->real_escape_string($_POST['tanggalkeluar']);
	$qpassword=$conn->real_escape_string($_POST['password']);
	$qrole=$conn->real_escape_string($_POST['role']);
	echo "nip".$qnip."<br>nama".$qnama."<br>div".$qdivisi."<br>jabatan".$qjabatan."<br>golongan".$qgolongan."<br>pangkat".$qpangkat."<br>kp".$qkontak_person."<br>klamin".$qjenis_kelamin."<br>tmasuk".$qtglmasuk."<br>tkeluar".$qtglkeluar."<br>pass".$qpassword."<br>role".$qrole."";
    //$jenis_kelamin = $conn->real_escape_string($_POST['jenis_kelamin']);
    //$nomor_hp = $conn->real_escape_string($_POST['nomor_hp']);
	if(!empty($_FILES['foto']['tmp_name'])){
    // Proses file foto
    $foto = $_FILES['foto'];
    $foto_tmp = $foto['tmp_name'];
    $foto_data = addslashes(file_get_contents($foto_tmp));
	
    // Simpan data ke database
    $sql = "UPDATE tfotopetugas SET foto1 = '$foto_data' WHERE nip = '$qnip'";
	
    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil disimpan.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
	}
	else{ echo "Tidak ada foto";}
	
	$sql="UPDATE tdatapetugas SET nama = '$qnama', divisi = '$qdivisi', jabatan = '$qjabatan', golongan = '$qgolongan', pangkat = '$qpangkat', kontak_person = '$qkontak_person', jenis_kelamin = '$qjenis_kelamin', tglmasuk = '$qtglmasuk', tglkeluar = '$qtglkeluar', password = '$qpassword', role = '$qrole'  WHERE NIP = '$qnip'";
  
    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil disimpan.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();

?>