<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2d.php</title>
    <style>
        .container {
            display: grid;
            grid-template-columns: repeat(4, 50px);
            grid-template-rows: repeat(4, 50px);
            border: 4px solid black;
            width: fit-content;
        }

        .kotak {
            width: 50px;
            height: 50px;
            border: 1px solid black;
        }

        .hitam {
            background-color: black;
        }

        .putih {
            background-color: white;
        }
    </style>
</head>

<body>

    <div class="container">
        <?php
        for ($i = 0; $i < 4; $i++) {
            for ($j = 0; $j < 4; $j++) {
                $warna = ($i + $j) % 2 == 0 ? "putih" : "hitam";
                echo "<div class='kotak $warna'></div>";
            }
        }
        ?>
    </div>

</body>

</html>