<?php
include "koneksi.php";
$sql=mysqli_query($conn,"select * from tb_user where username='$_GET[kode]'");
$data=mysqli_fetch_array($sql);

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<div class="container mt-3">
  <h1>ubah Data user</h1>

  <div class="row">
    <div class="col-md-8">
      <form action="" method="POST">
        <div class="mb-3">
          <label for="firstname" class="form-label">Firstname</label>
          <input type="text" class="form-control" name="firstname" value="<?php echo $data['firstname']; ?>" id="firstname">
        </div>
        <div class="mb-3">
          <label for="lastname" class="form-label">Lastname</label>
          <input type="text" class="form-control" name="lastname" value="<?php echo $data['lastname']; ?>" id="lastname">
        </div>
        <div class="mb-3">
          <label for="username" class="form-label">Username</label>
          <input type="text" class="form-control" name="username" value="<?php echo $data['username']; ?>" id="username">
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="text" class="form-control" name="pass" value="<?php echo $data['password']; ?>" id="pass">
        </div>
        <button class="btn btn-dark" type="submit" name="submit">ubah Data</button>
      </form>
    </div>
  </div>

</div>

<?php
    include "koneksi.php";
    if(isset($_POST['submit']))
    {
            mysqli_query($conn, "update tb_user set  
            firstname = '$_POST[firstname]',
            lastname = '$_POST[lastname]',
            username = '$_POST[username]',
            password = '$_POST[pass]'
            where username = '$_GET[kode]'");

       echo "<script>
       alert('data berhasil diubah!');
       document.location.href = 'datauserforadmin.php';
       </script>";
        
    }

?>