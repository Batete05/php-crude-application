<?php
include 'header.php';
include 'connection.php';

$id="";
$fname="";
$lname="";
$email="";
$password="";
$gender="";

$error="";
$success="";

if($_SERVER["REQUEST_METHOD"]=='GET'){
    if(!isset($_GET['id'])){
        header("location:crude_operations/work1/work/index.php");
        exit;
    }
    $id=$_GET['id'];
    $sql="select * from students where id=$id";
    $result=$conn->query($sql);
    $row=$result->fetch_assoc();

    while(!$row){
        header("location:crude_operations/work1/work/index.php");
        exit;
    }
    $fname=$row["fname"];
    $lname=$row["lname"];
    $email=$row["email"];
    $password=$row["password"];
    $gender=$row["gender"];
}
else{
    $id=$_POST['id'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $gender=$_POST['gender'];

    $sql="update students set fname='$fname',lname='$lname', email='$email', password='$password', gender='$gender' where id='$id'";
    $result=$conn->query($sql);

}
?>
    <div class="col-lg-6 m-auto">
        <form action="" method="post">
            <br><br><div class="card">
                <div class="card-header bg-warning">
                    <h1 class="text-white text-center">Update Member</h1>
                </div><br>

                <input type="hidden" name="id" value="<?php echo $id; ?>" class="form-control"><br>

                <label for="">First Name</label>
                <input type="text" name="fname" class="form-control"><br>

                <label for="">Last Name</label>
                <input type="text" name="lname" class="form-control"><br>


                <label for="">EMAIL</label>
                <input type="text" name="email" class="form-control"><br>

                <label for="">Password</label>
                <input type="text" name="password" class="form-control"><br>

                <labe for="">Gender</label>
                <input type="radio" name="gender" value="male">Male
                <input type="radio" name="gender" value="female">Female
                <br>


                <button class="btn btn-success" type="submit" name="submit" >Submit</button><br>
                <a href="index.php" class="btn btn-info" type="submit" name="cancel">cancel</a><br>
            </div>
        </form>
    </div>
</body>
</html>