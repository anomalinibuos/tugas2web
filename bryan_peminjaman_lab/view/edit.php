<style>
body{
    font-family:'Segoe UI';
    background: linear-gradient(135deg, #74ebd5, #9face6);
}

.card{
    width:420px;
    margin:50px auto;
    background:white;
    padding:25px;
    border-radius:15px;
    box-shadow:0 10px 30px rgba(0,0,0,0.2);
}

input,select{
    width:100%;
    padding:10px;
    margin:8px 0;
    border-radius:8px;
    border:1px solid #ddd;
}

button{
    width:100%;
    padding:12px;
    border:none;
    border-radius:8px;
    background:#f39c12;
    color:white;
    font-size:15px;
    cursor:pointer;
}

button:hover{
    background:#e67e22;
}
</style>

<div class="card">
<h2>✏️ Edit Data</h2>

<form method="POST" action="index.php?action=update">
    <input type="hidden" name="id" value="<?= $data['id'] ?>">

    Nama
    <input type="text" name="nama" value="<?= $data['nama'] ?>">

    NIM
    <input type="text" name="nim" value="<?= $data['nim'] ?>">

    Alat
    <input type="text" name="alat" value="<?= $data['alat'] ?>">

    Tanggal Pinjam
    <input type="date" name="tanggal_pinjam" value="<?= $data['tanggal_pinjam'] ?>">

    Tanggal Kembali
    <input type="date" name="tanggal_kembali" value="<?= $data['tanggal_kembali'] ?>">

    Status
    <select name="status">
        <option <?= $data['status']=='Dipinjam'?'selected':'' ?>>Dipinjam</option>
        <option <?= $data['status']=='Kembali'?'selected':'' ?>>Kembali</option>
    </select>

    <button type="submit">Update Data</button>
</form>
</div>