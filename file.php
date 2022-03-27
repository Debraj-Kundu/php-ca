
<body style="background-color: yellow;">
  
  <form action="file.php" method="post" enctype="multipart/form-data">
    <label for="nam" class="form-label">Name</label>
    <input type="name" class="form-control" id="nam" name="nam">
    <br>
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email">
    <br>
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name = "password">
    <br>
    Select file to upload:
    <br><br>
    <input type="file" name="fileToUpload" id="fileToUpload">
    <br><br>
    <input type="submit" value="Upload Image" name="submit">
  </form>
  <br>
  
  <?php
$target_dir = "XYZ/documents/directory/";
$target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if($imageFileType == "pdf" || $imageFileType == "png") {
  echo "You are good to go :)<br>";
  $uploadOk = 1;
}
else{
  $uploadOk = 0;
}

if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
  
  } else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
      echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
    } else {
      echo "Sorry, there was an error uploading your file.";
    }
  }
  
  ?>
</body>