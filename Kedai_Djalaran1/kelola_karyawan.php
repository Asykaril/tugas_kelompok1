<?php

session_start();
if ($_SESSION['karyawan']['role'] !== 'admin') {die("Akses ditolak");
}
$conn = new mysqli("localhost","root","","kedai_djalaran");
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Manajemen Karyawan</title>
<link rel="stylesheet" href="css/dashboard.css">
</head>
<body>

<div class="wrapper">

<div class="content">

<div class="topbar">
    <h1>Manajemen Karyawan</h1>
    <a href="tambah_karyawan.php" class="btn btn-warning">+ Tambah Karyawan</a>
</div>

<div class="card">
<table>
<tr>
    <th>Username</th>
    <th>Role</th>
    <th>Aksi</th>
</tr>

<?php
$q = $conn->query("SELECT * FROM karyawan");
while($k = $q->fetch_assoc()):
?>
<tr>
    <td><?= $k['username'] ?></td>
    <td><?= $k['role'] ?></td>
    <td>
        <a class="btn btn-danger"onclick="return confirm('Yakin hapus karyawan ini?')"href="hapus_karyawan.php?id=<?= $k['id'] ?>">Hapus
</a>

    </td>
</tr>
<?php endwhile; ?>

</table>
</div>

</div>
</div>

</body>
</html>
