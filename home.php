<?php
    require_once './database.php';
    // Reference: https://medoo.in/api/select
    $items = $database->select("tb_dishes","*");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=AR+One+Sans:wght@400;500;700&family=Open+Sans:ital,wght@0,500;0,700;1,300&family=Raleway:ital,wght@0,500;0,700;1,300&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="./css/main.css">
</head>

<body>
    <header class="header-container">
        <nav class="top-nav">
            <input class="mobile-check" type="checkbox">
            <label class="mobile-btn">
                <span></span>
            </label>
            <a href="home.html"><img class="logo-nav" src="imgs/icons/logo.png" alt="logo"></a>
            <a href="#"><img class="log-nav" src="imgs/icons/log-out.png" alt="log"></a>
            <a href="#"><img class="register-nav" src="imgs/icons/register.png" alt="register"></a>
            <ul class="nav-list">
                <li><a class="nav-list-link" href="categories.html">Categories</a></li>
                <li><a class="nav-list-link" href="home.html">Home</a></li>
                <li><a class="nav-list-link" href="featured.html">Featured dishes</a></li>
            </ul>

        </nav>

    </header>

    <div class="cta-container">
        <h1 class="header-title">Delicious Korean food for every occasion</h1>
    </div>

    <main>
            <?php 
                
            ?>
        <section class="most-voting-container">
            <h1 class="voting-title"> The most voted </h1>
            <div class="voted-recipes-container">
                <section class="recepie">

                    <div>
                        <h1 class="recepie-title">Bibimbap</h1>
                        <img class="recepie-main" src="imgs/recepies/bibimbap.jpg" alt="bibimbap">
                    </div>

                    <div class="red-box">
                        <p class="recepie-details-txt">Details</p>
                        <p class="recepie-details-txt">Size: Individual</p>
                        <p class="recepie-details-txt">Price: 50$</p>
                        <p class="recepie-details-txt">Related dishes:</p>
                        <p class="recepie-details-txt">Category: strong dish</p>
                        <span class="white-line"></span>
                        <a href="details.html"><button class="featured-more-btn">View more</button></a>
                        <button class="like-btn"> <img class="like-img" src="imgs/icons/heart.png"
                                alt="like-btn"></button>
                    </div>
                </section>
                <section class="recepie">
                    <div>
                        <h1 class="recepie-title">Bibimbap</h1>
                        <img class="recepie-main" src="imgs/recepies/bibimbap.jpg" alt="bibimbap">
                    </div>

                    <div class="red-box">
                        <p class="recepie-details-txt">Details</p>
                        <p class="recepie-details-txt">Size: Individual</p>
                        <p class="recepie-details-txt">Price: 50$</p>
                        <p class="recepie-details-txt">Related dishes:</p>
                        <p class="recepie-details-txt">Category: strong dish</p>
                        <span class="white-line"></span>
                        <a href="details.html"><button class="featured-more-btn">View more</button></a>
                        <button class="like-btn"> <img class="like-img" src="imgs/icons/heart.png"
                                alt="like-btn"></button>
                    </div>
            </div>
        </section> <!--  end of section -->

        <section class="most-voting-container">
            <h1 class="voting-title"> Featured dishes </h1>
            <div class="featured-container">
                <section class="recepie">

                    <div>
                        <h1 class="featured-title">Bibimbap</h1>
                        <img class="featured-img" src="imgs/recepies/bibimbap.jpg" alt="bibimbap">
                    </div>

                    <div class="red-box">
                        <p class="featured-details-txt">Details</p>
                        <p class="featured-details-txt">Size: Individual</p>
                        <p class="featured-details-txt">Price: 50$</p>
                        <p class="featured-details-txt">Related dishes:</p>
                        <p class="featured-details-txt">Category: strong dish</p>
                        <span class="white-line"></span>
                        <a href="details.html"><button class="featured-more-btn">View more</button></a>
                        <button class="featured-like-btn"> <img class="like-img" src="imgs/icons/heart.png"
                                alt="like-btn"></button>
                    </div>
                </section>

                <section class="recepie">

                    <div>
                        <h1 class="featured-title">Bibimbap</h1>
                        <img class="featured-img" src="imgs/recepies/bibimbap.jpg" alt="bibimbap">
                    </div>

                    <div class="red-box">
                        <p class="featured-details-txt">Details</p>
                        <p class="featured-details-txt">Size: Individual</p>
                        <p class="featured-details-txt">Price: 50$</p>
                        <p class="featured-details-txt">Related dishes:</p>
                        <p class="featured-details-txt">Category: strong dish</p>
                        <span class="white-line"></span>
                        <a href="details.html"><button class="featured-more-btn">View more</button></a>
                        <button class="featured-like-btn"> <img class="like-img" src="imgs/icons/heart.png"
                                alt="like-btn"></button>
                    </div>
                </section>

                <section class="recepie">

                    <div>
                        <h1 class="featured-title">Bibimbap</h1>
                        <img class="featured-img" src="imgs/recepies/bibimbap.jpg" alt="bibimbap">
                    </div>

                    <div class="red-box">
                        <p class="featured-details-txt">Details</p>
                        <p class="featured-details-txt">Size: Individual</p>
                        <p class="featured-details-txt">Price: 50$</p>
                        <p class="featured-details-txt">Related dishes:</p>
                        <p class="featured-details-txt">Category: strong dish</p>
                        <span class="white-line"></span>
                        <a href="details.html"><button class="featured-more-btn">View more</button></a>
                        <button class="featured-like-btn"> <img class="like-img" src="imgs/icons/heart.png"
                                alt="like-btn"></button>
                    </div>
                </section>

                <section class="recepie">

                    <div>
                        <h1 class="featured-title">Bibimbap</h1>
                        <img class="featured-img" src="imgs/recepies/bibimbap.jpg" alt="bibimbap">
                    </div>

                    <div class="red-box">
                        <p class="featured-details-txt">Details</p>
                        <p class="featured-details-txt">Size: Individual</p>
                        <p class="featured-details-txt">Price: 50$</p>
                        <p class="featured-details-txt">Related dishes:</p>
                        <p class="featured-details-txt">Category: strong dish</p>
                        <span class="white-line"></span>
                        <a href="details.html"><button class="featured-more-btn">View more</button></a>
                        <button class="featured-like-btn"> <img class="like-img" src="imgs/icons/heart.png"
                                alt="like-btn"></button>
                    </div>
                </section>

                <section class="recepie">

                    <div>
                        <h1 class="featured-title">Bibimbap</h1>
                        <img class="featured-img" src="imgs/recepies/bibimbap.jpg" alt="bibimbap">
                    </div>

                    <div class="red-box">
                        <p class="featured-details-txt">Details</p>
                        <p class="featured-details-txt">Size: Individual</p>
                        <p class="featured-details-txt">Price: 50$</p>
                        <p class="featured-details-txt">Related dishes:</p>
                        <p class="featured-details-txt">Category: strong dish</p>
                        <span class="white-line"></span>
                        <a href="details.html"><button class="featured-more-btn">View more</button></a>
                        <button class="featured-like-btn"> <img class="like-img" src="imgs/icons/heart.png"
                                alt="like-btn"></button>
                    </div>
                </section>

                <section class="recepie">

                    <div>
                        <h1 class="featured-title">Bibimbap</h1>
                        <img class="featured-img" src="imgs/recepies/bibimbap.jpg" alt="bibimbap">
                    </div>

                    <div class="red-box">
                        <p class="featured-details-txt">Details</p>
                        <p class="featured-details-txt">Size: Individual</p>
                        <p class="featured-details-txt">Price: 50$</p>
                        <p class="featured-details-txt">Related dishes:</p>
                        <p class="featured-details-txt">Category: strong dish</p>
                        <span class="white-line"></span>
                        <a href="details.html"><button class="featured-more-btn">View more</button></a>
                        <button class="featured-like-btn"> <img class="like-img" src="imgs/icons/heart.png"
                                alt="like-btn"></button>
                    </div>
                </section>

                <section class="recepie">

                    <div>
                        <h1 class="featured-title">Bibimbap</h1>
                        <img class="featured-img" src="imgs/recepies/bibimbap.jpg" alt="bibimbap">
                    </div>

                    <div class="red-box">
                        <p class="featured-details-txt">Details</p>
                        <p class="featured-details-txt">Size: Individual</p>
                        <p class="featured-details-txt">Price: 50$</p>
                        <p class="featured-details-txt">Related dishes:</p>
                        <p class="featured-details-txt">Category: strong dish</p>
                        <span class="white-line"></span>
                        <a href="details.html"><button class="featured-more-btn">View more</button></a>
                        <button class="featured-like-btn"> <img class="like-img" src="imgs/icons/heart.png"
                                alt="like-btn"></button>
                    </div>
                </section>

                <section class="recepie">

                    <div>
                        <h1 class="featured-title">Bibimbap</h1>
                        <img class="featured-img" src="imgs/recepies/bibimbap.jpg" alt="bibimbap">
                    </div>

                    <div class="red-box">
                        <p class="featured-details-txt">Details</p>
                        <p class="featured-details-txt">Size: Individual</p>
                        <p class="featured-details-txt">Price: 50$</p>
                        <p class="featured-details-txt">Related dishes:</p>
                        <p class="featured-details-txt">Category: strong dish</p>
                        <span class="white-line"></span>
                        <a href="details.html"><button class="featured-more-btn">View more</button></a>
                        <button class="featured-like-btn"> <img class="like-img" src="imgs/icons/heart.png"
                                alt="like-btn"></button>
                    </div>
                </section>

                <section class="recepie">

                    <div>
                        <h1 class="featured-title">Bibimbap</h1>
                        <img class="featured-img" src="imgs/recepies/bibimbap.jpg" alt="bibimbap">
                    </div>

                    <div class="red-box">
                        <p class="featured-details-txt">Details</p>
                        <p class="featured-details-txt">Size: Individual</p>
                        <p class="featured-details-txt">Price: 50$</p>
                        <p class="featured-details-txt">Related dishes:</p>
                        <p class="featured-details-txt">Category: strong dish</p>
                        <span class="white-line"></span>
                        <a href="details.html"><button class="featured-more-btn">View more</button></a>
                        <button class="featured-like-btn"> <img class="like-img" src="imgs/icons/heart.png"
                                alt="like-btn"></button>
                    </div>
                </section>



        </section>


    </main>
    <footer class="footer-container">

        <p class="footer-text"> © 2022. Todos los derechos reservados</p>

    </footer>


</body>

</html>