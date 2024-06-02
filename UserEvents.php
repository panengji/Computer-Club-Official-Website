<<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Events</title>
    <link rel="stylesheet" href="UserEventsD.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
</head>
<body>
    <div>
        <nav onmousemove="moveHover(event)">
            <a href="UserHomePage.php" data-id="home" onclick="toggleStyle('home')">Home</a>
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
    <div>
        <img class="background" src="bgall.png">
    </div>
    <header class="header"> 
        <img class="lspu"src="lspu.png">
        <img class="ccs"src="NewLogoCCS.png">
    </header>
    <div class="container">
        <div class="item-container">
            <div class="img-container">
                <img src="basketball.jpg" alt="Event_1">
            </div>

            <div class="body-container">
                <div class="overlay"></div>

                <div class="event-info">
                    <p class="title"> CCS Day 1</p>
                    <div class="separator"></div>
                    <p class="info"> Will Happen on the first day.</p>
                    <p class="price">Try Out!</p>

                    <div class="additional-info">
                        <p class="info"><i class='bx bxs-location-plus'></i>LSPU GYMNASIUM</p>
                        <p class="info"><i class='bx bx-calendar-check'></i></i>May 8, 2024 | 9:00 A.M</p>
                        <p class="info description">The objective is to score points by shooting the ball through the opponent's hoop <span>more...</span></p>
                    </div>
                </div>
                <button class="action">Details</button>
            </div>
        </div>
        <div class="item-container">
            <div class="img-container">
                <img src="valorant.jpg" alt="Event_1">
            </div>

            <div class="body-container">
                <div class="overlay"></div>

                <div class="event-info">
                    <p class="title"> CCS Day 2</p>
                    <div class="separator"></div>
                    <p class="info"> Will Happen on the second day.</p>
                    <p class="price">Participate!</p>

                    <div class="additional-info">
                        <p class="info"><i class='bx bxs-location-plus'></i>CTE Function Hall</p>
                        <p class="info"><i class='bx bx-calendar-check'></i></i>May 9, 2024 | 11:00 A.M</p>
                        <p class="info description">The objective varies depending on the game mode but typically involves planting or defusing a bomb  or <span>more...</span></p>
                    </div>
                </div>
                <button class="action">Details</button>
            </div>
        </div>
        <div class="item-container">
            <div class="img-container">
                <img src="tekken.jpg" alt="Event_1">
            </div>

            <div class="body-container">
                <div class="overlay"></div>

                <div class="event-info">
                    <p class="title"> CCS Day 3</p>
                    <div class="separator"></div>
                    <p class="info"> Will Happen on the third day.</p>
                    <p class="price">Take part in!</p>

                    <div class="additional-info">
                        <p class="info"><i class='bx bxs-location-plus'></i>Lecture 4</p>
                        <p class="info"><i class='bx bx-calendar-check'></i></i>May 10, 2024 | 8:00 A.M</p>
                        <p class="info description">atches take place in three-dimensional arenas where players can move freely in all  <span>more...</span></p>
                    </div>
                </div>
                <button class="action">Details</button>
            </div>
        </div>
    </div>
    <script>
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
