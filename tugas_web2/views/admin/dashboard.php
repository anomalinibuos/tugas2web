<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['user_id'])) {
    header("Location: index.php?page=login");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Admin</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f6fb;
        }

        .container {
            display: flex;
        }

        .sidebar {
            width: 220px;
            height: 100vh;
            background: linear-gradient(180deg, #4e54c8, #8f94fb);
            color: white;
            padding-top: 20px;
            position: relative;
        }

        .sidebar h2 {
            text-align: center;
            color: #ffffff;
        }

        .sidebar a {
            display: block;
            color: #ecf0f1;
            padding: 12px;
            text-decoration: none;
            transition: 0.3s;
        }

        .sidebar a:hover {
            background-color: rgba(255, 255, 255, 0.2);
        }

        .logout {
            position: absolute;
            bottom: 20px;
            width: 100%;
        }

        .content {
            flex: 1;
            padding: 20px;
            background-color: #ffffff;
            color: #2c3e50;
        }

        h1 {
            color: #4e54c8;
        }

        p {
            font-size: 16px;
        }
    </style>
</head>
<body>

<div class="container">

    <?php require_once __DIR__ . '/../layout/sidebar.php'; ?>
    
    <div class="content">
        <h1>Dashboard</h1>
        <p>Selamat datang, <b><?php echo $_SESSION['username']; ?></b> 👋</p>
    </div>

</div>

</body>
</html>