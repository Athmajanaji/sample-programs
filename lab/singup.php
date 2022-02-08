<?php
include('functions.php');
if(isset($_POST['add'])){
    extract($_POST);
    register($username,$password,$con);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Signup Form</title>
<style>
    .in{
        text-align:center;
        width: 600px;
        margin: 200px auto;
    }
</style>
</head>
<body>
<div class="in">
    <form method="POST">
<div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Username</label>
    <div class="col-sm-10">
      <input type="text" name=" username"class="form-control" id="inputPassword">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" name="password" class="form-control" id="inputPassword">
    </div><br><br>
    <input type="submit" name="add"class="btn btn-success" style="width:100px; margin:auto ;" value="Add User">
    
</form>
  </div>
</div>
</body>
</html>