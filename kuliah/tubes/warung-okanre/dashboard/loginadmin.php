<?php 
session_start();
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
    <link rel="stylesheet" type="text/css" href="../css\login-style.css">

</head>
<body>
      <div class="login-box" id="app">
        <h1>Login</h1>
        <form action="" method="post">
          <label>Username</label>
          <input type="text" placeholder="username" name="user">
          <label>Password</label>
          <input type="password" placeholder="password" name="pass">
          <input type="submit" value="submit" name="submit">
        </form>

        <?php 
              if(isset($_POST['submit'])){
                $user = $_POST['user'];
                $pass = $_POST['pass'];

                $cek = mysqli_query($conn, "SELECT * FROM tb_admin WHERE username = 
                '".$user."' AND password = '".$pass."' ");

                if(mysqli_num_rows($cek) > 0)
            {
                  $_SESSION['user'] = $_POST['user'];
                  echo "<meta http-equiv=refresh content=0;URL='dashboardadmin.php'>";
                } else { 
                  echo "<p> Username dan Password Salah ! </p>";
                  echo "<meta http-equiv=refresh content=0;URL='loginadmin.php'>";
                }
              }
            ?>
        
      </div>
      <p class="para-2">
        Not have an account? <a href="../dashboard\registrasiadmin.php" id="registrasiadmin.php">Sign Up Here</a>
      </p>
      <p class="para-1">
         <a href="../index.html">BACK</a>
      </p>
  
</body>
</html>
