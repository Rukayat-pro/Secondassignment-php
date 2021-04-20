<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Some Largest cities in the world</title>
</head>
<body>
<h1>Some largest cities in the world</h1>
    <?php
    $Largest_cities = array("Tokyo", "Mexico", "New York City","Mumbai", "Seoul", 
    "Shanghai", "Lagos", "Buenos Aires", "Cairo", "London");
    print_r ($Largest_cities);
    echo "<br> <br>" ;
    foreach ($Largest_cities as $key => $value) {
        # code...
        echo $value . " , ";  
    }
        echo "<br>";
        sort($Largest_cities) ;
        print_r ($Largest_cities) ;
        echo " , <br>";
        $Largest_cities[10] = "Los Angeles";
        $Largest_cities[11] = "Osaka";
        $Largest_cities[12] = "Calcutta";
        $Largest_cities[13] ="Beijing";

        foreach ($Largest_cities as $key => $value) {
        # code...
        echo $value . " , ";  
    }
     sort($Largest_cities) ;
        print_r ($Largest_cities) ;
        echo " , <br>";

       
    ?>
</body>
</html>