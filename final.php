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
        class FinalExam extends ParentClass{
            function total(){
                $res = $this->sub1+$this->sub2+$this->sub3;
                return $res;
            }
        }
    ?>
    <h1>Final</h1>

    <form action="final.php" method="POST">
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
        $obj1 = new FinalExam($mks1, $mks2, $mks3);
        $objMrks3 = $obj1->total();
        $_SESSION['$objMrks3'] = $objMrks3;

    }
  ?>
  <button type="submit" name="final"><a href="finalResult.php">Final Result</a></button>

  
</body>
</html>