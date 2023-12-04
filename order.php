<?php
require_once './database.php';

// Reference: https://medoo.in/api/select
$dishes = $database->select("tb_dishes", "*");
$dishCount = count($dishes);
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
    <link rel="stylesheet" href="./css/main.css">>
</head>
<body>
    <?php include "./parts/header.php"; ?>

    <main>
    <div class="line"></div>
            <h1 class="featured-title">Order</h1>
            <hr>
            <form action='confirmation.php' method='post'>
                <div class='activity'>    
                    <?php foreach ($dishes as $index => $dish) : ?>
                        <div class='form-items'>
                            <div>
                                <label class='text-details' for='am<?= $index ?>'>
                                    <?= $dish["nombre"] ?>
                                    <span>($<?= $dish["precio"] ?>)</span>
                                </label>
                            </div>
                            <div>
                                <input id='am<?= $index ?>' data-index='<?= $index ?>' data-price='<?= $dish["precio"] ?>' class='form-input' type='number' name='extras[<?= $dish["id_informacion_platillo"] ?>]' step='1' value='0' min='0' max='1000' oninput='updateTotal()'>
                            </div>
                            <div>
                                <p class='text-details' id='dish<?= $index ?>'>$0</p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <h3 class='featured-title'>Total: $<span id='total'></span></h3>
                <button class="hardpl-btn" type="submit">
                    <span class="btns-text">Complete Order</span>
                </button>
            </form>

    </main>

    <?php include "./parts/footer.php"; ?>

    <script>
        function updateTotal() {
            let total = 0;

            for (let i = 0; i < <?= $dishCount ?>; i++) {
                let price = parseFloat(document.getElementById("am" + i).getAttribute("data-price"));
                let quantity = parseFloat(document.getElementById("am" + i).value);
                total += price * quantity;
                document.getElementById("dish" + i).innerHTML = "$ " + (price * quantity);
            }

            document.getElementById("total").innerHTML = total;
        }
    </script>
</body>
</html>
