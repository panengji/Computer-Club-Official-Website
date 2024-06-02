<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
<title>Professional Navigation Bar</title>
<style>
    * {
    margin: 0;
    padding: 0;
    font-family: 'Poppins', sans-serif;
    }
    .background {
    width: 100%;
    height: auto;
    position: fixed;
    top: 0;
    left: 0;
    z-index: -1; 
    object-fit: cover;
}
/* CSS for the navigation bar */
.container {
  width: 400px; /* Adjust container width as needed */
  margin: 0 auto; /* Center the container */
  margin-top: 5px;
}

.navbar {
  background-color: #952323;
  overflow: hidden;
  border-radius: 10px;
}

.navbar a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
  padding-left: 29px;
}

.navbar a:hover {
  background-color: white;
  color: #952323;
}

/* CSS for logos */
.lspu, .ccs {
  float: left;
  height: 40px; /* Adjust logo height as needed */
  margin-right: 20px; 
  margin-top: 5px;
  margin-left: 5px;/* Add space between logos and links */
}

</style>
</head>
<body>

<img class="background" src="bgall.png">
<!-- HTML for the logos -->
<img class="lspu" src="lspu.png">
<img class="ccs" src="NewLogoCCS.png">

<!-- HTML for the navigation bar -->
<div class="container">
  <div class="navbar">
    <a href="#">Payments</a>
    <a href="#">Documents</a>
    <a href="#">Messages</a>
  </div>
</div>

</body>
</html>
