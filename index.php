<?php 

session_start();

if (isset($_SESSION['username'])){
    $_SESSION['msg']="You must log in to view this Page";
    header("Location:login.php");
}
if (isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['username']);
    header("Location:login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
<h2>This is Home Page</h2>
    <?php
      if (isset($_SESSION['success'])): ?>
        <div>
            <h3>
              <?php 
              echo $_SESSION['success'];
              unset ($_SESSION['success']);
              ?>
            </h3>
        </div>
        <?php endif ?>

        //if user log in print This

    <?php if(isset($_SESSION['username'])): ?>

    <h2>Welcome <strong><?php echo $_SESSION['username']; ?></strong></h2>

    <button><a href="index.php?logout='1'"></a></button>

    <?php endif ?>
   
</body>
</html>
