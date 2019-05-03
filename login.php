<?php include('server.php'); ?>
<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" type="text/css" href="signup.css">
     <title>تسجيل الدخول</title>
 </head>
 <body>
     <div class="header">
         <h2>Login</h2>    
     </div>
     <form method="post" action="login.php">
         <!-- display validation errors  here-->
         <?php include('errors.php'); ?>
         <div class="input-group">
            <label>Username</label>
            <input type="text" name="username">
         </div>
         <div class="input-group">
                <label>Password</label>
                <input type="password" name="password">
         </div>
         <div class="input-group">
               <button type="submit" name="login" class="btn">Login</button>
         </div>
         <p>
             Already a member? <a href="signup.php">sign up</a>
         </p>
     </form>
 </body>
 </html>