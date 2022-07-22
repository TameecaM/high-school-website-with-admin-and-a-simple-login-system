<?php
$subject=$_POST['subject'];



include 'database.php';
$sql="INSERT INTO subjects (subject)VALUES('$subject')";

$result=mysqli_query($conn, $sql);

if($result){
    header("location: ./index.php");
}
else{
    // echo "Sorry We Can't Connect";
}

?>