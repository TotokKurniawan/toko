<?php
date_default_timezone_set('Asia/Jakarta');
$koneksi = mysqli_connect("localhost", "root", "", "toko");
if (!$koneksi) {
	die("Koneksi MySQL error: " . mysqli_connect_error());
}
