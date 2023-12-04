<?php
require_once './database.php';

$details = [];
$totalOrderCost = 0;

if ($_POST && isset($_POST['extras'])) {
    $extras = $_POST['extras'];

    foreach ($extras as $index => $quantity) {
        if (!isset($quantity) || !ctype_digit($quantity) || $quantity <= 0) {
            continue;
        }

        $dish = $database->select("tb_dishes", "*", [
            "id_informacion_platillo" => $index
        ]);

        if (!empty($dish)) {
            $dish_price = $dish[0]["precio"];
            $dish_total = $dish_price * $quantity;

            $details[] = [
                "dish_name" => $dish[0]["nombre"],
                "dish_quantity" => $quantity,
                "dish_price" => $dish_price,
                "dish_total" => $dish_total
            ];
        } else {
            echo "Dish with ID " . ($index) . " not found<br>";
        }
    }
}
if($_POST){
if (isset($_POST['complete_order'])) {
    $database->insert("tb_order_register",[
        "id_registro_pedido"=>null,
        "nombre_platillo"=>$dishDetails['dish_name'],
        "cantidad_pedida"=> $dishDetails['dish_quantity'],
        "total"=>$totalOrderCost,
    ]); 
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Camping Website</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=AR+One+Sans:wght@400;500;700&family=Open+Sans:ital,wght@0,500;0,700;1,300&family=Raleway:ital,wght@0,500;0,700;1,300&display=swap"rel="stylesheet">
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
    <header> 
        <?php 
            include "./parts/header.php";
        ?>
    </header>
    <main>
    <div class="line"></div>
       
            <h2 class="confirmation-title">Order details</h2>
                
            <?php 
            foreach ($details as $dishDetails) {
                echo "<h3 class='dish-con-title'>" . $dishDetails['dish_name'] . "</h3>";
                echo "<p class='confirmation-details'>Quantity: " . $dishDetails['dish_quantity'] . "</p>";
                echo "<p class='confirmation-details'>Price per unit: $" . $dishDetails['dish_price'] . "</p>";
                echo "<hr>";
                $totalOrderCost += $dishDetails['dish_total'];    
            }   
            
            echo "<p class='dish-con-title'> Total: $totalOrderCost $</p>";

            ?>

                
    <form action='confirmation.php' method='post'>
        <button class="hardpl-btn" type="submit" id="complete_order">
            <span class="btns-text">Complete Order</span>
            </button>
            </form>   
    </main>
    <?php include "./parts/footer.php"; ?>
</body>

<script>

     function insertBuy(){
        // Reference: https://medoo.in/api/insert
        
     }

</script>
</html>
