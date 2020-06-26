<?php include('server.php')?>

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
        <h3 class="text-center p-4">Register Here</h3>

        <form method="post" action="register.php" class=" p-4">
        <?php include('errors.php') ?>
            <div class="form-group w-75 d-flex flex-column justify-content-end">
                <label for="my-input">username</label>
                <input class="form-control" type="text" name="username" >
                <label for="my-input">Email</label>
                <input class="form-control" type="text" name="email" >
                <label for="my-input">Password</label>
                <input class="form-control" type="text" name="password" >
                <label for="my-input">Confirm Password</label>
                <input class="form-control" type="text" name="c_password" >
            </div>
            <button class="btn btn-primary text-left" name="register" type="submit">Register</button>
         </form>
         <p class="text-danger font-weight-bold">Alredy a User ? <span><a href="login.php" class="text-light">Login Here</a></span></p>
    </div> 
    
    
   
    
</body>
</html>