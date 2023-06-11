<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<div class="container mt-3">
  <h1>Tambah Data user</h1>

  <div class="row">
    <div class="col-md-8">
      <form action="" method="POST">
        <div class="mb-3">
          <label for="nama" class="form-label">Firstname</label>
          <input type="text" class="form-control" name="firstname" id="firstname">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Lastname</label>
          <input type="text" class="form-control" name="lastname" id="lastname">
        </div>
        <div class="mb-3">
          <label for="jurusan" class="form-label">Username</label>
          <input type="text" class="form-control" name="username" id="username">
        </div>
        <div class="mb-3">
          <label for="gambar" class="form-label">Password</label>
          <input type="text" class="form-control" name="pass" id="pass">
        </div>
        <button class="btn btn-dark" type="submit" name="submit">Tambah Data</button>
      </form>
    </div>
  </div>

</div>
<?php
    include "koneksi.php";
    if(isset($_POST['submit']))
    {
        $firstname  = $_POST['firstname'];
        $lastname   = $_POST['lastname'];
        $username   = $_POST['username'];
        $password   = $_POST['pass'];

        
        mysqli_query($conn, "INSERT INTO tb_user VALUES(
        '$firstname','$lastname','$username','$password'
        )") or die(mysqli_error($conn));

       echo "<script>
       alert('data berhasil ditambahkan!');
       document.location.href = 'datauserforadmin.php';
       </script>";
        
    }

?>