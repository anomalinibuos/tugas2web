<?php
session_start();

if(!isset($_SESSION['user'])){
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Segoe UI',sans-serif;
}

/* BACKGROUND */
body{
background:linear-gradient(135deg,#eef2ff,#c7d2fe);
min-height:100vh;
}

/* NAVBAR */
.navbar{
background:#4f46e5;
padding:15px 50px;
display:flex;
justify-content:space-between;
align-items:center;
box-shadow:0 5px 15px rgba(0,0,0,0.15);
}

/* LEFT MENU */
.nav-left{
display:flex;
align-items:center;
gap:25px;
color:white;
font-weight:500;
}

.nav-left a{
text-decoration:none;
color:white;
transition:0.3s;
}

.nav-left a:hover{
color:#c7d2fe;
}

/* RIGHT MENU */
.nav-right{
display:flex;
align-items:center;
gap:20px;
color:white;
font-weight:500;
}

.nav-right a{
text-decoration:none;
color:white;
transition:0.3s;
}

.nav-right a:hover{
color:#c7d2fe;
}

/* DASHBOARD CARD */
.container{
display:flex;
justify-content:center;
align-items:center;
height:80vh;
}

.card{
background:white;
padding:40px;
border-radius:12px;
box-shadow:0 10px 25px rgba(0,0,0,0.1);
text-align:center;
width:420px;
}

.card h2{
margin-bottom:10px;
color:#333;
}

.card p{
color:#666;
font-size:15px;
}

</style>

</head>

<body>

<!-- NAVBAR -->
<div class="navbar">
    <div class="nav-left">
        <span style="font-weight:bold;">WEB 2 MVC</span>
        <a href="mahasiswa.php">Mahasiswa</a>
        <a href="tugas.php">Tugas</a>
    </div>
    <div class="nav-right">
        <span>Admin</span>
        <a href="../logout/logout.php">Logout</a>
    </div>
</div>

<!-- DASHBOARD -->
<div class="container">
<div class="card">
<h2>Dashboard</h2>
<p>Selamat datang admin</p>
</div>
</div>

</body>
</html>