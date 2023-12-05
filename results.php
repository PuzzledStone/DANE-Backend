<?php
    require_once './database.php';
   
    $items = [];

    if (isset($_GET['keyword']) && !empty($_GET['keyword'])) {
        $keyword = $_GET['keyword'];
        
        $items = $database->select("tb_dishes", "*", [
            "nombre[~]" => "%$keyword%",
        ]);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results</title>
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
    <?php 
        include "./parts/header.php";
    ?>
    <main>
        
            <?php
                if(count($items) > 0){
                    echo "<p class='featured-title'>We found: ".count($items)." dish(es)</p>";
                }else{
                    echo "<p class='featured-title'>We found: ".count($items)." dish(es) with that name</p>";
                }
                
            ?>
             <?php 
           echo "<section class='most-voting-container'>
           <div class='featured-container'>";
           foreach($items as $item) {  
               $name = $item["nombre"];
               $limitedName = (strlen($name) > 25) ? substr($name, 0, 25) : $name;
           echo "<section class='recepie'>
                   <div>
                       <h1 class='featured-title'>".$limitedName."</h1>
                       <img class='featured-img' src='scraping/images/".$item["imagen"]."' alt='bibimbap'>
                   </div>
                   <div class='red-box'>
                       <p class='featured-details-txt' style= font-size:0.75rem><b>Details</b></p>
                       <p class='featured-details-txt'>".$item["personas"]." person/s</p>
                       <p class='featured-details-txt'>".$item["precio"]." $</p>
                       <p class='featured-details-txt'>Related dishes:</p>
                       <p class='featured-details-txt'>".$item["nombre_categoria"]."</p>
                       <span class='white-line'></span>
                       <a href='details.php?id=".$item["id_informacion_platillo"]."'><button class='featured-more-btn'>View more</button></a>
                       <button class='featured-like-btn'> <img class='like-img' src='imgs/icons/heart.png' alt='like-btn'></button>
                   </div>
               </section>" ;
   }  
   echo "</div>";
   echo"</section>";   
   echo "<button class='hardpl-btn'> <a href='categories.php' class='btns-text'> Go Back </a> </button>"; 
   ?>


    </main>

    <?php 
        include "./parts/footer.php"; 
    ?>

</body>
</html>