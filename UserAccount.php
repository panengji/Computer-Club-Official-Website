<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
    <title>User Account</title>
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
.lspu {
    position: absolute;
    top: 10px;
    left: 15px;
    width: 55px; 
    height: auto;
}

.ccs {
    position: absolute;
    top: 10px;
    left: 90px;
    width: 55px; 
    height: auto;
}
.main-nav-bar {
    margin: 10px auto 0;
    position: relative;
    width: 575px;
    height: 50px;
    background-color: #952323;
    border-radius: 8px;
    font-size: 0;
}

.main-nav-bar .nav-bar {
    line-height: 50px;
    height: 100%;
    font-size: 15px;
    display: inline-block;
    position: relative;
    z-index: 1;
    text-decoration: none;
    text-transform: uppercase;
    text-align: center;
    color: white;
    cursor: pointer;
}

.main-nav-bar .animation {
    position: absolute;
    height: 100%;
    top: 0;
    z-index: 0;
    transition: all .5s ease 0s;
    border-radius: 8px;
    background-color: #EAD196; /* Default background color */
}

.nav-bar {
    width: 115px;
}

#nav-animation {
    width: 100px;
    left: 0;
}

.list {
    border: 2px solid maroon;
    background-color: white;
    color: maroon;
    text-decoration: none;
    display: inline-block; /* Ensures the border fits the content */
    padding: 5px 20px;
    border-radius: 5px;
    margin-left: 47%;
    margin-top: 10px;
   /* Adjust padding as needed */
}

.list-totable {
    text-decoration: none; /* Remove underline on link */
    color: maroon; /* Set text color */
}

.list-totable:hover {
    color: maroon; /* Set hover color */
}

.container{
    background: #fff;
    width: 540px;
    height: 450px;
    margin: 0 auto;
    position: relative;
    margin-top: 1%;
    box-shadow: 2px 5px 20px
    rgba(119,119,119,0.5);
}

.leftbox{
    float: left;
    top: -5%;
    left: 5%;
    position: absolute;
    width: 15%;
    height: 110%;
    background: #952323;
    box-shadow: 3px 3px 10px
    rgba(119,119,119,0.5);
    border: 0.1em solid #fff;
}

.navigation-usersetting a{
    list-style: none;
    padding: 35px;
    color: #fff;
    font-size: 1.1em;
    display: block;
    transition: all .3 ease-in-out;
}

.navigation-usersetting a:hover{
    color: rgba(199, 191, 191, 0.4);
    cursor: pointer;
    transform: scale(1.2);
}
.navigation-usersetting a:first-child{
    margin-top:7px ;
}

.navigation-usersetting a.active{
    color: rgba(199, 191, 191, 0.4);
} 

.right-box{
    width: 60%;
    margin-left: 27%;
    padding: 5px;
}

.tabShow{
    transition: all .5s ease-in;
    width: 80%;
}
h1{
    font-family: Poppins, sans-serif;
    color: #952323;
    font-size: 1.2rem;
    margin-top: 40px;
    margin-bottom: 35px;
}
h2{
    color: #777;
    font-family: Poppins, sans-serif;
    text-transform: uppercase;
    font-size: 8px;
    letter-spacing: 1px;
    margin-left: 2px;
    margin-top: 10px;
}

.input {
    border: 0;
    border-bottom: 1px solid #952323;
    width: 80%;
    font-family: 'Poppins' , sans-serif;
    padding: 7px 0;
    color: #070707;
    outline: none;
    font-size: 10px;
}

.btn {
    font-family: 'Poppins' , sans-serif;
    text-transform: uppercase;
    font-size: 15px;
    border: 0;
    color: #fff;
    background: rgba(128, 0, 0, 0.4);
    padding: 7px 15px;
    box-shadow: 0px 2px 4px 0px rgba(0,0,0,.2);
    cursor: pointer;
    margin-top: 15px;
}

.tabShow{
    display: none;
}





    </style>
</head>
<body>
    <img class="background" src="bgall.png">
    </div>
    <header class="header"> 
        <img class="lspu"src="lspu.png">
        <img class="ccs"src="NewLogoCCS.png">
        <nav onmousemove="moveHover(event)" class="main-nav-bar">
            <a href="UserHomePage.php" data-id="home" onclick="toggleStyle('home')" class="nav-bar">Home</a>
            <a href="UserAbout.php"about" onclick="toggleStyle('about')" class="nav-bar">About</a>
            <a href="UserEvents.php" data-id="events" onclick="toggleStyle('events')" class="nav-bar">Events</a>
            <a href="UserShop.php" data-id="merch" onclick="toggleStyle('merch')" class="nav-bar">Merch</a>
            <a href="UserAccount.php" data-id="account" onclick="toggleStyle('account')" class="nav-bar">Account</a>
            <div class="animation" id="nav-animation"></div>
        </nav>
        <div class="list">
        <a href="PaymentTable.php" class="list-totable">List</a>
    </div>
    </header>
        <div class="container">
            <div class="leftbox">
                    <nav class="navigation-usersetting">
                        <a onclick="tabs(0)" class="tab active">
                            <i class='bx bxs-user-circle'></i>
                        </a>
                        <a onclick="tabs(1)" class="tab">
                            <i class='bx bxs-credit-card'></i>
                        </a>
                        <a onclick="tabs(2)" class="tab">
                            <i class='bx bxs-file'></i>
                        </a>
                        <a onclick="tabs(3)" class="tab">
                            <i class='bx bxs-lock-alt' ></i>
                        </a>    
                        <a onclick="tabs(4)" class="tab">
                            <i class='bx bxs-chat'></i>
                         </a>
                </nav>
            </div>
        <div class="right-box">
            <div class="profile tabShow">
                <h1>Personal Information</h1>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <h2>Email</h2>
                <input type="text" class="input" name="email" value="<?php echo isset($row['email']) ? $row['email'] : ''; ?>">
                <h2>Username</h2>
                <input type="text" class="input" name="username" value="<?php echo isset($row['username']) ? $row['username'] : ''; ?>">
                <h2>Password</h2>
                <input type="text" class="input" name="password" value="<?php echo isset($row['password']) ? $row['password'] : ''; ?>">
                <h2>Section</h2>
                <input type="text" class="input" value="ComputerClub@gmail.com">
                <h2>Program</h2>
                <input type="text" class="input" value="ComputerClub_01">
                <button class="btn">UPDATE</button>
                </form>
            </div>
            <div class="profile tabShow">
                <h1>Payment Information</h1>
                <form method="post" action="paymentmethod.php">
                <h2>Payment Method</h2>
                <input type="text" class="input" name="Pmethod">
                <h2>Name</h2>
                <input type="text" class="input" name="Name">
                <h2>Section</h2>
                <input type="text" class="input" name="Section">
                <h2>Reference Number</h2>
                <input type="text" class="input" name="ReferenceNo">
                <h2>Date</h2>
                <input type="date" class="input" name="Date">
                <button type="submit" name="submit" class="btn">SUBMIT</button>
                </form>
            </div>

            <form action="UploadDocument.php" method="post" enctype="multipart/form-data">
            <div class="payment tabShow">
                <h1>Upload a Document</h1>
                <h2>Purpose</h2>
                <input type="text" name="purpose" class="input" >
                <h2>Upload the file</h2>
                <input type="file" name="upload" class="input-file">
                <h2>Section</h2>
                <input type="text" name="section" class="input" >
                <h2>Position</h2>
                <input type="text" name="position" class="input" >
                <h2>Date</h2>
                <input type="date" name="date" class="input">
                <button type="submit" name="submit" class="btn">UPLOAD</button>
            </div>
         </form>


            <div class="payment tabShow">
                <h1>Privacy Setting</h1>
                <h2>Account Name</h2>
                <input type="text" class="input" value="Computer Club">
                <h2>Student Number</h2>
                <input type="text" class="input" value="0322-1234">
                <h2>Password</h2>
                <input type="text" class="input" value="ComputerClub_01">
                <h2>Change Password</h2>
                <input type="text" class="input" value="ComputerClub_02">
                <h2>Confirm Password</h2>
                <input type="text" class="input" value="ComputerClub_02">
                <button class="btn">CONFIRM</button>
            </div>
            <div class="payment tabShow">
            <h1>Message Contact</h1>
            <form action="MessageTable.php" method="post">
                <h2>Name</h2>
                <input type="text" class="input" name="name" >
                <h2>Section</h2>
                <input type="text" class="input" name="section" >
                <h2>Purpose</h2>
                <input type="text" class="input" name="purpose" >
                <h2>Message</h2>
                <input type="text" class="input" name="message" >
                <h2>Date</h2>
                <input type="date" class="input" name="date" value="">
                <button type="submit" class="btn">UPDATE</button>
            </form>
              </div>
        </div>
    </div>

    <script>
        function toggleStyle(targetId) {
            const animation = document.getElementById('nav-animation');
            const targetElement = document.querySelector(`[data-id="${targetId}"]`);
    
            const leftOffset = targetElement.offsetLeft;
            const width = targetElement.offsetWidth;
    
            animation.style.left = leftOffset + 'px';
            animation.style.width = width + 'px';
            animation.style.display = 'block'; // Show the animation
        }
    
        function moveHover(event) {
            const animation = document.getElementById('nav-animation');
            const navLinks = document.querySelectorAll('nav a');
    
            let mouseX = event.pageX - event.currentTarget.offsetLeft;
    
            let closestElement = null;
            let minDistance = Infinity;
    
            navLinks.forEach(link => {
                const linkX = link.offsetLeft;
                const linkWidth = link.offsetWidth;
                const distance = Math.abs(mouseX - (linkX + linkWidth / 2));
    
                if (distance < minDistance) {
                    minDistance = distance;
                    closestElement = link;
                }
            });
    
            const leftOffset = closestElement.offsetLeft;
            const width = closestElement.offsetWidth;
    
            animation.style.left = leftOffset + 'px';
            animation.style.width = width + 'px';
        }
    
        const tabBtn = document.querySelectorAll(".tab");
        const tab = document.querySelectorAll(".tabShow");
    
        function tabs(panelIndex) {
            tab.forEach(function(node) {
                node.style.display = "none";
            }); 
            tab[panelIndex].style.display = "block";
        }
        tabs(0);
    </script>
    

    </body>
    </html>
    