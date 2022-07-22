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
 background-image: url("pictures/library.jpg");
 background-color: #cccccc;
}



.container{
  
  padding: 20px;
  color:  white;
  font-family: sans-serif;
  font-size: 20px;
  text-align: center;
  
}
.container-fluid{
  
  background-color: lavender;
  text-align: center;
}
.article{
  float: right;
  width: 400px;
}

/* Style the footer */
.footer {
  color: white;
  background-color:purple;
  padding: 10px;
  font-family: gorgia ;
   position: bottom;
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

<div class="container">
  <h1><b>Education is the key to success.</b></h1><p>Brilliance High School is a high school helps students mold and create the key they need to open the doors to a next chapter in there life and prepares them for what awaits them on the other side of the door.</p>

</div>

<div class="row">
  <div class="col-lg-3"></div>
    <div class="col-lg-5" style="background-color: #f1f1f1;margin-bottom: 30px; padding: 10px; margin-left: 10px;">
  <h1 style="text-align: center;">About us</h1>
<p>Brilliance High School is a high school that provide a safe and creative learning environment to educate and shape every student into becoming successful young people and prepare them for higher education and the big world that awaits them after graduating from high school.</p>
</div><br>

<div class="container-fluid">
  <div class="row">
    <div class="col-lg-4" style="background-color: #f1f1f1;">
       <img src="pictures/book.png" style="width: 150px;height: 150px;">
    <a href="subjects.php" class="btn btn-primary">Subjects</a>
    </div>
    <div class="col-lg-4" style="background-color: #f1f1f1;">
     <img src="pictures/achievements.png" style="width: 150px;height: 150px;">
    <a href="students.php" class="btn btn-primary">Students</a>
    </div>
     <div class="col-lg-4" style="background-color: #f1f1f1;">
      <img src="pictures/gallery.png" style="width: 150px;height: 150px;">
    <a href="gallery.php" class="btn btn-primary">Gallery</a>
    </div>
  </div>
</div>

 

 <div class="footer">
  Author : BHS
  <br>
  brilliancehs@schools.com
  

</div>
</body>

</html>