<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: yellow;">
<div class="container ">
    <h1 class = "text-center ";>Signup</h1>

    <form action="form.php"  method="POST" >
 
 
    <div class="mb-3 col-md-6" >
        <label for="nam" class="form-label">Name</label>
        <input type="name" class="form-control" id="nam" name="nam">
        <br>
        <br>
  
  </div>

    <div class="mb-3 col-md-6" >
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email">
    </div>
    <br>
    
    <div class="mb-3 col-md-6">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name = "password">
        <br>
        <br>
  
    </div>

    
    <button type="submit"  class="btn btn-primary col-md-6" name = "signup">Sign Up</button>
    </form>
</body>
</html>