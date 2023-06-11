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
            <a href="dashboarduser.php">
              <span class="material-icons-outlined">dashboard</span> Dashboard
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="#">
              <span class="material-icons-outlined">inventory_2</span> Menu Kami
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="datauser.php">
              <span class="material-icons-outlined">fact_check</span> Data User
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="#">
              <span class="material-icons-outlined">settings</span> Pengaturan
            </a>
          </li>
        </ul>
      </aside>
      <!-- End Sidebar -->

<!-- form search -->
      <form action="" method="get">
        <div class="input-group my-3">
          <input type="search" class="form-control" placeholder="search user(s).." name= "search" id="search" autofocus autocomplate="off">
          <button class="btn btn-sm" name="search" type="submit" id="search">search</button>
        </form>
        
      <table class="table table-sm"> 
<thead>
    <tr>
        <th>No</th>
        <th>firstname </th>
        <th>lastname </th>
        <th>username </th>
        <th>password</th>
    </tr>
</thead>
<!-- menampilkan data -->
  <tbody id="tampil">
  <?php
    include "../dashboard\koneksi.php";

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
        <tr>";
    $no++;
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
                    url: 'search.php',
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