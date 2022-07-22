<?php
       $id=$_POST['id'];
       $name=$_POST['name'];
       $subject=$_POST['subject'];
       
       
    include 'database.php';
    $sql="UPDATE educators SET name='$name',subject='$subject' WHERE id=$id";
    $result=mysqli_query($conn, $sql);

    if($result){
        header("location: ./index.php");

    }

?>
