<?php 
include "session.php";
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Admin Dashboard</title>

    <!-- Montserrat Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css\dashboard.css">
    <script>
      alert('selamat datang <?php echo $_SESSION['user']; ?>');
  </script>
  </head>
  <body>
    <div class="grid-container">

      <!-- Header -->
      <header class="header">

        <div class="menu-icon" onclick="openSidebar()">
          <span class="material-icons-outlined"><i>menu</i></span>
        </div>
        <div class="header-left">
          <span class="material-icons-outlined">search</span>
        </div>
        <div class="header-right">
        <a href="#">
          <span class="material-icons-outlined">shopping_cart</span>
        </a>
        <a href="#">
          <span class="material-icons-outlined">chat</span>
        </a>
        <a href="#">
          <span class="material-icons-outlined">account_circle</span>
        </a>
          <a href="logout.php">
            <span class="material-icons-outlined">logout</span>
          </a>
          <div class="header-right">
          </div>

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
              <span class="material-icons-outlined">restaurant_menu</span> Menu Makanan
              </a>
          </li>
          <li class="sidebar-list-item">
              <a href="#" target="_blank">
              <span class="material-icons-outlined">format_list_bulleted</span> Daftar Favorit
              </a>
          </li>
            <li class="sidebar-list-item">
                <a href="#" target="_blank">
                    <span class="material-icons-outlined">notifications</span> Notifikasi
                  </a>
              </li>
            <li class="sidebar-list-item">
                <a href="" >
                    <span class="material-icons-outlined">settings</span> Pengaturan Akun
                </a>
            </li>
            <li class="sidebar-list-item">
                <a href="#" target="_blank">
                    <span class="material-icons-outlined">headset_mic</span> Chat dengan kami
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

        
        <div class="charts">
            
            <div class="charts-card">
                <p class="chart-title">5 MAKANAN TERLARIS</p>
                <div id=""></div>
            </div>
            
            <div class="charts-card">
                <p class="chart-title">5 MAKANAN YANG SERING DI LIHAT</p>
                <div id=""></div>
            </div>
            
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