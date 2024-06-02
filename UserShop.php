<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" href="UserShopD.css">
    <title>CSS Shop</title>
</head>
<body>
    <img class="background" src="bgall.png">
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

    <div class="shop-button">
        <a href="#" class="NC">SALE</a>
        <a href="#" class="S">NEW COLLECTION</a>
    </div>

    <div class="container">
        <header>
            <div class="shopping">
                <img src="cart-icon.png">
                <span class="quantity">0</span>
            </div>
        </header>
        <div class="list"></div>
    </div>
    <div class="card">
        <h1>CART</h1>
        <ul class="listcard"></ul>
        <div class="checkout">
            <div class="total">Total: <span>0</span></div>
            <div class="closeshopping">CLOSE</div>
            <div class="pay" onclick="checkout()">PAY</div> <!-- Pay button -->
        </div>
    </div>

    <script>

        let openShopping = document.querySelector('.shopping');
        let closeShopping = document.querySelector('.closeshopping');
        let list = document.querySelector('.list');
        let listCard = document.querySelector('.listcard');
        let body = document.querySelector('body');
        let total = document.querySelector('.total span');
        let quantity = document.querySelector('.quantity');

        openShopping.addEventListener('click', ()=>{
            body.classList.add('active');
        });
        closeShopping.addEventListener('click', ()=>{
            body.classList.remove('active');
        });

        let products = [
            {
                id: 1,
                name: 'DEPARTMENT SHIRT',
                image: '1.png', 
                price: 200
            },
            {
                id: 2,
                name: 'CSS ID-LACE',
                image: '2.png',
                price: 120
            },
            {
                id: 3,
                name: 'MUG',
                image: '3.png',
                price: 100
            }
        ];

        let listCards = [];

        function addToCard(key) {
            if (listCards[key] == null) {
                listCards[key] = products[key];
                listCards[key].quantity = 1;
            }
            reloadCard();
        }

        function reloadCard() {
            listCard.innerHTML = '';
            let count = 0;
            let totalPrice = 0;
            listCards.forEach((value, key) => {
                if (value != null) {
                    let newDiv = document.createElement('li');
                    newDiv.innerHTML = `
                        <div><img src="image/${value.image}" /></div>
                        <div>${value.name}</div>
                        <div>${value.price.toLocaleString()}</div>
                        <div>
                            <button onclick="changeQuantity(${key}, ${value.quantity - 1})">-</button>
                            <div class="count">${value.quantity}</div>
                            <button onclick="changeQuantity(${key}, ${value.quantity + 1})">+</button>
                            <button onclick="deleteProduct(${key})">Delete</button>
                        </div>
                    `;
                    listCard.appendChild(newDiv);
                    totalPrice += value.price * value.quantity;
                    count += value.quantity;
                }
            });
            total.textContent = totalPrice.toLocaleString();
            quantity.textContent = count;
        }
        function changeQuantity(key, quantity){
            if(quantity == 0){
                delete listCards[key]
            }
            else{
                listCards[key].quantity = quantity;
                listCards[key].price = quantity * products[key].price;
            }
            reloadCard();
        }

        function initApp() {
            products.forEach((value, key) => {
                let newDiv = document.createElement("div");
                newDiv.classList.add('item');
                newDiv.innerHTML = `
                    <img src="image/${value.image}" />
                    <div class="title">${value.name}</div>
                    <div class="price">${value.price.toLocaleString()}</div>
                    <button onclick="addToCard(${key})">Add To Cart</button>
                `;
                list.appendChild(newDiv);  
            });
        }

        initApp();

        function deleteProduct(key) {
            delete listCards[key];
            reloadCard();
        }

        function changeQuantity(key, newQuantity) {
            if (newQuantity >= 1) {
                listCards[key].quantity = newQuantity;
                reloadCard();
            }
        }

        function checkout() {
            // Simulate payment process
            alert('Payment successful!');
            // Reset the shopping cart
            listCards = [];
            reloadCard();
        }

        
    </script>

<script>
    function toggleStyle(targetId) {
        const animation = document.getElementById('nav-animation');
        const targetElement = document.querySelector([data-id,"${targetId}"]);

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