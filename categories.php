<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
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
            <a href="home.php"><img class="logo-nav" src="imgs/icons/logo.png" alt="logo"></a>
            <a href="forms.php"><img class="log-nav" src="imgs/icons/log-out.png" alt="log"></a>
            <a href="#"><img class="register-nav" src="imgs/icons/register.png" alt="register"></a>
            <ul class="nav-list">
                <li><a class="nav-list-link" href="categories.php">Categories</a></li>
                <li><a class="nav-list-link" href="home.php">Home</a></li>
                <li><a class="nav-list-link" href="featured.php">Featured dishes</a></li>
            </ul>
        </nav>
    </header>
    <main>
    <div class="line"></div>
    <div><h1 class="title-hardpl">Categories</h1></div>
    <?php 
        
    
        echo "<section class='hardpl-recepie'>
                <div class='hardpl-box realce'>
                     <img class='hardimg-detail' src='imgs/resources/plato fuerte.jpg' alt='logo'></a>
                    <h1 class='hardpl-details-text'>
                        <a href='main-course.php' class='category-page'> Main Course </a>
                    </h1>
                </div>
                <div class='hardpl-box realce'>
                    <img class='hardimg-detail' src='imgs/resources/ensalada.jpg' alt='logo'></a>
                     <h1 class='hardpl-details-text'>
                        <a href='salads.php' class='category-page'> Salads </a>
                     </h1>
                </div>
                <div class='hardpl-box realce'>
                    <img class='hardimg-detail' src='imgs/resources/bebida.jpg' alt='logo'></a>
                    <h1 class='hardpl-details-text'>
                        <a href='drinks.php'class='category-page'> Drinks </a>
                    </h1>
                </div>
                <div class='hardpl-box realce'>
                    <img class='hardimg-detail' src='imgs/resources/entrada.jpg' alt='logo'></a>
                    <h1 class='hardpl-details-text'>
                        <a href='starter-dish.php' class='category-page'> Starter Dishes </a>
                    </h1>
                </div>
        </section>";
    ?>
</body>
</main>
<footer class="footer-container">

    <p class="footer-text"> © 2022. Todos los derechos reservados</p>

</footer>
</html>