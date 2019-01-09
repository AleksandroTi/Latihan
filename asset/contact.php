<html>
<body>
<style>
body {
  background-color: orange;
}

h1 {
  color: yellow;
  text-align: left;
  font-size: 22px;
}

h2 {
  color: red;
  text-align: left;
  font-family: wide latin;
  font-size: 25px;
}
</style>
<?php
 // You have to download the Premium version to get working contact form alongwith full documentation of the  template
$Nama	=$_POST['Nama']; 
$email	=$_POST['email'];
$Subjek =$_POST['Subjek'];
$Pesan 	=$_POST['Pesan']
?>
<h2>
<?php
echo "Nama Depan	= $Nama<br>";
echo "Email			= $email<br>";
echo "Subjek		= $Subjek<br>";
echo "Pesan			= $Pesan<br>";
?>
</h2>
</body>
</html>
