<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Admin Dashboard</title>

    <link rel="stylesheet" href="{{asset('dashboard.css')}}">
    <script>
    function redirectToLoginPage() {
      // Redirect to the login page
      window.location.href = "http://127.0.0.1:8000/"; // Ganti dengan URL halaman login yang sesuai
    }
    </script>
    <!-- Montserrat Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
  </head>
  <body>
    <div class="grid-container">

      <!-- Header -->
      <header class="header">
        <div class="menu-icon" onclick="openSidebar()">
          <span class="material-icons-outlined">menu</span>
        </div>
        <div class="header-right">
          <div>
            
         </div>
         <div>
            <button class="btn" onclick="redirectToLoginPage()">Logout</button>
         </div>
        </div>
      </header>
      <!-- End Header -->

      <!-- Sidebar -->
      <aside id="sidebar" class="sidebar">
        <div class="sidebar-title">
          <div class="sidebar-brand">
          <img src=" " width="30" height="30" class="d-inline-block align-top"> 
          </div>
          <span class="material-icons-outlined close" onclick="closeSidebar()">close</span>
        </div>

        <ul class="sidebar-list">
          <li class="sidebar-list-item">
            <a href="#" target="_blank">
              <span class="material-icons-outlined">dashboard</span> Dashboard
            </a>
          </li>
          <li class="sidebar-list-item">
          <a href="http://127.0.0.1:8000/product" target="_blank">
            <span class="material-icons-outlined">fact_check</span> PRODUCT
          </a>
        </li>

          <li class="sidebar-list-item">
            <a href="#" target="_blank">
              <span class="material-icons-outlined">add_shopping_cart</span> Transaksi
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
        <div class="main-content">
          <!-- Tambahkan konten di sini -->
          <h1>Selamat datang di halaman dashboard!</h1>
          <p>Ini adalah halaman utama admin.</p>
        </div>

        <div class="card">
                  <div class="card-inner">
                    <p class="text-primary">PRODUCT</p>
                    <span class="material-icons-outlined text-orange">fact_check</span>
                  </div>
                  <span class="text-primary font-weight-bold"></span>
                </div>

        <div class="main-cards">
            </div>


        <section class="sect2">
          
          <div class="introduction">

          </div>
        </section>
        <!-- <div class="charts">

          <div class="charts-card">
            <p class="chart-title">Top 5 Products</p>
            <div id="bar-chart"></div>
          </div>

          <div class="charts-card">
            <p class="chart-title">Purchase and Sales Orders</p>
            <div id="area-chart"></div>
          </div>

        </div> -->
      </main>
      <!-- End Main -->

    </div>

    <!-- Scripts -->
    <!-- ApexCharts -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.3/apexcharts.min.js"></script> -->
    <!-- Custom JS -->
    <script src="{{asset('js/scripts.js')}}"></script>
  </body>
</html>