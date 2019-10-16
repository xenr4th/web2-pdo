<?php 

	include "koneksi.php";

    $id = $_POST['id'];
	$username = $username = $_POST['username'];
    $password = $_POST['password'];
    $nama = $_POST['nama'];
    $ttl = $_POST['ttl'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $foto = $_FILES['foto']['name'];
    $lokasi = $_FILES['foto']['tmp_name'];

	$query = "UPDATE user SET username='$username', password='$password', nama='$nama', ttl='$ttl', alamat='$alamat', email='$email', foto='$foto' WHERE id='$id'";

	$ubah = $db->prepare($query);
	$ubah->execute();

	header("location: index.php");

 ?>