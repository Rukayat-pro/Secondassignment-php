<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
echo "The following are some largest city and their capital in the world.";
echo "<br>";
    $Capital_and_state = array("Tokyo"=> "Japan", "Mexico City"=>"Mexico", "New York City"=>"USA", 
    "Mumbai"=> "India","Seoul"=> "Korea", "Shanghai"=>"China", "Lagos"=> "Nigeria", 
    "Buenos Aires"=> "Argentina", "Cairo"=> "Egypt", "London"=> "England");
    
    foreach ($Capital_and_state as $key => $value) {
        # code...
        echo "Country=" .$key . ", Capital=" .$value;
        echo "<br>";
    }

    if(isset($_POST['cities']))
    {
        $cities =$_POST['cities'];
        echo $cities;
        echo "<br>";
         print_r($cities ." is in " .$value);
          echo "<br>";
          echo $cities. " is in " .$value;
          print_r($cities ." is in " .$key);
    }
    
   
    ?>
    <p>Please fill the form below</p>
    <form action="array_ofCity.php" method="POST">
    <label for="cities">Choose a city:</label>
    <select id="cities" name="cities">
  <option value="Tokyo">Tokyo</option>
  <option value="Mexico City">Mexico City</option>
  <option value="New York City">New York City</option>
  <option value="Mumbai">Mumbai</option>
  <option value="Seoul">Seoul</option>
  <option value=" Shanghai">Shanghai</option>
  <option value="Lagos">Lagos</option>
  <option value="Buenos Aires">Buenos Aires</option>
  <option value="Cairo">Cairo</option>
  <option value=" London">London</option>
    </select><br >
    <button type="submit">Submit</button><br>
    </form>
    
</body>
</html>