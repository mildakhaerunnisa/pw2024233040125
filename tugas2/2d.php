<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2d</title>
</head>
<body>
    <table>
        <?php
        for ($i =1; $i <= 5; $i++){
            echo "<tr>";
            for ($j = 1; $j <= 5; $j++){
                if ($j % 2 == 0){
                    $c = "white";
                }
                else {
                    $c = "black";
                }
                if ($i % 2 == 0){
                    if ($j % 2 == 0){
                        $c = "black";   
                    }
                    else {
                        $c = "white";
                    }
                }
                echo "<td width='50' height='50' style='background-color:$c'></td>";
            }
        }
        ?>
    </table>
</body>
</html>