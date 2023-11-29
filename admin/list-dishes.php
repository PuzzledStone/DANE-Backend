<?php 
    require_once '../database.php';
    // Reference: https://medoo.in/api/select
    $items = $database->select("tb_dishes","*");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered Dishes</title>
    <link rel="stylesheet" href="../css/themes/admin.css">
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
<header>
    <?php include '../parts/header-admin.php';?>
    <div class="line"></div>
</header>
    <div class="container">
    <h2 class="title-admin">Registered Dishes</h2>
    <table>
        <?php
            foreach($items as $item){
                echo "<tr>";
                echo "<td>".$item["nombre"]."</td>";
                echo "<td><a href='edit-dishes.php?id=".$item["id_informacion_platillo"]."'>Edit</a> <a href='delete-dishes.php?id=".$item["id_informacion_platillo"]."'>Delete</a></td>";
                echo "</tr>";
            }
        ?>
    </table>
    </div>
    <footer>
        <?php include '../parts/footer.php';?>
    </footer>
</body>
</html>