<!-- Preloader
<div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="/backend/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
</div> -->

<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>

    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
            <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                <i class="fas fa-search"></i>
            </a>
            <div class="navbar-search-block">
                <form class="form-inline">
                    <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-navbar" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                            <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </li>


        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                <i class="fas fa-th-large"></i>
            </a>
        </li>
    </ul>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">


    <!-- Sidebar -->
    <div style ="margin-top: 0;" class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="/backend/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item ">
                    <a href="/admin/users" class="nav-link">
                        <i class="fa-solid fa-user"></i>
                        <p>
                            Users
                        </p>
                    </a>

                </li>
                <li class="nav-item ">
                    <a href="/admin/blogs" class="nav-link">
                        <i class="fa-brands fa-blogger"></i>
                        <p>
                            Blogs
                        </p>
                    </a>
                </li>
                <li class="nav-item ">

                    <a href="/admin/articles" class="nav-link">
                        <i class="fa-solid fa-newspaper"></i>
                        <p>
                            Artical
                        </p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="/admin/comments" class="nav-link">
                        <i class="fa-solid fa-comment"></i>
                        <p>
                            Comments
                        </p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="/admin/categories" class="nav-link">
                        <i class="fas fa-clipboard-list"></i>
                        <p>
                            Categories
                            <i class="fas fa-angle-left right"></i>

                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admin/categories/menus" class="nav-link">
                                <i class="fa-solid fa-ballot-check"></i>
                                <p>Menus</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/categories/pages" class="nav-link">
                                <i class="fa-solid fa-page"></i>
                                <p>Pages</p>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a href="/admin/tags" class="nav-link">
                                <!-- <i class="fa-solid fa-tags"></i> -->
                                <p>Tags</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item ">
                    <a href="/admin/categories/orders" class="nav-link">
                        <i class="fa-solid fa-bag-shopping"></i>
                        <p>
                            Orders
                        </p>
                    </a>
                </li>
                 <li class="nav-item ">
                    <a href="/admin/products" class="nav-link">
                        <i class="fa-solid fa-inbox"></i>
                        <p>
                            Products
                        </p>
                    </a>
                </li>
                 <li class="nav-item ">
                    <a href="/admin/reviews" class="nav-link">
                        <i class="fas fa-comment-alt"></i>
                        <p>
                            Reviews
                        </p>
                    </a>
                </li>
                 <li class="nav-item ">
                    <a href="/admin/tables" class="nav-link">
                        <i class="fa-solid fa-table"></i>
                        <p>
                            Tables
                        </p>
                    </a>
                </li>
                 <li class="nav-item ">
                    <a href="/admin/reservations" class="nav-link">
                        <i class="fa-solid fa-money-bills"></i>
                        <p>
                            Reservations
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/manage-contents" class="nav-link">
                        <i class="fa-solid fa-file-lines"></i>
                        <p>
                            Manage Contents
                            <i class="fas fa-angle-left right"></i>

                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admin/manage-contents/home" class="nav-link">

                                <i class="far fa-circle nav-icon"></i>
                                <p>Home</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/manage-contents/about-us" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>About us</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
