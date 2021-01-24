<?php 
$conn = mysqli_connect("localhost", "root", "", "percobaanphp");


function query($table){
	global $conn;
	$masukdbms = mysqli_query($conn, $table);
	$wadah = [];
	while ($data = mysqli_fetch_assoc($masukdbms)) {
		$wadah[]= $data;
	}
	return $wadah;
}

function tambah($ambil){
	global $conn;

	$nim = htmlspecialchars(($ambil["Nim"]));
	$nama = htmlspecialchars(($ambil["Nama"]));
	$prodi = htmlspecialchars(($ambil["Prodi"]));
	$pembina = htmlspecialchars(($ambil["Dosenpembina"]));
	$email = htmlspecialchars(($ambil["Email"]));
	$gambar = htmlspecialchars(($ambil["Gambar"]));

	$query = "INSERT INTO mahasiswa1 Values
				('', '$nim', '$nama', '$prodi', '$pembina', '$email', '$gambar')";

	mysqli_query($conn, $query );

	return mysqli_affected_rows($conn);
}

function delete($id){
	global $conn;

	mysqli_query($conn, "DELETE FROM mahasiswa1 WHERE id = $id ");

	return mysqli_affected_rows($conn);
}


function ubah($data){
	global $conn;

	$id = ($data["id"]);
	$nim = htmlspecialchars(($data["Nim"]));
	$nama = htmlspecialchars(($data["Nama"]));
	$prodi = htmlspecialchars(($data["Prodi"]));
	$pembina = htmlspecialchars(($data["Dosenpembina"]));
	$email = htmlspecialchars(($data["Email"]));
	$gambar = htmlspecialchars(($data["Gambar"]));

	$query = "UPDATE mahasiswa1 SET 
				Nim = '$nim',
				Nama = '$nama',
				Prodi = '$prodi',
				Dosenpembina = '$pembina',
				Email = '$email',
				Gambar = '$gambar'
				Where id = $id";

	mysqli_query($conn, $query );

	return mysqli_affected_rows($conn);

}



?>