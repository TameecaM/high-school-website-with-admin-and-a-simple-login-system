<?php
       $id=$_POST['id'];
       $sport=$_POST['sport'];
       
    include 'database.php';
    $sql="UPDATE sports SET sport='$sport' WHERE id=$id";
    $result=mysqli_query($conn, $sql);

    if($result){
        header("location: ./index.php");

    }

?>
