<?php
session_start();

if(!isset($_SESSION['user'])){
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Data Tugas</title>

<style>

/* FONT DAN RESET */
*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Segoe UI',sans-serif;
}

/* BODY */
body{
background:linear-gradient(135deg,#fef9c3,#fde68a);
min-height:100vh;
padding-bottom:50px;
}

/* NAVBAR */
.navbar{
background:#4f46e5;
padding:15px 50px;
display:flex;
justify-content:space-between;
align-items:center;
box-shadow:0 5px 15px rgba(0,0,0,0.15);
color:white;
}

.nav-left{
display:flex;
align-items:center;
gap:25px;
}

.nav-left span{
font-weight:bold;
}

.nav-left a{
color:white;
text-decoration:none;
transition:0.3s;
font-weight:500;
}

.nav-left a:hover{
color:#c7d2fe;
}

.nav-right{
display:flex;
align-items:center;
gap:20px;
font-weight:500;
}

.nav-right a{
color:white;
text-decoration:none;
transition:0.3s;
}

.nav-right a:hover{
color:#c7d2fe;
}

/* CONTAINER */
.container{
max-width:900px;
margin:30px auto;
background:white;
padding:25px 30px;
border-radius:12px;
box-shadow:0 10px 25px rgba(0,0,0,0.1);
}

/* HEADER */
.container h2{
margin-bottom:20px;
color:#333;
}

/* TOMBOL TAMBAH */
.add-btn{
background:#4f46e5;
color:white;
padding:8px 16px;
border:none;
border-radius:6px;
cursor:pointer;
font-weight:500;
transition:0.3s;
text-decoration:none;
}

.add-btn:hover{
background:#3730a3;
}

/* TABEL */
table{
width:100%;
border-collapse:collapse;
margin-top:15px;
}

table th, table td{
padding:12px 10px;
border-bottom:1px solid #ddd;
text-align:left;
}

table th{
background:#f3f4f6;
color:#333;
}

table tr:hover{
background:#f3f4f6;
}

.action-btn{
padding:5px 10px;
border:none;
border-radius:6px;
cursor:pointer;
font-weight:500;
transition:0.3s;
}

.edit-btn{
background:#fbbf24;
color:white;
}

.edit-btn:hover{
background:#b45309;
}

.delete-btn{
background:#ef4444;
color:white;
}

.delete-btn:hover{
background:#b91c1c;
}

</style>

</head>
<body>

<!-- NAVBAR -->
<div class="navbar">
    <div class="nav-left">
        <span>WEB 2 MVC</span>
        <a href="mahasiswa.php">Mahasiswa</a>
        <a href="tugas.php">Tugas</a>
    </div>
    <div class="nav-right">
        <span>Admin</span>
        <a href="../logout/logout.php">Logout</a>
    </div>
</div>

<!-- CONTAINER DATA TUGAS -->
<div class="container">
<h2>Data Tugas</h2>

<a href="#" class="add-btn">Tambah Tugas</a>

<table>
<thead>
<tr>
<th>No</th>
<th>Judul</th>
<th>Deskripsi</th>
<th>Deadline</th>
<th>Aksi</th>
</tr>
</thead>

<tbody>
<tr>
<td>1</td>
<td>Tugas Web 2 MVC</td>
<td>Kerjakan lengkap</td>
<td>2026-05-12</td>
<td>
<button class="action-btn edit-btn">Edit</button>
<button class="action-btn delete-btn">Hapus</button>
</td>
</tr>
</tbody>
</table>
</div>

</body>
</html>