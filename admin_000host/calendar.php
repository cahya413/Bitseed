<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Calender | MA IPB</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      content="Premium Multipurpose Admin & Dashboard Template"
      name="description"
    />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" />

    <!-- Plugin css -->
    <link
      rel="stylesheet"
      href="assets/libs/@fullcalendar/core/main.min.css"
      type="text/css"
    />
    <link
      rel="stylesheet"
      href="assets/libs/@fullcalendar/daygrid/main.min.css"
      type="text/css"
    />
    <link
      rel="stylesheet"
      href="assets/libs/@fullcalendar/bootstrap/main.min.css"
      type="text/css"
    />
    <link
      rel="stylesheet"
      href="assets/libs/@fullcalendar/timegrid/main.min.css"
      type="text/css"
    />

    <!-- Bootstrap Css -->
    <link
      href="assets/css/bootstrap.min.css"
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
                  <p
                    style="
                      text-align: center;
                      font-size: 20px;
                      color: whitesmoke;
                    "
                    class="mt-5"
                  >
                    MA IPB | ADMIN
                  </p>
                </span>
                <span class="logo-lg">
                  <p
                    style="
                      text-align: center;
                      font-size: 20px;
                      color: whitesmoke;
                    "
                    class="mt-5"
                  >
                    MA IPB | ADMIN
                  </p>
                </span>
              </a>

              <a href="index.php" class="logo logo-light">
                <span class="logo-sm">
                  <p
                    style="
                      text-align: center;
                      font-size: 20px;
                      color: whitesmoke;
                    "
                    class="mt-5"
                  >
                    MA IPB | ADMIN
                  </p>
                </span>
                <span class="logo-lg">
                  <p
                    style="
                      text-align: center;
                      font-size: 20px;
                      color: whitesmoke;
                    "
                    class="mt-5"
                  >
                    MA IPB | ADMIN
                  </p>
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
                <a class="dropdown-item" href="#"
                  ><i class="dripicons-user font-size-16 align-middle me-2"></i>
                  Profile</a
                >
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"
                  ><i class="dripicons-exit font-size-16 align-middle me-2"></i>
                  Logout</a
                >
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
              <!-- <li>
                <a href="laporan.html" class="waves-effect">
                  <i class="dripicons-bookmarks"></i>
                  <span>Laporan</span>
                </a>
              </li>
              <li>
                <a href="berita.html" class="waves-effect">
                  <i class="fas fa-newspaper"></i>
                  <span>Berita</span>
                </a>
              </li> -->

              <li>
                <a href="calendar.html" class="waves-effect">
                  <i class="dripicons-calendar"></i>
                  <span>Calendar</span>
                </a>
              </li>

              <li class="menu-title">Extras</li>

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
            <div class="row">
              <div class="col-12">
                <div class="row">
                  <div class="col-xl-3">
                    <div class="card">
                      <div class="card-body">
                        <button
                          type="button"
                          class="btn font-16 btn-primary w-100"
                          id="btn-new-event"
                          data-bs-toggle="modal"
                          data-bs-target="#event-modal"
                        >
                          Create New Event
                        </button>

                        <div id="external-events">
                          <br />
                          <p class="text-muted">
                            Drag and drop your event or click in the calendar
                          </p>
                          <div
                            class="external-event fc-event bg-success"
                            data-class="bg-success"
                          >
                            <i
                              class="mdi mdi-checkbox-blank-circle font-size-11 me-2"
                            ></i
                            >New Event Planning
                          </div>
                          <div
                            class="external-event fc-event bg-info"
                            data-class="bg-info"
                          >
                            <i
                              class="mdi mdi-checkbox-blank-circle font-size-11 me-2"
                            ></i
                            >Meeting
                          </div>
                          <div
                            class="external-event fc-event bg-warning"
                            data-class="bg-warning"
                          >
                            <i
                              class="mdi mdi-checkbox-blank-circle font-size-11 me-2"
                            ></i
                            >Generating Reports
                          </div>
                          <div
                            class="external-event fc-event bg-danger"
                            data-class="bg-danger"
                          >
                            <i
                              class="mdi mdi-checkbox-blank-circle font-size-11 me-2"
                            ></i
                            >Create New theme
                          </div>
                        </div>
                        <ol class="activity-feed mb-0 ps-2 mt-4 ms-1">
                          <li class="feed-item">
                            <p class="mt-0 mb-0">
                              Andrei Coman magna sed porta finibus, risus posted
                              a new article: Forget UX Rowland
                            </p>
                          </li>
                          <li class="feed-item">
                            <p class="mt-0 mb-0">
                              Zack Wetass, sed porta finibus, risus Chris
                              Wallace Commented Developer Moreno
                            </p>
                          </li>
                          <li class="feed-item">
                            <p class="mt-0 mb-0">
                              Zack Wetass, Chris combined Commented UX Murphy
                            </p>
                          </li>
                        </ol>
                      </div>
                    </div>
                  </div>
                  <!-- end col-->
                  <div class="col-xl-9">
                    <div class="card">
                      <div class="card-body">
                        <div id="calendar"></div>
                      </div>
                    </div>
                  </div>
                  <!-- end col -->
                </div>
                <div style="clear: both"></div>

                <!-- Add New Event MODAL -->
                <div
                  class="modal fade"
                  id="event-modal"
                  data-bs-backdrop="static"
                  data-bs-keyboard="false"
                  tabindex="-1"
                  aria-labelledby="staticBackdropLabel"
                  aria-hidden="true"
                >
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header py-3 px-4">
                        <h5 class="modal-title" id="modal-title">Event</h5>
                        <button
                          type="button"
                          class="btn-close"
                          data-bs-dismiss="modal"
                          aria-label="Close"
                        ></button>
                      </div>

                      <div class="modal-body p-4">
                        <form
                          class="needs-validation"
                          name="event-form"
                          id="form-event"
                          novalidate
                        >
                          <div class="row">
                            <div class="col-12">
                              <div class="mb-3">
                                <label class="control-label form-label"
                                  >Event Name</label
                                >
                                <input
                                  class="form-control"
                                  placeholder="Insert Event Name"
                                  type="text"
                                  name="title"
                                  id="event-title"
                                  required
                                  value=""
                                />
                                <div class="invalid-feedback">
                                  Please provide a valid event name
                                </div>
                              </div>
                            </div>
                            <div class="col-12">
                              <div class="mb-3">
                                <label class="control-label form-label"
                                  >Category</label
                                >
                                <select
                                  class="form-control custom-select"
                                  name="category"
                                  id="event-category"
                                  required
                                >
                                  <option value="bg-danger" selected>
                                    Danger
                                  </option>
                                  <option value="bg-success">Success</option>
                                  <option value="bg-primary">Primary</option>
                                  <option value="bg-info">Info</option>
                                  <option value="bg-dark">Dark</option>
                                  <option value="bg-warning">Warning</option>
                                </select>
                                <div class="invalid-feedback">
                                  Please select a valid event category
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row mt-2">
                            <div class="col-6">
                              <button
                                type="button"
                                class="btn btn-danger"
                                id="btn-delete-event"
                              >
                                Delete
                              </button>
                            </div>
                            <div class="col-6 text-end">
                              <button
                                type="button"
                                class="btn btn-light me-1"
                                data-bs-dismiss="modal"
                              >
                                Close
                              </button>
                              <button
                                type="submit"
                                class="btn btn-success"
                                id="btn-save-event"
                              >
                                Save
                              </button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                    <!-- end modal-content-->
                  </div>
                  <!-- end modal dialog-->
                </div>
                <!-- end modal-->
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
                Admin MA IPB<span class="d-none d-sm-inline-block">
                  - Kelompok 4 <i class="mdi mdi-heart text-danger"></i> by
                  Keluarga cemara</span
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
          <!-- <div class="form-check form-check-inline">
                <input class="form-check-input theme-color" type="radio" name="theme-mode"
                    id="theme-default" value="default" onchange="document.documentElement.setAttribute('data-theme-mode', 'default')" checked>
                <label class="form-check-label" for="theme-default">Default</label>
            </div> -->

          <!-- <div class="form-check form-check-inline">
                <input class="form-check-input theme-color" type="radio" name="theme-mode"
                    id="theme-teal" value="teal" onchange="document.documentElement.setAttribute('data-theme-mode', 'teal')">
                <label class="form-check-label" for="theme-teal">Teal</label>
            </div> -->

          <!-- <div class="form-check form-check-inline">
                <input class="form-check-input theme-color" type="radio" name="theme-mode"
                    id="theme-orange" value="orange" onchange="document.documentElement.setAttribute('data-theme-mode', 'orange')">
                <label class="form-check-label" for="theme-orange">Orange</label>
            </div> -->

          <!-- <div class="form-check form-check-inline">
                <input class="form-check-input theme-color" type="radio" name="theme-mode"
                    id="theme-purple" value="purple" onchange="document.documentElement.setAttribute('data-theme-mode', 'purple')">
                <label class="form-check-label" for="theme-purple">Purple</label>
            </div> -->

          <!-- <div class="form-check form-check-inline">
                <input class="form-check-input theme-color" type="radio" name="theme-mode"
                    id="theme-green" value="green" onchange="document.documentElement.setAttribute('data-theme-mode', 'green')">
                <label class="form-check-label" for="theme-green">Green</label>
            </div> -->

          <!-- <div class="form-check form-check-inline">
                <input class="form-check-input theme-color" type="radio" name="theme-mode"
                    id="theme-red" value="red" onchange="document.documentElement.setAttribute('data-theme-mode', 'red')">
                <label class="form-check-label" for="theme-red">Red</label>
            </div> -->
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

    <!-- plugin js -->
    <script src="assets/libs/moment/min/moment.min.js"></script>
    <script src="assets/libs/jquery-ui/jquery-ui.min.js"></script>
    <script src="assets/libs/@fullcalendar/core/main.min.js"></script>
    <script src="assets/libs/@fullcalendar/bootstrap/main.min.js"></script>
    <script src="assets/libs/@fullcalendar/daygrid/main.min.js"></script>
    <script src="assets/libs/@fullcalendar/timegrid/main.min.js"></script>
    <script src="assets/libs/@fullcalendar/interaction/main.min.js"></script>

    <!-- Calendar init -->
    <script src="assets/js/pages/calendar.init.js"></script>

    <script src="assets/js/app.js"></script>
  </body>
</html>
