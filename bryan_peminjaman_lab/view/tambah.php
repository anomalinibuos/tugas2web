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
    background:#2ecc71;
    color:white;
    font-size:15px;
    cursor:pointer;
}

button:hover{
    background:#27ae60;
}
</style>

<div class="card">
<h2>➕ Tambah Data</h2>

<form method="POST" action="index.php?action=simpan">
    Nama
    <input type="text" name="nama">

    NIM
    <input type="text" name="nim">

    Alat
    <input type="text" name="alat">

    Tanggal Pinjam
    <input type="date" name="tanggal_pinjam">

    Tanggal Kembali
    <input type="date" name="tanggal_kembali">

    Status
    <select name="status">
        <option>Dipinjam</option>
        <option>Kembali</option>
    </select>

    <button type="submit">Simpan Data</button>
</form>
</div>