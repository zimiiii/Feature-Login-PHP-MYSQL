<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

    .content a button {
         
        /* text-align: center; */
        padding-top: 10px;
        padding-bottom: 10px;
        padding-left: 20px;
        padding-right: 20px;
        border-radius: 10px;
        border: none;
        margin-top: 20px;
        margin-left: 635px;
        cursor: pointer;
    }

    .content h1 {
        padding-top: 90px;
        font-weight: 900;
        font-size: 50px;
        -webkit-text-stroke: 1px #ffffff;
        text-align: center;
    }

    .content h1 span {
        -webkit-text-stroke: 3px #000000;
    }

    </style>
</head>
<body>
    <div class="container">
        <div class="content">
            <h1>ANDA ADALAH<span style="color:rgb(255, 255, 255);"> ADMIN</span></h1>
            <a href="logout.php" class="log"><Button>LOGOUT</Button></a>
        </div>
    </div>
</body>
</html>