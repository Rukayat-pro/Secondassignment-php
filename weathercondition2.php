<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Conditions in cities</title>
</head>
<body>
<h1>Weather Conditions in cities</h1>
<p>Please fill in this form with the appropriate information.</p>
    <form method="POST" action="">
    <label for="weather">Weather:</label>
    <input type="text" name="weather" placeholder="Enter the weather condition here.."><br><br>
    <label for="city">City:</label>
    <input type="text" name="city" placeholder="Enter the city here.."><br><br>
    <label for="month">Months:</label>
    <input type="text" name="month" placeholder="Enter the month here.."><br><br>
    <label for="year">Year:</label>
    <input type="text" name="year" placeholder="Enter the year here.."><br><br>

  <input type="checkbox" id="weather1" name="Rain" >
  <label for="weather1">Rain</label><br>
  <input type="checkbox" id="weather2" name="Sunshine" >
  <label for="weather2">Sunshine</label><br>
  <input type="checkbox" id="weather3" name="Cloud" >
  <label for="weather3">Cloud</label><br>
  <input type="checkbox" id="weather4" name="Hail" >
  <label for="weather4">Hail</label><br>
  <input type="checkbox" id="weather5" name="Sleet" >
  <label for="weather5">Sleet</label><br>
  <input type="checkbox" id="weather6" name="Snow" >
  <label for="weather6">Snow</label><br>
  <input type="checkbox" id="weather7" name="Wind" >
  <label for="weather7">Wind</label>
 <button type="submit">Submit</button>

</form>
 
    <?php
    $Weather_Condition =['Rain', 'Sunshine', 'Cloud','Hail', 'Sleet', 'Snow', 'Wind'];
    echo $Weather_Condition;
    echo "In " .$city ." in the month of " .$month. "." .$year. " ,you observed the following weather:, where" 
    .$city." , " .$month. " and " .$year. ";

    foreach ($Weather_Condition as $key => $value) {
    echo $value . " , ";
    }
    echo "<br>";

    if(isset($_POST['cities])
    {
        $cities = $_POST['cities'];
        echo $cities;
    }
    
?>
</body>
</html>