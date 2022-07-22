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
  background-image: url("pictures/library.jpg");
 background-color: #cccccc;
}

/* Style the header */
.header {
  background-color: #f1f1f1;
  padding: 20px;
  font-family: gorgia ;
}

.vertical-menu {
  width: 200px;
  height: 400px;
  overflow-y: auto;
}

.vertical-menu a {
  background-color: #eee;
  color: black;
  display: block;
  padding: 12px;
  text-decoration: none;
}

.vertical-menu a:hover {
  background-color: #ccc;
}

.vertical-menu a.active {
  background-color: #04AA6D;
  color: white;
}

a{
  color: white;
  display: block;
  padding: 5px;
}
a:hover{
  background-color: #cccc;
  color: white;
}

.container-fluid{
  width: 100%;
  background-color:purple ;
  padding: 10px;
}



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
<div class="container-fluid">
	<h1 style="color: white;text-align: center;">Admin Panel</h1>
  <a href="profile.php">logout</a>
</div>

 
   
  
      <div class="vertical-menu">
  <a href="#" class="active">Home</a>
  <a href="staff/index.php">Staff</a>
   <a href="management/index.php">Management</a>
   <a href="educators/index.php">Educators</a>
  <a href="students/index.php">Students</a>
 <a href="#">Gallery</a>
 <a href="subjects/index.php">Subjects</a>
 <a href="extra activities/index.php">Extra Curricular Activities</a>
 <a href="sports/index.php">Sports</a>
  
</div>
    </div>

   



<div class="footer">
  @admin
</div>
</body>

</html>