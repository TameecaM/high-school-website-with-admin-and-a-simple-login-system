<?php
$name=$_POST['name'];
$position=$_POST['position'];


include 'database.php';
$sql="INSERT INTO management (name,position)VALUES('$name','$position')";

$result=mysqli_query($conn, $sql);

if($result){
    header("location: ./index.php");
}
else{
     echo "Sorry We Can't Connect";
}

?>