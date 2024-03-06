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

    .choise-swipe{
        display: flex;
        justify-content: center;
    }

    .choise-swipe .swiper {
        width: 1400px;
        height: 100%;
        display: flex;
        gap: 0;
        position: relative;
    }

    .choise-swipe .swiper-slide {
        text-align: center;
        width: 330px;
        font-size: 18px;
        background: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .choise-swipe .swiper-button-next{
        position: absolute;
        transform: translateX(50px);
        color: #FF98A6;

    }
    .choise-swipe .swiper-button-prev{
        position: absolute;
        transform: translateX(-50px);
        color: #FF98A6;
    }
</style>
</head>

<body>
<div class="choise-swipe">
    <div style="width: 1400px; position: relative;" class="choise-swipe-cont">
        <div class="swiper-button-prev"></div>
        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="kind">
                        <img src="img-2/cell1.png" alt="">
                        <div class="kind-link">
                            <a href="#">Мираж</a>
                            <img src="img-2/next.svg">
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="kind">
                        <img src="img-2/cell2.png" alt="">
                        <div class="kind-link">
                            <a href="#">Вояджер</a>
                            <img src="img-2/next.svg">
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="kind">
                        <img src="img-2/cell3.png" alt="">
                        <div class="kind-link">
                            <a href="#">Миямото</a>
                            <img src="img-2/next.svg">
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="kind">
                        <img src="img-2/cell4.png" alt="">
                        <div class="kind-link">
                            <a href="#">Портофино</a>
                            <img src="img-2/next.svg">
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="kind">
                        <img src="img-2/cell1.png" alt="">
                        <div class="kind-link">
                            <a href="#">Мираж</a>
                            <img src="img-2/next.svg">
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="kind">
                        <img src="img-2/cell2.png" alt="">
                        <div class="kind-link">
                            <a href="#">Вояджер</a>
                            <img src="img-2/next.svg">
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="kind">
                        <img src="img-2/cell3.png" alt="">
                        <div class="kind-link">
                            <a href="#">Миямото</a>
                            <img src="img-2/next.svg">
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="kind">
                        <img src="img-2/cell4.png" alt="">
                        <div class="kind-link">
                            <a href="#">Портофино</a>
                            <img src="img-2/next.svg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-button-next"></div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="main2.js"></script>


</body>

