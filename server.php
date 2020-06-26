<?php

session_start();

$username="";
$email="";

//error
$errors=array();

$db = new mysqli('localhost:3308','root','','phpdemo') or die ("Could not open database");
 
// Register User

$username=mysqli_real_escape_string($db,$_POST['username']);
$email=mysqli_real_escape_string($db,$_POST['email']);
$pass=mysqli_real_escape_string($db,$_POST['password']);
$c_pass=mysqli_real_escape_string($db,$_POST['c_password']);

// form validation
if(empty($username)) {array_push($errors,"username is Required");}
if (empty($email)) {array_push($errors,"Email is Required");}
if (empty($pass)) {array_push($errors,"Password is Required");}
if ($pass != $c_pass) {array_push($errors,"Cofirm the Password");}

//check username exist or not

$user_query_check = "SELECT * FROM user WHERE username='$username' or email='$email' LIMIT 1";

$result = mysqli_query($db, $user_query_check);
$user = mysqli_fetch_assoc($result);

if ($user){
    if ($user['username']===$username) {array_push($errors, "Username already Exists");}
    if ($user['email']===$email) {array_push($errors, "Email already Exists");}

}

//register the user 
  if (count($errors)==0){
      $pass = md5($pass); //encrypt the password with md5
      $query="INSERT INTO user (username,email,password) VALUES ('$username','$email','$pass')";

      mysqli_query($db,$query);  //to rub our query
      $_SESSION['username']=$username;
      $_SESSION['success']="Your are Logged In";

      header("Location:login.php");
  }

?>