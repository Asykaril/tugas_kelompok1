<?php
$conn = new mysqli("localhost", "root", "","kedai_djalaran");

$username = "karyawan1";
$password = password_hash("12345", PASSWORD_DEFAULT);
$nama = "joko";

$stmt = $conn->prepare("INSERT INTO karyawan (username, password, nama) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $username, $password, $nama);
$stmt->execute();

echo "akun berhasil dibuat";