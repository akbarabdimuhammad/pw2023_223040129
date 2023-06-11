<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Daftar</title>
    <link rel="stylesheet" type="text/css" href="../css/registrasi.css">
  </head>
  <body>
    <div class="signup-box">
      <h1>Sign Up</h1>
      <h4>It's free and only takes a minute</h4>
      <form action="" method="post">
        <label>First Name</label>
        <input type="text" placeholder="first name" name="firstname"/>
        <label>Last Name</label>
        <input type="text" placeholder="last name" name="lastname"/>
        <label>Username</label>
        <input type="text" placeholder="username" name="username"/>
        <label>Password</label>
        <input type="password" placeholder="password" name="pass"/>
        <input type="submit" value="Submit" name="submit" />
        </form>
        
        <p>
  By clicking the Sign Up button,you agree to our <br />
  <a href="#">Terms and Condition</a> and <a href="#">Policy Privacy</a>
</p>
</div>
    <p class="para-2">
      Already have an account? <a href="../dashboard\loginadmin.php" >Login here</a>
    </p>
  </body>
  </html>

  <?php
    include "koneksi.php";
    if(isset($_POST['submit']))
    {
        $firstname  = $_POST['firstname'];
        $lastname   = $_POST['lastname'];
        $username   = $_POST['username'];
        $password   = $_POST['pass'];

        
        mysqli_query($conn, "INSERT INTO tb_admin VALUES(
        '$firstname','$lastname','$username','$password'
        )") or die(mysqli_error($conn));

         echo "<script>
         alert('registrasi sukses!');
         document.location.href = 'loginadmin.php';
         </script>";
    }

?>