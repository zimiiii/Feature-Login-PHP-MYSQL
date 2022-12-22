<?php 
$con = mysqli_connect('localhost','root','','ecommerce');

if(mysqli_connect_errno()){
    echo 'koneksi dtabase gagal :' . mysqli_connect_error ();
};


function tambah($ecommerce){
    global $con;
$username = $ecommerce ['username'];
$email = $ecommerce ['email'];
$password = $ecommerce ['password'];
$level = $ecommerce ['level'];
$query = "INSERT INTO user VALUES ('','$username','$email','$password','$level')";
mysqli_query($con,$query);
return mysqli_affected_rows($con);
}

?>