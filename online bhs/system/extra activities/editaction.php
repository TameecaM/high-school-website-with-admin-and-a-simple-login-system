<?php
       $id=$_POST['id'];
       $activities=$_POST['activities'];
       
    include 'database.php';
    $sql="UPDATE activities SET activities='$activities' WHERE id=$id";
    $result=mysqli_query($conn, $sql);

    if($result){
        header("location: ./index.php");

    }

?>
