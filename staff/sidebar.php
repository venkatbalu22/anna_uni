<style>
  .collapse {
    display: none;
  }

  /* Show the nested menu when hovering over the parent menu item */
  .sidebar-item:hover .collapse {
    display: block;
    position: absolute;
    /* background-color: #fff; Background color of the dropdown */
    /* border: 1px solid #ccc;  */
    /* padding: 10px; */
    /* z-index: 1;  */
  }
</style>
<aside class="left-sidebar">
  <!-- Sidebar scroll-->
  <div>
    <div class="brand-logo d-flex align-items-center justify-content-between">
      <a href="index.html" class="text-nowrap logo-img">
        <img src="staff/assets/img/logo/logo-1.jpg" class="dark-logo" width="180" alt="" />
        <img src="staff/assets/img/logo/logo-1.jpg" class="light-logo" width="180" alt="" />
      </a>
      <div class="close-btn d-lg-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
        <i class="ti ti-x fs-8 text-muted"></i>
      </div>
    </div>
    <!-- Sidebar navigation-->
    <nav class="sidebar-nav scroll-sidebar" data-simplebar>
      <ul id="sidebarnav">
        <!-- ============================= -->
        <!-- Home -->
        <!-- ============================= -->
        <!-- <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Home</span>
            </li> -->
        <!-- =================== -->
        <!-- Dashboard -->
        <!-- =================== -->

        <li class="sidebar-item">
          <a class="sidebar-link" href="uploaded-file.php" aria-expanded="false">
            <span class="d-flex">
              <!-- <i class="ti ti-chart-donut-3"></i> -->
            </span>
            <span class="hide-menu">Uploaded File</span>
          </a>
        </li>

      </ul>
    </nav>
    <!-- End Sidebar navigation -->
  </div>
  <!-- End Sidebar scroll-->
</aside>