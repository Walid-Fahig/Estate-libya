<?php
   session_start();

  $username = "";
  $email = "";
  $errors = array();

// connect to the database
$db = mysqli_connect("localhost:3308", "root", "", "registration");

 // if the register button is clicked
  if (isset($_POST['register'])) {
   $username = mysqli_real_escape_string($db, $_POST['username']);
   $email = mysqli_real_escape_string($db, $_POST['email']);
   $password = mysqli_real_escape_string($db, $_POST['password']);
   $Confirm_Password = mysqli_real_escape_string($db, $_POST['Confirm_Password']);
  
  // ensure that form fields are filled properly
  if (empty($username)) {
      array_push($errors, "Username is required"); 
  }
  if (empty($email)) {
    array_push($errors, "Email is required"); 
}
if (empty($password)) {
    array_push($errors, "Password is required"); 
}

if ($password != $Confirm_Password){
    array_push($errors, "The two passwords do not match");
}

// if there are no errors, save user to database
if (count($errors) == 0){
    $passwordd =md5($password); //encrypt password before storing in database (security)
    $sql = "INSERT INTO `users`(`username`, `email`, `password`) VALUES ('$username', '$email', '$passwordd')";
    mysqli_query($db, $sql);
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "You are now logged in";
    header('location: afterlogin.php'); //redirect to home page 
   }
}

  //log user in from login page
  if (isset($_POST['loginn'])){
    $username = mysqli_real_escape_string($db, $_POST['username']);  
   $password = mysqli_real_escape_string($db, $_POST['password']);
  
  
  // ensure that form fields are filled properly
  if (empty($username)) {
      array_push($errors, "Username is required"); 
  }
  if (empty($password)) {
    array_push($errors, "Password is required"); 
  }  
   
  if (count($errors) == 0) {
      $password = md5($password); //encrypt password before comparing with that from database
      $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
      $result = mysqli_query($db, $query);
      if(mysqli_num_rows($result) ==1) {
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        header('location: afterlogin.php'); //redirect to home page     
      }else{
          array_push($errors, "wrong username/password combination");
          
      }
  }

  }

  //logout
  if (isset($_GET['logout'])) {
      session_destroy();
      unset($_SESSION['username']);
      header('location: login.php');
  }
?>