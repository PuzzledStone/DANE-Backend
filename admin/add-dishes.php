<?php 

     require_once '../database.php';

    

     // Reference: https://medoo.in/api/select
     $categories = $database->select("tb_categories","*");
     $outstanding = $database->select("tb_outstanding","*");
     $message = "";

     if($_POST){

        if(isset($_FILES["imagen"])){
            $errors = [];
            $file_name = $_FILES["imagen"]["name"];
            $file_size = $_FILES["imagen"]["size"];
            $file_tmp = $_FILES["imagen"]["tmp_name"];
            $file_type = $_FILES["imagen"]["type"];
            $file_ext_arr = explode(".", $_FILES["imagen"]["name"]);

            $file_ext = end($file_ext_arr);
            $img_ext = ["jpeg", "png", "jpg", "webp"];

            if(!in_array($file_ext, $img_ext)){
                $errors[] = "File type is not valid";
                $message = "File type is not valid";
            }

            if(empty($errors)){
                $filename = strtolower($_POST["nombre"]);
                $filename = str_replace(',', '', $filename);
                $filename = str_replace('.', '', $filename);
                $filename = str_replace(' ', '-', $filename);
                $img = "dish-".$filename.".".$file_ext;
                move_uploaded_file($file_tmp, "../scraping/images/".$img);

                $category_name = "";
                foreach ($categories as $category) {
                    if ($category["id_categoria"] == $_POST["categoria"]) {
                        $category_name = $category["nombre_categoria"];
                        break;
                    }
                }

                $outstanding_name = "";
                foreach ($outstanding as $value) {
                    if ($value["id_outstanding"] == $_POST["outstanding"]) {
                        $outstanding_name = $value["value_outstanding"];
                        break;
                    }
                }

                $database->insert("tb_dishes",[
                    "id_categoria"=>$_POST["categoria"],
                    "nombre_categoria" => $category_name,
                    "nombre"=>$_POST["nombre"],
                    "descripcion"=>$_POST["descripcion"],
                    "imagen"=> $img,
                    "precio"=>$_POST["precio"],
                    "personas"=>$_POST["personas"],
                    "value_outstanding"=>$outstanding_name,
                    "id_outstanding"=>$_POST["outstanding"],
                ]);

                header("Location: list-dishes.php");
                exit();
            }
        }
        
     }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Dishes</title>
    <link rel="stylesheet" href="../css/themes/admin.css">
    <link rel="stylesheet" href="../css/main.css">
</head>
<header>
    <?php include '../parts/header-admin.php';?>
    <div class="line"></div>
</header>
<body>
    <div class="container">
        <h2 class="title-admin">Add New Dish</h2>
        <?php 
            echo $message;
        ?>
        <form method="post" action="add-dishes.php" enctype="multipart/form-data">
            <div class="form-items">
                <label for="nombre">Dish Name</label>
                <input id="nombre" class="textfield" name="nombre" type="text">
            </div>
           
            <div class="form-items">
                <label for="categoria">Dish Category</label>
                <select name="categoria" id="categoria">
                    <?php 
                        foreach($categories as $category){
                            echo "<option value='".$category["id_categoria"]."'>".$category["nombre_categoria"]."</option>";
                        }
                    ?>
                </select>
                <input type="hidden" name="nombre_categoria" value="">
            </div>

            <div class="form-items">
                <label for="descripcion">Dish Description</label>
                <textarea id="descripcion" name="descripcion" id="" cols="30" rows="10"></textarea>
            </div>

            <div class="form-items">
                <label for="imagen">Dish Image</label>
                <img id="preview" src="../imgs/resources/destination-placeholder.webp" alt="Preview">
                <input id="imagen" type="file" name="imagen" onchange="readURL(this)">
            </div>

            <div class="form-items">
                <label for="precio">Dish Price</label>
                <input id="precio" class="textfield" name="precio" type="text">
            </div>

            <div class="form-items">
                <label for="personas">How many can eat</label>
                <input id="personas" class="textfield" name="personas" type="text">
            </div>

            <div class="form-items">
                <label for="outstanding">Outstanding</label>
                <select name="outstanding" id="outstanding">
                    <?php 
                        foreach($outstanding as $value){
                            echo "<option value='".$value["id_outstanding"]."'>".$value["value_outstanding"]."</option>";
                        }
                    ?>
                </select>
                <input type="hidden" name="value_outstanding" value="">
            </div>

            <div class="form-items">
                <input class="submit-btn" type="submit" value="Add New Dish">
            </div>
        </form>
    </div>

    <script>
        function readURL(input) {
            if(input.files && input.files[0]){
                let reader = new FileReader();

                reader.onload = function(e) {
                    let preview = document.getElementById('preview').setAttribute('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        
    </script>
    <footer>
        <?php include '../parts/footer.php';?>
    </footer>
</body>
</html>
