<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: yellow;">
    <?php
        $res = $_SESSION['$objMrks1']+$_SESSION['$objMrks2']+$_SESSION['$objMrks3'];
        echo "<h1>Total marks: {$res}</h1>";
    ?>
</body>
</html>