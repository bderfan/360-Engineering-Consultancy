<?php
  require('header.php');
?>



 <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard">
                <div class="sidebar-brand-icon rotate-n-15">
                   <i class="fa-solid fa-house"></i>
                </div>
               
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span style="font-family: Mona Sans, sans-serif;">Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading" style="font-family: Mona Sans, sans-serif;">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="profile">
                   <i class="fa-solid fa-user"></i>
                    <span style="font-family: Mona Sans, sans-serif;">Profile</span>
                </a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading" style="font-family: Mona Sans, sans-serif;">
                Project
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="category">
                    <i class="fa-solid fa-table-cells-large"></i>
                    <span style="font-family: Mona Sans, sans-serif;">Category</span>
                </a>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="project">
                    <i class="fa-solid fa-list-check"></i>
                    <span style="font-family: Mona Sans, sans-serif;">Project</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading" style="font-family: Mona Sans, sans-serif;">
                Product
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="product_category">
                    <i class="fa-solid fa-table-cells-large"></i>
                    <span style="font-family: Mona Sans, sans-serif;">Category</span>
                </a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link collapsed" href="product_sub_category">
                    <i class="fa-solid fa-table-cells-large"></i>
                    <span style="font-family: Mona Sans, sans-serif;">Sub Category</span>
                </a>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="product">
                  <i class="fa-solid fa-list-ol"></i>
                    <span style="font-family: Mona Sans, sans-serif;">Product</span></a>
            </li>
            
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading" style="font-family: Mona Sans, sans-serif;">
                Order
            </div>
                <li class="nav-item">
                <a class="nav-link collapsed" href="orders">
                    <i class="fa-solid fa-cart-arrow-down"></i>
                    <span style="font-family: Mona Sans, sans-serif;">Orders</span>
                </a>
            </li>

         
            <!-- Divider -->
            
             <hr class="sidebar-divider d-none d-md-block">
             <!-- Heading -->
            <div class="sidebar-heading" style="font-family: Mona Sans, sans-serif;">
                Client
            </div>
            
             <li class="nav-item">
                <a class="nav-link collapsed" href="customer_consultation">
                    <i class="fa-solid fa-database"></i>
                    <span style="font-family: Mona Sans, sans-serif;">Client Consultation</span>
                </a>
            </li>
            
              <li class="nav-item">
                <a class="nav-link collapsed" href="customer_payment">
                    <i class="fa-solid fa-dollar-sign"></i>
                    <span style="font-family: Mona Sans, sans-serif;">Client Payment</span>
                </a>
            </li>

           
                    <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

           

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                   

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                    

                        <!-- Nav Item - Alerts -->
                   

                       

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="../index" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">360 Engineering & Cosultancy</span>
                                <img class="img-profile rounded-circle"
                                    src="../images/logo.png" style="width: 50px; height: 50px;" alt="logo">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->








