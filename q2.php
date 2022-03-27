<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container ">
     <h1 class = "text-center " ;>Sign Up </h1>

     <form action = "q2.php" method = "POST" >
 
 
 <div class="mb-3 col-md-6" >
    <label for="age" class="form-label">Age</label>
    <input type="number" class="form-control" id="age" name="age">
    <br>
    <br>
  
  </div>
  
  </div>
  <button  type="submit" class="btn btn-primary col-md-6" name = "submit">Submit</button>
</form>
<?php
if(isset($_POST["submit"])){
    $age = $_POST["age"];
    $min = 26;
    $max = 56;

    if (filter_var($age, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$min, "max_range"=>$max))) == true) {
        echo "<br>";
        echo "<h1>Success</h1>";
        echo "<br>";
    } else {
        echo "<br><h1>Invalid Age</h1>";
        echo "<br>";
    }
}
?>

</body>
</html>