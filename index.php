<!-- <?php 
if (isset($_GET['pesan'])){
    if($_GET['pesan']== 'gagal'){
        echo "<div>gagal</div>";
    }
}
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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

    .bung{
        text-align: center;
        padding-top: 190px;
        color: rgb(255, 255, 255);
        /* width: 90px; */
        /* margin-top: 90px; */
        /* padding-top: 90px; */
        /* background-color: black ; */
        opacity: 70%;
    }

    .bung label h3{
        /* margin-top: 90px; */
        padding-bottom: 10px;
        padding-top: 10px;
    }

    /* .isi p a { */
        /* padding-top: 300px; */
        /* margin-top: 90px; */
    /* } */

    .input{
        /* padding: 30px; */
        padding-left: 50px;
        padding-right: 50px;
        padding-top: 10px;
        padding-bottom: 10px;
        border: bottom;
        border: none;
        /* border-radius: 15px; */
        background: transparent;
        font-weight: 900;
        font-size: 15px;
        color:white;
    }

    .sub {
        margin-top: 50px;
        /* padding: 10px; */
        padding-top: 10px;
        padding-bottom: 10px;
        padding-left: 100px;
        padding-right: 100px;
        border-radius: 10px;
        font-weight: 900;
        cursor: pointer;
        /* background-color: aqua; */
    }
        
    .isi {
        background-color: black;
        border-radius: 20px;
        /* border: 2px solid rgb(255, 255, 255); */
        height: 350px;
        margin-right: 500px;
        margin-left: 500px;
        /* width: 90px; */
    }

    .isi h1{
        /* color:rgb(0, 255, 0) ; */
        font-weight: 800;
        padding-top: 10px;

    }
    
    .baris{
        /* margin-top: 10px; */
        height: 1px;
        /* padding-left: 30px; */
        margin-left: 20px;
        margin-right: 20px;
        background-color: white;
    }

    

    </style>
</head>
<body>
    <div class="container">
        <div class="bung">
            
            <div class="isi">
                <h1 style="letter-spacing:5px;">"LOGIN"</h1>
                
                <label for="username" class="label"><h3>Username</h3></label>
                <form action="ceklogin.php" method="post">
                    <input type="text" name="username" id="username" class="input" placeholder="Username...">
                    <hr class="baris">
                    
                    
                    <label for="password"><h3>Password</h3></label>
                    <div class="pw">
                        <input type="password" name="password" id="password" class="input" placeholder="Password...">
                        <hr class="baris">
                    </div>
                    <button class="sub">SUBMIT</button>
                    <p style="padding-top:5px;">Not Registerd yet?<a href="./register.php" style="color:red;padding-left:20px; font-weight:900; letter-spacing:1px;">Create An Acount</a></p>
                </form>
            </div>
        </div>
            
    </div>
</body>
</html>