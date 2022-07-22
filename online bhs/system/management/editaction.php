<?php
       $id=$_POST['id'];
       $name=$_POST['name'];
       $position=$_POST['position'];
       
       
    include 'database.php';
    $sql="UPDATE management SET name='$name',position='$position' WHERE id=$id";
    $result=mysqli_query($conn, $sql);

    if($result){
        header("location: ./index.php");

    }

?>
