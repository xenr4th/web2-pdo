<?php 

	include "koneksi.php";

	$username = $username = $_POST['username'];
    $password = $_POST['password'];
    $nama = $_POST['nama'];
    $ttl = $_POST['ttl'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $foto = $_FILES['foto']['name'];
    $lokasi = $_FILES['foto']['tmp_name'];
    $upload = move_uploaded_file($lokasi, "images/".$foto);

	$query = "INSERT INTO user VALUES ('', '$username', '$password', '$nama', '$ttl', '$alamat', '$email', '$foto')";

	$tambah = $db->prepare($query);
	$tambah->execute();

	header("location: index.php");

 ?>