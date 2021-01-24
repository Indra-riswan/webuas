<?php

require './Assets/functions.php';

$id = $_GET["id"];

if (delete($id)>0) {
	echo "
		<script>
		alert('Data Berhasil di Hapus')
		document.location.href='index.php';
		</script>";
}else {
	echo "
		<script>
		alert('Data Gagal di Hapus')
		document.location.href='index.php';
		</script>";
}

?>