<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="style2.css">

    <style>
        .head .swiperFirst {
            width: 100%;
            height: 100%;
        }

        .head .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;

        }

         .head .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>

</head>
<body>
    <div class="underhead">
        <div class="text">
            <p class="text">Доставка в любой город России всего 700 рублей. По москве - 500 рублей.</p>
        </div>
        <div class="contacts">
            <div class="mail">
                <img src="img-2/mail.svg">
                <a href="#">welcome@re-space.ru</a>
            </div>
            <div class="phonenumber">
                <img src="img-2/phonenumber.svg">
                <a href="#">8 800 350 84 15</a>
            </div>
        </div>
    </div>
    <nav>
        <img src="img-2/Logo2.png" class="nav-logo">
        <div class="nav-conteiner">
            <ul class="nav-links">
                <li class="link"><a href="#">Обои</a></li>
                <li class="link"><a href="#">Плитка</a></li>
                <li class="link"><a href="#">Краски</a></li>
                <li class="link"><a href="#">О компании</a></li>
                <li class="link"><a href="#">Контакты</a></li>
            </ul>
            <div class="conts">
                <div class="cont-2">
                    <div class="line"></div>
                    <img class="scaled" src="img-2/glass.svg" alt="glass">
                </div>
                <div class="cont-2">
                    <img class="scaled" src="img-2/heart.svg" alt="heart">
                    <div class="shoppingCart scaled">
                        <img class="cart-image" src="img-2/shoping-cart.svg" alt="cart">
                        <img class="ellipse" src="img-2/ellipse.svg" alt="">
                        <p>1</p>
                    </div>
                </div>
                <div class="cont-3">
                    <a class="scaled" href="#">Меню</a>
                    <img class="burger scaled" src="img-2/burger.svg" alt="menu">
                </div>
            </div>
        </div>
    </nav>

    <div style="overflow: hidden; width: 100%;" class="head">
        <div style="width: 100%;" class="slider">
            <div class="swiperFirst">
                <div style="position: relative; z-index: 3; transform: translateX(250px);" class="nad-head">
                    <div class="head-show">
                        <h6>Производим дизайнерские обои</h6>
                        <p>В Респейс каждый дизайн по-своему преображает окружающее пространство, а тщательно подобранные коллекции позволят гармонично вписать обои в любой интерьер.</p>
                        <div style="transform: translate(-170px, -50px); z-index: 4;" class="swiper-pagination"></div>
                    </div>
                </div>
                <div style="width: 100%;" class="swiper-wrapper">
                    <div class="swiper-slide" style="background-image: url(img-2/AdobeStock.png); width: 1900px;" ></div>
                    <div class="swiper-slide" style="background-image: url(img-2/AdobeStock.png); width: 100%;" ></div>
                    <div class="swiper-slide" style="background-image: url(img-2/AdobeStock.png); width: 100%;" ></div>
                    <div class="swiper-slide" style="background-image: url(img-2/AdobeStock.png); width: 100%;"  ></div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="main1.js"></script>

</body>
</html>