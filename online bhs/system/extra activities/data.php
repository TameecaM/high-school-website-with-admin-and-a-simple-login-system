<?php
$activities=$_POST['activities'];


include 'database.php';
$sql="INSERT INTO activities (activities)VALUES('$activities')";

$result=mysqli_query($conn, $sql);

if($result){
    header("location: ./index.php");
}
else{
    // echo "Sorry We Can't Connect";
}

?>