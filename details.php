<?php 
  require_once './database.php';

  $link = "";
  $url_params = "";


  if($_GET){
          $item = $database->select("tb_dishes",[
              "[>]tb_categories"=>["id_categoria" => "id_categoria"]
          ],[
              "tb_dishes.id_informacion_platillo",
              "tb_dishes.nombre",
              "tb_dishes.descripcion",
              "tb_dishes.imagen",
              "tb_dishes.precio",
              "tb_dishes.nombre_categoria",
              "tb_dishes.personas",
          
          ],[
              "id_informacion_platillo"=>$_GET["id"]
          ]);
          
          $url_params = "id=".$item[0]["id_informacion_platillo"];
     
  }
    
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
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
    <main>
    <div class="line"> </div>
    <?php 
        
   
    echo "<section class='det-container'>
        
        <img class='img-details realce' src='scraping/images/".$item[0]["imagen"]."' alt='logo'>
            <div>
            <h1 class='title-container'>".$item[0]["nombre"]."</h1>
            <div class='second-container'>
                <p class='text-details'>".$item[0]["descripcion"]."</p>
                <p class='text-details'>".$item[0]["nombre_categoria"]."</p>
                <p class='text-details'> Designed for ".$item[0]["personas"]." person/s</p>
                <p class='text-details'>".$item[0]["precio"]." $    </p>
            </div>
        </div>
    </section>
    <section class='vote-item'>
        <div>
            <a href='#'><img class='left space realce' src='imgs/icons/liketwo.png'alt='log'></a>
            <a href='#'><img class='right realce'   src='imgs/icons/flagtwo.png' alt='logo'></a>
        </div>
    </section>";
    ?>

    <!-- most voted -->
    <section class="most-voting-container">
        <div class="voted-recipes-container">
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
            <div class="recepie">
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
            </div>
    </section>
    </section>
    <?php 
        include './parts/footer.php';
    ?>
    </main>

    
</body>

</html>