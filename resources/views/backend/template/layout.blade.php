<!DOCTYPE html>
<html lang="en">

<head>
    @yield('title')

    @include('backend.partial.header')
    @section('head')
    @show

</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Main Sidebar Container -->
            @include('backend.template.slider')
            <!-- End Main Sidebar Container -->

            <!-- Content Header (Page header) -->
            @include('backend.template.header')
            <!-- /.content-header -->

            <!-- Main content -->
            @yield('content')


            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->



        @include('backend.template.footer')

        @include('backend.partial.footer')
        @section('footer')@show

    </div>
    <!-- <script>
        contenteditable= true
document.addEventListener("DOMContentLoaded", function () {
document. designMode = 'on';
    });
 </script> -->

</body>

</html>

