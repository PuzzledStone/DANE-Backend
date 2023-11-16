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
</head>
<body>
    <h2>Registered Dishes</h2>
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
    
</body>
</html>