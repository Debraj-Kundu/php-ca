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
        class Ca2 extends ParentClass{
            function total(){
                $res = $this->sub1+$this->sub2+$this->sub3;
                return $res;
            }
        }
    ?>
    <h1>CA2</h1>

    <form action="ca2.php" method="POST">
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
        $obj1 = new Ca2($mks1, $mks2, $mks3);
        $objMrks2 = $obj1->total();
        $_SESSION['$objMrks2'] = $objMrks2;

    }
  ?>
  <button type="submit" name="ca2"><a href="final.php">Final</a></button>
</body>
</html>