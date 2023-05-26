<?php
 include 'header.php';
include 'connection.php';

$error_msg = '';

if(isset($_POST['submit'])){
    $user_email = $_POST['email'];
    $password = $_POST['password'];

    // Check if email is valid
    if (!filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
        $error_msg = "Invalid email format";
    } else {
        $q = "SELECT * FROM students WHERE email = '$user_email'";
        $query = mysqli_query($conn, $q);

        // Check if email exists in database
        if(mysqli_num_rows($query) > 0) {
            header("location:/crude_operations/work/index.php");
            // Email exists, do something
        } else {
            // Email does not exist, do something else
            header("location:/crude_operations/work/create.php");
        }
    }
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
            margin-top: 40px;
        }
        form{
            width: 40%;
            margin-left: 450px;
            margin-top: 150px;
        }
        .name{
            display: flex;
            justify-content: space-between;
        }
        .name1{
            display: flex;
            justify-content: space-between;
            margin-top: 30px;
        }
        .button{
            font-size: 20px;
            width: 80px;
            height: 40px;
            text-align: center;
            margin-top: 30px;
            margin-left: 200px;
        }
    </style>
</head>
<body>
<div class="form">
        <form action="" method="post">
            <br><br><div class="card">
                <div class="card-header bg-primary">
                    <h1 class="text-white text-center">Login</h1>
                </div><br>

                <label for="">Email</label>
                <input type="text" name="email" class="form-control"><br>

                <label for="">Password</label>
                <input type="text" name="password" class="form-control"><br>


                <button class="btn btn-success" type="submit" name="submit" >Login</button><br>
                <a href="index.php" class="btn btn-info" type="submit" name="cancel">cancel</a><br>
            </div>
        </form>
    </div>
        <?php
            if(!empty($error_msg)) {
                echo "<p style='color:red;'>$error_msg</p>";
            }
        ?>
        <h3>Don't have an account<a href="create.php">signup</a></h3>
    </form>
</body>
</html>