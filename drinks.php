
<?php 
    require_once './database.php';

    $items = $database->select("tb_dishes", "*", [
        "id_categoria" => 3
    ]);
   
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drinks</title>
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
             <a href="#"><img class="log-nav" src="imgs/icons/log-out.png" alt="log"></a>
             <ul class="nav-list">
                 <li><a class="nav-list-link" href="categories.php">Categories</a></li>
                 <li><a class="nav-list-link" href="home.php">Home</a></li>
                 <li><a class="nav-list-link" href="featured.php">Featured dishes</a></li>
             </ul>
             
        </nav>
        
     </header>

     <main>
        <div class="line-red">
            <span></span>
        </div>

        <?php 
           echo "<section class='most-voting-container'>
           <h1 class='voting-title'>Main Course</h1>
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
        ?>





    </main>
</body>
</html>