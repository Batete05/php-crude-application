<?php
include "connection.php";
if(isset($_GET['id'])){
    $id= $_GET['id'];
    $sql= "DELETE from `students` where id=$id";
    $conn->query($sql);
}
header('location:/crude_operations/work/index.php');
exit;
?>