<?php
$sport=$_POST['sport'];


include 'database.php';
$sql="INSERT INTO sports (sport)VALUES('$sport')";

$result=mysqli_query($conn, $sql);

if($result){
    header("location: ./index.php");
}
else{
    // echo "Sorry We Can't Connect";
}

?>