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

    <div class="cta-container">
        <h1 class="header-title">Delicious Korean food for every occasion</h1>
    </div>

    <main>
    <?php 
              echo "<section class='most-voting-container'>";
              echo "<h1 class='voting-title'>The most voted</h1>";
              
              echo"<div class='voted-recipes-container'>";
              for ($i = 0; $i < 2; $i++) { 
                $name = $items[$i]["nombre"];
                $limitedName = (strlen($name) > 20) ? substr($name, 0, 20) : $name; 
                echo "<section class='recepie'>
                <div>
                    <h1 class='featured-title'>".$limitedName."</h1>
                    <img class='featured-img' src='scraping/images/".$items[$i]["imagen"]."' alt='bibimbap'>
                </div>
                <div class='red-box'>
                    <p class='featured-details-txt'style= font-size:0.75rem><b>Details</b></p>
                    <p class='featured-details-txt'>Size: ".$items[$i]["personas"]." person/s</p>
                    <p class='featured-details-txt'>".$items[$i]["precio"]." $</p>
                    <p class='featured-details-txt'>Related dishes:</p>
                    <p class='featured-details-txt'>".$items[$i]["nombre_categoria"]."</p>
                    <span class='white-line'></span>
                    <a href='details.php?id=".$items[$i]["id_informacion_platillo"]."'><button class='featured-more-btn'>View more</button></a>
                    <button class='featured-like-btn'> <img class='like-img' src='imgs/icons/heart.png' alt='like-btn'></button>
                </div>
            </section>";
              }
              echo"</div>";
          echo "</section>"; 
            ?>
        


        <!-- php fetured dishes -->


            <?php
            
            echo "<section class='most-voting-container'>
            <h1 class='voting-title'>Featured dishes</h1>
            <div class='featured-container'>";
            for ($i = 0; $i < 9; $i++) {  
                $name = $items[$i]["nombre"];
                $limitedName = (strlen($name) > 13) ? substr($name, 0, 13) : $name;
            echo "<section class='recepie'>
                    <div>
                        <h1 class='featured-title'>".$limitedName."</h1>
                        <img class='featured-img' src='scraping/images/".$items[$i]["imagen"]."' alt='bibimbap'>
                    </div>
                    <div class='red-box'>
                        <p class='featured-details-txt' style= font-size:0.75rem><b>Details</b></p>
                        <p class='featured-details-txt'>".$items[$i]["personas"]." person/s</p>
                        <p class='featured-details-txt'>".$items[$i]["precio"]." $</p>
                        <p class='featured-details-txt'>Related dishes:</p>
                        <p class='featured-details-txt'>".$items[$i]["nombre_categoria"]."</p>
                        <span class='white-line'></span>
                        <a href='details.php?id=".$items[$i]["id_informacion_platillo"]."'><button class='featured-more-btn'>View more</button></a>
                        <button class='featured-like-btn'> <img class='like-img' src='imgs/icons/heart.png' alt='like-btn'></button>
                    </div>
                </section>" ;
    }  
    echo "</div>";
    echo"</section>";    
            ?>


        </section>


    </main>
    <footer class="footer-container">

        <p class="footer-text"> © 2022. Todos los derechos reservados</p>

    </footer>


</body>

</html>