<?php
       $id=$_POST['id'];
       $subject=$_POST['subject'];
       
    include 'database.php';
    $sql="UPDATE subjects SET subject='$subject' WHERE id=$id";
    $result=mysqli_query($conn, $sql);

    if($result){
        header("location: ./index.php");

    }

?>
