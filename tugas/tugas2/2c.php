<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2c.php</title>
    <style>
        .kotak {
            width: 40px;
            height: 40px;
            background-color: pink;
            color: black;
            text-align: center;
            line-height: 40px;
            display: inline-block;
            font-weight: bold;
            border: 1px solid black;
            box-sizing: border-box;
        }
    </style>
</head>

<body>

    <?php
    for ($i = 10; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            echo "<div class='kotak'>$j</div>";
        }
        echo "<br>";
    }
    ?>

</body>

</html>