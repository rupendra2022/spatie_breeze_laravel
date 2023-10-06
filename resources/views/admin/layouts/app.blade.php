<!doctype html>
<html lang="en">

    

@include('admin.layouts.head')

    <body data-sidebar="dark" data-layout-mode="light">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

           
            @include('admin.layouts.header')
            @include('admin.layouts.left_sidebar')
           
<!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">
            @yield('main_content')
            @include('admin.layouts.footer')
        </div>
        <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        @include('admin.layouts.right_sidebar')
        @include('admin.layouts.footer_script')

        
    </body>


<!-- Mirrored from themesbrand.com/skote/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Oct 2023 07:54:02 GMT -->
</html>