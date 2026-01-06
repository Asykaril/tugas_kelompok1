<?php
session_start();
$conn = new mysqli("localhost", "root", "", "kedai_djalaran");

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$error = "";

if (isset($_POST['login'])) {
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM karyawan WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();

        if (password_verify($password, $user['password'])) {
            $_SESSION['karyawan'] = [
                'id'       => $user['id'],     
                'username' => $user['username'],
                'role'     => $user['role']
            ];

            header("Location: dashboard.php");
            exit;
        }
    }

    $error = "Username atau Password salah!";
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Login Karyawan</title>
<link rel="stylesheet" href="css/login.css">
</head>
<body>

<div class="mouse-glow"></div>

<div class="box">
    <h2>Login Karyawan</h2>

    <?php if($error): ?>
        <div class="error"><?= htmlspecialchars($error) ?></div>
    <?php endif; ?>

    <form method="post">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit" name="login">LOGIN</button>
    </form>
</div>

<script>
document.addEventListener("mousemove", function(e){
    document.documentElement.style.setProperty("--x", e.clientX + "px");
    document.documentElement.style.setProperty("--y", e.clientY + "px");
});
</script>

</body>
</html>
