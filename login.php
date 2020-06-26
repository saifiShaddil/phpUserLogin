<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Login</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>
    <div class="container bg-success ">
        <h3 class="text-center p-4">Log In</h3>

        <form method="post" action="register.php" class=" p-4">
            <div class="form-group w-75 d-flex flex-column justify-content-end">
                <label for="my-input">Username</label>
                <input class="form-control" type="text" name="username">
                <label for="my-input">Password</label>
                <input class="form-control" type="text" name="password">
                
            </div>
            <button class="btn btn-primary text-left" name="login" type="submit">Login</button>
         </form>
         <p class="font-weight-bolder">Not a Register User ? <span><a href="register.html" class="text-white">Register Here</a></span></p>
    </div> 
    
    
   
    
</body>
</html>