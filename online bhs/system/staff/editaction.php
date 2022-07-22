<?php
       $id=$_POST['id'];
       $name=$_POST['name'];
       $occupation=$_POST['occupation'];
       
       
    include 'database.php';
    $sql="UPDATE staff SET name='$name',occupation='$occupation' WHERE id=$id";
    $result=mysqli_query($conn, $sql);

    if($result){
        header("location: ./index.php");

    }

?>
