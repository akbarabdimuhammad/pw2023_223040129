<?php 
include "session.php";
include "../dashboard\koneksi.php";
?>
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


  </head>
  <body>
    <div class="grid-container">

      <!-- Header -->
      <header class="header">

        <div class="menu-icon" onclick="openSidebar()">
          <span class="material-icons-outlined"><i>menu</i></span>
        </div>
        <div class="header-right">
          <a href="logout.php" class="material-icons-outlined">logout </a>
          </div>
      </header>
      <!-- End Header -->

      <!-- Sidebar -->
      <aside id="sidebar">
        <div class="sidebar-title">
          <div class="sidebar-brand">
            <span class="material-icons-outlined">inventory</span> <?php echo $_SESSION['user']; ?>
          </div>
          <span class="material-icons-outlined" onclick="closeSidebar()">close</span>
        </div>

        <ul class="sidebar-list">
          <li class="sidebar-list-item">
            <a href="#" target="_blank">
              <span class="material-icons-outlined">dashboard</span> Dashboard
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="#" target="_blank">
              <span class="material-icons-outlined">inventory_2</span> Menu Kami 
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="datauser.php">
              <span class="material-icons-outlined">fact_check</span> Data user
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

      <!-- Main -->
      <main class="main-container">
        <div class="main-title">
          <p class="font-weight-bold">DASHBOARD</p>
        </div>

        <div class="main-cards">

          <div class="card">
            <div class="card-inner">
              <p class="text-primary">PRODUK</p>
              <span class="material-icons-outlined text-blue">inventory_2</span>
            </div>
            <span class="text-primary font-weight-bold">249</span>
          </div>

          <div class="card">
            <div class="card-inner">
              <p class="text-primary">PESANAN PEMBELIAN</p>
              <span class="material-icons-outlined text-orange">add_shopping_cart</span>
            </div>
            <span class="text-primary font-weight-bold">83</span>
          </div>

          <div class="card">
            <div class="card-inner">
              <p class="text-primary">PESANAN PENJUALAN</p>
              <span class="material-icons-outlined text-green">shopping_cart</span>
            </div>
            <span class="text-primary font-weight-bold">79</span>
          </div>



        </div>

        <div class="charts">

          <div class="charts-card">
            <p class="chart-title">5 PRODUK TERATAS</p>
            <div id=""></div>
          </div>

          <div class="charts-card">
            <p class="chart-title">PESANAN PEMBELIAN DAN PENJUALAN</p>
            <div id=""></div>
          </div>

        </div>
      </main>
      <!-- End Main -->

    </div>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.3/apexcharts.min.js"></script>
    <!-- Custom JS -->
    <script src="../js\dashboard.js"></script>
  </body>
</html>