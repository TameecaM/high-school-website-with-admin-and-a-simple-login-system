<?php
$name=$_POST['name'];
$occupation=$_POST['occupation'];



include 'database.php';
$sql="INSERT INTO staff (name,occupation)VALUES('$name','$occupation')";

$result=mysqli_query($conn, $sql);

if($result){
    header("location: ./index.php");
}
else{
     echo "Sorry We Can't Connect";
}

?>