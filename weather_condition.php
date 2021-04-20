<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather condition</title>
</head>
<body>
<h1>Weather Condition</h1>
   <?php
    $Weather_Condition =['Rain', 'Sunshine', 'Cloud','Hail', 'Sleet', 'Snow', 'Wind'];

echo "<br>";
print_r ($Weather_Condition); 
echo "We've seen all kinds of weather this month, At the beginning of the month, we had " .$Weather_Condition[5] ." and " 
.$Weather_Condition[6]." Then came " .$Weather_Condition[1]. " with a few " .$Weather_Condition[2]. " and " 
.$Weather_Condition[0]. " At least we didn't get any " .$Weather_Condition[3]. 
" or ". $Weather_Condition[4];

   ?>
</body>
</html>