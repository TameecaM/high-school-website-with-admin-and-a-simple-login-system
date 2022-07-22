<!DOCTYPE html>

<html>

<head>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

  <title>Brilliance High School</title>

  <style>

* {

  box-sizing: border-box;

}



body {

  margin: 1px;

}



/* Style the header */

.header {

  background-color: #f1f1f1;

  padding: 20px;

  font-family: gorgia ;

}



/* Style the top navigation bar */

.topnav {

  overflow: hidden;

  background-color: purple;

}



/* Style the topnav links */

.topnav a {

  float: left;

  display: block;

  color: #f2f2f2;

  text-align: center;

  padding: 20px 20px;

  text-decoration: none;

}



/* Change color on hover */

.topnav a:hover {

  background-color: #ddd;

  color: black;

}



body {

 

 background-color: #cccccc;

}



.container-fluid{

  width: 100%;

  padding: 10px;

  margin-top: 10px;

}



/* Style the footer */

.footer {

  color: white;

  background-color:purple;

  padding: 10px;

  font-family: gorgia ;

   position: fixed;

  left: 0;

  bottom: 0;

  width: 100%;

  

  text-align: center;

}

</style>

</head>

<body>



  <div class="header">

  <img src="pictures/BHS logo.png" style="width: 150px;height: 150px;">

  <label style="font-size: 27px;"><b>Brilliance High School</b></label>

</div>



  <div class="topnav">

   <a href="webpage.php">Home</a> 

  <a href="contact.php">Contact</a>

  <a href="subjects.php">Curriculum</a>

  <a href="staff.php">Staff</a>

  <a href="students.php">Students</a>

  <a href="gallery.php">Gallery</a>

</div>

<div class="container-fluid">

<table class="table table-dark table-hover">

  <thead>

    <tr>

      

      <th scope="col">Student Name</th>

      <th scope="col">Grade</th>

      <th scope="col">Contact Numbers</th>

  

    </tr>

  </thead>

  <tbody>



  <?php

        include 'database.php';

        $sql="SELECT * FROM students";

        $result=mysqli_query($conn, $sql);



        if($result){

            while($row=mysqli_fetch_assoc($result)){

                $id=$row['id'];

                $name=$row['name'];

                $grade=$row['grade'];

                $contact=$row['contact'];

               





                ?>



                <tr>

                    

                    <td><?php echo $name  ?></td>

                    <td><?php echo $grade  ?></td>

                    <td><?php echo $contact  ?></td>

                  

                   

 

                    </td>

                      

                </tr>



                <?php



                

            }

        }

    ?>

    

   

  </tbody>

</table>

 



 <div class="footer">

  Author : BHS

  <br>

  brilliancehs@schools.com

  



</div>

</body>



</html>