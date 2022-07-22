<?php
       $id=$_POST['id'];
       $name=$_POST['name'];
       $grade=$_POST['grade'];
       $contact=$_POST['contact'];
       
    include 'database.php';
    $sql="UPDATE students SET name='$name',grade='$grade',contact='$contact' WHERE id=$id";
    $result=mysqli_query($conn, $sql);

    if($result){
        header("location: ./index.php");

    }

?>
