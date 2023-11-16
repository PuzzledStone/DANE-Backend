<?php 
    require_once '../database.php';
    // Reference: https://medoo.in/api/where
    if($_GET){
        $data = $database->select("tb_dishes","*",[
            "id_informacion_platillo"=>$_GET["id"]
        ]);
    }

    if($_POST){
        // Reference: https://medoo.in/api/delete
        $database->delete("tb_dishes",[
            "id_informacion_platillo"=>$_POST["id"]
        ]);

        header("location: list-dishes.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Dish</title>
</head>
<body>
    <h2>Delete Dish: <?php echo $data[0]["nombre"]; ?></h2>
    <form method="post" action="delete-dishes.php">
        <input name="id" type="hidden" value="<?php echo $data[0]["id_informacion_platillo"]; ?>">
        <input type="button" onclick="history.back();" value="CANCEL">
        <input type="submit" value="DELETE">
    </form>
</body>
</html>