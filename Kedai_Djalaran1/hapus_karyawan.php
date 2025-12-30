<?php
session_start();

if (
    !isset($_SESSION['karyawan']) ||
    $_SESSION['karyawan']['role'] !== 'admin'
) {
    die("Akses ditolak");
}

$conn = new mysqli("localhost","root","","kedai_djalaran");
if ($conn->connect_error) {
    die("Koneksi gagal");
}

$id = $_GET['id'] ?? 0;
$adminUsername = $_SESSION['karyawan']['username'];


$stmt = $conn->prepare("SELECT username FROM karyawan WHERE id=?");
$stmt->bind_param("i", $id);
$stmt->execute();
$res = $stmt->get_result();

if ($res->num_rows === 1) {
    $data = $res->fetch_assoc();

    if ($data['username'] !== $adminUsername) {
        $del = $conn->prepare("DELETE FROM karyawan WHERE id=?");
        $del->bind_param("i", $id);
        $del->execute();
    }
}

header("Location: kelola_karyawan.php");
exit;
