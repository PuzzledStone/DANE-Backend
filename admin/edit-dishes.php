<?php 
   
     require_once '../database.php';

     // Reference: https://medoo.in/api/select
     $categories = $database->select("tb_categories","*");

     $message = "";

     if($_GET){
        $item = $database->select("tb_dishes","*",[
            "id_informacion_platillo" => $_GET["id"],
        ]);
     }

     if($_POST){

        $data = $database->select("tb_dishes","*", ["id_informacion_platillo"=>$_POST["id"]]);

        if(isset($_FILES["imagen"]) && $_FILES["imagen"]["name"] != ""){

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
            }
            
        }else{
            $img = $data[0]["imagen"];
        }
        
        $database->update("tb_dishes",[
            "id_categoria"=>$_POST["categoria"],
            "nombre_categoria" => $category_name,
            "nombre"=>$_POST["nombre"],
            "descripcion"=>$_POST["descripcion"],
            "imagen"=> $img,
            "precio"=>$_POST["precio"],
            "personas"=>$_POST["personas"],
            "destacado"=>$_POST["destacado"]
        ],[
            "id_informacion_platillo" => $_POST["id"]
        ]);

                header("Location: list-dishes.php");
                exit();
            }
          
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Dishes</title>
    <link rel="stylesheet" href="../css/themes/admin.css">
</head>
<body>
    <div class="container">
        <h2>Edit Dishes</h2>
        <?php 
            echo $message;
        ?>
        <form method="post" action="edit-dishes.php" enctype="multipart/form-data">
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
                <label for="personas">Cantidad de Personas</label>
                <input id="personas" class="textfield" name="personas" type="text">
            </div>

            <div class="form-items">
                <label for="destacado">Destacado</label>
                <input id="destacado" class="textfield" name="destacado" type="text">
            </div>

            <div class="form-items">
                <input class="submit-btn" type="submit" value="Edit Dish">
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
    
</body>
</html>
