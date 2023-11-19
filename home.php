<?php
    require_once './database.php';
    // Reference: https://medoo.in/api/select
    $items = $database->select("tb_dishes","*");

    $outstanding = $database->select("tb_dishes","*",[
        "id_outstanding"=>1 
     ]);
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
   <?php 
        include './parts/header.php';
   ?>

    <div class="cta-container">
        <h1 class="header-title">Delicious Korean food for every occasion</h1>
    </div>

    <main>
    <?php 
              echo "<section class='most-voting-container'>";
              echo "<h1 class='voting-title'>The most voted</h1>";
              
              echo"<div class='voted-recipes-container'>";
              for ($i = 0; $i < 2; $i++) { 
               
                $name = $outstanding[$i]["nombre"];
                $limitedName = (strlen($name) > 30) ? substr($name, 0, 30) : $name; 
                echo "<section class='recepie'>
                <div>
                    <h1 class='featured-title'>".$limitedName."</h1>
                    <img class='featured-img' src='scraping/images/".$outstanding[$i]["imagen"]."' alt='bibimbap'>
                </div>
                <div class='red-box'>
                    <p class='featured-details-txt'style= font-size:0.75rem><b>Details</b></p>
                    <p class='featured-details-txt'>Size: ".$outstanding[$i]["personas"]." person/s</p>
                    <p class='featured-details-txt'>".$outstanding[$i]["precio"]." $</p>
                    <p class='featured-details-txt'>".$outstanding[$i]["value_outstanding"]."</p>
                    <p class='featured-details-txt'>".$outstanding[$i]["nombre_categoria"]."</p>
                    <span class='white-line'></span>
                    <a href='details.php?id=".$outstanding[$i]["id_informacion_platillo"]."'><button class='featured-more-btn'>View more</button></a>
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
            <h1 class='voting-title'>Menu</h1>
            <div class='featured-container'>";
            for ($i = 0; $i < 9; $i++) {  
                $name = $items[$i]["nombre"];
                $limitedName = (strlen($name) > 25) ? substr($name, 0, 25) : $name;
            echo "<section class='recepie'>
                    <div>
                        <h1 class='featured-title'>".$limitedName."</h1>
                        <img class='featured-img' src='scraping/images/".$items[$i]["imagen"]."' alt='bibimbap'>
                    </div>
                    <div class='red-box'>
                        <p class='featured-details-txt' style= font-size:0.75rem><b>Details</b></p>
                        <p class='featured-details-txt'>".$items[$i]["personas"]." person/s</p>
                        <p class='featured-details-txt'>".$items[$i]["precio"]." $</p>
                        <p class='featured-details-txt'>".$items[$i]["value_outstanding"]."</p>
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

            <div>
                
                    <button class="hardpl-btn" >
                        <a href="categories.php" class= "btns-text"> Show More</a>
                    </button>
                
            </div>

    </main>
    
    <?php 
        include './parts/footer.php';
    ?>


</body>

</html>