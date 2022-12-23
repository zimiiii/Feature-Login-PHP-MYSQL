<?php 
$con = mysqli_connect('localhost','root','','ecommerce');

require 'koneksi.php';
if(isset($_POST['tambah'])){

    if(tambah($_POST)>0){
        echo "
        <script>
        alert('Anda Berhasil Membuat Akun 😎');
        document.location.href = 'index.php';
        </script>
        ";
        }else{
            echo"
        <script>
        alert('Anda Gagal Membuat Akun 😜');
        document.location.href = 'registrasi.php';
        </script>
            ";
        }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
      *{
    margin: 0;
    padding: 0;
    }

    .container {
        width: 1366px;
        margin: auto;
        font-family: "calibri";
        height: 765px;
        /* background: linear-gradient(to top, yellow 20%, rgb(255, 0, 238) 100%); */
        background:url(https://images.unsplash.com/photo-1557360798-c91519105dd7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTV8fGJhY2tncm91bmQlMjBsYW5kc2NhcGV8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60) ;
        background-size: cover;
        backdrop-filter: blur 100px;
        /* width: 10vh; */
    }
    </style>
</head>
<body>
    <div class="container">
        <form name="form" method="post">
            .bung
            <div class="nama">
                <label for="username">Username</label>
                <input type="text" name="username" id="username">
            </div>
            
            <div class="email">
                <label for="email">Email</label>
                <input type="text" name="email" id="email">
            </div>
            
            <div class="pw">    
                <label for="password">Pasword</label>
                <input type="password" name="password" id="password">
            </div>
            
            <div class="lev">
                <label for="level">Level</label>
                <input type="text" name="level" id="level">
            </div>

            <div class="sub">
                <button type="submit" name="tambah">SUBMIT</button>
            </div>

        </form>

        
    </div>
</body>
</html>