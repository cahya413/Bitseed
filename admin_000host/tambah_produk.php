<?php
// index.php

session_start();

// Periksa apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    // Jika belum login, redirect ke halaman login
    header("Location: login.html");
    exit();
}

// Jika sudah login, tampilkan halaman dengan dropdown
?>
<?php
// Pastikan sesuai dengan informasi database Anda
$servername = "localhost"; // Ganti sesuai dengan server Anda
    $username = "id21578052_capri"; // Ganti dengan username database Anda
    $password = "Capri_DNight1"; // Ganti dengan password database Anda
    $dbname = "id21578052_bitseed"; // Ganti dengan nama database Anda

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Inisialisasi id_toko
$id_toko = null;

// Periksa apakah id_toko ada dalam parameter URL
if (isset($_GET['id_toko'])) {
    $id_toko = $_GET['id_toko'];

    // Query untuk mendapatkan data toko berdasarkan id_toko
    $sql_toko = "SELECT * FROM tbltoko WHERE id_toko = ?";
    $stmt_toko = $conn->prepare($sql_toko);
    $stmt_toko->bind_param("i", $id_toko);

    if ($stmt_toko->execute()) {
        $result_toko = $stmt_toko->get_result();
        $data_toko = $result_toko->fetch_assoc();
    } else {
        // Handle jika query tidak berhasil dieksekusi
        echo "Error: " . $sql_toko . "<br>" . $stmt_toko->error;
    }

    $stmt_toko->close();
} else {
    // Handle jika id_toko tidak ada
    echo "ID Toko tidak ditemukan";
}

// ... (lanjutkan dengan form dan HTML)

// Tutup koneksi
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Dashboard | BITSEED</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      content="Premium Multipurpose Admin & Dashboard Template"
      name="description"
    />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" />

    <!-- Bootstrap Css -->
    <link
      href="assets/css/bootstrap.min.css"
      id="bootstrap-style"
      rel="stylesheet"
      type="text/css"
    />

    <link
      href="assets/css/index.css"
      id="bootstrap-style"
      rel="stylesheet"
      type="text/css"
    />

    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link
      href="assets/css/app.min.css"
      id="app-style"
      rel="stylesheet"
      type="text/css"
    />
  </head>

  <body data-sidebar="dark">
    <!-- Loader -->
    <div id="preloader">
      <div id="status">
        <div class="spinner"></div>
      </div>
    </div>

    <!-- Begin page -->
    <div id="layout-wrapper">
      <header id="page-topbar">
        <div class="navbar-header">
          <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
              <a href="index.php" class="logo logo-dark">
                <span class="logo-sm">
                  <p style="text-align: center; font-size: 20px; color: whitesmoke;" class="mt-5">BitSeed | Admin</p>
                </span>
                <span class="logo-lg">
                  <p style="text-align: center; font-size: 20px; color: whitesmoke;" class="mt-5">BitSeed | Admin</p>
                </span>
              </a>

              <a href="index.php" class="logo logo-light">
                <span class="logo-sm">
                  <p style="text-align: center; font-size: 20px; color: whitesmoke;" class="mt-5">BitSeed | Admin</p>
                </span>
                <span class="logo-lg">
                  <p style="text-align: center; font-size: 20px; color: whitesmoke;" class="mt-5">BitSeed | Admin</p>
                </span>
              </a>
            </div>

            <button
              type="button"
              class="btn btn-sm px-3 font-size-24 header-item waves-effect"
              id="vertical-menu-btn"
            >
              <i class="mdi mdi-menu"></i>
            </button>

            <div class="d-none d-sm-block ms-2">
              <h4 class="page-title font-size-18">Dashboard</h4>
            </div>
          </div>

          <!-- Search input -->
          <div class="search-wrap" id="search-wrap">
            <div class="search-bar">
              <input class="search-input form-control" placeholder="Search" />
              <a
                href="#"
                class="close-search toggle-search"
                data-bs-target="#search-wrap"
              >
                <i class="mdi mdi-close-circle"></i>
              </a>
            </div>
          </div>

          <div class="d-flex">
            <div class="dropdown d-none d-lg-inline-block">
              <button
                type="button"
                class="btn header-item toggle-search noti-icon waves-effect"
                data-bs-target="#search-wrap"
              >
                <i class="mdi mdi-magnify"></i>
              </button>
            </div>

            <div class="dropdown d-none d-lg-inline-block">
              <button
                type="button"
                class="btn header-item noti-icon waves-effect"
                data-bs-toggle="fullscreen"
              >
                <i class="mdi mdi-fullscreen"></i>
              </button>
            </div>

            <div class="dropdown d-inline-block ms-2">
              <button
                type="button"
                class="btn header-item waves-effect"
                id="page-header-user-dropdown"
                data-bs-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                <img
                  class="rounded-circle header-profile-user"
                  src="assets/images/users/avatar-1.jpg"
                  alt="Header Avatar"
                />
              </button>
              <div class="dropdown-menu dropdown-menu-end">
            <!-- item-->
            <?php
                if (isset($_SESSION['user_identifier'])) {
                    echo '<a class="dropdown-item" href="#" class="btn btn-primary py-4 px-lg-4 rounded-0 d-none d-lg-block">' . $_SESSION['username'] . '</a>';
                    echo '<a class="dropdown-item" href="logout.php" class="btn btn-primary py-4 px-lg-4 rounded-0 d-none d-lg-block">Logout<i class="fa fa-arrow-right ms-3"></i></a>';
                } else {
                    echo '<a class="dropdown-item" href="login.html" class="btn btn-primary py-4 px-lg-4 rounded-0 d-none d-lg-block">Sign in<i class="fa fa-arrow-right ms-3"></i></a>';
                }
            ?>
        </div>
            </div>

            <div class="dropdown d-inline-block">
              <button
                type="button"
                class="btn header-item noti-icon right-bar-toggle waves-effect"
              >
                <i class="mdi mdi-spin mdi-cog"></i>
              </button>
            </div>
          </div>
        </div>
      </header>

      <!-- ========== Left Sidebar Start ========== -->
      <div class="vertical-menu">
        <div data-simplebar class="h-100">
          <!--- Sidemenu -->
          <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
              <li class="menu-title">Main</li>

              <li>
                <a href="index.php" class="waves-effect">
                  <i class="dripicons-device-desktop"></i>
                  <span>Dashboard</span>
                </a>
              </li>

              <li>
                <a href="ulasan.php" class="waves-effect">
                  <i class="dripicons-star"></i>
                  <span>Ulasan</span>
                </a>
            </li>
            <li>
                <a href="toko.php" class="waves-effect">
                  <i class="dripicons-store"></i>
                  <span>Toko</span>
                </a>
            </li>

              <li class="menu-title">Extras</li>

              </li>

              <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                  <i class="dripicons-copy"></i>
                  <span> Pages </span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                  <li><a href="pages-login.html">Login</a></li>
                  <li><a href="pages-register.html">Register</a></li>
                  <li><a href="pages-starter.html">Starter Page</a></li>
                  <li><a href="pages-404.html">Error 404</a></li>
                  <li><a href="pages-500.html">Error 500</a></li>
                </ul>
              </li>
            </ul>
          </div>
          <!-- Sidebar -->
        </div>
      </div>
      <!-- Left Sidebar End -->

      <!-- ============================================================== -->
      <!-- Start right Content here -->
      <!-- ============================================================== -->
      <div class="main-content">
        <div class="page-content">
          <div class="container-fluid">
          <form class="row g-3" method="post" action="proses_tambah_produk.php" enctype="multipart/form-data" accept=".jpeg, .jpg, .png, .heic">
              <div class="col-md-6">
                  <label for="inputNamaproduk" class="form-label">Nama Produk</label>
                  <input type="text" class="form-control" id="inputNamaproduk" name="inputNamaproduk">
              </div>
              <div class="col-md-6">
                  <label for="inputKategoriproduk" class="form-label">Kategori</label>
                  <input type="text" class="form-control" id="inputKategoriproduk" name="inputKategoriproduk" placeholder="S=Sayur, B=Buah, H=Hias, P=Pupuk, L=Lain">
              </div>
              <div class="col-12">
                  <label for="inputStokproduk" class="form-label">Stok Produk</label>
                  <textarea type="text" class="form-control" id="inputStokproduk" name="inputStokproduk"></textarea>
              </div>
              <div class="col-12">
                  <label for="InputGambarproduk" class="form-label">Gambar Produk</label>
                  <input type="file" name="InputGambarproduk" id="InputGambarproduk" required>
              </div>
              <input type="hidden" name="id_toko" value="<?php echo $id_toko; ?>">
              <div class="col-12">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                  <a href="toko.php" class="btn btn-primary">Kembali</a>
              </div>
          </form>
            <!-- end row -->
          </div>
        </div>
      </div>
      
      
          <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <footer class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                ©
                <script>
                  document.write(new Date().getFullYear());
                </script>
                Admin BITSEED<span class="d-none d-sm-inline-block">
                  - Kelompok 6 <i class="mdi mdi-heart text-danger"></i> by
                  BITSEED</span
                >
              </div>
            </div>
          </div>
        </footer>
      </div>
      <!-- end main content-->
    </div>
    <!-- END layout-wrapper -->

    <!-- Right Sidebar -->
    <div class="right-bar">
      <div data-simplebar class="h-100">
        <div class="rightbar-title px-3 py-4">
          <a href="javascript:void(0);" class="right-bar-toggle float-end">
            <i class="mdi mdi-close noti-icon"></i>
          </a>
          <h5 class="m-0">Settings</h5>
        </div>

        <!-- Settings -->
        <hr class="mt-0" />
        <h6 class="text-center mb-0">Choose Demo</h6>

        <div class="p-4">
          <div class="mb-2">
            <img
              src="assets/images/layouts/layout-1.jpg"
              class="img-fluid img-thumbnail"
              alt=""
            />
          </div>
          <div class="form-check form-switch mb-3">
            <input
              type="checkbox"
              class="form-check-input theme-choice"
              id="light-mode-switch"
              checked
            />
            <label class="form-check-label" for="light-mode-switch"
              >Light Mode</label
            >
          </div>

          <div class="mb-2">
            <img
              src="assets/images/layouts/layout-2.jpg"
              class="img-fluid img-thumbnail"
              alt=""
            />
          </div>
          <div class="form-check form-switch mb-3">
            <input
              type="checkbox"
              class="form-check-input theme-choice"
              id="dark-mode-switch"
              data-bsStyle="assets/css/bootstrap-dark.min.css"
              data-appStyle="assets/css/app-dark.min.css"
            />
            <label class="form-check-label" for="dark-mode-switch"
              >Dark Mode</label
            >
          </div>

          <div class="mb-2">
            <img
              src="assets/images/layouts/layout-3.jpg"
              class="img-fluid img-thumbnail"
              alt=""
            />
          </div>
          <div class="form-check form-switch">
            <input
              type="checkbox"
              class="form-check-input theme-choice"
              id="rtl-mode-switch"
              data-appStyle="assets/css/app-rtl.min.css"
            />
            <label class="form-check-label" for="rtl-mode-switch"
              >RTL Mode</label
            >
          </div>

          <h6 class="mt-4">Select Custom Colors</h6>
          <div class="d-flex">
            <ul class="list-unstyled mb-0">
              <li class="form-check">
                <input
                  class="form-check-input theme-color"
                  type="radio"
                  name="theme-mode"
                  id="theme-default"
                  value="default"
                  onchange="document.documentElement.setAttribute('data-theme-mode', 'default')"
                  checked
                />
                <label class="form-check-label" for="theme-default"
                  >Default</label
                >
              </li>
              <li class="form-check">
                <input
                  class="form-check-input theme-color"
                  type="radio"
                  name="theme-mode"
                  id="theme-orange"
                  value="orange"
                  onchange="document.documentElement.setAttribute('data-theme-mode', 'orange')"
                />
                <label class="form-check-label" for="theme-orange"
                  >Orange</label
                >
              </li>
              <li class="form-check">
                <input
                  class="form-check-input theme-color"
                  type="radio"
                  name="theme-mode"
                  id="theme-teal"
                  value="teal"
                  onchange="document.documentElement.setAttribute('data-theme-mode', 'teal')"
                />
                <label class="form-check-label" for="theme-teal">Teal</label>
              </li>
            </ul>

            <ul class="list-unstyled mb-0 ms-4">
              <li class="form-check">
                <input
                  class="form-check-input theme-color"
                  type="radio"
                  name="theme-mode"
                  id="theme-purple"
                  value="purple"
                  onchange="document.documentElement.setAttribute('data-theme-mode', 'purple')"
                />
                <label class="form-check-label" for="theme-purple"
                  >Purple</label
                >
              </li>
              <li class="form-check">
                <input
                  class="form-check-input theme-color"
                  type="radio"
                  name="theme-mode"
                  id="theme-green"
                  value="green"
                  onchange="document.documentElement.setAttribute('data-theme-mode', 'green')"
                />
                <label class="form-check-label" for="theme-green">Green</label>
              </li>
              <li class="form-check">
                <input
                  class="form-check-input theme-color"
                  type="radio"
                  name="theme-mode"
                  id="theme-red"
                  value="red"
                  onchange="document.documentElement.setAttribute('data-theme-mode', 'red')"
                />
                <label class="form-check-label" for="theme-red">Red</label>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- end slimscroll-menu-->
    </div>
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>

    <!--Morris Chart-->
    <script src="assets/libs/morris.js/morris.min.js"></script>
    <script src="assets/libs/raphael/raphael.min.js"></script>

    <script src="assets/js/pages/dashboard.init.js"></script>

    <script src="assets/js/app.js"></script>
  </body>
</html>[]