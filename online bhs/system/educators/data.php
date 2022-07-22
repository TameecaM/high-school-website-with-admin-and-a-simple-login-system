<?php
$name=$_POST['name'];
$subject=$_POST['subject'];


include 'database.php';
$sql="INSERT INTO educators (name,subject)VALUES('$name','$subject')";

$result=mysqli_query($conn, $sql);

if($result){
    header("location: ./index.php");
}
else{
     echo "Sorry We Can't Connect";
}

?>