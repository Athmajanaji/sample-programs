<?php 
include('config.php');
function login($username,$password,$con){
    $qry="select * from users where username='$username' and password='$password'";
    $sql=mysqli_query($con,$qry);
    $count=mysqli_num_rows($sql);
    if($count==1){
        header('location: home.php');
    }
}

function register($username,$password,$con){
    $qry="INSERT INTO `users` (`id`, `username`, `password`) VALUES ('2', '$username', '$password')";
    $sql=mysqli_query($con,$qry);
    header('location: index.php');
}
?>