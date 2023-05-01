<?php
include 'header.php';
include 'connection.php';
if(isset($_POST['submit'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $gender=$_POST['gender'];

    $q="INSERT INTO `students` (`fname`,`lname`,`email`, `password`, `gender`)VALUES ('$fname','$lname','$email','$password', '$gender')" ;

    $query= mysqli_query($conn,$q);
}
?>
    <div class="col-lg-6 m-auto">
        <form action="" method="post">
            <br><br><div class="card">
                <div class="card-header bg-primary">
                    <h1 class="text-white text-center">Create New Member</h1>
                </div><br>

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