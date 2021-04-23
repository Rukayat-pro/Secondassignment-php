<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transportation types</title>
</head>
<body>
 <h2>Thank You!</h2>
<p> This is the information that you have submitted.</p>
<ol>
<li><em>Name of transport: </em><?php echo $_POST["transport"]?></li>


</ol> 
    <?php
    
    
     $Mode_of_transport=['Automobile', 'Jet', 'Ferry', 'Subway'];
    echo "Travel takes many forms, whether across town, across the country, or around the world.
     Here is a list of some common modes of transportation: <br>";
     print_r($Mode_of_transport);
    
    
    ?>
</body>
</html>