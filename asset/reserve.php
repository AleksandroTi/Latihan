<html>
<body>
<style>
body {
  background-color: yellow;
}

h1 {
  color: white;
  text-align: left;
  font-size: 22px;
}

h2 {
  color: green;
  text-align: left;
  font-family: wide latin;
  font-size: 25px;
}
</style>
<?php
 // You have to download the Premium version to get working Reservation form alongwith full documentation of the  template
$nama_depan  	   =$_POST['nama_depan']; 
$nama_belakang 	   =$_POST['nama_belakang'];
$status			   =$_POST['status'];
$tanggal_pemesanan =$_POST['tanggal_pemesanan'];	
$telepon 	 	   =$_POST['telepon'];
$nomor_tamu		   =$_POST['nomor_tamu'];
$email			   =$_POST['email'];
$subjek  	       =$_POST['subjek'];
?>
<h2>
<?php
echo "Nama Depan 		= $nama_depan<br>";
echo "Nama Belakang 	= $nama_belakang<br>";
echo "Status 			= $status<br>";
echo "Tanggal Pemesanan	= $tanggal_pemesanan<br>";
echo "Telepon			= $telepon<br>";
echo "Nomor Tamu		= $nomor_tamu<br>";
echo "Email				= $email<br>";
echo "Subjek			= $subjek<br>";
?>
</h2>
</body>
</html>
