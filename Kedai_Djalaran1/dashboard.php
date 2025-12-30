<?php
session_start();
if (!isset($_SESSION['karyawan'])) {
    header("Location: login.php");
    exit;
}

$conn = new mysqli("localhost","root","","kedai_djalaran");
$user = $_SESSION['karyawan'];
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Dashboard Kedai</title>
<link rel="stylesheet" href="css/dashboard.css">
</head>
<body>

<div class="wrapper">

    <!-- SIDEBAR -->
    <div class="sidebar">
        <h2>Kedai</h2>
        <small><?= $user['username'] ?> (<?= $user['role'] ?>)</small>

        <div class="menu">
            <a href="dashboard.php" class="active">Pesanan</a>

            <?php if($user['role']==='admin'): ?>
                <a href="kelola_karyawan.php">Manajemen Karyawan</a>
            <?php endif; ?>

            <a href="logout.php">Logout</a>
        </div>
    </div>

    <!-- CONTENT -->
    <div class="content">

        <!-- TOPBAR -->
        <div class="topbar">
            <div>
                <h1>Pesanan Masuk</h1>
                <p>Kelola pesanan pelanggan kedai</p>
            </div>
        </div>

        <!-- CARD PESANAN -->
        <div class="card">
            <table>
                <tr>
                    <th>ID</th>
                    
                    <th>Menu</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>

                <?php
                $q = $conn->query("SELECT * FROM pesanan ORDER BY id DESC");
                while($p = $q->fetch_assoc()):
                ?>
                <tr>
                    <td><?= $p['id'] ?></td>
                   
                    <td><?= $p['menu'] ?></td>
                    <td>
                        <?php
                            if($p['status']=='menunggu') echo "Menunggu";
                            elseif($p['status']=='diproses') echo "Diproses";
                            else echo "Selesai";
                        ?>
                    </td>
                    <td>

                        <?php if($p['status']=='menunggu'): ?>
                            <a class="btn" 
                               href="update_pesanan.php?id=<?= $p['id'] ?>&s=diproses">
                               Terima
                            </a>

                        <?php elseif($p['status']=='diproses'): ?>
                            <a class="btn btn-warning"
                               href="update_pesanan.php?id=<?= $p['id'] ?>&s=selesai">
                               Selesai
                            </a>
                        <?php else: ?>
                            ✔
                        <?php endif; ?>

                    </td>
                </tr>
                <?php endwhile; ?>

            </table>
        </div>

    </div>
</div>

</body>
</html>
