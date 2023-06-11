<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Dashboard</title>

    <!-- Montserrat Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css\dashboard.css">
    <link rel="stylesheet" href="../css\datauser.css">
   
  </head>
  <body>
    <div class="grid-container">

      <!-- Header -->
      <header class="header">

        <div class="menu-icon" onclick="openSidebar()">
          <span class="material-icons-outlined"><i>menu</i></span>
        </div>
      </header>
      <!-- End Header -->

      <!-- Sidebar -->
      <aside id="sidebar">
        <div class="sidebar-title">
          <div class="sidebar-brand">
            <span class="material-icons-outlined">inventory</span> 
          </div>
          <span class="material-icons-outlined" onclick="closeSidebar()">close</span>
        </div>

        <ul class="sidebar-list">
          <li class="sidebar-list-item">
            <a href="dashboardadmin.php">
              <span class="material-icons-outlined">dashboard</span> Dashboard
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="#">
              <span class="material-icons-outlined">inventory_2</span> Produk 
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="#">
              <span class="material-icons-outlined">fact_check</span> Data Pemasukan
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="tambahforadmin.php" >
              <span class="material-icons-outlined">fact_check</span> tambah data user
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="datauserforadmin.php">
              <span class="material-icons-outlined">fact_check</span> Data User
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="#">
              <span class="material-icons-outlined">poll</span> laporan Keuangan
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="#" >
              <span class="material-icons-outlined">settings</span> Pengaturan
            </a>
          </li>
        </ul>
      </aside>
      <!-- End Sidebar -->

      <style>
        @media print{
          .aksi, .sidebar-list-item, .sidebar-brand, .form-control, .btn-btn-sm {
            display:none;
          }
        }
      </style>

<!-- form search -->
      <form action="" method="get" >
        <div class="input-group my-3">
          <input type="search" class="form-control" placeholder="search user(s).." name= "search" id="search" autofocus autocomplate="off">
          <button class="btn-btn-sm" name="search" type="submit" id="search">search</button>
        </form>
        
      <table class="table table-sm"> 
<thead>
    <tr>
        <th>No</th>
        <th>firstname </th>
        <th>lastname </th>
        <th>username </th>
        <th>password</th>
        <th colspan="2" class="aksi">Aksi</th>
    </tr>
</thead>
<!-- menampilkan data -->
  <tbody id="tampil">
  <?php
    include "koneksi.php";

    $no=1;
    $ambildata = mysqli_query($conn,"select * from tb_user");
    while($tampil = mysqli_fetch_array($ambildata)){
        echo 
        "<tr>
        <td>$no</td>
        <td>$tampil[firstname]</td>
        <td>$tampil[lastname]</td>
        <td>$tampil[username]</td>
        <td>$tampil[password]</td>
        <td><a href='datauserforadmin.php?kode=$tampil[username]' class='aksi'>hapus</a></td>
        <td><a href='ubahfroadmin.php?    kode=$tampil[username]' class'aksi'>ubah</a></td>
        <tr>";
    $no++;
    }
    ?>

<!-- hapus data -->
   <?php
 include "koneksi.php";

 if(isset($_GET['kode'])){
 mysqli_query($conn,"delete from tb_user where username='$_GET[kode]'");

 echo "<script>
 alert('data berhasil dihapus!');
 </script>";
 echo "<meta http-equiv=refresh content=2;URL='datauserforadmin.php'>";

 }
   ?>
  </tbody>
</table>
<!-- ajax dan jquery -->
     <script src="../js\search.js"></script>
     <script>
        $(document).ready(function() {
            $("#search").keyup(function() {
                $.ajax({
                    type: 'POST',
                    url: 'searchforadmin.php',
                    data: {
                        search: $(this).val()
                    },
                    cache: false,
                    success: function(ambildata) {
                        $("#tampil").html(ambildata);
                    }
                });
            });
        });
    </script>
</body>
</html>