<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mode of Transportation</title>
</head>
<body>
<h2>Mode of Transport</h2>
    <?php
    $Mode_of_transport=['Automobile', 'Jet', 'Ferry', 'Subway'];
    echo "Travel takes many forms, whether across town, across the country, or around the world.
     Here is a list of some common modes of transportation: <br>";
    //  print_r ($Mode_of_transport);
     foreach ($Mode_of_transport as $key => $value) {
        # code...
        echo $value . " , ";  
    }
    if (isset($_POST['transport'])) {
        # code...
        $transport = $_POST['transport'];
        echo $transport;
        $transport = $_POST['transport'];
        
    }
      
    ?>
    <h2>Please add other forms of transport here.</h2>
<form method="POST" action="transport.php">
<label for="transport">Name of Transport</label>
<input type="text"  name= "transport" placeholder="Enter mode of transport here" />
<!-- <input type="submit" value="submit" /> -->
<button type="submit">Submit</button>
</form>
</body>
</html>