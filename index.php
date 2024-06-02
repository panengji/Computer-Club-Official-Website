<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="FrontPageDesign.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
    <title>CCS WEBSITE</title>
</head>
<body>
    <img class="background" src="bgall.png">
    <img class="ComClubLogo" src="ComClubLogo.png">
    <div>
        <nav onmousemove="moveHover(event)">
            <a href="index.php" data-id="home" onclick="toggleStyle('home')">Home</a>
            <a href="UserAbout.php" data-id="about" onclick="toggleStyle('about')">About</a>
            <a href="UserEvents.php" data-id="events" onclick="toggleStyle('events')">Events</a>
            <a href="UserShop.php" data-id="merch" onclick="toggleStyle('merch')">Merch</a>
            <a href="UserAccount.php" data-id="account" onclick="toggleStyle('account')">Account</a>
            <div class="animation" id="nav-animation"></div>
        </nav>
    </div>
    <header class="header"> 
        <img class="lspu"src="lspu.png">
        <img class="ccs"src="NewLogoCCS.png">
    </header>
    <section class="text1">
        <div class="text1_1">
        <h1>Connecting Communities <br> Through Technology</h1>
        <p>We use technology to bring communities together, making it easier for <br> people to connect and enriching their lives by breaking down barriers.</p>
        </div>
        <div class="buttons">
            <a href="register.php" class="button">SIGN UP</a>
            <a href="login.php" class="button-in">SIGN IN</a>
        </div>
    </section>
    <div class="Incoming-Events">
        <a href="UserEvents.html">Incoming Events</a>
        <i class='bx bxs-bell'></i>
    </div>
    <div class="Birthday-Announcement">
        <a href="#">Today's Birthday: John Doe</a>
        <i class="bx bxs-cake"></i>
    </div>
    <div class="footer-bottom">
        <p>&copy; 2024 Computer Club. All rights reserved.</p>
    </div>
    
    
    <script>
            function toggleStyle(targetId) {
                const animation = document.getElementById('nav-animation');
                const targetElement = document.querySelector(`[data-id="${targetId}"]`);

                const leftOffset = targetElement.offsetLeft;
                const width = targetElement.offsetWidth;

                animation.style.left = leftOffset + 'px';
                animation.style.width = width + 'px';
                animation.style.display = 'block'; 
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
        </script>
</body>
</html>
