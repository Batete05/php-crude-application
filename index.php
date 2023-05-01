<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a  class="navbar-brand" href="index.php">PHP CRUD OPERATIONS</a>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a  class="nav-link active"  aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a type="button" href="create.php" class="btn btn-primary nav-link active">ADD New</a>
          </li>
        </ul>
      </div>
    </div>
   </nav>
   </form>
   <div class="container my-4">
   <table class="table">
  <thead>
    <tr>
      <th>ID</th>
      <th>LAST NAME</th>
      <th>LAST NAME</th>
      <th>EMAIL</th>
      <th>PASSWORD</th>
      <th>GENDER</th>
    </tr>
  </thead>
  <tbody>
    <?php
    include "connection.php";
    $sql= "select * from students";
    $result=$conn->query($sql);
    if(!$result){
      die("Invalid query!");
    }
    while($row=$result->fetch_assoc()){
      echo "
        <tr>
          <td>$row[id]</td>
          <td>$row[fname]</td>
          <td>$row[lname]</td>
          <td>$row[email]</td>
          <td>$row[password]</td>
          <td>$row[gender]</td>
          <td>
          <a class='btn btn-success' href='export-pdf.php'>pdf</a>

            <a class='btn btn-success' href='update.php?id=$row[id]'>Edit</a>
            <a class='btn btn-danger' href='delete.php?id=$row[id]'>Delete</a>
          </td>
        </tr>
      ";
    }
    ?>
  </tbody>
</table>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
