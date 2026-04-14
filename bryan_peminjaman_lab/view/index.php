<style>
body{
    font-family: 'Segoe UI', sans-serif;
    background: linear-gradient(135deg, #74ebd5, #9face6);
    margin:0;
    padding:20px;
}

.container{
    max-width: 1100px;
    margin:auto;
}

.card{
    background:white;
    padding:20px;
    border-radius:15px;
    box-shadow:0 10px 30px rgba(0,0,0,0.15);
}

h2{
    color:#2c3e50;
    margin-bottom:10px;
}

.btn{
    display:inline-block;
    padding:10px 15px;
    border-radius:8px;
    text-decoration:none;
    color:white;
    margin-right:5px;
    font-size:14px;
}

.btn-add{background:#2ecc71;}
.btn-blue{background:#3498db;}
.btn-yellow{background:#f1c40f; color:black;}
.btn-red{background:#e74c3c;}

.filter{
    margin:10px 0;
}

table{
    width:100%;
    border-collapse:collapse;
    overflow:hidden;
    border-radius:10px;
}

th{
    background:#34495e;
    color:white;
    padding:12px;
    font-size:14px;
}

td{
    padding:12px;
    text-align:center;
    background:#fff;
}

tr:nth-child(even) td{
    background:#f2f6ff;
}

tr:hover td{
    background:#dbe9ff;
    transition:0.2s;
}
</style>

<div class="container">
<div class="card">

<h2>📚 Data Peminjaman Lab</h2>

<a class="btn btn-add" href="index.php?action=tambah">+ Tambah Data</a>

<div class="filter">
    <a class="btn btn-blue" href="index.php">Semua</a>
    <a class="btn btn-blue" href="index.php?status=Dipinjam">Dipinjam</a>
    <a class="btn btn-blue" href="index.php?status=Kembali">Kembali</a>
</div>

<br>

<table>
<tr>
    <th>No</th>
    <th>Nama</th>
    <th>NIM</th>
    <th>Alat</th>
    <th>Status</th>
    <th>Aksi</th>
</tr>

<?php $no=1; while($row=$data->fetch_assoc()){ ?>
<tr>
    <td><?= $no++ ?></td>
    <td><?= $row['nama'] ?></td>
    <td><?= $row['nim'] ?></td>
    <td><?= $row['alat'] ?></td>
    <td>
        <b><?= $row['status'] ?></b>
    </td>
    <td>
        <a class="btn btn-yellow" href="index.php?action=edit&id=<?= $row['id'] ?>">Edit</a>
        <a class="btn btn-red" href="index.php?action=hapus&id=<?= $row['id'] ?>" onclick="return confirm('Hapus data?')">Hapus</a>
    </td>
</tr>
<?php } ?>

</table>

</div>
</div>