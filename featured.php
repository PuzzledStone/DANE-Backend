<?php
    require_once './database.php';
    // Reference: https://medoo.in/api/select
    $items = $database->select("tb_dishes","*",[
        "id_outstanding"=>1
    ]);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freatured Page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=AR+One+Sans:wght@400;500;700&family=Open+Sans:ital,wght@0,500;0,700;1,300&family=Raleway:ital,wght@0,500;0,700;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
<?php 
        include './parts/header.php';
   ?>
     <main>
     <div class="line"></div>
    

    <?php 
            echo "<section class='most-voting-container'>
            <h1 class='voting-title'>Featured Dishes</h1>
            <div class='featured-container'>";
            foreach($items as $item) {  
                $name = $item["nombre"];
                $limitedName = (strlen($name) > 13) ? substr($name, 0, 13) : $name;
            echo "<section class='recepie'>
                    <div>
                        <h1 class='featured-title'>".$limitedName."</h1>
                        <img class='featured-img' src='scraping/images/".$item["imagen"]."' alt='bibimbap'>
                    </div>
                    <div class='red-box'>
                        <p class='featured-details-txt' style= font-size:0.75rem><b>Details</b></p>
                        <p class='featured-details-txt'>".$item["personas"]." person/s</p>
                        <p class='featured-details-txt'>".$item["precio"]." $</p>
                        <p class='featured-details-txt'>".$item["value_outstanding"]."</p>
                        <p class='featured-details-txt'>".$item["nombre_categoria"]."</p>
                        <span class='white-line'></span>
                        <a href='details.php?id=".$item["id_informacion_platillo"]."'><button class='featured-more-btn'>View more</button></a>
                        <button class='featured-like-btn'> <img class='like-img' src='imgs/icons/heart.png' alt='like-btn'></button>
                    </div>
                </section>" ;
            }  
            echo "</div>";
            echo"</section>";    
    ?>
     </main>

     <?php 
        include './parts/footer.php';
    ?>
</body>
</html>