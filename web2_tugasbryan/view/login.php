<!DOCTYPE html>
<html>
<head>
<title>Login Sistem</title>

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Segoe UI',sans-serif;
}

/* BACKGROUND */
body{
height:100vh;
display:flex;
justify-content:center;
align-items:center;
background:linear-gradient(135deg,#6a11cb,#2575fc);
}

/* LOGIN BOX */
.login-box{
background:white;
padding:40px;
width:360px;
border-radius:12px;
box-shadow:0 10px 25px rgba(0,0,0,0.2);
}

/* TITLE */
.login-box h2{
text-align:center;
margin-bottom:25px;
color:#333;
}

/* INPUT */
.form-group{
margin-bottom:18px;
}

label{
display:block;
margin-bottom:5px;
font-weight:600;
color:#444;
}

input{
width:100%;
padding:10px;
border:1px solid #ccc;
border-radius:6px;
font-size:14px;
}

input:focus{
outline:none;
border-color:#2575fc;
}

/* BUTTON */
button{
width:100%;
padding:12px;
border:none;
background:#2575fc;
color:white;
font-size:16px;
border-radius:6px;
cursor:pointer;
transition:0.3s;
}

button:hover{
background:#1b5edb;
}

/* FOOTER */
.footer{
text-align:center;
margin-top:15px;
font-size:13px;
color:#777;
}

</style>

</head>

<body>

<div class="login-box">

<h2>Login Sistem</h2>

<form method="POST" action="../controller/logincontroller.php">

<div class="form-group">
<label>Email</label>
<input type="text" name="email" placeholder="Masukkan email" required>
</div>

<div class="form-group">
<label>Password</label>
<input type="password" name="password" placeholder="Masukkan password" required>
</div>

<button type="submit">Login</button>

</form>

<div class="footer">
WEB 2 MVC Login System
</div>

</div>

</body>
</html>