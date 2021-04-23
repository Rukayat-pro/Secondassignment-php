<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Received information</title>
</head>
<body>
     <h2>Thank You!</h2>
<p> This is the information that you have submitted.</p>
<ol>
<li><em>Weather: </em><?php echo $_POST["weather"]?></li>
<li><em>City: </em><?php echo $_POST["city"]?></li>
<li><em>Month: </em><?php echo $_POST["month"]?></li>
<li><em>Year: </em><?php echo $_POST["year"]?></li>
<!-- <li><em>Weather1: </em><?php echo $_POST["weather1"]?></li>
<li><em>Weather2: </em><?php echo $_POST["weather2"]?></li>
<li><em>Weather3: </em><?php echo $_POST["weather3"]?></li>
<li><em>Weather4: </em><?php echo $_POST["weather4"]?></li>
<li><em>Weather5: </em><?php echo $_POST["weather5"]?></li>
<li><em>Weather6: </em><?php echo $_POST["weather6"]?></li>
<li><em>Weather7: </em><?php echo $_POST["weather7"]?></li> -->
</ol> 
</body>
</html>

<?php

print_r($_POST);

echo "In " .$_POST['city'] ." in the month of  " .$_POST['month']. "." .$_POST['year']. "  ,you observed the following weather:, where, the weather is  " 
.$_POST['weather']." , " .$_POST['month']. "  and  " .$_POST['year']. " .";
  
?>