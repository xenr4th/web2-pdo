<?php 

	include "koneksi.php";

    $id = $_GET['id'];

	$query = "DELETE FROM user WHERE id='$id'";

	$hapus = $db->prepare($query);
	$hapus->execute();

	header("location: index.php");

 ?>