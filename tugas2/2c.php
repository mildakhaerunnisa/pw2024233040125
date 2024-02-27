<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2c</title>
    <style>
        td {
            background-color: lightskyblue;
            border: 1px solid black;
            padding: 20px
        }
    </style>
</head>
<body>
    <table>
        <?php
        for ($i = 10; $i > 0; $i--){
            echo "<tr/>";
            for ($j = 1; $j <= $i; $j++){
                echo "<td>$j</td>";
            }
        }
        ?>
    </table>
</body>
</html>
