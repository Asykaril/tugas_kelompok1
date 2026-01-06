<?php
session_start();

if (
    !isset($_SESSION['karyawan']) ||
    $_SESSION['karyawan']['role'] != 'admin'
) {
    die("Akses ditolak");
}

$conn = new mysqli("localhost","root","","kedai_djalaran");

if(isset($_POST['simpan'])){
    $u = $_POST['username'];
    $p = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $r = $_POST['role'];

    $conn->query("INSERT INTO karyawan(username,password,role)
                  VALUES('$u','$p','$r')");
    header("Location: kelola_karyawan.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Tambah Karyawan</title>
<link rel="stylesheet" href="css/dashboard.css">
</head>
<body>

<div class="wrapper">
<div class="content">

<div class="topbar">
    <h1>Tambah Karyawan</h1>
</div>

<div class="page-center">

    <div class="form-box">
        <h2>Form Karyawan Baru</h2>

        <form method="post">
            <div class="form-group">
                <label>Username</label>
                <input name="username" placeholder="Masukkan username" required>
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" placeholder="Masukkan password" required>
            </div>

            <div class="form-group">
                <label>Role</label>
                <select name="role">
                    <option value="karyawan">Karyawan</option>
                    <option value="admin">Admin</option>
                </select>
            </div>

            <div class="form-actions">
                <button class="btn btn-warning" name="simpan">Simpan</button>
                <a href="kelola_karyawan.php" class="btn btn-primary">Cancel</a>
            </div>
        </form>
    </div>

</div>

</div>
</div>


</body>
</html>
