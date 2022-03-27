<!DOCTYPE html>
<?php
require 'q1.php';
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
        class Ca1 extends ParentClass{
            function total(){
                $res = $this->phy+$this->chem+$this->mth;
                return $res;
            }
        }
    ?>
    <h1>CA1</h1>
    <form action="ca1.php" method="POST">
        <div class="mrks">
            <label for="mrks">Subj1 Marks</label>
            <input type="number" class="mrks" name="mrks1">
        <br>
        <br>
        </div>
        <div class="mrks">
            <label for="mrks">Subj2 Marks</label>
            <input type="number" class="mrks" name="mrks2">
        <br>
        <br>
        </div>
        <div class="mrks">
            <label for="mrks">Subj3 Marks</label>
            <input type="number" class="mrks" name="mrks3">
        <br>
        <br>
        <button type="submit" name = "signup">Submit</button>
        </div>
    </form>
    <?php
        if(isset($_POST['signup'])){
            $mks1 = $_POST['mrks1'];
            $mks2 = $_POST['mrks2'];
            $mks3 = $_POST['mrks3'];
            $obj1 = new Ca1($mks1, $mks2, $mks3);
            $objMrks1 = $obj1->total();
            $_SESSION['$objMrks1'] = $objMrks1;
        }
    ?>
    <button type="submit" name="ca2"><a href="ca2.php">Ca2</a></button>
</body>
</html>