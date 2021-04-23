<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array of largest cities </title>
</head>
<body>
    
    <h2>Thank You!</h2>
<p> This is the information that you have submitted.</p>
<ol>
<li><em>City: </em><?php echo $_POST["cities"]?></li></ol>
<?php

echo "<br>";

 $Capital_and_state = array("Tokyo"=> "Japan", "Mexico City"=>"Mexico", "New York City"=>"USA", 
    "Mumbai"=> "India","Seoul"=> "Korea", "Shanghai"=>"China", "Lagos"=> "Nigeria", 
    "Buenos Aires"=> "Argentina", "Cairo"=> "Egypt", "London"=> "England");
    
    foreach ($Capital_and_state as $key => $value) {
        # code...
        echo "Country=" .$key . ", Capital=" .$value;
        echo "<br>";
    }
    echo $_POST['cities']. " is in " .$key;
        
          
?>
</body>
</html>