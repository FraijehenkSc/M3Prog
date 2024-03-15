<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

        $namen = ["Kazuma","Aqua","Megumin","Darkness","Yunyun"];
        echo "<br>" . "<br>";
        echo count($namen);
        sort($namen);
        print_r($namen);
        echo "<br>" . "<br>";
        echo array_pop($namen);
        echo "<br>" . "<br>";
        array_push($namen, "Chomusuke");
        $namen[] = "Eris";
        echo implode('  |  ',$namen);
        echo "<br>" . "<br>";
        echo implode('<br>',$namen);
    ?>
</body>
</html>