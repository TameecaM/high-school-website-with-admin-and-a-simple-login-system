<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact form</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Poppins&display=swap" rel="stylesheet">
    <style>
    	* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    background: #1b1c1e;
    
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
  font-family: gorgia;
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

h1 {
    font-family: 'Playfair Display',
        serif;
    font-size: 59px;
    color: white;
    font-weight: 600;
    padding-bottom: 20px;
}

p {
    color: #d2d2d2;
}

p,
input,
textarea,
label {
    font-family: 'Poppins',
        sans-serif;
}

.container {
    max-width: 1320px;
    margin: 0 auto;
    padding: 5%;
}

form {
    max-width: 500px;
    margin: 0 auto;
    text-align: left;
    padding: 20px 0;
}

input,
textarea,
label {
    display: block;
    margin: 0 auto;
    width: 100%;
    color: #828282;
}

input,
textarea {
    background-color: transparent;
    border: 0;
    border-bottom: 2px solid #828282;
}

input[type=submit] {
    background-color: #545557;
    padding: 15px 0;
    color: white;
    font-size: 18px;
    border-bottom: none;
    margin-top: 30px;
    cursor: pointer;
    transition: all .3s ease;
}

input[type=submit]:hover {
    background: #FFF;
    color: #1b1c1e;
}

input,
textarea {
    color: white;
    font-size: 18px;
    padding: 10px;
}

input:focus,
textarea:focus {
    outline: 1px solid #828282;
}

a {
    color: #828282;
    font-style: italic;
}

a:hover {
    color: #fff;
}s

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
  <a href="contact form/index.php">Contact</a>
  <a href="subjects.php">Curriculum</a>
  <a href="staff.php">Staff</a>
  <a href="students.php">Students</a>
  <a href="gallery.php">Gallery</a>
</div>



    <div class="container">
        <h1 style="text-align: center;">Contact Me</h1>
        <p style="text-align: center;">For more information feel free to contact us.</p>
        <form action="contact form/mail.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
            <label for="subject">Subject:</label>
            <input type="text" name="subject" id="subject">
            <label for="message">Message</label>
            <textarea name="message" cols="30" rows="6"></textarea>
            <input type="submit" value="Send">
        </form>
    </div>
</div>
     <div class="footer">
  Author : BHS
  <br>
  brilliancehs@schools.com
  

</div>
</body>
</html>