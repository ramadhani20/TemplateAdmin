<?php 
$conn= mysqli_connect("localhost", "root", "", "polije");


function query ($query){
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;

}
// ambil data dari tiap elemen dalam form index.php
function tambah($data){
global $conn;
$nim = $data["nim"];
$nama = $data["nama"];
$ttl = $data["ttl"];
$alamat = $data["alamat"];

// query insert data
$query = "INSERT INTO user
			VALUES 
			('','$nim','$nama','$ttl','$alamat')
			";
mysqli_query($conn,$query);

return mysqli_affected_rows($conn);

}

function hapus ($id){
	global $conn;
	mysqli_query($conn,"DELETE FROM daftar_mahasiswa WHERE id =$id");
	return mysqli_affected_rows($conn);
}

 ?>