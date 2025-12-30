<?php
include "koneksi.php";
header("Content-Type: application/json");

// ambil data dari fetch
$data = json_decode(file_get_contents("php://input"), true);

if (!$data || !isset($data['items'])) {
    echo json_encode(["success" => false, "message" => "Data tidak valid"]);
    exit;
}

$items = $data['items'];

// gabungkan menu
$menuList = [];
foreach ($items as $item) {
    $nama   = mysqli_real_escape_string($conn, $item['nama']);
    $jumlah = (int)$item['jumlah'];
    $menuList[] = "$nama ($jumlah)";
}

$menu = implode(", ", $menuList);
$status = "menunggu";

// simpan ke tabel pesanan
$query = mysqli_query($conn, "
    INSERT INTO pesanan (menu, status)
    VALUES ('$menu', '$status')
");

if ($query) {
    echo json_encode(["success" => true]);
} else {
    echo json_encode([
        "success" => false,
        "error" => mysqli_error($conn)
    ]);
}
