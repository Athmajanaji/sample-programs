<?php 
include('functions.php');
if(isset($_POST['login'])){
    extract($_POST);
    login($username,$password,$con);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
    form{
        padding: auto;
        text-align:center;
    }
    input{
        padding: 10px;
        text-align:center;
        border: 2px black solid;
        border-radius:20px;
    }
    .form{
        position: relative;
        margin:350px 150px 350px 150px;
    }
</style>
</head>
<body>
    <div class="form">
    <form method="POST">
        <input type="text" name="username" placeholder="username"><br><br>
        <input type="password" name="password" placeholder="password"><br><br>
        <input type="submit" name="login" value="Login"><br><br>
        <h3><a href="singup.php">Sign Up</a></h3>
    </form><br>
    
</div>
</body>
</html>