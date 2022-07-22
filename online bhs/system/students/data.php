<?php
$name=$_POST['name'];
$grade=$_POST['grade'];
$contact=$_POST['contact'];





include 'database.php';
$sql="INSERT INTO students(name,grade,contact)VALUES('$name','$grade','$contact')";

$result=mysqli_query($conn, $sql);

if($result){
    header("location: ./index.php");
}
else{
    // echo "Sorry We Can't Connect";
}

?>