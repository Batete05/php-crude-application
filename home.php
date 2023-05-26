<?php
include 'header.php';
?>
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
            box-sizing: border-box;
        }
        body{
            font-family: sans-serif;
        }
        h2{
              text-align: center;
              margin-top: 200px;
        }
        .link1{
            text-align:center;
            margin: top 30px;
        }
        .link2{
            text-align:center;
            margin: top 30px;
        }
    </style>
</head>
<body>
    <div class="home">
        <h2>Welcome to Our website!!<br>
        Want to know more?? Here is how it is done</h2>
        <div class="link1">
            Hve an account?? Click the link below!!<br>
        <a href="login.php">Login</a>
    </div>
    <div class="link2">
        Don't have an account click the link bellow<br>
        <a href="create.php">Signup</a>
    </div>
    </div>
</body>
</html>